<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{

	function __construct()
	{
		// parent::__construct();      
		// $this->load->model('main_model');
		// $this->load->library('pagination');

		// $userdata = $this->session->userdata('admin_session');
		// $userid = $userdata['id'];
		// //echo $this->uri->segment(1);exit;
		// if($userid == false && $this->uri->segment(1) != 'register'){
		// 	redirect(base_url());
		// }	


		parent::__construct();
		$this->load->model('main_model');
		$this->load->model('user_model');
		$this->load->model('pgpanel_model');
		$this->load->library('pagination');

		$userdata = $this->session->userdata('admin_session');
		$userid = isset($userdata['id']) ? $userdata['id'] : false;

		$allowed_routes = ['register', 'get-dist-blocks']; // ✅ Add test-route here
		$current_route = $this->uri->segment(1);

		if ($userid == false && !in_array($current_route, $allowed_routes)) {
			redirect(base_url());
		}
	}

	public function overview()
	{
		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);
		$list_of_data = $this->pgpanel_model->get_pg_list();
		$data = array(
			"list_of_data" => $list_of_data,
		);
		$this->load->view('include/headerhomenew');
		$this->load->view('admindashboard/overview', $data);
		$this->load->view('include/footerhomenew');
	}

	public function pgprofile()
	{
		    // error_reporting(E_ALL);
			// ini_set('display_errors', 1);

		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];


		//print_r($this->input->post());exit; 

		if ($userid == false) {
			redirect(base_url());
		}

		$data['categories'] = $this->pgpanel_model->getcategories();

		//print_r($data['categories']); exit;


		//echo $this->uri->segment(2);
		if ($this->uri->segment(2) == true) {

			$userid = $this->uri->segment(2);

		}


		$pgid = $this->session->userdata('pgid');

		if ($pgid == true) {

			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}
		//print_r($this->input->post());

		if ($this->input->post('pgname') == true) {

			$pgid = $this->input->post('pgname');

			$sdata = array(
				'pgid' => $pgid
			);


			$this->session->set_userdata($sdata);
			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}


		if ($this->input->get('editpg') == true) {

			$pgid = $this->input->get('editpg');

			$sdata = array(
				'pgid' => $pgid,
				/*'district'=> $this->input->post('district'),
					'block'=> $this->input->post('block'),
					'SHGcode'=> $this->input->post('shgcode'),
					'grampanchayat'=> $this->input->post('grampanchayat'),
					'village'=> implode(',',$this->input->post('villagename')),
					'dof'=> $this->input->post('dof'),
					'president_name'=> $this->input->post('president_name'),
					'secretary_name'=> $this->input->post('secretary_name'),
					'treasurer_name'=> $this->input->post('treasurer_name'),
					'pramoted_uder'=> $this->input->post('pramoted_uder')*/
			);

			$this->session->set_userdata($sdata);
			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}

		$mtd = $this->pgpanel_model->gettransactionaldetails($pgid);
		//print_r($mtd);
		//echo 'its here'; exit;
		$data['mtd'] = $mtd;
		$data['pgsr'] = $this->pgpanel_model->getsupportrecieveddetails($pgid);
		$data['csdt'] = $this->pgpanel_model->getcommoditysupportdetails($pgid);
		$data['cashbook'] = $this->pgpanel_model->get_cash_book_details($pgid);
		//echo $this->input->post('stepno').' '.$this->input->post('isedit');	 exit;

		if ($this->input->post('stepno') == '1' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			$data = array(
				// 'pgid'=> $pgid,
				'pgname' => $this->input->post('pgname'),
				'clf' => $this->input->post('clf'),
				'clf_model' => $this->input->post('clf_model'),
				'district' => $this->input->post('districtname'),
				'block' => $this->input->post('blockname'),
				'grampanchayat' => $this->input->post('grampanchayatname'),
				'village' => implode(',', $this->input->post('villagename')),
				'dof' => $this->input->post('dof'),
				'president_name' => $this->input->post('president_name'),
				'secretary_name' => $this->input->post('secretary_name'),
				'treasurer_name' => $this->input->post('treasurer_name'),
				'pramoted_uder' => $this->input->post('pramoted_uder')

			);

			$pgid = $this->session->userdata('pgid');

			if ($pgid && is_numeric($pgid)) {
				$this->pgpanel_model->updatepg($data, $pgid);
			} else {
				$this->pgpanel_model->insertpg($data);
				$pgid = $this->db->insert_id();
				$this->session->set_userdata('pgid', $pgid);
			}

			// $this->pgpanel_model->updatepg($data,$pgid);
			// $this->pgpanel_model->insertpg($data);
			// $pgid = $this->db->insert_id();
			// // $pgdata = $this->pgpanel_model->get_pgdetails($producer_group);
			// $this->session->set_userdata('pgid',$pgid);

			$currentstepno = $this->input->post('stepno');
			$nextstepno = (int) $this->input->post('stepno') + 1;
			$prevstepno = (int) $this->input->post('stepno') - 1;

			// print_r($nextstepno);
			// die();

			redirect(base_url() . 'pg-profile/' . $nextstepno . '/' . $this->session->userdata('pgid'));


		} else if ($this->input->post('stepno2') == '2' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			// error_reporting(E_ALL);
			// ini_set('display_errors', 1);
			$bankdata = array();

			$pgid = $this->session->userdata('pgid');

			$bankname = $this->input->post('bankname');
			$typeofaccount = $this->input->post('typeofaccount');
			$ifsc = $this->input->post('ifsc');
			$branchname = $this->input->post('branchname');
			$accountno = $this->input->post('accountno');
			$pgbdid = $this->input->post('pgbdid');

			$i = 0;
			foreach ($this->input->post('bnksavetype') as $savetype) {

				if ($savetype == 'add') {

					$bankdata = array('pgid' => $pgid, 'bankname' => $bankname[$i], 'account_type' => $typeofaccount[$i], 'IFSC' => $ifsc[$i], 'branchname' => $branchname[$i], 'accountno' => $accountno[$i]);
					$this->pgpanel_model->insert_bankdatapgpanel($bankdata);
				} else {

					$bankdata = array('bankname' => $bankname[$i], 'account_type' => $typeofaccount[$i], 'IFSC' => $ifsc[$i], 'branchname' => $branchname[$i], 'accountno' => $accountno[$i]);
					$this->pgpanel_model->updatepgbank($bankdata, $pgbdid[$i]);

				}

				$i++;
			}

			$data = array(

				'category' => $this->input->post('categoryname'),
				'sub_category' => $this->input->post('subcategoryname'),
				'commodityname' => $this->input->post('commoditynewname')

			);


			$this->pgpanel_model->updatepg($data, $pgid);


			$currentstepno = $this->input->post('stepno2');
			$nextstepno = (int) $this->input->post('stepno2') + 1;
			$prevstepno = (int) $this->input->post('stepno2') - 1;

			redirect(base_url() . 'pg-profile/' . $nextstepno . '/' . $pgid);

		} else if ($this->input->post('stepno3') == '3' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			// error_reporting(E_ALL);
			// ini_set('display_errors', 1);
			$pgid = $this->session->userdata('pgid');
			$data = array(

				'pgid' => $pgid,
				'USname' => $this->input->post('pgusname'),
				'USnomember' => $this->input->post('usnomember'),
				'USnovillage' => $this->input->post('usnovillage'),
				'PSname' => $this->input->post('pgpsname'),
				'PSnomember' => $this->input->post('psnomember'),
				'PSnovillage' => $this->input->post('psnovillage'),
				'KSname' => $this->input->post('pgksname'),
				'KSnomember' => $this->input->post('ksnomember'),
				'KSnovillage' => $this->input->post('ksnovillage')

			);

			$this->pgpanel_model->updatepg($data, $pgid);


			$currentstepno = $this->input->post('stepno3');
			$nextstepno = (int) $this->input->post('stepno3') + 1;
			$prevstepno = (int) $this->input->post('stepno3') - 1;

			redirect(base_url() . 'pg-profile/' . $nextstepno . '/' . $pgid);

		} else if ($this->input->post('stepno4') == '4' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {


			$pgid = $this->session->userdata('pgid');
			$data = array(
				'pgid' => $pgid,
				'VAAUS' => !empty($this->input->post('usaa')) ? implode(',', $this->input->post('usaa')) : '',
				'VAAPS' => !empty($this->input->post('psaa')) ? implode(',', $this->input->post('psaa')) : '',
				'VAAKS' => !empty($this->input->post('ksaa')) ? implode(',', $this->input->post('ksaa')) : ''
			);

			$this->pgpanel_model->updatepg($data, $pgid);


			$currentstepno = $this->input->post('stepno4');
			$nextstepno = (int) $this->input->post('stepno4') + 1;
			$prevstepno = (int) $this->input->post('stepno4') - 1;

			redirect(base_url() . 'pg-profile/' . $nextstepno . '/' . $pgid);

		} else if ($this->input->post('stepno5') == '5' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			// print_r('Add PG 5');
			// die();
			//print_r($this->input->post());echo implode(',',$this->input->post('bor')); exit;
			$pgid = $this->session->userdata('pgid');
			$data = array(

				'pgid' => $pgid,
				'BOR' => implode(',', $this->input->post('bor'))
			);


			$this->pgpanel_model->updatepg($data, $pgid);


			$currentstepno = $this->input->post('stepno5');
			$nextstepno = (int) $this->input->post('stepno5') + 8;
			$prevstepno = (int) $this->input->post('stepno5') - 1;

			redirect(base_url() . 'pg-profile/' . $nextstepno . '/' . $pgid);

		} else if ($this->input->post('stepno13') == '13' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {
			$data['success_message'] = 'Data inserted successfully!';
			redirect(base_url() . 'pg-profile/');
		}

		$pgid = $this->session->userdata('pgid');
		$data['userdetails'] = $this->main_model->getuserbyid($userid);
		$data['getpglist'] = $this->main_model->getpglistdropdown();
		//$data['getpglist'] = $this->main_model->getpglistsearch();
		$data['getbankdetails'] = $this->main_model->getbankdetail($pgid);
		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
		$data['villages'] = $this->main_model->getlocations('village');


		/*if($this->input->post('pgname') == true){
											 
											 redirect(base_url().'pg-profile/2');
											 
										 }*/
		$this->load->view('include/headerhomenew');
		$this->load->view('admindashboard/pgprofile', $data);
		$this->load->view('include/footerhomenew');

	}

	public function training()
	{

		// error_reporting(E_ALL);
		// ini_set('display_errors', '1');

		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];


		//print_r($this->input->post());exit; 

		if ($userid == false) {
			redirect(base_url());
		}

		$data['categories'] = $this->pgpanel_model->getcategories();

		//print_r($data['categories']); exit;


		//echo $this->uri->segment(2);
		if ($this->uri->segment(2) == true) {

			$userid = $this->uri->segment(2);

		}


		$pgid = $this->session->userdata('pgid');

		if ($pgid == true) {

			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}
		//print_r($this->input->post());

		if ($this->input->post('pgname') == true) {

			$pgid = $this->input->post('pgname');

			$sdata = array(
				'pgid' => $pgid
			);


			$this->session->set_userdata($sdata);
			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}


		if ($this->input->get('editpg') == true) {

			$pgid1 = $this->input->get('editpg');
			$pgid = $this->pgpanel_model->get_pgdetails($pgid1);

			$sdata = array(
				'pgid' => $pgid,
				/*'district'=> $this->input->post('district'),
					'block'=> $this->input->post('block'),
					'SHGcode'=> $this->input->post('shgcode'),
					'grampanchayat'=> $this->input->post('grampanchayat'),
					'village'=> implode(',',$this->input->post('villagename')),
					'dof'=> $this->input->post('dof'),
					'president_name'=> $this->input->post('president_name'),
					'secretary_name'=> $this->input->post('secretary_name'),
					'treasurer_name'=> $this->input->post('treasurer_name'),
					'pramoted_uder'=> $this->input->post('pramoted_uder')*/
			);

			$this->session->set_userdata($sdata);
			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}

		$mtd = $this->pgpanel_model->gettransactionaldetails($pgid);
		//print_r($mtd);
		//echo 'its here'; exit;
		$data['mtd'] = $mtd;
		$data['pgsr'] = $this->pgpanel_model->getsupportrecieveddetails($pgid);
		$data['csdt'] = $this->pgpanel_model->getcommoditysupportdetails($pgid);
		$data['cashbook'] = $this->pgpanel_model->get_cash_book_details($pgid);
		$data['grampanchayat'] = $this->pgpanel_model->get_grampanchayat();
		$data['producergroup'] = $this->pgpanel_model->get_producergroup();
		
		// print_r($data['grampanchayat']);
		// die();
		//echo $this->input->post('stepno').' '.$this->input->post('isedit');	 exit;
		if ($this->input->post('stepno') == '1' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			$financial_year = $this->input->post('financial_year');
			$month = $this->input->post('month');
			$gram_panchayat = $this->input->post('gram_panchayat');
			$producer_group = $this->input->post('producer_group');

			$pgdata = $this->pgpanel_model->get_pgdetails($producer_group);
			$this->session->set_userdata('pgid', $pgdata['pgid']);

			$currentstepno = $this->input->post('stepno');
			$nextstepno = (int) $this->input->post('stepno') + 5;
			$prevstepno = (int) $this->input->post('stepno') - 1;

			// redirect(base_url() . 'training/' . $nextstepno . '/' . $pgid);
			redirect(base_url() . 'training/' . $nextstepno . '/' . $pgdata['pgid']);

		} else if ($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLAgriculture')) {

			$pgid = $this->session->userdata('pgid');
			$data = array(

				'pgid' => $pgid,
				'TLAgriculture' => implode(',', $this->input->post('TLAgriculture')),

			);

			$this->pgpanel_model->updatepg($data, $pgid);


			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;


			redirect(base_url() . 'training/' . $currentstepno . '?tltype=horti');
			// redirect(base_url().'pg-profile/'.$nextstepno.'/'.$pgid); 
		} else if ($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLHorticulture')) {

			$pgid = $this->session->userdata('pgid');
			$data = array(
				'pgid' => $pgid,
				'TLHorticulture' => implode(',', $this->input->post('TLHorticulture'))
			);

			$this->pgpanel_model->updatepg($data, $pgid);


			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;


			redirect(base_url() . 'training/' . $currentstepno . '?tltype=livestocks');
			// redirect(base_url().'pg-profile/'.$nextstepno.'/'.$pgid); 

		} else if ($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLLivestock')) {

			$pgid = $this->session->userdata('pgid');
			$data = array(
				'pgid' => $pgid,
				'TLLivestock' => implode(',', $this->input->post('TLLivestock'))
			);

			$this->pgpanel_model->updatepg($data, $pgid);

			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;


			redirect(base_url() . 'training/' . $currentstepno . '?tltype=fishery');
			// redirect(base_url().'pg-profile/'.$nextstepno.'/'.$pgid); 

		} else if ($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLFishery')) {

			$pgid = $this->session->userdata('pgid');
			$data = array(
				'pgid' => $pgid,
				'TLFishery' => implode(',', $this->input->post('TLFishery'))
			);

			$this->pgpanel_model->updatepg($data, $pgid);

			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;


			redirect(base_url() . 'training/' . $currentstepno . '?tltype=sericulture');
			// redirect(base_url().'pg-profile/'.$nextstepno.'/'.$pgid);

		} else if ($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLSericulture')) {

			$pgid = $this->session->userdata('pgid');
			$data = array(
				'pgid' => $pgid,
				'TLSericulture' => implode(',', $this->input->post('TLSericulture'))
			);

			$this->pgpanel_model->updatepg($data, $pgid);

			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;


			redirect(base_url() . 'training/' . $currentstepno . '?tltype=others');
			// redirect(base_url().'pg-profile/'.$nextstepno.'/'.$pgid);

		} else if ($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLOthers')) {

			$pgid = $this->session->userdata('pgid');
			$data = array(
				'pgid' => $pgid,
				'TLOthers' => implode(',', $this->input->post('TLOthers'))
			);

			$this->pgpanel_model->updatepg($data, $pgid);

			$currentstepno = $this->input->post('stepno6');
			$nextstepno = (int) $this->input->post('stepno6') + 1;
			$prevstepno = (int) $this->input->post('stepno6') - 1;

			redirect(base_url() . 'training/' . $nextstepno . '/' . $pgid);

		} else if ($this->input->post('stepno7') == '7' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {
			// $data['success_message'] = 'Data inserted successfully!';
			redirect(base_url() . 'training?msg=Training Details submitted Successfully ! ');
		}

		$pgid = $this->session->userdata('pgid');
		$data['training'] = $this->pgpanel_model->get_trainingdetails($pgid);
		$data['userdetails'] = $this->main_model->getuserbyid($userid);
		$data['getpglist'] = $this->main_model->getpglistdropdown();
		//$data['getpglist'] = $this->main_model->getpglistsearch();
		$data['getbankdetails'] = $this->main_model->getbankdetail($pgid);
		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
		$data['villages'] = $this->main_model->getlocations('village');

		$this->load->view('include/headerhomenew');
		$this->load->view('admindashboard/training', $data);
		$this->load->view('include/footerhomenew');
	}

	public function businessplan()
	{
		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		$data['grampanchayat'] = $this->pgpanel_model->get_grampanchayat();
		$data['producergroup'] = $this->pgpanel_model->get_producergroup();
		$data['categories'] = $this->pgpanel_model->getcategories();

		if ($this->input->post('submit1') == true) {
			// print_r(implode(',',$this->input->post('BPPreparation')));
			// die();
			$financial_year = $this->input->post('financial_year');
			$month = $this->input->post('month');
			$gram_panchayat = $this->input->post('gram_panchayat');
			$producer_group = $this->input->post('producer_group');

			$pgdata = $this->pgpanel_model->get_pgdetails($producer_group);

			$databpp = array(
				'pgid' => $pgdata['pgid'],
				'BPPreparation' => implode(',', $this->input->post('BPPreparation'))
			);

			$this->pgpanel_model->updatepg($databpp, $pgdata['pgid']);

			$this->session->set_tempdata('success', 'Business Plan Details submitted successfully!!!', 1);
			redirect(base_url('business-plan'));
		}

		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
		$data['villages'] = $this->main_model->getlocations('village');

		$this->load->view('include/headerhomenew');
		$this->load->view('admindashboard/businessPlan', $data);
		$this->load->view('include/footerhomenew');
	}

	public function funddisbursement()
	{
		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		$data['grampanchayat'] = $this->pgpanel_model->get_grampanchayat();
		$data['producergroup'] = $this->pgpanel_model->get_producergroup();

		if ($this->input->is_ajax_request()) {
			$financial_year = $this->input->post('financial_year');
			$month = $this->input->post('month');
			$district = $this->input->post('districtname');
			$block = $this->input->post('blockname');
			$gram_panchayat = $this->input->post('gram_panchayat');
			$village = $this->input->post('villagename');
			$producer_group = $this->input->post('producer_group');
	
			$pgdata = $this->pgpanel_model->get_pgdetails($producer_group);
			$pgid = $pgdata['pgid'];
	
			$result = $this->pgpanel_model->get_disbursement_data($financial_year, $month, $gram_panchayat, $producer_group, $pgid);
	
			if ($result) {
				echo json_encode(['success' => true, 'data' => $result]);
			} 

			return; 
		}

		if ($this->input->post('submit1') == true) {
			$financial_year = $this->input->post('financial_year');
			$month = $this->input->post('month');
			$gram_panchayat = $this->input->post('gram_panchayat');
			$producer_group = $this->input->post('producer_group');
			$pgdata = $this->pgpanel_model->get_pgdetails($producer_group);
			$pgid = $pgdata['pgid'];


			$pgsupportdata = array(
				'pgid'=> $pgid,
				'SRPGsof' => $this->input->post('source_of_fund'),
				'SRPGtof' => $this->input->post('type_of_fund'),
				'SRPGamount' => $this->input->post('amount'),
				'SRPGtos' => $this->input->post('SRPGtos'),
				'SRPGtosamount' => $this->input->post('SRPGtosamount'),
				'SRPGdate' => $this->input->post('date'),
				'SRPGpurpose' => $this->input->post('purpose'),
				// 'PMPGsof' => $this->input->post('PMPG_source_of_fund'),
				'PMPGrp' => $this->input->post('repayment_of_principles'),
				'PMPGpaymentmode' => $this->input->post('payment_mode_by_pg'),
				'PMPGinterest_rate' => $this->input->post('rate_of_interest'),
				'PMPGoutstandingamt' => $this->input->post('total_outstanding_amount'),
				'PMPGtotalloanpaidamt' => $this->input->post('toal_loan_paid_amount'),
				'PMPGmonthlyemi' => $this->input->post('monthly_emi'),
				// 'PMPGamountdue' => $this->input->post('PMPGamountdue'),
				'loanduration' => $this->input->post('loan_duration'),
				'commencement_date' => $this->input->post('date_of_commencement'),
				'completion_date' => $this->input->post('date_of_completion'),
				// 'pgsupportid' => $this->input->post('pgsupportid'),
				// 'pgssavetype' => $this->input->post('pgssavetype'),
				'PMPGfinancial_year' => $this->input->post('financial_year'),
				'PMPGfinancial_month' => $this->input->post('month'),
				'PMPGdistrict' => $this->input->post('districtname'),
				'PMPGblock' => $this->input->post('blockname'),
				'PMPGgram_panchayat' => $this->input->post('gram_panchayat'),
				'PMPGvillage' => implode(',', $this->input->post('villagename')),
				'PMPGpgname' => $this->input->post('producer_group'),
			);

			// Check if the record exists
			// $existingRecord = $this->pgpanel_model->get_pgsupport_by_pgid($pgid);
			// if ($existingRecord) {
			// 	$this->pgpanel_model->updatepgsupport($pgsupportdata, $pgid);
			// } else {
			// 	$this->pgpanel_model->insert_pgsupport($pgsupportdata);
			// }

			$this->pgpanel_model->insert_pgsupport($pgsupportdata);
			// redirect(base_url() . 'fund-disbursement?msg=Fund Disbursment Details submitted Successfully ! ');
			// $this->session->set_flashdata('success', 'Data inserted successfully!');
			$this->session->set_tempdata('success', 'Fund Disbursement Details submitted successfully!!!', 1);
			redirect(base_url('fund-disbursement'));
		}

		

		// $i = 0;
		// foreach ($this->input->post('pgssavetype') as $savetype) {

		// 	if ($savetype == 'add') {

		// 		$pgsupportdata = array('pgid' => $pgid, 'SRPGsof' => $SRPGsof[$i], 'SRPGtof' => $SRPGtof[$i], 'SRPGamount' => $SRPGamount[$i], 'SRPGtos' => $SRPGtos[$i], 'SRPGtosamount' => $SRPGtosamount[$i], 'SRPGdate' => $SRPGdate[$i], 'SRPGpurpose' => $SRPGpurpose[$i], 'PMPGsof' => $PMPGsof[$i], 'PMPGrp' => $PMPGrp[$i], 'PMPGinterest_rate' => $PMPGinterest_rate[$i], 'PMPGmonthlyemi' => $PMPGmonthlyemi[$i], 'PMPGamountdue' => $PMPGamountdue[$i], 'loanduration' => $loanduration[$i], 'commencement_date' => $commencement_date[$i], 'completion_date' => $completion_date[$i]);

		// 		$this->pgpanel_model->insert_pgsupport($pgsupportdata);
		// 	} else {

		// 		$pgsupportdata = array('SRPGsof' => $SRPGsof[$i], 'SRPGtof' => $SRPGtof[$i], 'SRPGamount' => $SRPGamount[$i], 'SRPGtos' => $SRPGtos[$i], 'SRPGtosamount' => $SRPGtosamount[$i], 'SRPGdate' => $SRPGdate[$i], 'SRPGpurpose' => $SRPGpurpose[$i], 'PMPGsof' => $PMPGsof[$i], 'PMPGrp' => $PMPGrp[$i], 'PMPGinterest_rate' => $PMPGinterest_rate[$i], 'PMPGmonthlyemi' => $PMPGmonthlyemi[$i], 'PMPGamountdue' => $PMPGamountdue[$i], 'loanduration' => $loanduration[$i], 'commencement_date' => $commencement_date[$i], 'completion_date' => $completion_date[$i]);
		// 		$this->pgpanel_model->updatepgsupport($pgsupportdata, $pgsupportid[$i]);

		// 	}

		// 	$i++;
		// }

		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
		$data['villages'] = $this->main_model->getlocations('village');

		$this->load->view('include/headerhomenew');
		$this->load->view('admindashboard/funddisbursement',$data);
		$this->load->view('include/footerhomenew');
	}

	public function monthly_business_summary()
	{

		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];


		//print_r($this->input->post());exit; 

		if ($userid == false) {
			redirect(base_url());
		}

		$data['categories'] = $this->pgpanel_model->getcategories();

		//print_r($data['categories']); exit;


		//echo $this->uri->segment(2);
		if ($this->uri->segment(2) == true) {
			$userid = $this->uri->segment(2);
		}


		$pgid = $this->session->userdata('pgid');
		if ($pgid == true) {
			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}
		//print_r($this->input->post());

		if ($this->input->post('pgname') == true) {
			$pgid = $this->input->post('pgname');

			$sdata = array(
				'pgid' => $pgid
			);

			$this->session->set_userdata($sdata);
			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}


		if ($this->input->get('editpg') == true) {

			$pgid = $this->input->get('editpg');

			$sdata = array(
				'pgid' => $pgid,
				/*'district'=> $this->input->post('district'),
				'block'=> $this->input->post('block'),
				'SHGcode'=> $this->input->post('shgcode'),
				'grampanchayat'=> $this->input->post('grampanchayat'),
				'village'=> implode(',',$this->input->post('villagename')),
				'dof'=> $this->input->post('dof'),
				'president_name'=> $this->input->post('president_name'),
				'secretary_name'=> $this->input->post('secretary_name'),
				'treasurer_name'=> $this->input->post('treasurer_name'),
				'pramoted_uder'=> $this->input->post('pramoted_uder')*/
			);

			$this->session->set_userdata($sdata);
			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}

		$mtd = $this->pgpanel_model->gettransactionaldetails($pgid);
		//print_r($mtd);
		//echo 'its here'; exit;
		$data['mtd'] = $mtd;
		$data['pgsr'] = $this->pgpanel_model->getsupportrecieveddetails($pgid);
		// $data['csdt'] = $this->pgpanel_model->getcommoditysupportdetails($pgid);
		$data['cashbook'] = $this->pgpanel_model->get_cash_book_details($pgid);
		$data['grampanchayat'] = $this->pgpanel_model->get_grampanchayat();
		$data['producergroup'] = $this->pgpanel_model->get_producergroup();
		$data['categories'] = $this->pgpanel_model->getcategories();

		//echo $this->input->post('stepno').' '.$this->input->post('isedit');	 exit;

		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		if ($this->input->post('stepno') == '1' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			

			$financial_year = $this->input->post('financial_year');
			$month = $this->input->post('month');
			$district = $this->input->post('districtname');
			$block = $this->input->post('blockname');
			$gram_panchayat = $this->input->post('gram_panchayat');
			$village = $this->input->post('villagename');
			$producer_group = $this->input->post('producer_group');

			$pgdata = $this->pgpanel_model->get_pgdetails($producer_group);
			$this->session->set_userdata('pgid', $pgdata['pgid']);

			$mbs_data = array(
				'pgid' => $pgdata['pgid'],
				'MBSfinancialyear' => $financial_year,
				'MBSmonth' => $month,
				'MBSdistrict' => $district,
				'MBSblock' => $block,
				'MBSgrampanchayat' => $gram_panchayat,
				'MBSvillage' => implode(',', $village),
				'MBSpgname' => $producer_group
			);

			$this->session->set_userdata('mbs_filters_data', $mbs_data);
			// print_r($mbs_data);
			// die();

			// $data=array(

			// 	'pgid'=> $pgid,
			// 	'district'=> $this->input->post('districtname'),
			// 	'block'=> $this->input->post('blockname'),
			// 	'grampanchayat'=> $this->input->post('grampanchayatname'),
			// 	'village'=> implode(',',$this->input->post('villagename')),
			// 	'dof'=> $this->input->post('dof'),
			// 	'president_name'=> $this->input->post('president_name'),
			// 	'secretary_name'=> $this->input->post('secretary_name'),
			// 	'treasurer_name'=> $this->input->post('treasurer_name'),
			// 	'pramoted_uder'=> $this->input->post('pramoted_uder')

			// );


			// $this->pgpanel_model->updatepg($data,$pgid);

			//check data is found or not if not found then insert
			$this->db->where('pgid', $pgdata['pgid']);
			$this->db->where('MBSfinancialyear', $financial_year);
			$this->db->where('MBSmonth', $month);
			$this->db->where('MBSdistrict', $district);
			$this->db->where('MBSblock', $block);
			$this->db->where('MBSgrampanchayat', $gram_panchayat);
			$this->db->where('MBSvillage', implode(',', $village));
			$this->db->where('MBSpgname', $producer_group);
			$query = $this->db->get('pg_nonpgmbs');
			if($query->num_rows() == 0){
				$this->pgpanel_model->insert_commodity_business($mbs_data);
			}
			
			$currentstepno = $this->input->post('stepno');
			$nextstepno = (int) $this->input->post('stepno') + 1;
			$prevstepno = (int) $this->input->post('stepno') - 1;

			// print_r($nextstepno);
			// die();

			redirect(base_url() . 'monthly-business-summary/' . $nextstepno . '/' . $pgid);


		} else if ($this->input->post('stepno2') == '2' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {
			$i = 0;
			$pgid = $this->session->userdata('pgid');

			
			foreach ($this->input->post('pgssavetype') as $savetype) {
				$pgsupportid = $this->input->post('pgsupportid');
				$mbs_filters_data = $this->session->userdata('mbs_filters_data');

				$commoditybusinessdata = array(
					'pgid' => $pgid,

					'MBSfinancialyear' => $mbs_filters_data['MBSfinancialyear'],
					'MBSmonth' => $mbs_filters_data['MBSmonth'],
					'MBSdistrict' => $mbs_filters_data['MBSdistrict'],
					'MBSblock' => $mbs_filters_data['MBSblock'],
					'MBSgrampanchayat' => $mbs_filters_data['MBSgrampanchayat'],
					'MBSvillage' => $mbs_filters_data['MBSvillage'],
					'MBSpgname' => $mbs_filters_data['MBSpgname'],

					'commoditycategory' => $this->input->post('categoryname')[$i] ?? 0,
					'commoditysubcategory' => $this->input->post('sub_category')[$i] ?? 0,
					'commodity' => $this->input->post('commodityname')[$i] ?? 0,
					'opstock' => $this->input->post('opstock')[$i] ?? 0,
					'opamount' => $this->input->post('opamount')[$i] ?? 0,
					'oprate' => $this->input->post('oprate')[$i] ?? 0,
					'opstockunit' => $this->input->post('opstocktype')[$i] ?? 0,
					'procureqty' => $this->input->post('procureqty')[$i] ?? 0,
					'procureamount' => $this->input->post('procureamount')[$i] ?? 0,
					'procurerate' => $this->input->post('procurerate')[$i] ?? 0,
					'procureunit' => $this->input->post('procuretype')[$i] ?? 0,
					'procurewastageqty' => $this->input->post('procurewastageqty')[$i] ?? 0,
					'procurewastageamount' => $this->input->post('procurewastageamount')[$i] ?? 0,
					'procurewastagerate' => $this->input->post('procurewastagerate')[$i] ?? 0,
					'procurewastageunit' => $this->input->post('procurewastagetype')[$i] ?? 0,
					'otherexpenditureqty' => $this->input->post('otherexpenditureqty')[$i] ?? 0,
					'otherexpenditureamount' => $this->input->post('otherexpenditureamount')[$i] ?? 0,
					'otherexpenditurerate' => $this->input->post('otherexpenditurerate')[$i] ?? 0,
					'otherexpenditureunit' => $this->input->post('otherexpendituretype')[$i] ?? 0,
					'saleqty' => $this->input->post('saleqty')[$i] ?? 0,
					'saleamount' => $this->input->post('saleamount')[$i] ?? 0,
					'salerate' => $this->input->post('salerate')[$i] ?? 0,
					'saleunit' => $this->input->post('saletype')[$i] ?? 0,
					'closingstockqty' => $this->input->post('closingstockqty')[$i] ?? 0,
					'closingstockamount' => $this->input->post('closingstockamount')[$i] ?? 0,
					'closingstockrate' => $this->input->post('closingstockrate')[$i] ?? 0,
					'closingstockunit' => $this->input->post('closingstocktype')[$i] ?? 0,
					'surplusqty' => $this->input->post('surplusqty')[$i] ?? 0,
					'surplusamount' => $this->input->post('surplusamount')[$i] ?? 0,
					'surplusrate' => $this->input->post('surplusrate')[$i] ?? 0,
					'surplusunit' => $this->input->post('surplustype')[$i] ?? 0,
					'cumulativesalesqty' => $this->input->post('cumulativesalesqty')[$i] ?? 0,
					'cumulativesalesamount' => $this->input->post('cumulativesalesamount')[$i] ?? 0,
					'cumulativesalesrate' => $this->input->post('cumulativesalesrate')[$i] ?? 0,
					'cumulativesalesunit' => $this->input->post('cumulativesalestype')[$i] ?? 0,
					'income_profit' => $this->input->post('income_profit')[$i] ?? 0,
				);

				
				// print_r($pgsupportid);
				// die();
				
				if (!empty($pgsupportid[$i])) {
					$this->pgpanel_model->update_commodity_business($commoditybusinessdata, $pgsupportid[$i]);
				} else {
					$this->pgpanel_model->insert_commodity_business($commoditybusinessdata);
				}

				// if ($savetype == 'add') {
				// 	$this->pgpanel_model->insert_commodity_business($commoditybusinessdata);
				// } else {
				// 	$this->pgpanel_model->update_commodity_business($commoditybusinessdata, $pgsupportid[$i]);
				// }
				$i++;
			}

			$currentstepno = $this->input->post('stepno2');
			$nextstepno = (int) $this->input->post('stepno2') + 4;
			$prevstepno = (int) $this->input->post('stepno2') - 1;

			redirect(base_url() . 'monthly-business-summary/' . $nextstepno . '/' . $pgid);

		} else if ($this->input->post('stepno3') == '3' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			$pgid = $this->input->post('pgid');
			//print_r($this->input->post());
			// $pgid = $this->session->userdata('pgid');

			$datas = array(

				'pgid' => $pgid,
				'openingbalance' => $this->input->post('openingbalance'),
				'receipts' => $this->input->post('receipts'),
				'asp' => $this->input->post('asp'),
				'otherr' => $this->input->post('otherr'),
				'totalreceipts' => $this->input->post('totalreceipts'),
				'papc' => $this->input->post('papc'),
				'ctcc' => $this->input->post('ctcc'),
				'otherex' => $this->input->post('otherex'),
				'totalexppay' => $this->input->post('totalexppay'),

			);
			if (count($mtd) == 0) {

				$this->pgpanel_model->insert_mtd($datas);

			} else {

				$this->pgpanel_model->updatemtd($datas, $pgid);

			}

			$currentstepno = $this->input->post('stepno3');
			// $nextstepno = (int)$this->input->post('stepno10') + 1;
			$nextstepno = (int) $this->input->post('stepno3') + 1;
			$prevstepno = (int) $this->input->post('stepno10') - 1;

			redirect(base_url() . 'monthly-business-summary/' . $nextstepno . '/' . $pgid);

		} else if ($this->input->post('stepno4') == '4' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {
			// 			error_reporting(E_ALL);
			// ini_set('display_errors', 1);


			$pgid = $this->input->post('pgid');
			$datas = array(
				'pgid' => $pgid,
				'commodityfirst' => $this->input->post('commodityfirst'),
				'commodityfirstdesc' => $this->input->post('commodityfirstdesc'),
				'commoditysecond' => $this->input->post('commoditysecond'),
				'commodityseconddesc' => $this->input->post('commodityseconddesc'),
				'activemembers' => $this->input->post('activemembers')
			);

			// $this->pgpanel_model->insert_cash_books($datas);
			// print_r($datas);
			// die();

			if (isset($datas) && count($datas) !== 0) {
				$this->pgpanel_model->insert_cash_books($datas);
			} else {
				$this->pgpanel_model->update_cash_books($datas, $pgid);
			}

			$currentstepno = $this->input->post('stepno4');
			// $nextstepno = (int)$this->input->post('stepno10') + 1;
			$nextstepno = (int) $this->input->post('stepno4') + 1;
			$prevstepno = (int) $this->input->post('stepno4') - 1;

			redirect(base_url() . 'monthly-business-summary/' . $nextstepno . '/' . $pgid);
		} else if ($this->input->post('stepno5') == '5' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			$data = array(

				'pgid' => $pgid,
				'cb_cihcb' => $this->input->post('cb_cihcb'),
				'cb_cihbb' => $this->input->post('cb_cihbb'),
				'cb_total' => $this->input->post('cb_total'),
				'cb_frombuyer' => $this->input->post('cb_frombuyer'),
				'cb_payproducermember' => $this->input->post('cb_payproducermember')

			);


			$this->pgpanel_model->updatepg($data, $pgid);


			$currentstepno = $this->input->post('stepno5');
			$nextstepno = (int) $this->input->post('stepno5') + 1;
			$prevstepno = (int) $this->input->post('stepno5') - 1;

			redirect(base_url() . 'monthly-business-summary/' . $nextstepno . '/' . $pgid);

		} else if ($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			$data = array(

				'pgid' => $pgid,
				'finalenumerator_name' => $this->input->post('finalenumerator_name'),
				'finalpresidentsec_name' => $this->input->post('finalpresidentsec_name'),
				'finalblockcoordinator' => $this->input->post('finalblockcoordinator'),
				'finaldate' => $this->input->post('finaldate'),
				'finalplace' => $this->input->post('finalplace')

			);


			$this->pgpanel_model->updatepg($data, $pgid);


			$currentstepno = $this->input->post('stepno6');
			$nextstepno = (int) $this->input->post('stepno6') + 1;
			$prevstepno = (int) $this->input->post('stepno6') - 1;

			redirect(base_url() . 'monthly-business-summary/' . $nextstepno . '/' . $pgid);

			// redirect(base_url().'pgreview/'.$pgid); 

		} else if ($this->input->post('stepno7') == '7' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {
			// $data['success_message'] = 'Data inserted successfully!';
			// $this->session->set_flashdata('success_message', 'Data inserted successfully!');
			redirect(base_url() . 'monthly-business-summary?msg=Monthly Business Summary Details submitted Successfully ! ');
		}

		$mbs_filters_data = $this->session->userdata('mbs_filters_data');
		if($mbs_filters_data){
			$data['csdt'] = $this->pgpanel_model->getcommoditysupportdetails($pgid,$mbs_filters_data);
			// print_r($data['csdt']);
			// die();
			
			if($data['csdt'][0]['commoditycategory'] == NULL){
				$current_month_name = $mbs_filters_data['MBSmonth'];
				$current_month_timestamp = strtotime("1 " . $current_month_name);
				// $previous_month_name = date("F", strtotime("-1 month", $current_month_timestamp));
				$previous_month_name = null;

				for ($i = 1; $i <= 12; $i++) {
					$prevTimestamp = strtotime("-$i month", $current_month_timestamp);
					$prevMonth = date("F", $prevTimestamp);

					if ($prevMonth === "December") {
						break;
					}

					$monthData = $this->pgpanel_model->getpreviousmonthcommoditysupportdetails($pgid,$mbs_filters_data,$prevMonth);

					if (!empty($monthData[0]['commoditycategory'])) {
						$data['csdt_previous_month_data'] = $monthData;
						$previous_month_name = $prevMonth;
						break;
					}
				}

				$mbs_previous_month_filter = $previous_month_name;


				$data['csdt_previous_month_data'] = $this->pgpanel_model->getpreviousmonthcommoditysupportdetails($pgid,$mbs_filters_data,$mbs_previous_month_filter);
				// print_r($data['csdt_previous_month_data']);
				// die();
				$data['csdt'] = $this->pgpanel_model->getcommoditysupportdetails($pgid,$mbs_filters_data);
				// print_r($data['csdt']);
				// die();

				// print_r($data['csdt_previous_month_data'][0]);
				// die();

				// $mbs_filters_data['MBSpreviousmonth'] = $current_month_name;
				// $this->session->set_userdata('mbs_filters_data', $mbs_filters_data);
				
				// if(!empty($data['csdt_previous_month_data'])){
				// 	print_r("data found");
				// 	die();
				// }
				
			}
			
		}

		$pgid = $this->session->userdata('pgid');

		
		$data['userdetails'] = $this->main_model->getuserbyid($userid);
		$data['getpglist'] = $this->main_model->getpglistdropdown();
		//$data['getpglist'] = $this->main_model->getpglistsearch();
		$data['getbankdetails'] = $this->main_model->getbankdetail($pgid);
		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
		$data['villages'] = $this->main_model->getlocations('village');

		$data['cashbook'] = $this->pgpanel_model->get_cash_book_details($pgid);
		$data['mtd'] = $this->pgpanel_model->gettransactionaldetails($pgid);
		$data['pgsr'] = $this->pgpanel_model->getsupportrecieveddetails($pgid);
		// $data['csdt'] = $this->pgpanel_model->getcommoditysupportdetails($pgid);
		$data['pgdetails'] = $this->pgpanel_model->getpgdetails($pgid);

		$this->load->view('include/headerhomenew');
		$this->load->view('admindashboard/monthly_business_summary', $data);
		$this->load->view('include/footerhomenew');
	}

	public function member_transaction()
	{
		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		$data['grampanchayat'] = $this->pgpanel_model->get_grampanchayat();
		$data['producergroup'] = $this->pgpanel_model->get_producergroup();
		$data['categories'] = $this->pgpanel_model->getcategories();

		if ($this->input->post('stepno') == '1' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {

			$financial_year = $this->input->post('financial_year');
			$month = $this->input->post('month');
			$district = $this->input->post('districtname');
			$block = $this->input->post('blockname');
			$gram_panchayat = $this->input->post('gram_panchayat');
			$village = $this->input->post('villagename');
			$producer_group = $this->input->post('producer_group');
			$member_name = $this->input->post('member_name');

			$pgdata = $this->pgpanel_model->get_pgdetails($producer_group);
			$this->session->set_userdata('pgid', $pgdata['pgid']);

			$pg_member_data = array(
				'pgid' => $pgdata['pgid'],
				'pg_name' => $producer_group,
				'member_name' => $member_name,
				'financial_year' => $financial_year,
				'month' => $month,
				'district' => $district,
				'block' => $block,
				'gram_panchayat' => $gram_panchayat, 
				'village' => implode(',', $village)
			);

			$mtd = $this->main_model->get_member_transaction_details($pgdata['pgid']);
			// print_r( $mtd[0]['pgid'] === $pgdata['pgid']);
			// die();

			if (!$mtd && $mtd[0]['pgid'] === $pgdata['pgid']) {
				$this->main_model->update_member_transaction_details($pg_member_data, $pgdata['pgid']);
			} else {
				$lastInsertId = $this->main_model->save_member_transaction_details($pg_member_data);
			}

			$currentstepno = $this->input->post('stepno');
			$nextstepno = (int) $this->input->post('stepno') + 1;
			$prevstepno = (int) $this->input->post('stepno') - 1;

			// print_r($nextstepno);
			// die();

			redirect(base_url() . 'member-transaction/' . $nextstepno . '/' . $pgdata['pgid']);


		} else if ($this->input->post('stepno2') == '2' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {
			$pgid = $this->session->userdata('pgid');
			// print_r($pgid);
			// die();
			
			// error_reporting(E_ALL);
			// ini_set('display_errors', 1);

			// $member_transaction_insert = array(
			// 	'pgid' => $pgid,
			// 	'category' => implode(',', $this->input->post('categoryname')),
			// 	'subcategory' => implode(',',$this->input->post('sub_category')),
			// 	'commodity' => implode(',',$this->input->post('commodityname')),
			// 	'volume_of_production' => implode(',',$this->input->post('production_volume')),
			// 	'volume_of_sale' => implode(',',$this->input->post('sale_volume')),
			// 	'rate_of_commodity' => implode(',',$this->input->post('commodity_rate')),
			// 	'total_expenditure' => implode(',',$this->input->post('total_expenditure')),
			// 	'income_profit' => implode(',',$this->input->post('income_profit')),
			// 	'unit_of_production' => implode(',',$this->input->post('production_unit')),
			// 	'unit_of_sale' => implode(',',$this->input->post('sale_unit')),
			// );

			

			// $pgsupportid = $this->input->post('pgsupportid');
			// // print_r($pgsupportid[0]);
			// // die();
			// $this->main_model->update_member_transaction_details($member_transaction_insert, $pgsupportid[0]);

			$i = 0;
			foreach ($this->input->post('pgssavetype') as $savetype) {
				$pgsupportid = $this->input->post('pgsupportid');
				$this->session->set_userdata('pgsupportid', $pgsupportid);
				// print_r($pgsupportid);
				// die();

				$member_transaction_details = array(
					'pgid' => $pgid,
					'category' => $this->input->post('categoryname')[$i],
					'subcategory' => $this->input->post('sub_category')[$i],
					'commodity' => $this->input->post('commodityname')[$i],
					'volume_of_production' => $this->input->post('production_volume')[$i],
					'volume_of_sale' => $this->input->post('sale_volume')[$i],
					'rate_of_commodity' => $this->input->post('commodity_rate')[$i],
					'total_expenditure' => $this->input->post('total_expenditure')[$i],
					'income_profit' => $this->input->post('income_profit')[$i],
					'unit_of_production' => $this->input->post('production_unit')[$i],
					'unit_of_sale' => $this->input->post('sale_unit')[$i],
				);

				
				if (!empty($pgsupportid[$i])) {
					$this->main_model->update_member_transaction_details($member_transaction_details, $pgsupportid[$i]);
				} else {
					$lastInsertId = $this->main_model->save_member_transaction_details($member_transaction_details);
					$this->session->set_userdata('memberTransactionId', $lastInsertId);
				}

				$i++;
			}

			$currentstepno = $this->input->post('stepno2');
			$nextstepno = (int) $this->input->post('stepno2') + 1;
			$prevstepno = (int) $this->input->post('stepno2') - 1;

			redirect(base_url() . 'member-transaction/' . $nextstepno . '/' . $pgid);

		} else if ($this->input->post('stepno3') == '3' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {
			// error_reporting(E_ALL);
			// ini_set('display_errors', 1);
			
			$pgid = $this->session->userdata('pgid');
			$member_transaction_id = $this->session->userdata('memberTransactionId');
			$pgsupportid = $this->session->userdata('pgsupportid');	

			$member_transaction_details = array(
				'current_month_payment' => $this->input->post('currentmonthpayment'),
				'cumulative_payment' => $this->input->post('cumulativepayment'),
			);

			// $this->main_model->update_member_transaction_details($member_transaction_details, $member_transaction_id);
			$this->main_model->update_member_transaction_details($member_transaction_details, $pgsupportid[0]);

			$currentstepno = $this->input->post('stepno3');
			$nextstepno = (int) $this->input->post('stepno3') + 1;
			$prevstepno = (int) $this->input->post('stepno3') - 1;

			redirect(base_url() . 'member-transaction/' . $nextstepno . '/' . $pgid);
		} else if ($this->input->post('stepno4') == '4' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {
			$pgid = $this->session->userdata('pgid');

			$member_transaction_id = $this->session->userdata('memberTransactionId');
			$pgsupportid = $this->session->userdata('pgsupportid');

			$member_transaction_details = array(
				'due_payment' => $this->input->post('due_payment')
			);

			$this->main_model->update_member_transaction_details($member_transaction_details, $pgsupportid[0]);

			$currentstepno = $this->input->post('stepno4');
			$nextstepno = (int) $this->input->post('stepno4') + 1;
			$prevstepno = (int) $this->input->post('stepno4') - 1;
			redirect(base_url() . 'member-transaction/' . $nextstepno . '/' . $pgid);
		} else if ($this->input->post('stepno5') == '5' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true) {
			$pgid = $this->session->userdata('pgid');

			$member_transaction_id =  $this->session->userdata('memberTransactionId');
			// redirect(base_url() . 'member-transaction?msg=Member Transaction Details submitted Successfully !');

			$this->session->set_tempdata('success', 'Member Transaction Details submitted Successfully!!!', 1);
			redirect(base_url('member-transaction'));
		}

		$pgid = $this->session->userdata('pgid');	
		$member_transaction_id =  $this->session->userdata('memberTransactionId');
		$pgsupportid = $this->session->userdata('pgsupportid');
		
		
		$member_transaction_data = $this->main_model->get_member_transaction_details($pgid);
		$member_transaction_data_current_month = $this->main_model->get_member_transaction_details_current_month($pgsupportid[0]);
		$data['member_transaction_data'] = $member_transaction_data;
		$data['member_transaction_data_current_month'] = $member_transaction_data_current_month;
		// print_r($data['member_transaction_data_current_month']);
		// die();
		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
		$data['villages'] = $this->main_model->getlocations('village');

		$this->load->view('include/headerhomenew');
		$this->load->view('admindashboard/memberTransactionDetails', $data);
		$this->load->view('include/footerhomenew');
	}

	public function get_members_by_pgid()
	{		
		$pgname = $this->input->post('pgname');

		$pgdata = $this->pgpanel_model->get_pgdetails($pgname);
		$members = $this->main_model->get_members_by_pg($pgdata['pgid']);
		echo json_encode($members);
	}


	public function buyers_details()
	{
		$data['categories'] = $this->pgpanel_model->getcategories();
		$district = $this->main_model->get_district_data();
		$data['districts'] = array_column($district, 'dist');


		if ($this->input->post('submit1') == true) {

			// error_reporting(E_ALL);
			// ini_set('display_errors', 1);

			$buyerdetails = array(
				'name' => $this->input->post('name'),
				'district' => $this->input->post('dist'),
				'block' => $this->input->post('block'),
				'contact' => $this->input->post('contact_number'),
				'email' => $this->input->post('email'),
				'categories' => implode(',', $this->input->post('categoryname')),
				'subcategories' => implode(',', $this->input->post('subcategoryname')),
				'commodities' => implode(',', $this->input->post('commodityname')),
				'volumes' => implode(',', $this->input->post('volume_of_sale')),
				'rates' => implode(',', $this->input->post('rate_of_commodity')),
				'unit_of_sale' => implode(',', $this->input->post('sale_unit'))
			);
		
			$this->main_model->savebuyerdetails($buyerdetails);

			$data['success_message'] = 'Data inserted successfully!';
		}

		$this->load->view('include/headerhomenew');
		$this->load->view('admindashboard/buyerDetails',$data);
		$this->load->view('include/footerhomenew');
	}


}

