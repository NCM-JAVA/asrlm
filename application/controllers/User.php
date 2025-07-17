<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
		$this->load->library('pagination');

		$userdata = $this->session->userdata('admin_session');
		$userid = isset($userdata['id']) ? $userdata['id'] : false;

		$allowed_routes = ['register', 'get-dist-blocks']; // ✅ Add test-route here
		$current_route = $this->uri->segment(1);

		if ($userid == false && !in_array($current_route, $allowed_routes)) {
			redirect(base_url());
		}
	}

	public function index()
	{
		if ($this->input->post('searchentry') == true) {
			$data['users'] = $this->main_model->getuserentries($this->input->post('searchentry'));
		} else {
			$userentriescount = $this->main_model->userpageentriescount();

			$currentpage = ($this->uri->segment(2) == false) ? '0' : $this->uri->segment(2);
			$config['base_url'] = base_url() . 'user/';
			$config['total_rows'] = $userentriescount;
			$config['per_page'] = 20;
			$offset = $currentpage;
			$this->pagination->initialize($config);

			$data['users'] = $this->main_model->userpageentries($config['per_page'], $offset);
			//echo $this->db->last_query();
		}

		//$data['vcount'] = $this->main_model->gettotalverifycount();
		//$data['acount'] = $this->main_model->gettotalapprovedcount();
		$this->load->view('include/headerhomenew');
		//$this->load->view('include/leftside');
		$this->load->view('user/user', $data);
		$this->load->view('include/footerhomenew');
	}


	public function userprofile()
	{

		$userdata = $this->session->userdata('admin_session');
		// print_r($userdata['user_group_id']);
		// die();
		$userid = $userdata['id'];

		//echo $this->uri->segment(2);
		if ($this->uri->segment(2) == true) {

			$userid = $this->uri->segment(2);

		}

		if ($this->input->post('submit') == true) {

			$pass = $this->input->post('password');
			$salt = uniqid(mt_rand(), true);
			$password = sha1($pass . $salt);
			$sha_key = $salt;
			$password = $password;
			if ($pass == true) {
				$data = array(
					'name' => $this->input->post('fullname'),
					'password' => $password,
					'sha_key' => $sha_key,
					'email' => $this->input->post('email'),
					'mobile' => $this->input->post('mobile'),
					'phone' => $this->input->post('mobile'),
					'email' => $this->input->post('email'),
					'state' => $this->input->post('usrstate'),
					'district' => $this->input->post('dist'),
					'block' => $this->input->post('block'),
					'branch' => $this->input->post('branch'),
					'user_group_id' => $this->input->post('usrrole'),
					//'status'=>$status
				);
			} else {
				$data = array(
					'name' => $this->input->post('fullname'),
					'email' => $this->input->post('email'),
					'mobile' => $this->input->post('mobile'),
					'phone' => $this->input->post('mobile'),
					'email' => $this->input->post('email'),
					'state' => $this->input->post('usrstate'),
					'district' => $this->input->post('dist'),
					'block' => $this->input->post('block'),
					'branch' => $this->input->post('branch'),
					'user_group_id' => $this->input->post('usrrole'),
					// 'status'=>$status
				);
			}

			$user_group = $this->user_model->getuser_type($this->input->post('usrrole'));
			$group_type = $user_group[0]['group_type'];
			$newdata = array(
				'name' => $userdata['name'],
				'id' => $userdata['id'],
				'useremail' => $userdata['email'],
				'group_type' => $group_type,
				// 'user_group_id' => $this->input->post('usrrole'),
				'user_group_id' => $userdata['user_group_id'],
				'profile_pic' => $userdata['profile_img'],
				'profile_img' => $udata[0]['profile_img'],
				'active' => TRUE
			);
			$this->session->set_userdata('admin_session', $newdata);
			// print_r($newdata);
			// die();

			$this->main_model->updateuser($data, $userid);
			if ($this->input->post('isupdate') == true) {
				redirect(base_url() . 'user-profile/' . $this->input->post('isupdate') . '?msg=User Updated Successfully');
			} else {
				redirect(base_url() . 'user-profile?msg=User Updated Successfully');
			}

		}

		$district = $this->main_model->get_district_data();
		$data['districts'] = array_column($district, 'dist');
		$data['userdetails'] = $this->main_model->getuserbyid($userid);
		$this->load->view('include/headerhomenew');
		$this->load->view('user/userprofile', $data);
		$this->load->view('include/footerhomenew');

	}

	public function changepassword()
	{

		$data = array();

		$this->load->view('include/headerhomenew');
		$this->load->view('user/changepassword', $data);
		$this->load->view('include/footerhomenew');

	}

	public function register()
	{
		// error_reporting(E_ALL);
		// ini_set('display_errors', 1);

		$district = $this->main_model->get_district_data();
		$datas['districts'] = array_column($district, 'dist');

		// // Get selected district
		// $selected_district = $this->input->post('dist');

		// if (!empty($selected_district)) {
		//     // Get blocks for selected district
		//     $this->db->select('DISTINCT(block)', false);
		//     $this->db->from('district');
		//     $this->db->where('dist', $selected_district);
		//     $query = $this->db->get();
		//     $datas['blocks'] = array_column($query->result_array(), 'block');
		// } else {
		//     $datas['blocks'] = []; // Empty block list if no district selected
		// }


		if ($this->input->post('submit') == true) {

			//echo '<pre/>';print_r($_POST);exit;
			$isexists = $this->main_model->isemailexists($this->input->post('email'));
			//	echo '<pre/>';print_r($isexists);exit;
			if ($isexists <= 0) {

				if ($this->input->post('status') == true) {

					$status = '1';
				} else {
					$status = '1';
				}

				$pass = $this->input->post('password');
				$salt = uniqid(mt_rand(), true);
				$password = sha1($pass . $salt);
				$sha_key = $salt;
				$password = $password;

				$data = array(
					'name' => $this->input->post('fullname'),
					'password' => $password,
					'sha_key' => $sha_key,
					'email' => $this->input->post('email'),
					'mobile' => $this->input->post('mobile'),
					'phone' => $this->input->post('mobile'),
					'state' => $this->input->post('usrstate'),
					'organization' => $this->input->post('organization'),
					'user_group_id' => $this->input->post('usrrole'),
					'status' => $status,
					'district' => $this->input->post('dist'),
					'block' => $this->input->post('block')
				);

				$this->main_model->insert_dataa($data);
				redirect(base_url() . '?msg=User Registred Successfully');
			} else {
				redirect(base_url() . 'register?msg=Email Id already exists');
			}
		}

		$this->load->view('include/headerhomenew');
		//$this->load->view('include/leftside');
		$this->load->view('user/register', $datas);
		$this->load->view('include/footerhomenew');

	}

	// Fetch blocks based on selected district
	public function getdistblocks()
	{

		$district = $this->input->post('district');

		if (empty($district)) {
			echo json_encode(['error' => 'District is required']);
			return;
		}

		if (!$this->main_model) {
			echo json_encode(['error' => 'Model not loaded']);
			return;
		}

		$blocks = $this->main_model->get_blocks_by_district($district);

		if (empty($blocks)) {
			echo json_encode(['error' => 'No blocks found']);
		} else {
			echo json_encode($blocks);
		}
	}




	public function add()
	{

		if ($this->input->post('submit') == true) {
			if ($this->input->post('status') == true) {

				$status = '1';
			} else {
				$status = '0';
			}

			$pass = $this->input->post('password');
			$salt = uniqid(mt_rand(), true);
			$password = sha1($pass . $salt);
			$sha_key = $salt;
			$password = $password;

			$data = array(
				'name' => $this->input->post('name'),
				'password' => $password,
				'sha_key' => $sha_key,
				'emp_code' => $this->input->post('emp_code'),
				'city' => $this->input->post('city'),
				'zipcode' => $this->input->post('zipcode'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'state' => $this->input->post('state'),
				'gender' => $this->input->post('gender'),
				'user_group_id' => '4',
				'status' => $status
			);

			$this->main_model->insert_dataa($data);
			redirect(base_url() . '/user?msg=user entry Added Successfully');
		}
		$this->load->view('include/headerhome');
		$this->load->view('include/leftside');
		$this->load->view('user/adduser');
		$this->load->view('include/footerhome');

	}


	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['user'] = $this->main_model->getuserbyid($id);
		if ($this->input->post('pathtype') == 'edit') {
			$pass = $this->input->post('newpassword');
			$salt = uniqid(mt_rand(), true);
			$password = sha1($pass . $salt);
			$sha_key = $salt;
			$password = $password;

			if ($this->input->post('status') == true) {
				$status = '1';
			} else {
				$status = '0';
			}


			if ($this->input->post('cngpassword') == true) {


				$data = array(
					'name' => $this->input->post('name'),
					'password' => $password,
					'sha_key' => $sha_key,
					'emp_code' => $this->input->post('emp_code'),
					'city' => $this->input->post('city'),
					'zipcode' => $this->input->post('zipcode'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'address' => $this->input->post('address'),
					'state' => $this->input->post('state'),
					'gender' => $this->input->post('gender'),
					'status' => $status
				);
			} else {

				$data = array(
					'name' => $this->input->post('name'),
					'emp_code' => $this->input->post('emp_code'),
					'city' => $this->input->post('city'),
					'zipcode' => $this->input->post('zipcode'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'address' => $this->input->post('address'),
					'state' => $this->input->post('state'),
					'gender' => $this->input->post('gender'),
					'status' => $status
				);

			}
			$id = $this->uri->segment(3);
			$this->main_model->updateuser($data, $id);

			redirect(base_url() . 'index.php/user?msg= User Entry Updated successfully');

		}
		$this->load->view('include/headerhome');
		$this->load->view('include/leftside');
		$this->load->view('user/adduser', $data);
		$this->load->view('include/footerhome');
	}

	public function delete()
	{

		$id = $this->uri->segment(3);
		$this->main_model->userdelete($id);

		//echo $this->db->last_query();	
		redirect(base_url() . 'index.php/user?msg= User Entry Deleted Successfully');



	}



}

