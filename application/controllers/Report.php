<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

    function __construct()
    {

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

    public function reports()
    {
        $data['grampanchayat'] = $this->pgpanel_model->get_grampanchayat();
        $data['producergroup'] = $this->pgpanel_model->get_producergroup();
        $district = $this->main_model->get_district_data();
        $data['districts'] = array_column($district, 'dist');
        $data['categories'] = $this->pgpanel_model->getcategories();
        $data['clf'] = $this->pgpanel_model->getclfname();

        
        if($this->uri->segment(2) == '1'){
            // error_reporting(E_ALL);
			// ini_set('display_errors', 1);
            if($this->input->post('filters') == true && $this->input->post('CommoditiesDetailsReport') == true && $this->input->get('tltype') == 'commodities'){
                $filters = $this->input->post();
                $data['results'] = $this->pgpanel_model->get_filtered_data($filters);
            }else{
                $data['results'] = $this->pgpanel_model->get_all_data();
            }

            if ($this->input->post('filters') == true && $this->input->post('ValueAdditionDetails') == true && $this->input->get('tltype') == 'valueaddition') {
                $filters = $this->input->post();
                $data['value_addition_details'] = $this->pgpanel_model->get_filtered_data($filters);
            }else{
                $data['value_addition_details'] = $this->pgpanel_model->get_all_data();
            }

            if ($this->input->post('filters') == true && $this->input->post('BusinessSummaryReport') == true && $this->input->get('tltype') == 'businessummary') {
                $filters = $this->input->post();
                $data['business_summary_details'] = $this->pgpanel_model->get_filtered_business_summary_data($filters);
            }else{
                $data['business_summary_details'] = $this->pgpanel_model->get_all_business_summary_data();
            }
    
            if ($this->input->post('filters') == true && $this->input->post('FinancialTransactionDetails') == true && $this->input->get('tltype') == 'financialtransaction') {
                $filters = $this->input->post();
                $data['financial_transaction_details'] = $this->pgpanel_model->get_filtered_financial_transaction_data($filters);
            }else{
                $data['financial_transaction_details'] = $this->pgpanel_model->get_all_financial_transaction_data();
            }
    
            if ($this->input->post('filters') == true && $this->input->post('TrainingRecordsReport') == true && $this->input->get('tltype') == 'trainingrecords') {
                $filters = $this->input->post();
            //     error_reporting(E_ALL);
			// ini_set('display_errors', 1);
                $data['trainging_records_report'] = $this->pgpanel_model->get_trainging_records_report_data($filters);
            }else{
                $data['trainging_records_report'] = $this->pgpanel_model->get_all_trainging_records_report_data();
            }
    
            if ($this->input->post('filters') == true && $this->input->post('BooksOfRecords') == true && $this->input->get('tltype') == 'booksrecords') {
                $filters = $this->input->post();
                $data['book_records_report'] = $this->pgpanel_model->get_book_records_report_data($filters);
            }else{
                $data['book_records_report'] = $this->pgpanel_model->get_all_book_records_report_data();
            }
        }

        if($this->uri->segment(2) == '2'){
            // error_reporting(E_ALL);
			// ini_set('display_errors', 1);
            
            if ($this->input->post('filters') == true && $this->input->post('MemberDetailsLandAreaReport') == true && $this->input->get('tltype') == 'memberdetails') {
                $filters = $this->input->post();
                $data['member_details_report'] = $this->pgpanel_model->get_member_details_report_data($filters);
            }else{
                $data['member_details_report'] = $this->pgpanel_model->get_all_member_details_report_data();
            }

            if ($this->input->post('filters') == true && $this->input->post('CommodityDetails') == true && $this->input->get('tltype') == 'commoditydetails') {
                $filters = $this->input->post();
                $data['commodity_details_report'] = $this->pgpanel_model->get_commodity_details_report_data($filters);
            }else{
                $data['commodity_details_report'] = $this->pgpanel_model->get_all_commodity_details_report_data();
            }

            if ($this->input->post('filters') == true && $this->input->post('SaleToPG') == true && $this->input->get('tltype') == 'saletopg') {
                $filters = $this->input->post();
                $data['sale_to_pg_details'] = $this->pgpanel_model->get_sale_to_pg_details_report_data($filters);
            }else{
                $data['sale_to_pg_details'] = $this->pgpanel_model->get_all_sale_to_pg_details_report_data();
            }
        }


        // $data['reportcommoditydetails'] = 

        $this->load->view('include/headerhomenew');
        // $this->load->view('admindashboard/report/PGCommoditieDetails', $data);
        $this->load->view('admindashboard/report/reportAll', $data);
        $this->load->view('include/footerhomenew');
    }

}