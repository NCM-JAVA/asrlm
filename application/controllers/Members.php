<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

    function __construct()
    {
        parent::__construct();      
        $this->load->model('main_model');
		$this->load->model('memberpanel_model');
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		
		if($userid == false){
			redirect(base_url());
		}
		
    }
	
	public function memberslist()
	{
		
		if($this->input->post('searchentry') ==true)
		{
			$data['members'] = $this->memberpanel_model->getmemberslistsearch($this->input->post('searchentry'));
		}
		else
		{
		$search = '';	
		
		$memberscount = $this->memberpanel_model->getmemberslistcount($search);   		
		$currentpage = ($this->uri->segment(3)== false )?'0':$this->uri->segment(3); 		
		$config['base_url'] = base_url().'members/memberslist/';
		$config['total_rows'] = $memberscount;
		$config['per_page'] = 25; 
		// Bootstrap 4, work very fine.
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$offset = $currentpage ;
		$this->pagination->initialize($config);
		
		
		 $data['members'] = $this->memberpanel_model->getmemberslist($config['per_page'],$offset,$search); 
		 //echo $this->db->last_query();
		}
		
		
	    $this->load->view('include/headerhomenew');
		$this->load->view('members/memberslist',$data);
		$this->load->view('include/footerhomenew');	
	
	}
	
   public function memberdashboard(){
	   
		$data['buyerdetail'] = $this->main_model->getbuyerdetails();
		
	    $this->load->view('include/headerhomenew');
		$this->load->view('members/memberdashboard',$data);
		$this->load->view('include/footerhomenew');	
	
	}
	
	public function reviewmember(){
		
		$data['memberdetail'] = $this->memberpanel_model->getmemberdetail($this->uri->segment(2));
		
		$this->load->view('include/headerhomenew');
		$this->load->view('members/member_review',$data);
		$this->load->view('include/footerhomenew');	
			
		
	}
	
	
}