<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();      
        $this->load->model('main_model');
		$this->load->model('Memberpanel_model');
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
		$data['districts'] = $this->main_model->getlocations('district');
		$data['blocks'] = $this->main_model->getlocations('block');
		$data['districts1'] = $this->main_model->getlocations('district');
		$data['commoditynamelists'] = $this->main_model->totalcommoditynamewithfilter();
		
		
		$this->load->view('include/headerhomenew');
		$this->load->view('fronthome/buyerdetails',$data);
		$this->load->view('include/footerhomenew');
		
	}
	
	public function pgreview(){
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		$pgid = $this->uri->segment(2);
		echo $pgid;
		
		if($pgid == true){
			
			 $data['pgdetail'] = $this->main_model->getpgdetail($pgid);
			 $data['getbankdetails'] = $this->main_model->getbankdetail($pgid);
			$data['districts'] = $this->main_model->getlocations('district');
			$data['blocks'] = $this->main_model->getlocations('block');
			$data['grampanchayats'] = $this->main_model->getlocations('grampanchayat');
			$data['villages'] = $this->main_model->getlocations('village');
		}
		
		$this->load->view('include/headerhomenew');
		$this->load->view('fronthome/pgreview',$data);
		$this->load->view('include/footerhomenew');
		
	}
	
	public function manageadmin(){
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
			
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
	
	 function fetch_block()
		 {
			 
		  //$data['blocks'] = $this->main_model->getlocations('block');
		  if($this->input->post('districtname'))
		  {
		   echo $this->main_model->getblocks($this->input->post('districtname'));
		   //echo $this->db->last_query();
		  }
		  
		 }
		 
   public function fetchgrampachayat()
		 {
			 
		  //$data['blocks'] = $this->main_model->getlocations('block');
		  if($this->input->post('blocknames'))
		  {
		  echo $this->main_model->getgrampanchayat($this->input->post('blocknames'));
		   //echo $this->db->last_query();
		  }
		  
		 }
		
	
	public function formfill(){
		
		$userdata = $this->session->userdata('admin_session');
		$userid = $userdata['id'];
		
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
	
	
	if($this->input->get('editpg') ==true)
	{
		
		$pgid = $this->input->get('editpg');
		
		$sdata = array(
        'pgid'  => $pgid
		);

		
		$this->session->set_userdata($sdata);
	    $data['pgdetail'] = $this->main_model->getpgdetail($pgid);
	}
	
	
	
	$data['userdetails'] = $this->main_model->getuserbyid($userid);
	$data['getpglist'] = $this->main_model->getpglist();
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
	
	public function verifierpanel(){
		
	$userdata = $this->session->userdata('admin_session');
	$userid = $userdata['id'];
	
	$data['userid'] = $userid;
	
	$this->load->view('include/headerhomenew');
	$this->load->view('verifierpanel',$data);
	$this->load->view('include/footerhomenew');
	
	}
	
	
	public function approverpanel(){
		
	$userdata = $this->session->userdata('admin_session');
	$userid = $userdata['id'];
	
	$data['userid'] = $userid;
	
	$this->load->view('include/headerhomenew');
	$this->load->view('approvalpanel',$data);
	$this->load->view('include/footerhomenew');
	
	}
	
	public function memberpanel(){
		
		
		
	$userdata = $this->session->userdata('admin_session');
	$userid = $userdata['id'];
	
	$data['userid'] = $userid;
	$data['getpglist'] = $this->main_model->getpglist();


	if($this->input->post('submit')==true)
	{ 

	$data=array(
	'pgid'=> $this->input->post('pgid'),
	'name'=> $this->input->post('name'),
	'SHGname'=> $this->input->post('shgname'),
	'SHGcode'=> $this->input->post('shgcode'),
	'district'=> $this->input->post('district'),
	'block'=> $this->input->post('block'),
	'grampanchayat'=> $this->input->post('grampanchayat'),
	'village'=> $this->input->post('village'),
	'middlename'=> $this->input->post('middlename'),
	'education'=> $this->input->post('education'),
	'contactno'=> $this->input->post('contactno'),
	'aadharno'=> $this->input->post('adharno'),
	'membershiptype'=> $this->input->post('membershiptype')
	);
	
	 $this->Memberpanel_model->insertmember($data);

	
	}
	
	
	$this->load->view('include/headerhomenew');
	$this->load->view('memberpanel',$data);
	$this->load->view('include/footerhomenew');
	
	}
	
	public function uploadrecords(){
		
	$userdata = $this->session->userdata('admin_session');
	$userid = $userdata['id'];
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
