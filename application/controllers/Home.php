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
			$cmncnt = $this->main_model->getcommoncount($ca);
			
			$totalcommo[] = array('name' => $ca, 'count'=>$cmncnt);
		}
		
		$keys = array_column($totalcommo, 'count');
		array_multisort($keys, SORT_DESC, $totalcommo);
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
	
}