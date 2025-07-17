<?php
class Pgpanel_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
       
             
    }
	
	public function insert_bankdatapgpanel($data)		 
	{
		$this->db->insert('pg_bankdetails',$data);        
   
	}
		
	/**** Update entry PGbank***/	
	public function  updatepgbank($data,$id){		
			
			$this->db->where('id', $id);
			$this->db->update('pg_bankdetails', $data);		
	}
	
	
	/**** Update entry PG***/
	
	public function  updatepg($data,$id){
		$this->db->where('pgid', $id);
		$this->db->update('pg_panel', $data);
	}

	public function  insertpg($data){				
		$this->db->insert('pg_panel', $data);
	}

	public function  getpgdetails($pgid){					
		$qry = $this->db->query('SELECT *  FROM pg_panel WHERE pgid = "'.$pgid.'"');
		return  $qry->result_array();
	}
	
	
	/***** Get categoty ***/
	
	
	public function  getcategories(){		
			
		// $qry = $this->db->query('SELECT DISTINCT category FROM commodities ORDER BY  category ASC');
		$qry = $this->db->query("SELECT DISTINCT category FROM new_commodities ORDER BY category = 'Others' ASC, category ASC");
		 
		return  $qry->result_array();
	}
	
	
	/***** Get Subcategoty ***/
	
	public function getsubcategory($categoryname){
		
		/*$sql1 = $this->db->query("SELECT * FROM `location` WHERE district = '".$disctrict."' ORDER BY district ASC ");
		
		return  $sql1->result_array();*/
		  $this->db->distinct();
		  $this->db->select('subcategory');
		  $this->db->where('category', $categoryname);
		  $this->db->order_by('subcategory', 'ASC');
		  $query = $this->db->get('commodities');
		  $output = '<option value="">Select SubCategory</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->subcategory  .'">'.ucfirst($row->subcategory ) .'</option>';
		  }
		  return $output;
		
	}
	
	
		/***** Get Commodity ***/
	
	public function getcommodityname($categoryname){
		
		/*$sql1 = $this->db->query("SELECT * FROM `location` WHERE district = '".$disctrict."' ORDER BY district ASC ");
		
		return  $sql1->result_array();*/
		  $this->db->distinct();
		  $this->db->select('commodity');
		//   $this->db->where('subcategory', $subcategoryname);
		  $this->db->where('category', $categoryname);
		   $this->db->order_by("commodity = 'Others'", 'ASC');
		  $this->db->order_by('commodity', 'ASC');
		  $query = $this->db->get('new_commodities');
		  $output = '<option value="">Select Commodity</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->commodity  .'">'.ucfirst($row->commodity ) .'</option>';
		  }
		  return $output;
		
	}
	
	
	/***** Get pg_monthlytransactionaldetails ***/
	
	
	public function  gettransactionaldetails($pgid){		
			
		$qry = $this->db->query('SELECT *  FROM pg_monthlytransactionaldetails WHERE pgid = "'.$pgid.'"');
		 
		return  $qry->result_array();
	}
	
	/**** Insert  ***/
	
	public function insert_mtd($data)		 
	{
		$this->db->insert('pg_monthlytransactionaldetails',$data);        
   
	}
	
	
	/**** Update entry PG***/
	
	public function  updatemtd($data,$id){		
			
			$this->db->where('pgid', $id);
			$this->db->update('pg_monthlytransactionaldetails', $data);
		
	}
	
	
	/**** Insert pg support ***/
	
	public function insert_pgsupport($data)		 
	{
		$this->db->insert('pg_support',$data);        
   
	}
	
		
	/**** Update pg support ***/	
	
	public function  updatepgsupport($data,$id){	
			$this->db->where('pgid', $id);
			$this->db->update('pg_support', $data);		
	}

	//check records exist or not 
	public function get_pgsupport_by_pgid($pgid) {
		$this->db->where('pgid', $pgid);
		$query = $this->db->get('pg_support');
		return $query->row();
	}
	
     
	/***** Get pg_support details ***/	
	
	public function  getsupportrecieveddetails($pgid){		
			
		$qry = $this->db->query('SELECT *  FROM pg_support WHERE pgid = "'.$pgid.'"');
		 
		return  $qry->result_array();
	}

	/*** Get Fund Disbursment data */

	public function get_disbursement_data($fy, $month, $gp, $pg, $pgid)
	{
    	// return $this->db->get_where('pg_support', [
		// 	'pgid' => $pgid
		// ])->row_array();
		$this->db->where('pgid', $pgid);
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1);
		return $this->db->get('pg_support')->row_array();
	}
	
	/**
	 * commidity business
	 */

	// public function getcommoditysupportdetails($pgid){
	// 	$qry = $this->db->query('SELECT *  FROM pg_nonpgmbs WHERE pgid = "'.$pgid.'"');
	// 	return  $qry->result_array();
	// }
	public function getcommoditysupportdetails($pgid,$mbs_filters=null){

			// print_r($previous_month);
			// die();

		$this->db->where('pgid', $pgid);

		if (!empty($mbs_filters['MBSfinancialyear'])) {
			$this->db->where('MBSfinancialyear', $mbs_filters['MBSfinancialyear']);
		}
		// if (!empty($mbs_filters['MBSpreviousmonth'])) {
		// 	$this->db->where('MBSmonth', $mbs_filters['MBSpreviousmonth']);
		// }
		// if(!empty($mbs_filters['MBSmonth'])){
		// 	$this->db->where('MBSmonth', $mbs_filters['MBSmonth']);
		// }
		// if (!empty($previous_month)) {
		// 	$this->db->where('MBSmonth', $previous_month);
		// } 	
		if (!empty($mbs_filters['MBSmonth'])) {
			$this->db->where('MBSmonth', $mbs_filters['MBSmonth']);
		}
		if (!empty($mbs_filters['MBSdistrict'])) {
			$this->db->where('MBSdistrict', $mbs_filters['MBSdistrict']);
		}
		if (!empty($mbs_filters['MBSblock'])) {
			$this->db->where('MBSblock', $mbs_filters['MBSblock']);
		}
		if (!empty($mbs_filters['MBSgrampanchayat'])) {
			$this->db->where('MBSgrampanchayat', $mbs_filters['MBSgrampanchayat']);
		}
		if (!empty($mbs_filters['MBSvillage'])) {
			$this->db->where('MBSvillage', $mbs_filters['MBSvillage']);
		}
		if (!empty($mbs_filters['MBSpgname'])) {
			$this->db->where('MBSpgname', $mbs_filters['MBSpgname']);
		}

		$query = $this->db->get('pg_nonpgmbs');
		return $query->result_array();
	}

	public function getpreviousmonthcommoditysupportdetails($pgid,$mbs_filters,$previous_month=''){

			// print_r($previous_month);
			// die();

		$this->db->where('pgid', $pgid);

		if (!empty($mbs_filters['MBSfinancialyear'])) {
			$this->db->where('MBSfinancialyear', $mbs_filters['MBSfinancialyear']);
		}
		// if (!empty($mbs_filters['MBSpreviousmonth'])) {
		// 	$this->db->where('MBSmonth', $mbs_filters['MBSpreviousmonth']);
		// }
		// if(!empty($mbs_filters['MBSmonth'])){
		// 	$this->db->where('MBSmonth', $mbs_filters['MBSmonth']);
		// }
		if (!empty($previous_month)) {
			$this->db->where('MBSmonth', $previous_month);
		} 	
		// if (!empty($mbs_filters['MBSmonth'])) {
		// 	$this->db->where('MBSmonth', $mbs_filters['MBSmonth']);
		// }
		if (!empty($mbs_filters['MBSdistrict'])) {
			$this->db->where('MBSdistrict', $mbs_filters['MBSdistrict']);
		}
		if (!empty($mbs_filters['MBSblock'])) {
			$this->db->where('MBSblock', $mbs_filters['MBSblock']);
		}
		if (!empty($mbs_filters['MBSgrampanchayat'])) {
			$this->db->where('MBSgrampanchayat', $mbs_filters['MBSgrampanchayat']);
		}
		if (!empty($mbs_filters['MBSvillage'])) {
			$this->db->where('MBSvillage', $mbs_filters['MBSvillage']);
		}
		if (!empty($mbs_filters['MBSpgname'])) {
			$this->db->where('MBSpgname', $mbs_filters['MBSpgname']);
		}

		$query = $this->db->get('pg_nonpgmbs');
		return $query->result_array();
	}

	public function insert_commodity_business($data){
		$this->db->insert('pg_nonpgmbs',$data);
	}	

	public function update_commodity_business($data,$id){
		$this->db->where('id', $id);
		$this->db->update('pg_nonpgmbs',$data);
	}	

	public function delete_commodity_business_by_pgid($pgid)
	{
		$this->db->where('pgid', $pgid);
		$this->db->delete('pg_nonpgmbs');
	}
	
	/**
	 * Cash books
	 */

	 public function get_cash_book_details($pgid){
		$qry = $this->db->query('SELECT *  FROM pg_cashbooks WHERE pgid = "'.$pgid.'"');
		return  $qry->result_array();
	 }

	 public function insert_cash_books($data){
		$this->db->insert('pg_cashbooks',$data);
	 }

	 public function update_cash_books($data,$id){
		$this->db->where('pgid', $id);
		$this->db->update('pg_cashbooks',$data);
	 }

	 /** pg details (Overview) */

	 public function get_pg_list(){
		$qry = $this->db->query('SELECT COUNT(DISTINCT pgname) AS total_count FROM pg_panel');
		$qry1 = $this->db->query('SELECT COUNT(DISTINCT pgid) AS total_count FROM pg_bankdetails');
		$qry2 = $this->db->query('SELECT COUNT(pgid) AS total_count FROM member_panel');
		return [
			'pg_panel_count' => $qry->row_array(),
			'pg_bankdetails_count' => $qry1->row_array(),
			'pg_mapped_member' => $qry2->row_array(),
		];
	 }

	 /** Training */
	 public function get_grampanchayat(){
		$qry =  $this->db->query('SELECT DISTINCT grampanchayat FROM location');
		return $qry->result_array();
	 }

	 public function get_producergroup(){
		$qry =  $this->db->query('SELECT DISTINCT pgname FROM pg_panel');
		return $qry->result_array();
	 }

	 public function get_pgdetails($pgname){
		$qry =  $this->db->query('SELECT DISTINCT pgid FROM pg_panel WHERE pgname = "'.$pgname.'"');
		return $qry->row_array();
	 }

	 public function get_trainingdetails($pgid){
		$qry = $this->db->query('SELECT TLAgriculture,TLHorticulture,TLLivestock,TLFishery,TLSericulture,TLOthers FROM pg_panel WHERE pgid ="'.$pgid.'" ');
		return $qry->row_array();
	 }

	 //Reports
	 public function getclfname(){
		$qry =  $this->db->query('SELECT DISTINCT clf FROM pg_panel');
		return $qry->result_array();
	 }

	 public function get_filtered_data($filters){
		$this->db->select('*');
        $this->db->from('pg_panel');

		// print_r($filters);
		// die();

		if (!empty($filters['dist'])) {
            $this->db->where('district', $filters['dist']);
        }
        if (!empty($filters['block'])) {
            $this->db->where('block', $filters['block']);
        }
        if (!empty($filters['gram_panchayat'])) {
            $this->db->where('grampanchayat', $filters['gram_panchayat']);
        }
        if (!empty($filters['producer_group'])) {
            $this->db->where('pgname', $filters['producer_group']);
        }
        if (!empty($filters['clf'])) {
            $this->db->where('clf', $filters['clf']);
        }
        if (!empty($filters['clf_model'])) {
            $this->db->where('clf_model', $filters['clf_model']);
        }
        if (!empty($filters['category'])) {
            $this->db->where('category', $filters['category']);
        }
        if (!empty($filters['sub_category'])) {
            $this->db->where('sub_category', $filters['sub_category']);
        }
        if (!empty($filters['commodityname'])) {
            $this->db->where('commodityname', $filters['commodityname']);
        }
        
        if (!empty($filters['date_from']) && !empty($filters['date_to'])) {
            $this->db->where('finaldate >=', $filters['date_from']);
            $this->db->where('finaldate <=', $filters['date_to']);
        }

		$query = $this->db->get();
		return $query->result_array();

	 }

	 public function get_all_data(){
		$qry =  $this->db->query('SELECT * FROM pg_panel');
		return $qry->result_array();
		// $this->db->limit($limit, $start);
        // return $this->db->get('pg_panel')->result();
	 }

	 public function getTotalCommodityUsers(){
		return $this->db->count_all('pg_panel');
	 }

	 public function get_filtered_business_summary_data($filters){
		$this->db->select('pg_nonpgmbs.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('pg_nonpgmbs', 'pg_panel.pgid = pg_nonpgmbs.pgid', 'right');

		// print_r($filters);
		// die();

		if (!empty($filters['dist'])) {
            $this->db->where('district', $filters['dist']);
        }
        if (!empty($filters['block'])) {
            $this->db->where('block', $filters['block']);
        }
        if (!empty($filters['gram_panchayat'])) {
            $this->db->where('grampanchayat', $filters['gram_panchayat']);
        }
        if (!empty($filters['producer_group'])) {
            $this->db->where('pgname', $filters['producer_group']);
        }
        if (!empty($filters['clf'])) {
            $this->db->where('clf', $filters['clf']);
        }
        if (!empty($filters['clf_model'])) {
            $this->db->where('clf_model', $filters['clf_model']);
        }
        // if (!empty($filters['monthly_transaction'])) {
        //     $this->db->where('monthly_transaction', $filters['monthly_transaction']);
        // }
        // if (!empty($filters['financial_year'])) {
        //     $this->db->where('financial_year', $filters['financial_year']);
        // }
        // if (!empty($filters['month'])) {
        //     $this->db->where('month', $filters['month']);
        // }
        
        if (!empty($filters['date_from']) && !empty($filters['date_to'])) {
            $this->db->where('pg_nonpgmbs.last_updated >=', $filters['date_from']);
            $this->db->where('pg_nonpgmbs.last_updated <=', $filters['date_to']);
        }

		$query = $this->db->get();
		return $query->result_array();

	 }

	 public function get_all_business_summary_data(){
		$this->db->select('pg_nonpgmbs.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('pg_nonpgmbs', 'pg_panel.pgid = pg_nonpgmbs.pgid', 'right');
		$query = $this->db->get();
		return $query->result_array();
	 }

	 public function get_filtered_financial_transaction_data($filters){
		// $this->db->select('pg_monthlytransactionaldetails.*, pg_panel.pgname');
        // $this->db->from('pg_panel');
		// $this->db->join('pg_monthlytransactionaldetails', 'pg_panel.pgid = pg_monthlytransactionaldetails.pgid', 'right');
		$this->db->select('pg_support.*, pg_panel.pgname, pg_panel.pgid');
        $this->db->from('pg_panel');
		$this->db->join('pg_support', 'pg_panel.pgid = pg_support.pgid', 'right');

		// print_r($filters);
		// die();

		if (!empty($filters['dist'])) {
            $this->db->where('district', $filters['dist']);
        }
        if (!empty($filters['block'])) {
            $this->db->where('block', $filters['block']);
        }
        if (!empty($filters['gram_panchayat'])) {
            $this->db->where('grampanchayat', $filters['gram_panchayat']);
        }
        if (!empty($filters['producer_group'])) {
            $this->db->where('pgname', $filters['producer_group']);
        }
        if (!empty($filters['clf'])) {
            $this->db->where('clf', $filters['clf']);
        }
        if (!empty($filters['clf_model'])) {
            $this->db->where('clf_model', $filters['clf_model']);
        }
        if (!empty($filters['monthly_transaction'])) {
            $this->db->where('monthly_transaction', $filters['monthly_transaction']);
        }
        // if (!empty($filters['financial_year'])) {
        //     $this->db->where('financial_year', $filters['financial_year']);
        // }
        // if (!empty($filters['month'])) {
        //     $this->db->where('month', $filters['month']);
        // }
        
        if (!empty($filters['date_from']) && !empty($filters['date_to'])) {
            $this->db->where('commencement_date >=', $filters['date_from']);
            $this->db->where('commencement_date <=', $filters['date_to']);
        }

		$query = $this->db->get();
		return $query->result_array();

	 }

	 public function get_all_financial_transaction_data(){
		$this->db->select('pg_support.*, pg_panel.pgname, pg_panel.pgid');
        $this->db->from('pg_panel');
		$this->db->join('pg_support', 'pg_panel.pgid = pg_support.pgid', 'right');
		$query = $this->db->get();
		return $query->result_array();
	 }

	 public function get_trainging_records_report_data($filters){
		
		$this->db->select('*');
        $this->db->from('pg_panel');

		if (!empty($filters['dist'])) {
            $this->db->where('district', $filters['dist']);
        }
        if (!empty($filters['block'])) {
            $this->db->where('block', $filters['block']);
        }
        if (!empty($filters['gram_panchayat'])) {
            $this->db->where('grampanchayat', $filters['gram_panchayat']);
        }
        if (!empty($filters['producer_group'])) {
            $this->db->where('pgname', $filters['producer_group']);
        }
        if (!empty($filters['clf'])) {
            $this->db->where('clf', $filters['clf']);
        }
        if (!empty($filters['clf_model'])) {
            $this->db->where('clf_model', $filters['clf_model']);
        }
		if(!empty($filters['other_training_type'])){
			$this->db->where('TLOthers !=', '');
		}else{
			if($filters['training_type'] == 'Agriculture'){
				$this->db->where('TLAgriculture !=', '');
			}elseif($filters['training_type'] == 'Horticulture'){
				$this->db->where('TLHorticulture !=', '');
			}elseif($filters['training_type'] == 'Fishery'){
				$this->db->where('TLFishery !=', '');
			}else{
				$this->db->where('TLOthers !=', '');
			}
		}
        // if (!empty($filters['training_type'])) {
        //     $this->db->where('training_type', $filters['training_type']);
        // }
        // if (!empty($filters['financial_year'])) {
        //     $this->db->where('financial_year', $filters['financial_year']);
        // }
        // if (!empty($filters['month'])) {
        //     $this->db->where('month', $filters['month']);
        // }
        
        if (!empty($filters['date_from']) && !empty($filters['date_to'])) {
            $this->db->where('finaldate >=', $filters['date_from']);
            $this->db->where('finaldate <=', $filters['date_to']);
        }

		$query = $this->db->get();
		return $query->result_array();

	 }

	 public function get_all_trainging_records_report_data(){
		$qry =  $this->db->query('SELECT DISTINCT * FROM pg_panel');
		return $qry->result_array();
	 }

	 public function get_book_records_report_data($filters){
		$this->db->select('pg_cashbooks.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('pg_cashbooks', 'pg_panel.pgid = pg_cashbooks.pgid', 'right');

		// print_r($filters);
		// die();

		if (!empty($filters['dist'])) {
            $this->db->where('district', $filters['dist']);
        }
        if (!empty($filters['block'])) {
            $this->db->where('block', $filters['block']);
        }
        if (!empty($filters['gram_panchayat'])) {
            $this->db->where('grampanchayat', $filters['gram_panchayat']);
        }
        if (!empty($filters['producer_group'])) {
            $this->db->where('pgname', $filters['producer_group']);
        }
        if (!empty($filters['clf'])) {
            $this->db->where('clf', $filters['clf']);
        }
        if (!empty($filters['clf_model'])) {
            $this->db->where('clf_model', $filters['clf_model']);
        }
        // if (!empty($filters['maintained_book'])) {
        //     $this->db->where('maintained_book', $filters['maintained_book']);
        // }
        // if (!empty($filters['financial_year'])) {
        //     $this->db->where('financial_year', $filters['financial_year']);
        // }
        // if (!empty($filters['month'])) {
        //     $this->db->where('month', $filters['month']);
        // }
        
        if (!empty($filters['date_from']) && !empty($filters['date_to'])) {
            $this->db->where('created_at >=', $filters['date_from']);
            $this->db->where('created_at <=', $filters['date_to']);
        }

		$query = $this->db->get();
		return $query->result_array();

	 }

	 public function get_all_book_records_report_data(){
		$this->db->select('pg_cashbooks.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('pg_cashbooks', 'pg_panel.pgid = pg_cashbooks.pgid', 'right');
		$query = $this->db->get();
		return $query->result_array();
	 }

	 public function get_member_details_report_data($filters){
		$this->db->select('member_panel.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('member_panel', 'pg_panel.pgid = member_panel.pgid', 'right');

		// print_r($filters);
		// die();

		if (!empty($filters['dist'])) {
            $this->db->where('member_panel.district', $filters['dist']);
        }
        if (!empty($filters['block'])) {
            $this->db->where('member_panel.block', $filters['block']);
        }
        if (!empty($filters['gram_panchayat'])) {
            $this->db->where('member_panel.grampanchayat', $filters['gram_panchayat']);
        }
        if (!empty($filters['producer_group'])) {
            $this->db->where('pgname', $filters['producer_group']);
        }
        if (!empty($filters['clf'])) {
            $this->db->where('clf', $filters['clf']);
        }
        if (!empty($filters['clf_model'])) {
            $this->db->where('clf_model', $filters['clf_model']);
        }
        if (!empty($filters['fpc_member'])) {
            $this->db->where('FPCmember', $filters['fpc_member']);
        }
        // if (!empty($filters['financial_year'])) {
        //     $this->db->where('financial_year', $filters['financial_year']);
        // }
        // if (!empty($filters['month'])) {
        //     $this->db->where('month', $filters['month']);
        // }
        
        if (!empty($filters['date_from']) && !empty($filters['date_to'])) {
            $this->db->where('member_panel.last_updated >=', $filters['date_from']);
            $this->db->where('member_panel.last_updated <=', $filters['date_to']);
        }

		$query = $this->db->get();
		return $query->result_array();

	 }

	 public function get_all_member_details_report_data(){
		$this->db->select('member_panel.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('member_panel', 'pg_panel.pgid = member_panel.pgid', 'right');
		$query = $this->db->get();
		return $query->result_array();
	 }

	 public function get_commodity_details_report_data($filters){
		$this->db->select('member_panel.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('member_panel', 'pg_panel.pgid = member_panel.pgid', 'right');

		// print_r($filters);
		// die();

		if (!empty($filters['dist'])) {
            $this->db->where('member_panel.district', $filters['dist']);
        }
        if (!empty($filters['block'])) {
            $this->db->where('member_panel.block', $filters['block']);
        }
        if (!empty($filters['gram_panchayat'])) {
            $this->db->where('member_panel.grampanchayat', $filters['gram_panchayat']);
        }
        if (!empty($filters['producer_group'])) {
            $this->db->where('pgname', $filters['producer_group']);
        }
        if (!empty($filters['clf'])) {
            $this->db->where('clf', $filters['clf']);
        }
        if (!empty($filters['clf_model'])) {
            $this->db->where('clf_model', $filters['clf_model']);
        }
        if (!empty($filters['fpc_member'])) {
            $this->db->where('FPCmember', $filters['fpc_member']);
        }
        if (!empty($filters['financial_year'])) {
            $this->db->where('financial_year', $filters['financial_year']);
        }
        if (!empty($filters['month'])) {
            $this->db->where('month', $filters['month']);
        }
        
        if (!empty($filters['date_from']) && !empty($filters['date_to'])) {
            $this->db->where('member_panel.last_updated >=', $filters['date_from']);
            $this->db->where('member_panel.last_updated <=', $filters['date_to']);
        }

		$query = $this->db->get();
		return $query->result_array();

	 }

	 public function get_all_commodity_details_report_data(){
		$this->db->select('member_panel.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('member_panel', 'pg_panel.pgid = member_panel.pgid', 'right');
		$query = $this->db->get();
		return $query->result_array();
	 }

	 public function get_sale_to_pg_details_report_data($filters){
		$this->db->select('member_panel.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('member_panel', 'pg_panel.pgid = member_panel.pgid', 'right');

		// print_r($filters);
		// die();

		if (!empty($filters['dist'])) {
            $this->db->where('member_panel.district', $filters['dist']);
        }
        if (!empty($filters['block'])) {
            $this->db->where('member_panel.block', $filters['block']);
        }
        if (!empty($filters['gram_panchayat'])) {
            $this->db->where('member_panel.grampanchayat', $filters['gram_panchayat']);
        }
        if (!empty($filters['producer_group'])) {
            $this->db->where('pgname', $filters['producer_group']);
        }
        if (!empty($filters['clf'])) {
            $this->db->where('clf', $filters['clf']);
        }
        if (!empty($filters['clf_model'])) {
            $this->db->where('clf_model', $filters['clf_model']);
        }
        if (!empty($filters['fpc_member'])) {
            $this->db->where('FPCmember', $filters['fpc_member']);
        }
        // if (!empty($filters['financial_year'])) {
        //     $this->db->where('financial_year', $filters['financial_year']);
        // }
        // if (!empty($filters['month'])) {
        //     $this->db->where('month', $filters['month']);
        // }
        
        if (!empty($filters['date_from']) && !empty($filters['date_to'])) {
            $this->db->where('member_panel.last_updated >=', $filters['date_from']);
            $this->db->where('member_panel.last_updated <=', $filters['date_to']);
        }

		$query = $this->db->get();
		return $query->result_array();

	 }

	 public function get_all_sale_to_pg_details_report_data(){
		$this->db->select('member_panel.*, pg_panel.pgname');
        $this->db->from('pg_panel');
		$this->db->join('member_panel', 'pg_panel.pgid = member_panel.pgid', 'right');
		$query = $this->db->get();
		return $query->result_array();
	 }
	
}