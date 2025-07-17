<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Tcbp extends CI_Controller {

    function __construct()
    {
        parent::__construct();      
        $this->load->model('main_model');
		$this->load->library('pagination');
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		
		if($userid == false){
			redirect(base_url());
		}
	
    }
	
	public function index()
	{		
     //echo 'hi';exit;	
	$tcbptype = 'goi';
	
	if($this->input->post('searchentry') ==true)
	{
		$data['tcbps'] = $this->main_model->gettcbpentries($this->input->post('searchentry'),$tcbptype);
	}
	else
	{
	$category = '';	
	
	$tcpcentriescount = $this->main_model->tcpcpageentriescount($category);   
	$data['total_rows'] = $tcpcentriescount;
	$currentpage = ($this->uri->segment(2)== false )?'0':$this->uri->segment(2); 
	$config['base_url'] = base_url().'task-list/';
	$config['total_rows'] = $tcpcentriescount;
	$config['per_page'] = 20; 
	$offset = $currentpage ;
	$this->pagination->initialize($config);
	
     $data['tcbps'] = $this->main_model->tcpcpageentries($config['per_page'],$offset,$category); 
	 //echo $this->db->last_query();
	}
    
	$data['vcount'] = $this->main_model->gettotalverifycount();
	$data['acount'] = $this->main_model->gettotalapprovedcount();
		
	$this->load->view('include/headerhomenew');
	//$this->load->view('include/leftside');
	$this->load->view('tasklist/tcbp',$data);
	$this->load->view('include/footerhomenew');
	
	}
	
	
	public function getdocumentsbytasks(){
		
		//echo  'It works '.$this->input->post('taskid');
		 $uploaddocs = $this->main_model->getuploadeddocuments($this->input->post('taskid')); 
		 //print_r($uploaddocs);
		  echo '<div  class="col-md-12"><div class="row"><div class="col-md-3"><h6>Uploaded By</h6></div><div class="col-md-3"><h6>Document</h6></div><div class="col-md-2"><h6>Remarks</h6></div><div class="col-md-2"><h6>Date/Time</h6></div><div class="col-md-1"><h6>Action</h6></div><div class="col-md-1"><h6>Status</h6></div></div></div>';
		 foreach($uploaddocs as $uploaddoc){ ?>
			 
			<div  class="col-md-12"><div class="row" style="border-bottom: 1px solid silver;margin-bottom: 2px;"><div class="col-md-3"><?php echo ucfirst($uploaddoc['name']); ?><br/><a href="mailto:<?php echo $uploaddoc['email']; ?>"><?php echo  $uploaddoc['email']; ?></a><br/><a href="callto:<?php echo  $uploaddoc['mobile']; ?>"><?php echo $uploaddoc['mobile']; ?></a></div><div class="col-md-3"><a href="<?php echo base_url().'uploads/documents/'.$uploaddoc['document']; ?>"><?php echo  $uploaddoc['document']; ?></a></div><div class="col-md-2" style="word-wrap: break-word;"><p><?php echo $uploaddoc['remarks']; ?></p></div><div class="col-md-2"><?php echo $uploaddoc['lastupdated']; ?></div><div class="col-md-1"><?php  if($this->session->userdata('admin_session')['user_group_id'] == '3' || $this->session->userdata('admin_session')['id'] == $uploaddoc['userid']){ ?><h6><a href="javascript:void(0)" title="Delete" class="btn-action btn-sm btn-danger" onclick="deldoc('<?php echo $uploaddoc['docid']; ?>')"><i class="fa fa-times-circle"></i></a></h6><?php   } ?></div><div class="col-md-1"><h6><?php if($uploaddoc['isapproved'] == true){ echo '<b style="color:green;">Approved</b>'; } else if($uploaddoc['isrejected'] == true){  echo '<b style="color:red;">Rejected</b>'; } else if($uploaddoc['isverified'] == true){ echo '<b style="color:orange;">Verified</b>'; }  else { echo '<b style="color:#000;">Pending</b>'; } ?></h6></div></div></div>
		<?php  }
	}
	
	public function rejectdoc(){
		
		$docid = $this->uri->segment(3);	
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];	
		$remarks = $this->input->post('remark');	
		
		$r = $this->main_model->rejectdoc($docid,$userid,$remarks);
		
		if($this->input->post('pagetype') == 'verifier'){
			
		redirect(base_url().'verifier-manager?msg=Document has been Rejected!');
		}
		else{
			redirect(base_url().'approval-manager?msg=Document has been Rejected!');
		}
		
	}
	
	public function verifydoc(){
		
		$docid = $this->uri->segment(3);
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		$v = $this->main_model->veridfydoc($docid,$userid);
		
		redirect(base_url().'verifier-manager?msg=Document Verify successfully!');
		
	}
	
	public function approvedoc(){
		
		$docid = $this->uri->segment(3);
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		$v = $this->main_model->approvedoc($docid,$userid);
		
		redirect(base_url().'approval-manager?msg=Document Approved successfully!');
		
	}
	
	
	
	public function taskmanager(){
		
		//echo 'hii'; exit;
		
		$tcbptype = 'goi';
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		//print_r($this->input->post('taskname'));
		 $data['parenttasks'] = $this->main_model->allparenttask(); 
		  $data['msg'] = '';
		if($this->input->post('taskname') != ''){
		
		$tdata=array('tcbptype'=>$tcbptype,
		'taskname'=>trim($this->input->post('taskname')),
		'parenttask'=>trim($this->input->post('ptask')),		
		'totalparticipants'=>trim($this->input->post('totalparticipants')),		
		'userid'=>trim($userid),
		'status'=>'1'				
		);
		
		
		$this->main_model->addtask($tdata);
		$id = $this->db->insert_id();
		
		if($this->input->post('ptask') == '--Parent Task--'){
			
			$id = $this->db->insert_id();
			$this->main_model->updateparenttaskid($id);
			
		}
		 $data['msg'] = 'Task added successfully';
		}
				
				
						
	if($this->input->post('searchentry') ==true)
	{
		$data['tcbps'] = $this->main_model->gettcbpentries($this->input->post('searchentry'),$tcbptype);
	}
	else
	{
	$category = '';	
	
	$tcpcentriescount = $this->main_model->tcpcpageentriescount($category);   
	$data['total_rows'] = $tcpcentriescount;
	$currentpage = ($this->uri->segment(2)== false )?'0':$this->uri->segment(2); 
	$config['base_url'] = base_url().'task-list/';
	$config['total_rows'] = $tcpcentriescount;
	$config['per_page'] = 2000; 
	$offset = $currentpage ;
	$this->pagination->initialize($config);
	
     $data['tcbps'] = $this->main_model->tcpcpageentriesall($config['per_page'],$offset,$category); 
	 //echo $this->db->last_query();
	}
	
	$data['vcount'] = $this->main_model->gettotalverifycount();
		$data['acount'] = $this->main_model->gettotalapprovedcount();
		$this->load->view('include/headerhomenew');
		$this->load->view('tasklist/taskmanager',$data);
		$this->load->view('include/footerhomenew');
		
	}
	
	
	public function statelist(){
		
		$data= array();
		
		$this->load->view('include/headerhomenew');
		$this->load->view('tasklist/statelist',$data);
		$this->load->view('include/footerhomenew');
		
	}
	
	
	public function add()
	{	
   	$userdata = $this->session->userdata('admin_session');
	$userid = $userdata['id'];
		//print_r($this->input->post()); exit;
	if($this->input->post('submitdata')==true)
	{ 

	$data=array(
	'taskid'=>trim(addslashes($this->input->post('utaskid'))),	
	'userid'=>$userid,
	'remarks'=>trim(addslashes($this->input->post('remark'))),
	'document'=> $_FILES['docname']['name']
	
	);
	
	//echo $_FILES['docname']['name'];  exit;
	 if(!empty($_FILES['docname']['name']))
             {
				
                $setpathtoupload = './uploads/documents/';
                $upload_name = "docname";
                $config['upload_path'] = './uploads/documents';  
                $config["allowed_types"] ="*";
                $config['source_image'] = '';  
               // $config['width'] = 1920;  
                //$config['height'] = 1080;  
                $this->load->library('upload', $config);  
                $this->upload->initialize($config);
                $errormsg = 'Task List Added Successfully';
				
                if($this->upload->do_upload($upload_name)){
                   // echo $_FILES['docname']['name'];  exit;
				$dataa = $this->upload->data();
				$data=array(
					'taskid'=>trim(addslashes($this->input->post('utaskid'))),	
					'userid'=>$userid,
					'remarks'=>trim(addslashes($this->input->post('remark'))),
					'document'=> $dataa['orig_name']
					
					);				
				
				$this->main_model->insert_taskdoc($data);
				redirect(base_url().'task-list?msg=Document uploaded successfully');
				}
                else
                {
                    echo $errormsg = $this->upload->display_errors(); 
                     redirect(base_url().'task-manager?msg=Could not upload document');
                }
			 }
	
	
	
	 redirect(base_url().'task-manager');
	 
	}
	
	/*$this->load->view('include/headerhomenew');
	//$this->load->view('include/leftside');
	$this->load->view('tasklist/addtcbp');
	$this->load->view('include/footerhomenew');*/
	
	
	}
	
	function edit(){
		
		$id = $this->uri->segment(3);		
		$data['ddetail'] = $this->main_model->getcertbyid($id);
		
		if($this->input->post('pathtype') == 'edit'){
		
			if($this->input->post('status') == true){
				
				$status = 'valid';
			}
			else{
				$status = 'invalid';
			}
			
			
			$data=array('cert_name'=>trim($this->input->post('cert_name')),
				'cert_number'=>trim($this->input->post('cert_number')),
				'country'=>trim($this->input->post('country')),
				'address'=>trim($this->input->post('address')),
				'scope'=>trim($this->input->post('scope')),
				'standard'=>trim($this->input->post('standard')),
				'cab_name'=>trim($this->input->post('cab_name')),
				'status'=>$status				
				);
						
			
		$this->main_model->updatecert($data,$id);		
		
		redirect(base_url().'tcbp?msg=tcbp Added Successfully');
		
		}
		$this->load->view('include/headerhomenew');
	    //$this->load->view('include/leftside');
	    $this->load->view('tasklist/addtcbp',$data);
	    $this->load->view('include/footerhomenew');
			
	   }
	   
	function deletedoc(){
	
	   $id = $this->uri->segment(3);
	   $this->main_model->deletedoc($id);		
	   redirect(base_url().'task-list?msg=Document Deleted Successfully');	
	
	}
	
	function verifierlist(){
		
		
		$data['cdocs'] = $this->main_model->getdocforverifier(0,250);
		$data['vcount'] = $this->main_model->gettotalverifycount();
		$data['acount'] = $this->main_model->gettotalapprovedcount();
		$this->load->view('include/headerhomenew');
	    //$this->load->view('include/leftside');
	    $this->load->view('tasklist/verifierlist',$data);
	    $this->load->view('include/footerhomenew');
	}
	
	
	function approverlist(){
		
		
		$data['cdocs'] = $this->main_model->getdocforapproval(0,250);
		$data['vcount'] = $this->main_model->gettotalverifycount();
		$data['acount'] = $this->main_model->gettotalapprovedcount();
		$this->load->view('include/headerhomenew');
	    //$this->load->view('include/leftside');
	    $this->load->view('tasklist/approverlist',$data);
	    $this->load->view('include/footerhomenew');
	}
	
	
}