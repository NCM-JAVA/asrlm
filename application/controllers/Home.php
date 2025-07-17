<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();      
        $this->load->model('main_model');
		$this->load->model('Memberpanel_model');
		$this->load->model('pgpanel_model');
		//$userdata = $this->session->userdata('admin_session');
		//$userid = $userdata['id'];
		
		/*if($userid == false){
			redirect(base_url());
		}*/
		
    }
	
	public function index()
	{ 
		//$userdata = $this->session->userdata('admin_session');
		//$userid = $userdata['id'];
		
		
		/*if($userid == true){
			redirect(base_url().'user-profile');
		}*/
		
		//$data['districts'] = $this->main_model->getlocations('district');
		$data['districts'] = $this->main_model->getlocations('district2');
		$data['districts1'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['getpglist'] = $this->main_model->getpglist();
		$data['pgmembers'] = $this->main_model->getmemberslist();
		$data['commoditylists'] = $this->main_model->getcommoditylist();
		$data['commoditylists2'] = $this->main_model->totalcommoditywithfilter();
		$data['commoditynamelists'] = $this->main_model->totalcommoditynamewithfilter();
		$data['vacount'] = $this->main_model->getvacount();
		
		$commoarray = array('paddy','mustard','maize','vegetable','rice','potato','sesame','pea','pumpkin','arhar dal','jute','pulses','banana','arecanut','betelnut','lemon','rajmah','brinjal','gourd','bean','radish','cabbage','tomato','raddish','ladies finger','seasonal vegetables','bamboo','tea','cocunut','betel nut','coconut','orange','pine','black pepper','turmeric','lady','corriender','rajma','mango','tea','ginger','cucumber','acreanut','cauliflower','green chilli','water gourd','corriender leaf','poultry','cow','pig','duck','piggery','goat','hen','goat','byp','broiler','duck','chiken','cattle','local','mixed','rou, mirika','mirika','row','kamalcap','grasscap','worm','silkworm','traditional handloom clothes','sadar mekhela','dhekera','rou','rohu','vokua','b ghat','glass cup');
		
		
		$totalcommo = array();
		foreach($commoarray as $ca){
			
			//echo $ca . '<br/>';
			$cmncnt = $this->main_model->getcommoncount($ca);
			
			$totalcommo[] = array('name' => $ca, 'count'=>$cmncnt);
		}
		
		//print_r($totalcommo);
		
		$keys = array_column($totalcommo, 'count');
		array_multisort($keys, SORT_DESC, $totalcommo);
		//print_r($totalcommo);
		$data['totalcommodata'] = $totalcommo;
		$data['agriculture1data'] = $this->main_model->getcommovsblockchartcount('agriculture1');
		$data['agriculture2data'] = $this->main_model->getcommovsblockchartcount('agriculture2');
		$data['horticulture1data'] = $this->main_model->getcommovsblockchartcount('horticulture1');
		$data['horticulture2data'] = $this->main_model->getcommovsblockchartcount('horticulture2');
		$data['horticulture3data'] = $this->main_model->getcommovsblockchartcount('horticulture3');
		$data['livestock1data'] = $this->main_model->getcommovsblockchartcount('livestock1');
		$data['fisherydata'] = $this->main_model->getcommovsblockchartcount('fishery');
		
		$data['landcount1'] = $this->main_model->totallandchart('agriculture');
		
		$data['landcount2'] = $this->main_model->totallandchart('livestock');
		$data['landcount3'] = $this->main_model->totallandchart('fishery');
		$data['landcount4'] = $this->main_model->totallandchart('horticulture');
		$data['landcount5'] = $this->main_model->totallandchart('sericulture');
		
		$data['landcountls1'] = $this->main_model->totallandchartlivestock('bakcyard poultry');
		$data['landcountls2'] = $this->main_model->totallandchartlivestock('duck');
		$data['landcountls3'] = $this->main_model->totallandchartlivestock('goat');
		$data['landcountls4'] = $this->main_model->totallandchartlivestock('cow');
		$data['landcountls5'] = $this->main_model->totallandchartlivestock('pig');
		
		
		$data['landcounthorti1'] = $this->main_model->totallandcharthorti('arecanut');
		$data['landcounthorti2'] = $this->main_model->totallandcharthorti('lemon');
		$data['landcounthorti3'] = $this->main_model->totallandcharthorti('tomato');
		$data['landcounthorti4'] = $this->main_model->totallandcharthorti('tea');
		$data['landcounthorti5'] = $this->main_model->totallandcharthorti('vegetables');
		$data['landcounthorti6'] = $this->main_model->totallandcharthorti('bean');
		$data['landcounthorti7'] = $this->main_model->totallandcharthorti('brinjal');
		$data['landcounthorti8'] = $this->main_model->totallandcharthorti('potato');
		
		
		$data['landcountagri1'] = $this->main_model->totallandchartagri('paddy');
		$data['landcountagri2'] = $this->main_model->totallandchartagri('mustard');
		$data['landcountagri3'] = $this->main_model->totallandchartagri('maize');
		$data['landcountagri4'] = $this->main_model->totallandchartagri('vegetable');
		$data['landcountagri5'] = $this->main_model->totallandchartagri('potato');
		
		
		
		
		
		$this->load->view('fronthome/dashboard',$data);
		
	}
	


	public function buyersdetails(){
		
		$userdata = $this->session->userdata('admin_session');
		//$userid = $userdata['id'];
		
		//print_r($this->input->post());
		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['districts1'] = $this->main_model->getlocations('district');
		$data['commoditynamelists'] = $this->main_model->totalcommoditynamewithfilter();
		if($this->input->post('submit')  == true)
		{
			$res = $this->main_model->savebuyerdetails($this->input->post());
			
			if($res ==  true){
				
				 redirect(base_url().'buyer-details?msg=Buyer Details submitted Successfully ! ');
			}
		}
		$this->load->view('include/headerhomenew');
		$this->load->view('fronthome/buyerdetails',$data);
		$this->load->view('include/footerhomenew');
		
	}
	public function buyersdetails_list()
	{
		$data['buyerdetail'] = $this->main_model->getbuyerdetails();
		
	    $this->load->view('include/headerhomenew');
		$this->load->view('fronthome/buyerdetail_list',$data);
		$this->load->view('include/footerhomenew');	
	}
	public function pgreview(){
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		$pgid = $this->uri->segment(2);
		
		if($userid == false){
			redirect(base_url());
		}
		
		if($pgid == true){
			
			$mtd = $this->pgpanel_model->gettransactionaldetails($pgid);
		
			$data['mtd'] = $mtd;
			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
			$data['getbankdetails'] = $this->main_model->getbankdetail($pgid);
			$data['districts'] = $this->main_model->getlocations('district');
			$data['blocks'] = $this->main_model->getlocations('block');
			$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
			$data['villages'] = $this->main_model->getlocations('village');
			$data['pgsr'] = $this->pgpanel_model->getsupportrecieveddetails($pgid);
			$data['csdt'] = $this->pgpanel_model->getcommoditysupportdetails($pgid);
			$data['cashbook'] = $this->pgpanel_model->get_cash_book_details($pgid);
		}
		
		$this->load->view('include/headerhomenew');
		$this->load->view('fronthome/pgreview',$data);
		$this->load->view('include/footerhomenew');
		
	}
	
	public function manageadmin(){
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
					
		if($userid == false){
			redirect(base_url());
		}
			
	    //echo $this->uri->segment(2);
		if($this->uri->segment(2) == true){
			
			$userid = $this->uri->segment(2);
			
		}
	
		$data['userdetails'] = $this->main_model->getuserbyid($userid);
		$data['getpglist'] = $this->main_model->getpglist();
		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
		$data['villages'] = $this->main_model->getlocations('village');
		
		if($this->input->get('atype') == 'valueaddition'){
		
			$data['dryingno'] = $this->main_model->getpgva('drying');
			//echo '<pre/>';print_r($data['dryingno']);
			$data['gradingno'] = $this->main_model->getpgva('grading');
			$data['sortingno'] = $this->main_model->getpgva('sorting');
			$data['processingno'] = $this->main_model->getpgva('processing');
			$data['storingno'] = $this->main_model->getpgva('storing');
			$data['packagingno'] = $this->main_model->getpgva('packaging');
			$data['labellingno'] = $this->main_model->getpgva('labelling');
			$data['weighingno'] = $this->main_model->getpgva('weighing');
			$data['cmno'] = $this->main_model->getpgva('collective marketing');
			$data['othersno'] = $this->main_model->getpgva('others');
			$data['nonabvno'] = $this->main_model->getpgva('none of the above');
			
		}
	
	
		if($this->input->get('atype') == 'bor'){
			
			$data['book1'] = $this->main_model->getbor('minutes of meeting book');
			
			$data['book2'] = $this->main_model->getbor('bank book for all transactions');
			$data['book3'] = $this->main_model->getbor('saving register');
			$data['book4'] = $this->main_model->getbor('purchase sale and stock register');
			$data['book5'] = $this->main_model->getbor('stock movement register');
			$data['book6'] = $this->main_model->getbor('bill book and receipt book');
			$data['book7'] = $this->main_model->getbor('entry cash book');
			$data['book8'] = $this->main_model->getbor('weighing');
			$data['book9'] = $this->main_model->getbor('loan ledger');
		
		
		}
	
	
		if($this->input->get('atype') == 'financialstatements'){
			
			$data['cb_cihcb'] = $this->main_model->getcpcount('cb_cihcb');		
			$data['cb_cihbb'] = $this->main_model->getcpcount('cb_cihbb');
			
		}
	
		if($this->input->get('atype') == 'closingbalance'){
			
			$data['cb_cihcb'] = $this->main_model->getcpcount2('cb_cihcb');		
			$data['cb_cihbb'] = $this->main_model->getcpcount2('cb_cihbb');
			$data['cb_payproducermember'] = $this->main_model->getcpcount2('cb_payproducermember');
			$data['cb_frombuyer'] = $this->main_model->getcpcount2('cb_frombuyer');
			
		}
	
		if($this->input->get('atype') == 'membergroup' && $this->input->get('mtype') == 'landarea' ){
		
			$data['landarea'] = $this->main_model->getlandareamembers('landarea');	
			$data['irrigatedland'] = $this->main_model->getlandareamembers('irrigatedland');	
			$data['nonirrigatedland'] = $this->main_model->getlandareamembers('nonirrigatedland');	
			$data['totalwaterbody'] = $this->main_model->getlandareamembers('totalwaterbody');	
			$data['grazingland'] = $this->main_model->getlandareamembers('grazingland');	
		
		}
		
		if($this->input->get('atype') == 'membergroup' && ($this->input->get('mtype') == 'commodity1' || $this->input->get('mtype') == 'commodity2'   || $this->input->get('mtype') == 'commodity3' ) ){
			
			$data['agricommo1'] = $this->main_model->getcommoddity1member('agri');	 
			$data['horticommo1'] = $this->main_model->getcommoddity1member('horti');	 
			$data['livestockscommo1'] = $this->main_model->getcommoddity1member('livestocks');	 
			
			$data['agricommo2'] = $this->main_model->getcommoddity2member('agri');	 
			$data['horticommo2'] = $this->main_model->getcommoddity2member('horti');	 
			$data['livestockscommo2'] = $this->main_model->getcommoddity2member('livestocks');	 
			
			$data['agricommo3'] = $this->main_model->getcommoddity3member('agri');	 
			$data['horticommo3'] = $this->main_model->getcommoddity3member('horti');	 
			$data['livestockscommo3'] = $this->main_model->getcommoddity3member('livestocks');	 
		}
	
		if($this->input->get('atype') == 'trainingrecords'){
			
			$data['TLAgriculturecount'] = $this->main_model->gettrainingcount('TLAgriculture');
			$data['TLHorticulturecount'] = $this->main_model->gettrainingcount('TLHorticulture');
			$data['TLLivestockcount'] = $this->main_model->gettrainingcount('TLLivestock');
			$data['TLFisherycount'] = $this->main_model->gettrainingcount('TLFishery');
			$data['TLSericulturecount'] = $this->main_model->gettrainingcount('TLSericulture');
			$data['TLOtherscount'] = $this->main_model->gettrainingcount('TLOthers');
		}
	
		$this->load->view('include/headerhomenew');
		$this->load->view('user/admin-manager',$data);
		$this->load->view('include/footerhomenew');
		
	}
	
	function fetch_block(){
			
		//$data['blocks'] = $this->main_model->getlocations('block');
		if($this->input->post('districtname'))
		{
		echo $this->main_model->getblocks($this->input->post('districtname'));
		//echo $this->db->last_query();
		}
		
	}
		 
   	public function fetchgrampachayat() {
			 
		//$data['blocks'] = $this->main_model->getlocations('block');
		if($this->input->post('blocknames'))
		{
		echo $this->main_model->getgrampanchayat($this->input->post('blocknames'));
		//echo $this->db->last_query();
		}
		  
	}
		
	public function fetchvillage() {
			 
		//$data['blocks'] = $this->main_model->getlocations('block');
		if($this->input->post('grampanchayat'))
		{
			echo $this->main_model->getvillage($this->input->post('grampanchayat'));
			//echo $this->db->last_query();
		}
		  
	}

	public function fetchproducergroup() {
		// print_r($this->input->post('villagename'));
		//$data['blocks'] = $this->main_model->getlocations('block');
		if($this->input->post('villagename'))
		{
			echo $this->main_model->getproducergroup($this->input->post('villagename'));
			//echo $this->db->last_query();
		}
		  
	}
		 
		 
	public function fetchsubcategory() {
			 
		//$data['blocks'] = $this->main_model->getlocations('block');
		if($this->input->post('categoryname'))
		{
		echo $this->pgpanel_model->getsubcategory($this->input->post('categoryname'));
		// echo $this->db->last_query();
		}
		  
	}
		 
		 
	public function fetchcommodity() {
				
		// if($this->input->post('subcategoryname'))
		// {
		// 	echo $this->pgpanel_model->getcommodityname($this->input->post('subcategoryname'));
		// }
		if($this->input->post('categoryname'))
		{
			echo $this->pgpanel_model->getcommodityname($this->input->post('categoryname'));
		}
			
	}
		 
	public function formfill(){
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		
		
		//print_r($this->input->post());exit; 
		
		if($userid == false){
			redirect(base_url());
		}
		
		$data['categories'] = $this->pgpanel_model->getcategories();
		
		//print_r($data['categories']); exit;
		
		
	    //echo $this->uri->segment(2);
		if($this->uri->segment(2) == true){
			
			$userid = $this->uri->segment(2);
			
		}
		
		
		$pgid = $this->session->userdata('pgid');
		if($pgid == true){
			
			 $data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}
		//print_r($this->input->post());
	
		if($this->input->post('pgname') == true)
		{
			
			$pgid = $this->input->post('pgname');
			
			$sdata = array(
			'pgid'  => $pgid
			);

			
			$this->session->set_userdata($sdata);
			$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
		}
	
	
		if($this->input->get('editpg') == true)
		{
			
			$pgid = $this->input->get('editpg');
			
			$sdata = array(
				'pgid'  => $pgid,
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

		if($this->input->post('stepno') == '1' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
	
		 
			$data=array(
			
				'pgid'=> $pgid,
				'district'=> $this->input->post('districtname'),
				'block'=> $this->input->post('blockname'),
				'grampanchayat'=> $this->input->post('grampanchayatname'),
				'village'=> implode(',',$this->input->post('villagename')),
				'dof'=> $this->input->post('dof'),
				'president_name'=> $this->input->post('president_name'),
				'secretary_name'=> $this->input->post('secretary_name'),
				'treasurer_name'=> $this->input->post('treasurer_name'),
				'pramoted_uder'=> $this->input->post('pramoted_uder')
			
			);
	
	
			$this->pgpanel_model->updatepg($data,$pgid);
				
				
			$currentstepno = $this->input->post('stepno');
			$nextstepno = (int)$this->input->post('stepno') + 1;
			$prevstepno = (int)$this->input->post('stepno') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 
			
			
		} else if($this->input->post('stepno2') == '2' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
		
		
		
			$bankdata = array();
			
			$bankname = $this->input->post('bankname');
			$typeofaccount = $this->input->post('typeofaccount');
			$ifsc = $this->input->post('ifsc');
			$branchname = $this->input->post('branchname');
			$accountno = $this->input->post('accountno');
			$pgbdid = $this->input->post('pgbdid');
			
			$i = 0;
			foreach($this->input->post('bnksavetype') as $savetype){
				
				if($savetype == 'add'){
					
					$bankdata = array('pgid'=> $pgid,'bankname'=> $bankname[$i],'account_type'=> $typeofaccount[$i],'IFSC'=> $ifsc[$i],'branchname'=> $branchname[$i],'accountno'=> $accountno[$i]);
					$this->pgpanel_model->insert_bankdatapgpanel($bankdata); 
				}
				else{
					
					$bankdata = array('bankname'=> $bankname[$i],'account_type'=> $typeofaccount[$i],'IFSC'=> $ifsc[$i],'branchname'=> $branchname[$i],'accountno'=> $accountno[$i]);
					$this->pgpanel_model->updatepgbank($bankdata,$pgbdid[$i]); 
				
				}
			
			$i++;
			}
			
			$data=array(
			
			'category'=> $this->input->post('categoryname'),
			'sub_category'=> $this->input->post('subcategoryname'),
			'commodityname'=> $this->input->post('commoditynewname')
			
			);
			
			
			$this->pgpanel_model->updatepg($data,$pgid);
			
		
			$currentstepno = $this->input->post('stepno2');
			$nextstepno = (int)$this->input->post('stepno2') + 1;
			$prevstepno = (int)$this->input->post('stepno2') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 	
	 
		} else if($this->input->post('stepno3') == '3' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
			
			$data=array(
			
				'pgid'=> $pgid,
				'USname'=> $this->input->post('pgusname'),
				'USnomember'=> $this->input->post('usnomember'),
				'USnovillage'=> $this->input->post('usnovillage'),
				'PSname'=> $this->input->post('pgpsname'),
				'PSnomember'=> $this->input->post('psnomember'),
				'PSnovillage'=> $this->input->post('psnovillage'),
				'KSname'=> $this->input->post('pgksname'),
				'KSnomember'=> $this->input->post('ksnomember'),
				'KSnovillage'=> $this->input->post('ksnovillage')
			
			);
			
			
			$this->pgpanel_model->updatepg($data,$pgid);
			
				
			$currentstepno = $this->input->post('stepno3');
			$nextstepno = (int)$this->input->post('stepno3') + 1;
			$prevstepno = (int)$this->input->post('stepno3') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 	
	 			
		} else if($this->input->post('stepno4') == '4' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
			// error_reporting(E_ALL);
			// ini_set('display_errors', '1');
			//print_r($this->input->post('usaa'));	exit;	
			$data = array(
				'pgid'  => $pgid,
				'VAAUS' => !empty($this->input->post('usaa')) ? implode(',', $this->input->post('usaa')) : '',
				'VAAPS' => !empty($this->input->post('psaa')) ? implode(',', $this->input->post('psaa')) : '',
				'VAAKS' => !empty($this->input->post('ksaa')) ? implode(',', $this->input->post('ksaa')) : ''
			);
				
			$this->pgpanel_model->updatepg($data,$pgid);
			
				
			$currentstepno = $this->input->post('stepno4');
			$nextstepno = (int)$this->input->post('stepno4') + 1;
			$prevstepno = (int)$this->input->post('stepno4') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 	
	 			
		} else if($this->input->post('stepno5') == '5' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
		
			// print_r('Add PG 5');
			// die();
			//print_r($this->input->post());echo implode(',',$this->input->post('bor')); exit;
				
			$data=array(
			
				'pgid'=> $pgid,
				'BOR'=> implode(',',$this->input->post('bor'))
			);
	
	
			$this->pgpanel_model->updatepg($data,$pgid);
			
				
			$currentstepno = $this->input->post('stepno5');
			$nextstepno = (int)$this->input->post('stepno5') + 1;
			$prevstepno = (int)$this->input->post('stepno5') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 
				
		} else if($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLAgriculture')){
			
			//print_r($this->input->post());echo implode(',',$this->input->post('bor')); exit;
			
			// if(count($this->input->post('TLAgriculture')) > 0){
				
				$data=array(
				
					'pgid'=> $pgid,
					'TLAgriculture'=> implode(',',$this->input->post('TLAgriculture')),
				
				);	
			
			// }
			
			
			// if(count($this->input->post('TLHorticulture')) > 0){
				
			// 	$data=array(
					
			// 		'pgid'=> $pgid,
			// 		'TLHorticulture'=> implode(',',$this->input->post('TLHorticulture'))
					
			// 	);	
			
			// }

			
			// if(count($this->input->post('TLLivestock')) > 0){
				
			// 	$data=array(
				
			// 		'pgid'=> $pgid,
			// 		'TLLivestock'=> implode(',',$this->input->post('TLLivestock'))
				
			// 	);	
			
			// }
	
			// if(count($this->input->post('TLFishery')) > 0){
				
			// 	$data=array(
				
			// 		'pgid'=> $pgid,
			// 		'TLFishery'=> implode(',',$this->input->post('TLFishery'))
			// 	);	
			
			// }
	
			// if(count($this->input->post('TLSericulture')) > 0){
				
			// 	$data=array(
				
			// 		'pgid'=> $pgid,
			// 		'TLSericulture'=> implode(',',$this->input->post('TLSericulture'))
			// 	);	
			
			// }
	
			// if(count($this->input->post('TLOthers')) > 0){
				
			// 	$data=array(
				
			// 		'pgid'=> $pgid,
			// 		'TLOthers'=> implode(',',$this->input->post('TLOthers'))
			// 	);	
			
			// }
	

	
			$this->pgpanel_model->updatepg($data,$pgid);
			
				
			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;
	 
			
			redirect(base_url().'form-filling/'.$currentstepno.'?tltype=horti'); 
			// redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 
		} else if($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLHorticulture')){
			
				$data=array(
					'pgid'=> $pgid,
					'TLHorticulture'=> implode(',',$this->input->post('TLHorticulture'))
				);	
			
			$this->pgpanel_model->updatepg($data,$pgid);
			
				
			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;
	 
			
			redirect(base_url().'form-filling/'.$currentstepno.'?tltype=livestocks'); 
			// redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 

		} else if($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLLivestock')){

			$data=array(
				'pgid'=> $pgid,
				'TLLivestock'=> implode(',',$this->input->post('TLLivestock'))
			);	

			$this->pgpanel_model->updatepg($data,$pgid);
			
			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;
	 
			
			redirect(base_url().'form-filling/'.$currentstepno.'?tltype=fishery'); 
			// redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 
		
		} else if($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLFishery')){

			$data=array(
				'pgid'=> $pgid,
				'TLFishery'=> implode(',',$this->input->post('TLFishery'))
			);	

			$this->pgpanel_model->updatepg($data,$pgid);
			
			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;
	 
			
			redirect(base_url().'form-filling/'.$currentstepno.'?tltype=sericulture'); 
			// redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid);
		
		} else if($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLSericulture')){

			$data=array(
				'pgid'=> $pgid,
				'TLSericulture'=> implode(',',$this->input->post('TLSericulture'))
			);	

			$this->pgpanel_model->updatepg($data,$pgid);
			
			$currentstepno = $this->input->post('stepno6');
			// $nextstepno = (int)$this->input->post('stepno6') + 1;
			// $prevstepno = (int)$this->input->post('stepno6') - 1;
	 
			
			redirect(base_url().'form-filling/'.$currentstepno.'?tltype=others'); 
			// redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid);
		
		} else if($this->input->post('stepno6') == '6' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true && $this->input->post('TLOthers')){

			$data=array(
				'pgid'=> $pgid,
				'TLOthers'=> implode(',',$this->input->post('TLOthers'))
			);	

			$this->pgpanel_model->updatepg($data,$pgid);
			
			$currentstepno = $this->input->post('stepno6');
			$nextstepno = (int)$this->input->post('stepno6') + 10;
			$prevstepno = (int)$this->input->post('stepno6') - 1;
	 
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid);
		
		} else if($this->input->post('stepno16') == '16' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){	
			$data=array(
				'pgid'=> $pgid,
				'BPPreparation'=> implode(',',$this->input->post('BPPreparation'))
			);

			$this->pgpanel_model->updatepg($data,$pgid);
			$currentstepno = $this->input->post('stepno16');
			$nextstepno = (int)$this->input->post('stepno16') - 9;
			$prevstepno = (int)$this->input->post('stepno16') - 1;

			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid);

		}else if($this->input->post('stepno7') == '7' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
			
			$i = 0;
			foreach($this->input->post('pgssavetype') as $savetype){
				$pgsupportid = $this->input->post('pgsupportid'); 

				$commoditybusinessdata = array(
					'pgid'=> $pgid,
					'commoditycategory' => $this->input->post('commoditycategory')[$i] ?? 0,
					'commoditysubcategory' => $this->input->post('commoditysubcategory')[$i] ?? 0,
					'commodity' => $this->input->post('commodity')[$i] ?? 0,
					'opstock' => $this->input->post('opstock')[$i] ?? 0,
					'opamount' => $this->input->post('opamount')[$i] ?? 0,
					'oprate' => $this->input->post('oprate')[$i] ?? 0,
					'procureqty' => $this->input->post('procureqty')[$i] ?? 0,
					'procureamount' => $this->input->post('procureamount')[$i] ?? 0,
					'procurerate' => $this->input->post('procurerate')[$i] ?? 0,
					'procurewastageqty' => $this->input->post('procurewastageqty')[$i] ?? 0,
					'procurewastageamount' => $this->input->post('procurewastageamount')[$i] ?? 0,
					'procurewastagerate' => $this->input->post('procurewastagerate')[$i] ?? 0,
					'otherexpenditureqty' => $this->input->post('otherexpenditureqty')[$i] ?? 0,
					'otherexpenditureamount' => $this->input->post('otherexpenditureamount')[$i] ?? 0,
					'otherexpenditurerate' => $this->input->post('otherexpenditurerate')[$i] ?? 0,
					'saleqty' => $this->input->post('saleqty')[$i] ?? 0,
					'saleamount' => $this->input->post('saleamount')[$i] ?? 0,
					'salerate' => $this->input->post('salerate')[$i] ?? 0,
					'closingstockqty' => $this->input->post('closingstockqty')[$i] ?? 0,
					'closingstockamount' => $this->input->post('closingstockamount')[$i] ?? 0,
					'closingstockrate' => $this->input->post('closingstockrate')[$i] ?? 0,
					'surplusqty' => $this->input->post('surplusqty')[$i] ?? 0,
					'surplusamount' => $this->input->post('surplusamount')[$i] ?? 0,
					'surplusrate' => $this->input->post('surplusrate')[$i] ?? 0,
					'cumulativesalesqty' => $this->input->post('cumulativesalesqty')[$i] ?? 0,
					'cumulativesalesamount' => $this->input->post('cumulativesalesamount')[$i] ?? 0,
					'cumulativesalesrate' => $this->input->post('cumulativesalesrate')[$i] ?? 0,
				);

				if($savetype == 'add'){
					$this->pgpanel_model->insert_commodity_business($commoditybusinessdata); 
				} else {
					$this->pgpanel_model->update_commodity_business($commoditybusinessdata,$pgsupportid[$i]); 
				}
				$i++;
			}

			// $pgsupportdata = array();
			
			// $SRPGsof = $this->input->post('SRPGsof');
			// $SRPGtof = $this->input->post('SRPGtof');
			// $SRPGamount = $this->input->post('SRPGamount');
			// $SRPGtos = $this->input->post('SRPGtos');
			// $SRPGtosamount = $this->input->post('SRPGtosamount');
			// $SRPGdate = $this->input->post('SRPGdate');
			// $SRPGpurpose = $this->input->post('SRPGpurpose');
			// $PMPGsof = $this->input->post('PMPGsof');
			// $PMPGrp = $this->input->post('PMPGrp');
			// $PMPGinterest_rate = $this->input->post('PMPGinterest_rate');
			// $PMPGmonthlyemi = $this->input->post('PMPGmonthlyemi');
			// $PMPGamountdue = $this->input->post('PMPGamountdue');
			// $loanduration = $this->input->post('loanduration');
			// $commencement_date = $this->input->post('commencement_date');
			// $completion_date = $this->input->post('completion_date');
			// $pgsupportid = $this->input->post('pgsupportid'); 		
			// $pgssavetype = $this->input->post('pgssavetype');	
			
			// $i = 0;
			// foreach($this->input->post('pgssavetype') as $savetype){
				
			// 	if($savetype == 'add'){
					
			// 		$pgsupportdata = array('pgid'=> $pgid,'SRPGsof'=> $SRPGsof[$i],'SRPGtof'=> $SRPGtof[$i],'SRPGamount'=> $SRPGamount[$i],'SRPGtos'=> $SRPGtos[$i],'SRPGtosamount'=> $SRPGtosamount[$i],'SRPGdate'=> $SRPGdate[$i],'SRPGpurpose'=> $SRPGpurpose[$i],'PMPGsof'=> $PMPGsof[$i],'PMPGrp'=> $PMPGrp[$i],'PMPGinterest_rate'=> $PMPGinterest_rate[$i],'PMPGmonthlyemi'=> $PMPGmonthlyemi[$i],'PMPGamountdue'=> $PMPGamountdue[$i],'loanduration'=> $loanduration[$i],'commencement_date'=> $commencement_date[$i],'completion_date'=> $completion_date[$i]);
					
			// 		$this->pgpanel_model->insert_pgsupport($pgsupportdata); 
			// 	}
			// 	else{
					
			// 		$pgsupportdata = array('SRPGsof'=> $SRPGsof[$i],'SRPGtof'=> $SRPGtof[$i],'SRPGamount'=> $SRPGamount[$i],'SRPGtos'=> $SRPGtos[$i],'SRPGtosamount'=> $SRPGtosamount[$i],'SRPGdate'=> $SRPGdate[$i],'SRPGpurpose'=> $SRPGpurpose[$i],'PMPGsof'=> $PMPGsof[$i],'PMPGrp'=> $PMPGrp[$i],'PMPGinterest_rate'=> $PMPGinterest_rate[$i],'PMPGmonthlyemi'=> $PMPGmonthlyemi[$i],'PMPGamountdue'=> $PMPGamountdue[$i],'loanduration'=> $loanduration[$i],'commencement_date'=> $commencement_date[$i],'completion_date'=> $completion_date[$i]);
			// 		$this->pgpanel_model->updatepgsupport($pgsupportdata,$pgsupportid[$i]); 
				
			// 	}
			
			// 	$i++;
			// }

			// $currentstepno = $this->input->post('stepno7');
			// $nextstepno = (int)$this->input->post('stepno7') + 2;
			// $prevstepno = (int)$this->input->post('stepno7') - 1;
			
			// redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 

			$currentstepno = $this->input->post('stepno7');
			$nextstepno = (int)$this->input->post('stepno7') + 2;
			$prevstepno = (int)$this->input->post('stepno7') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 
	 
		} else if($this->input->post('stepno9') == '9' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
			$pgsupportdata = array();

			$SRPGsof = $this->input->post('SRPGsof');
			$SRPGtof = $this->input->post('SRPGtof');
			$SRPGamount = $this->input->post('SRPGamount');
			$SRPGtos = $this->input->post('SRPGtos');
			$SRPGtosamount = $this->input->post('SRPGtosamount');
			$SRPGdate = $this->input->post('SRPGdate');
			$SRPGpurpose = $this->input->post('SRPGpurpose');
			$PMPGsof = $this->input->post('PMPGsof');
			$PMPGrp = $this->input->post('PMPGrp');
			$PMPGinterest_rate = $this->input->post('PMPGinterest_rate');
			$PMPGmonthlyemi = $this->input->post('PMPGmonthlyemi');
			$PMPGamountdue = $this->input->post('PMPGamountdue');
			$loanduration = $this->input->post('loanduration');
			$commencement_date = $this->input->post('commencement_date');
			$completion_date = $this->input->post('completion_date');
			$pgsupportid = $this->input->post('pgsupportid'); 		
			$pgssavetype = $this->input->post('pgssavetype');	
			
			$i = 0;
			foreach($this->input->post('pgssavetype') as $savetype){
				
				if($savetype == 'add'){
					
					$pgsupportdata = array('pgid'=> $pgid,'SRPGsof'=> $SRPGsof[$i],'SRPGtof'=> $SRPGtof[$i],'SRPGamount'=> $SRPGamount[$i],'SRPGtos'=> $SRPGtos[$i],'SRPGtosamount'=> $SRPGtosamount[$i],'SRPGdate'=> $SRPGdate[$i],'SRPGpurpose'=> $SRPGpurpose[$i],'PMPGsof'=> $PMPGsof[$i],'PMPGrp'=> $PMPGrp[$i],'PMPGinterest_rate'=> $PMPGinterest_rate[$i],'PMPGmonthlyemi'=> $PMPGmonthlyemi[$i],'PMPGamountdue'=> $PMPGamountdue[$i],'loanduration'=> $loanduration[$i],'commencement_date'=> $commencement_date[$i],'completion_date'=> $completion_date[$i]);
					
					$this->pgpanel_model->insert_pgsupport($pgsupportdata); 
				}
				else{
					
					$pgsupportdata = array('SRPGsof'=> $SRPGsof[$i],'SRPGtof'=> $SRPGtof[$i],'SRPGamount'=> $SRPGamount[$i],'SRPGtos'=> $SRPGtos[$i],'SRPGtosamount'=> $SRPGtosamount[$i],'SRPGdate'=> $SRPGdate[$i],'SRPGpurpose'=> $SRPGpurpose[$i],'PMPGsof'=> $PMPGsof[$i],'PMPGrp'=> $PMPGrp[$i],'PMPGinterest_rate'=> $PMPGinterest_rate[$i],'PMPGmonthlyemi'=> $PMPGmonthlyemi[$i],'PMPGamountdue'=> $PMPGamountdue[$i],'loanduration'=> $loanduration[$i],'commencement_date'=> $commencement_date[$i],'completion_date'=> $completion_date[$i]);
					$this->pgpanel_model->updatepgsupport($pgsupportdata,$pgsupportid[$i]); 
				
				}
			
				$i++;
			}

			$currentstepno = $this->input->post('stepno9');
			$nextstepno = (int)$this->input->post('stepno9') + 5;
			$prevstepno = (int)$this->input->post('stepno9') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 
		} else if($this->input->post('stepno14') == '14' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
			
			$data=array(
			
				'pgid'=> $pgid,
				'su_paymenttomember'=> $this->input->post('su_paymenttomember'),
				'su_paymentduepgmember'=> $this->input->post('su_paymentduepgmember'),
				'su_paymentduenonpgmember'=> $this->input->post('su_paymentduenonpgmember'),
				'su_reinvesttopg'=> $this->input->post('su_reinvesttopg')
			
			);
		
		
			$this->pgpanel_model->updatepg($data,$pgid);
			
				
			$currentstepno = $this->input->post('stepno14');
			$nextstepno = 10;
			$prevstepno = (int)$this->input->post('stepno14') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 	
	 			
		} else if($this->input->post('stepno10') == '10' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
		
			$pgid = $this->input->post('pgid');
			//print_r($this->input->post());
		
		
			$datas=array(
			
				'pgid'=> $pgid,
				'openingbalance'=> $this->input->post('openingbalance'),
				'receipts'=> $this->input->post('receipts'),
				'asp'=> $this->input->post('asp'),
				'otherr'=> $this->input->post('otherr'),
				'totalreceipts'=> $this->input->post('totalreceipts'),
				'papc'=> $this->input->post('papc'),
				'ctcc'=> $this->input->post('ctcc'),
				'otherex'=> $this->input->post('otherex'),
				'totalexppay'=> $this->input->post('totalexppay'),
			
			);
			if(count($mtd) == 0){

				$this->pgpanel_model->insert_mtd($datas);
			
			} else {
		
				$this->pgpanel_model->updatemtd($datas,$pgid);
				
			}
		
			$currentstepno = $this->input->post('stepno10');
			// $nextstepno = (int)$this->input->post('stepno10') + 1;
			$nextstepno = (int)$this->input->post('stepno10') + 5;
			$prevstepno = (int)$this->input->post('stepno10') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 	
	 			
		} else if($this->input->post('stepno15') == '15' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
// 			error_reporting(E_ALL);
// ini_set('display_errors', 1);


			$pgid = $this->input->post('pgid');
			$datas=array(
				'pgid'=> $pgid,
				'commodityfirst'=> $this->input->post('commodityfirst'),
				'commodityfirstdesc'=> $this->input->post('commodityfirstdesc'),
				'commoditysecond'=> $this->input->post('commoditysecond'),
				'commodityseconddesc'=> $this->input->post('commodityseconddesc'),
				'activemembers'=> $this->input->post('activemembers')
			);

			// $this->pgpanel_model->insert_cash_books($datas);
			// print_r($datas);
			// die();
			
			if(isset($datas) && count($datas) == 0){
				$this->pgpanel_model->insert_cash_books($datas);
			} else {
				$this->pgpanel_model->update_cash_books($datas,$pgid);
			}
		
			$currentstepno = $this->input->post('stepno15');
			// $nextstepno = (int)$this->input->post('stepno10') + 1;
			$nextstepno = (int)$this->input->post('stepno15') - 4;
			$prevstepno = (int)$this->input->post('stepno15') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 
		} else if($this->input->post('stepno11') == '11' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
			
			$data=array(
			
				'pgid'=> $pgid,
				'cb_cihcb'=> $this->input->post('cb_cihcb'),
				'cb_cihbb'=> $this->input->post('cb_cihbb'),
				'cb_total'=> $this->input->post('cb_total'),
				'cb_frombuyer'=> $this->input->post('cb_frombuyer'),
				'cb_payproducermember'=> $this->input->post('cb_payproducermember')
			
			);
	
	
			$this->pgpanel_model->updatepg($data,$pgid);
			
				
			$currentstepno = $this->input->post('stepno11');
			$nextstepno = (int)$this->input->post('stepno11') + 1;
			$prevstepno = (int)$this->input->post('stepno11') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 	
	 			
		} else if($this->input->post('stepno12') == '12' && $this->input->post('isedit') == '1' && $this->input->post('submit1') == true){
			
			$data=array(
			
				'pgid'=> $pgid,
				'finalenumerator_name'=> $this->input->post('finalenumerator_name'),
				'finalpresidentsec_name'=> $this->input->post('finalpresidentsec_name'),
				'finalblockcoordinator'=> $this->input->post('finalblockcoordinator'),
				'finaldate'=> $this->input->post('finaldate'),
				'finalplace'=> $this->input->post('finalplace')
			
			);
	
	
			$this->pgpanel_model->updatepg($data,$pgid);
			
				
			$currentstepno = $this->input->post('stepno12');
			$nextstepno = (int)$this->input->post('stepno12') + 1;
			$prevstepno = (int)$this->input->post('stepno12') - 1;
			
			redirect(base_url().'form-filling/'.$nextstepno.'/'.$pgid); 

			// redirect(base_url().'pgreview/'.$pgid); 
	 			
		}
	
		$data['userdetails'] = $this->main_model->getuserbyid($userid);
		$data['getpglist'] = $this->main_model->getpglistdropdown();
		//$data['getpglist'] = $this->main_model->getpglistsearch();
		$data['getbankdetails'] = $this->main_model->getbankdetail($pgid);
		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
		$data['villages'] = $this->main_model->getlocations('village');
	
	
		/*if($this->input->post('pgname') == true){
			
			redirect(base_url().'form-filling/2');
			
		}*/
		$this->load->view('include/headerhomenew');
		$this->load->view('formfill',$data);
		$this->load->view('include/footerhomenew');
		
	}
	
	
	public function edit(){
		
		$id = $this->uri->segment(3);		
		$data['pgdetail'] = $this->main_model->getpgdetail($pgid);
			
		if($this->input->post('pathtype') == 'edit'){			
				
		$data = array(
			//'pgid'  => $pgid,
			'district'=> $this->input->post('district'),
			'block'=> $this->input->post('block'),
			'SHGcode'=> $this->input->post('shgcode'),
			'grampanchayat'=> $this->input->post('grampanchayat'),
			'village'=> implode(',',$this->input->post('villagename')),
			'dof'=> $this->input->post('dof'),
			'president_name'=> $this->input->post('president_name'),
			'secretary_name'=> $this->input->post('secretary_name'),
			'treasurer_name'=> $this->input->post('treasurer_name'),
			'pramoted_uder'=> $this->input->post('pramoted_uder')
		);
						
			
		$this->main_model->updatepg($data,$id);		
		
		redirect(base_url().'form-filling?msg=form-filling Added Successfully');
		
		}
		$this->load->view('include/headerhomenew');
	    $this->load->view('formfill',$data);
	    $this->load->view('include/footerhomenew');
			
	}
	
	public function verifierpanel(){
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		$vdata['vdatas'] = $this->Memberpanel_model->getvdatalist();
		
		if($userid == false){
				redirect(base_url());
			}
			
		$data['userid'] = $userid;
		
		$this->load->view('include/headerhomenew');
		$this->load->view('verifierpanel',$vdata);
		$this->load->view('include/footerhomenew');
	
	}
	
	public function rejectmember(){
		
		$memberid = $this->uri->segment(2);	
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];	
		$remarks = $this->input->post('remark');	
		
		$r = $this->Memberpanel_model->rejectmember($memberid,$userid,$remarks);
		
		if($this->input->post('pagetype') == 'verifier'){
			
		redirect(base_url().'verifierpanel?msg=Member has been Rejected!');
		}
		else{
			redirect(base_url().'approverpanel?msg=Member has been Rejected!');
		}
		
	}
	
	public function verifymember(){
		
		$docid = $this->uri->segment(2);
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		$v = $this->Memberpanel_model->veridfymember($docid,$userid);
		
		redirect(base_url().'verifierpanel?msg=Member Verified successfully!');
		
	}
	
	public function approverpanel(){
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		$adata['adatas'] = $this->Memberpanel_model->getadatalist();
	
		if($userid == false){
			redirect(base_url());
		}
		
		$adata['userid'] = $userid;
		
		$this->load->view('include/headerhomenew');
		$this->load->view('approvalpanel',$adata);
		$this->load->view('include/footerhomenew');
	
	}
	
	public function approvemember(){
		
		$memberid = $this->uri->segment(2);
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		$v = $this->Memberpanel_model->approvemember($memberid,$userid);
		
		redirect(base_url().'approverpanel?msg=Member Approved successfully!');
		
	}
	
	public function memberpanel(){
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
				
		if($userid == false){
			redirect(base_url());
		}
		
		$data['memberdetails'] = array();
		
		if($this->uri->segment(2) == true){
		
			$data['memberdetails'] = $this->Memberpanel_model->getmemberdetail($this->uri->segment(2));
		
		}
	
		$data['userid'] = $userid;
		$data['getpglist'] = $this->main_model->getpglist();
		$data['agrycommo'] = $this->main_model->getcommoditybycat('agriculture');
		$data['sericommo'] = $this->main_model->getcommoditybycat('sericulture');
		$data['horticommo'] = $this->main_model->getcommoditybycat('horticulture');
		$data['fisherycommo'] = $this->main_model->getcommoditybycat('fishery');
		$data['livestockcommo'] = $this->main_model->getcommoditybycat('livestock');
		
		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
		$data['villages'] = $this->main_model->getlocations('village');

		// echo '<pre/>';print_r($this->input->post()); //exit;
		if($this->input->post('submit')==true)
		{ 

    		if($this->input->post('stepno') == '1' && $this->input->post('isedit') == '0'){
		
				$data=array(
					'pgid'=> $this->input->post('pgid'),
					'name'=> $this->input->post('name'),
					'SHGname'=> $this->input->post('shgname'),
					'SHGcode'=> $this->input->post('shgcode'),
					'district'=> $this->input->post('districtname'),
					'block'=> $this->input->post('blockname'),
					'grampanchayat'=> $this->input->post('grampanchayatname'),
					'village'=> implode(',',$this->input->post('villagename')),
					'middlename'=> $this->input->post('middlename'),
					'education'=> $this->input->post('education'),
					'contactno'=> $this->input->post('contactno'),
					'doctype'=> $this->input->post('doctype'),
					'docidno'=> $this->input->post('docidno'),
					'membershiptype'=> $this->input->post('membershiptype'),
					'FPCmember' => $this->input->post('FPCmember'),
					'FPCname' => $this->input->post('FPCname')
				);
	
				$this->Memberpanel_model->insertmember($data);
				$mid = $this->db->insert_id();
				
				$vdata=array(
					'pgid'=> $this->input->post('pgid'),
					'mid'=>  $mid ,
					'district'=> $this->input->post('districtname'),
					'block'=> $this->input->post('blockname')
	 
				);
	 
				$this->Memberpanel_model->insertverfierdata($vdata);
				
				$currentstepno = $this->input->post('stepno');
				$nextstepno = (int)$this->input->post('stepno') + 1;
				$prevstepno = (int)$this->input->post('stepno') - 1;
	 
	 			redirect(base_url().'memberpanel/'.$mid.'/'.$nextstepno); 
	 
			} else if ($this->input->post('stepno') == '1' && $this->input->post('isedit') == '1'){
		
				$mid =  $this->input->post('memberid');
					
				$data=array(
					'pgid'=> $this->input->post('pgid'),
					'name'=> $this->input->post('name'),
					'SHGname'=> $this->input->post('shgname'),
					'SHGcode'=> $this->input->post('shgcode'),
					'district'=> $this->input->post('districtname'),
					'block'=> $this->input->post('blockname'),
					'grampanchayat'=> $this->input->post('grampanchayatname'),
					'village'=> implode(',',$this->input->post('villagename')),
					'middlename'=> $this->input->post('middlename'),
					'education'=> $this->input->post('education'),
					'contactno'=> $this->input->post('contactno'),
					'doctype'=> $this->input->post('doctype'),
					'docidno'=> $this->input->post('docidno'),
					'membershiptype'=> $this->input->post('membershiptype'),
					'FPCmember' => $this->input->post('FPCmember'),
					'FPCname' => $this->input->post('FPCname')
				);
	
	
				$this->Memberpanel_model->updatemember($data,$mid);
		  
		 
				$currentstepno = $this->input->post('stepno');
				$nextstepno = (int)$this->input->post('stepno') + 1;
				$prevstepno = (int)$this->input->post('stepno') - 1;
				
				redirect(base_url().'memberpanel/'.$mid.'/'.$nextstepno); 
	 
			} else if($this->input->post('stepno2') == '2'){
		
		  		$mid =  $this->input->post('memberid');
		 
		 
				$data=array(
			
					'landarea'=> $this->input->post('landarea'),
					'irrigatedland'=> $this->input->post('irrigatedland'),
					'nonirrigatedland'=> $this->input->post('nonirrigatedland'),
					'totalwaterbody'=> $this->input->post('totalwaterbody'),
					'grazingland'=> $this->input->post('grazingland')
				);
				$this->Memberpanel_model->updatemember($data,$mid);
		  
		 
				$currentstepno = $this->input->post('stepno2');
				$nextstepno = (int)$this->input->post('stepno2') + 1;
				$prevstepno = (int)$this->input->post('stepno2') - 1;
				
				redirect(base_url().'memberpanel/'.$mid.'/'.$nextstepno); 
	 
			} else if($this->input->post('stepno3') == '3'){
		
		  		$mid =  $this->input->post('memberid');
		 
		 
				$data=array(
			
					'agriculture1'=> $this->input->post('agriculture1'),
					'agriculture2'=> $this->input->post('agriculture2'),
					'agriculture3'=> $this->input->post('agriculture3'),
					'agriculture4'=> $this->input->post('agriculture4'),
					'agriculture5'=> $this->input->post('agriculture5'),
					'horticulture1'=> $this->input->post('horticulture1'),
					'horticulture2'=> $this->input->post('horticulture2'),
					'horticulture3'=> $this->input->post('horticulture3'),
					'horticulture4'=> $this->input->post('horticulture4'),
					'horticulture5'=> $this->input->post('horticulture5')
				);
				$this->Memberpanel_model->updatemember($data,$mid);
		  
		 
				$currentstepno = $this->input->post('stepno3');
				$nextstepno = (int)$this->input->post('stepno3') + 1;
				$prevstepno = (int)$this->input->post('stepno3') - 1;
				
				redirect(base_url().'memberpanel/'.$mid.'/'.$nextstepno); 
	 
			} else if($this->input->post('stepno4') == '4'){
		
		  		$mid =  $this->input->post('memberid');
		 
		 
				$data=array(
			
					'livestock1'=> $this->input->post('livestock1'),
					'livestock2'=> $this->input->post('livestock2'),
					'livestock3'=> $this->input->post('livestock3'),
					'livestock4'=> $this->input->post('livestock4'),
					'livestock5'=> $this->input->post('livestock5'),
					'fishery'=> implode(',',$this->input->post('fishery')),
					'sericulture'=> implode(',',$this->input->post('sericulture')),
					'others'=> $this->input->post('others')
				);
				$this->Memberpanel_model->updatemember($data,$mid);
		  
		 
				$currentstepno = $this->input->post('stepno4');
				$nextstepno = (int)$this->input->post('stepno4') + 1;
				$prevstepno = (int)$this->input->post('stepno4') - 1;
				
				// redirect(base_url().'memberpanel/'.$mid.'/'.$nextstepno); 
				redirect(base_url().'members/memberslist?msg=Memberpanel Details submitted Successfully ! ');
	 
			} else if($this->input->post('stepno5') == '5'){
		
				$mid =  $this->input->post('memberid');
				
				
				$data=array(
			
					'qty'=> $this->input->post('qty'),
					'commodity'=> $this->input->post('commodity'),
					'price'=> $this->input->post('price'),
					'saleamount'=> $this->input->post('saleamount'),
					'paymentrecieved'=> $this->input->post('paymentrecieved'),
					'paymentdue'=> $this->input->post('paymentdue')
				);
				$this->Memberpanel_model->updatemember($data,$mid);
				
				
				$currentstepno = $this->input->post('stepno5');
				$nextstepno = (int)$this->input->post('stepno5') + 1;
				$prevstepno = (int)$this->input->post('stepno5') - 1;
				
				redirect(base_url().'members/memberslist?msg=Memberpanel Details submitted Successfully ! ');
			
			}
	 	}
	 
	
		$this->load->view('include/headerhomenew');
		$this->load->view('memberpanel',$data);
		$this->load->view('include/footerhomenew');
	
	}
	
	public function memberdelete(){
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		
		if($userid == false){
			redirect(base_url());
		}
		
		
	   $id = $this->uri->segment(4);
	   $this->Memberpanel_model->deletemem($id);		
	   redirect(base_url().'members/memberslist?msg=Memberpanel Deleted Successfully');	
	
	}
	
	public function uploadrecords(){
		
	$userdata = $this->session->userdata('admin_session');
	$userid = $userdata['id'];
	
	if($userid == false){
		redirect(base_url());
	}
		
		
	$data['msg'] = ''; 
	$target_dir = "uploads/";
	
	if($this->input->post('submit') == true){
	
	
	/***** UPload Blocks ****/
	if($_FILES['uploadblocks']['name'] == true){
	
		$target_file = $target_dir . basename($_FILES["uploadblocks"]["name"]); 
		$uploadOk = 1;
	
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
		// Allow certain file formats
		if($imageFileType != "csv") {
		  $data['msg'] = "Sorry, only csv files are allowed.";
		  $uploadOk = 0;
		}
				
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  $data['msg'] =  "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["uploadblocks"]["tmp_name"], $target_file)) {
			$data['msg'] = "The file ". htmlspecialchars( basename( $_FILES["uploadblocks"]["name"])). " has been uploaded.";
			
				$uploadblocks = array();
				$file = fopen($target_file,"r");

				while(! feof($file))
				  {
				//  print_r(fgetcsv($file));
				 // $data = explode(',',fgetcsv($file));
				  $uploadblocks[] = fgetcsv($file);
				  }

				fclose($file);
				
				//echo '<pre/>'; print_r($uploadblocks);
				$resuploadblocks = $this->main_model->uploadblocks($uploadblocks);
				echo $resuploadblocks;
				
				if($resuploadblocks == true){
					
					$data['msg'] = "Blocks Uploaded Successfully !";
				}
				else{
					$data['msg'] = "Sorry, there was an error adding your file.";
				}
		
		  } else {
			$data['msg'] = "Sorry, there was an error uploading your file.";
		  }
		}
		//print_r($_FILES['uploadblocks']['name']);
	
	}
	
	/***Upload PG Profile ***/
	if($_FILES['uploadpg']['name'] == true){
	
		$target_file = $target_dir . basename($_FILES["uploadpg"]["name"]); 
		$uploadOk = 1;
	
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
		// Allow certain file formats
		if($imageFileType != "csv") {
		  $data['msg'] = "Sorry, only csv files are allowed.";
		  $uploadOk = 0;
		}
				
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  $data['msg'] =  "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["uploadpg"]["tmp_name"], $target_file)) {
			$data['msg'] = "The file ". htmlspecialchars( basename( $_FILES["uploadpg"]["name"])). " has been uploaded.";
			
				$uploadpg = array();
				$file = fopen($target_file,"r");

				while(! feof($file))
				  {
				//  print_r(fgetcsv($file));
				 // $data = explode(',',fgetcsv($file));
				  $uploadpg[] = fgetcsv($file);
				  }

				fclose($file);
				
				//echo '<pre/>'; print_r($uploadpg); exit;
				$resuploadblocks = $this->main_model->uploadpgprofile($uploadpg);
				//echo $resuploadblocks;
				
				if($resuploadblocks == true){
					
					$data['msg'] = "PG Profile Uploaded Successfully !";
				}
				else{
					$data['msg'] = "Sorry, there was an error adding your file.";
				}
		
		  } else {
			$data['msg'] = "Sorry, there was an error uploading your file.";
		  }
		}
		//print_r($_FILES['uploadblocks']['name']);
	
	}
	
		/***Upload PG Profile ***/
	if($_FILES['uploadmember']['name'] == true){
	
		$target_file = $target_dir . basename($_FILES["uploadmember"]["name"]); 
		$uploadOk = 1;
	
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
		// Allow certain file formats
		if($imageFileType != "csv") {
		  $data['msg'] = "Sorry, only csv files are allowed.";
		  $uploadOk = 0;
		}
				
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  $data['msg'] =  "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["uploadmember"]["tmp_name"], $target_file)) {
			$data['msg'] = "The file ". htmlspecialchars( basename( $_FILES["uploadmember"]["name"])). " has been uploaded.";
			
				$uploadmember = array();
				$file = fopen($target_file,"r");

				while(! feof($file))
				  {
				//  print_r(fgetcsv($file));
				 // $data = explode(',',fgetcsv($file));
				  $uploadmember[] = fgetcsv($file);
				  }

				fclose($file);
				
				//echo '<pre/>'; print_r($uploadmember); exit;
				$resuploadmembers = $this->main_model->uploadmembers($uploadmember);
				//echo $resuploadmembers; exit;
				
				if($resuploadmembers == true){
					
					$data['msg'] = "Members Uploaded Successfully !";
				}
				else{
					$data['msg'] = "Sorry, there was an error adding your file.";
				}
		
		  } else {
			$data['msg'] = "Sorry, there was an error uploading your file.";
		  }
		}
		
	
	}
	
	}
	
	$data['userid'] = $userid;
	$this->load->view('include/headerhomenew');
	$this->load->view('uploadrecords',$data);
	$this->load->view('include/footerhomenew');		
	}
	
	public function searchcust()
	{
		
	 $this->main_model->getcustajaxdetail($_POST['query']);
	
	}
	
	
	

	
}
