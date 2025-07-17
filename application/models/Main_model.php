<?php
class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table_name = ' ip_clients';
		$this->table_name2 = ' customerentries';
		$this->tcbp = ' tcbp';
        
      
    }
	
	
	public function isemailexists($emailid){
		
		$sql=$this->db->query('SELECT * FROM user WHERE email = "'.$emailid.'"');
		return $sql->num_rows();
	}
	  /*** Front user Entry Table  ***/
	  
	public function frontuserentriesdata()
	{
		$sql=$this->db->query('SELECT * FROM customerentries WHERE entrystatus = "active" ORDER BY deliverydate  ASC ');
		return $sql->result_array();
	}
	/*** Front user worker Table  ***/
	
	public function frontuserworkerdata()
	{
		$sql=$this->db->query('SELECT * FROM  workerentry  ORDER BY wo_uid');
		return $sql->result_array();
	}
	  /*** Front Cutting Entry Table  ***/
	  
	public function frontusercuttingdata()
	{
		$sql=$this->db->query('SELECT * FROM  cuttingentry  ORDER BY cu_uid');
		return $sql->result_array();
	}
	
	/**** get entry edit page details by id ****/
	
	public function getdetailsbyid($id)
	{
		
		$qry = $this->db->query('SELECT * FROM customerentries WHERE ce_id = '.$id);
		return $qry->row_array();
		
	}
	/***  customerentries search **/
	public function getsearchtodayentries($searhcentry)
	{
		$sql=$this->db->query("SELECT * FROM customerentries WHERE ce_custname LIKE '%".$searhcentry."%' OR ce_email LIKE '%".$searhcentry."%' OR ce_mobile LIKE '%".$searhcentry."%' OR deliverydate LIKE '%".$searhcentry."%'");
		return $sql->result_array();
	}
	
	/**** previous entry search ***/
	
	public function getsearchentries($searhcentry)
	{
		$sql=$this->db->query("SELECT * FROM customerentries WHERE ce_custname LIKE '%".$searhcentry."%' OR ce_email LIKE '%".$searhcentry."%' OR ce_mobile LIKE '%".$searhcentry."%' OR deliverydate LIKE '%".$searhcentry."%'");
		return $sql->result_array();
	}
	
	/**** Update entry ***/
	
	
	public function  updatecert($data,$id){		
			
			$this->db->where('cert_id', $id);
			$this->db->update('ukac_certificates', $data);
		
	}
	
	public function getcertbyid($id)
	{
		
		$qry = $this->db->query('SELECT * FROM ukac_certificates WHERE cert_id = '.$id);
		return $qry->row_array();
		
	}

	/**** Delete entry ***/ 	
	
	
	public function deletecert($id){
			$this->db->delete('ukac_certificates', array('cert_id' => $id));			
	}
	
	public function deletedoc($id){
			$this->db->delete('documents', array('docid' => $id));			
	}
	
	/**** List entry today**/
	
	public function listtodaypage()
	{		
		
		$qry = $this->db->query('SELECT * FROM customerentries WHERE ce_date = "'.date('d-m-Y',time()).'" ORDER BY  last_updated DESC');
		return $qry->result_array();
		
	}
	
	  /***** listtodaypagecount ***/
	
	public function listtodaypagecount()
	{		
		
		$qry = $this->db->query('SELECT ce_productscount FROM customerentries WHERE ce_date = "'.date('d-m-Y',time()).'" ORDER BY  last_updated DESC');
	    $res = $qry->result_array();
		
		$totaldatecount = 0;
		 foreach($res as $resdata){
			 
		$ce_productscount =	explode(',',$resdata['ce_productscount']); 		
		 $totaldatecount += array_sum($ce_productscount);
		
		 }
		 
		 return $totaldatecount;		
		
		
	}
	
      /*** Insert Client Entry ***/
	
	public function insertcliententry($data)
	{		
	
	$this->db->insert($this->table_name2, $data);		
		
	}
	
	
	
	
	
    /*
	@Description: Get count of warehouse
	@Author: Shweta Patel
	@Input: -  $src
	@Output: -count of records
	@Date:23-10-2013
	*/
   
    public function getcustajaxdetail($src)
    {
		
		
		 $query = $this->db->query("select * from ip_clients WHERE  customercode like '%".$src."%' OR client_name like '%".$src."%' OR client_mobile  like '%".$src."%' OR client_email like '%".$src."%'  ");
			
		//echo "select * from ip_clients WHERE client_name like '%".$src."%' OR client_mobile  like '%".$src."%' OR client_email like '%".$src."%'  ";		 
		
		$result = $query->result_array();
		$sarr = array();
		//if ($result->num_rows > 0) {
			
		foreach($result as $r){
			
			$sarr[] = $r['client_id'].'~'.$r['customercode'] .' '. $r['client_name'].' / '.$r['client_mobile'].' / '.$r['client_email'];
			
		}
		//}
        echo json_encode($sarr);
     
    }
    
    
    
    /*
	@Description: Get All Information category
	@Author: Shweta Patel
	@Input: -  fileds,condtion,limit
	@Output: -All record
	@Date:23-10-2013
	*/
   
         public function getcategorylist($getfields='', $match_values = '',$condition ='', $compare_type = '', $count = '',$num = '',$offset='',$orderby='')
    {
         
        $fields =  $getfields ? implode(',', $getfields) : '';
        $sql = 'SELECT ';
        
        $sql .= $fields ? $fields : '*';
        $sql .= ' FROM '.$this->table_name;
        $where='';
        
        if($match_values)
        {
            $keys = array_keys($match_values);
            $compare_type = $compare_type ? $compare_type : 'like';
            if($condition!='')
                $and_or=$condition;
            else 
                $and_or = ($compare_type == 'like') ? ' OR ' : ' AND '; 
          
            $where = 'WHERE ';
            switch ($compare_type)
            {
                case 'like':
                    $where .= $keys[0].' '.$compare_type .'"%'.$match_values[$keys[0]].'%" ';
                    break;

                case '=':
                default:
                    $where .= $keys[0].' '.$compare_type .'"'.$match_values[$keys[0]].'" ';
                    break;
            }
            $match_values = array_slice($match_values, 1);
            
            foreach($match_values as $key=>$value)
            {                
                $where .= $and_or.' '.$key.' ';
                switch ($compare_type)
                {
                    case 'like':
                        $where .= $compare_type .'"%'.$value.'%"';
                        break;
                    
                    case '=':
                    default:
                        $where .= $compare_type .'"'.$value.'"';
                        break;
                }
            }
        }        
        $orderby = (!$orderby)? ' order by id asc ':$orderby;
       
        if($offset=="" && $num=="")
            $sql .= '  '.$where.$orderby;
        elseif($offset=="")
            $sql .= ' WHERE parent_category = 0 '.$where.$orderby.' '.'limit '.$num;
        else
             $sql .= ' WHERE parent_category = 0 '.$where.$orderby.' '.'limit '.$offset .','.$num;
        
       $query = ($count) ? 'SELECT count(*) FROM '.$this->table_name.' '.$where.$orderby : $sql;  
                 
       $query = $this->db->query($query);     
       
	   //echo $this->db->last_query();
       return $query->result_array();
	}

   function getsubcategories($id){
	   
	   $query = $this->db->get_where('category_master', array('parent_category' => $id));
	   return $query->result_array();
	   
   }
   
   function getcategoryall(){
	   
	   $query = $this->db->get('category_master'); 
	   return $query->result_array();   
	   
   }
   
    function getmaincategories(){
	   
	   $query = $this->db->get_where('category_master', array('parent_category' => '0'));
	   return $query->result_array();
	   
   }
   
   
    function getallchildcategories(){
	   
	   $this->db->select('*');
	   $this->db->from('category_master');
	   $this->db->where('parent_category !=', '0');
	   $query = $this->db->get();
	   return $query->result_array();
	   
   }
    
   
    function insert_category($data)
    {
        $this->db->insert($this->table_name,$data);	
	
    }

    public function update_category($data)
    {
        $this->db->where('id',$data['id']);
        $query = $this->db->update($this->table_name,$data); 
    }
  
    public function delete_category($id)
    {
        $this->db->where('id',$id);
        $this->db->delete($this->table_name);            
    }

   
    public function get_category_products($products,$product_master_id)
    {
         $sql = "SELECT * FROM category_products WHERE product_master_id = $product_master_id";
        if (strlen($products) > 0) {
                $sql .= " AND id NOT IN (".$products.")";
            }

        $sql  .= " ORDER BY id";
        $query = $this->db->query($sql);
        return $query->result_array();            
    }
	
	
	/**** get entry edit page details by id ****/
	
	public function getmanagebyid($id)
	{
		
		$sql = $this->db->query('SELECT * FROM dateentries WHERE de_id = '.$id);
		return $sql->row_array();
		
	}
	/*** managedate search ***/
	
	public function getmanagedate($searhcentry)
	   {
		   
	$sql=$this->db->query("SELECT * FROM dateentries WHERE de_title LIKE '%".$searhcentry."%' OR de_date LIKE '%".$searhcentry."%' OR de_status LIKE '%".$searhcentry."%' OR de_uid LIKE '%".$searhcentry."%'");
		return $sql->result_array();
	   }
	
	/**** managedate Update entry ***/
	
	
	public function  updatedate($data,$id){		
			
			$this->db->where('de_id', $id);
			$this->db->update('dateentries', $data);
		
	}

	/**** managedate Delete entry ***/

	
	public function  deleteentr($id)
	{
	  $this->db->where('de_id',$id);
	  $this->db->delete('dateentries'); 	
	
	
	}
	
	/*** get managedate insert page details ***/
		
	public function insert_tcbp($data)
	{
		$this->db->insert('tcbp',$data);
        
   
	}
	
	public function insert_taskdoc($data)
	{
		$this->db->insert('documents',$data);
        
   
	}
	/*** pagination in managedate ***/
	
	 public function managedatepageentries($limit,$offset)
	{
	   $sql = $this->db->query('SELECT * FROM dateentries  ORDER BY  last_update DESC LIMIT '.$offset.','.$limit);
		return $sql->result_array();	  
    }
	  
	
	public function managedatepageentriescount()
	{
	   $sql = $this->db->query('SELECT * FROM dateentries  ORDER BY  last_update DESC');
		return $sql->num_rows();	
    }	
	/*** get setting entry insert page details ***/
		
	public function insert_add($data)
	{
		$this->db->insert('settingentries',$data);
        
   
	}
	/***  get setting edit page details **/
	
	
	public function getsettingbyid($id)
	{
		
		$sql = $this->db->query('SELECT * FROM settingentries WHERE se_id = '.$id);
		return $sql->row_array();
		
	}
	
	/**** get setting Update entry ***/
	
	
	public function  updatesetting($data,$id){		
			
			$this->db->where('se_id',$id);
			$this->db->update('settingentries', $data);
		
	}
	/*** get setting pagination entry  ***/
	
    public function settingpageentries($limit,$offset)
	{
	   $sql = $this->db->query('SELECT * FROM settingentries  ORDER BY  last_updated DESC LIMIT '.$offset.','.$limit);
		return $sql->result_array();	  
    }
	  
	
	public function settingpageentriescount()
	{
	   $sql = $this->db->query('SELECT * FROM settingentries  ORDER BY  last_updated DESC');
		return $sql->num_rows();	
    }
	/***get setting delete entries  ***/
	/*public function  deleteenter($id)
	{
	  $this->db->where('se_id',$id);
	  $this->db->delete('settingentries'); 	
	
	
	}
	*/
	/*** managedate search ***/
	
	public function getsettingsearch($searhcentry)
	   {
		   
	$sql=$this->db->query("SELECT * FROM settingentries WHERE se_key LIKE '%".$searhcentry."%' OR se_value LIKE '%".$searhcentry."%' OR se_status LIKE '%".$searhcentry."%' OR last_updated LIKE '%".$searhcentry."%'");
		return $sql->result_array();
	   }
	   /*** get maagedate edit entry ***/
	   
	public function getdetailsbylist($id)
	{
		$qry = $this->db->query('SELECT * FROM customerentries WHERE ce_id = '.$id);
		return $qry->row_array();
		
	}
	
	/**** get managedate Update entry ***/
	
	public function  updateentrys($data,$id)
	{		
			$this->db->where('ce_id', $id);
			$this->db->update($this->table_name2, $data);
		
	}

	/**** get managedate Delete entrys ***/
	
	
	public function  deleteentrys($id)
	{
		$this->db->delete($this->table_name2, array('ce_id' => $id));			
	}
	
	/**** List previousentry pagination **/
	
	public function listpreviousentries($limit,$offset)
	{  
	    $sql= $this->db->query('SELECT * FROM customerentries ORDER BY last_updated DESC LIMIT '.$offset.','.$limit);
		return $sql->result_array();
		
	} 
	
	public function previouspagecount()
	{		
		
		$qry = $this->db->query('SELECT * FROM customerentries ORDER BY  last_updated DESC');
		return $qry->num_rows();
		
	}
	/*** get worker entry insert page  details ***/
		
	public function insert_ad($data)
	{
		$this->db->insert('workerentry',$data);
        
    }
	/*** get worker edit page details **/
	
	
	public function getworkerbyid($id)
	{
		
		$sql = $this->db->query('SELECT * FROM workerentry WHERE wo_id = '.$id);
		return $sql->row_array();
		
	}
	
	/****get worker Update entry ***/
	
	
	public function  updateworker($data,$id){		
			
			$this->db->where('wo_id',$id);
			$this->db->update('workerentry', $data);
		
	}
	/*** worker pagination  ****/
	
	public function workerpageentries($limit,$offset)
	{
	   $sql = $this->db->query('SELECT * FROM workerentry  ORDER BY  last_updated DESC LIMIT '.$offset.','.$limit);
		return $sql->result_array();	  
    }
	  
	
	public function workerpageentriescount()
	{
	   $sql = $this->db->query('SELECT * FROM workerentry  ORDER BY  last_updated DESC');
		return $sql->num_rows();	
    }
	
	
     /*** GET WORKER ENTRY DELETE **/
	
	public function workerdelete($id)
	{
		$this->db->where('wo_id',$id);
		$this->db->delete('workerentry');
	}
	   /*** worker search ***/
	   
     public function getsearchworkerentries($searhcentry)
	 {
		 
	   $sql=$this->db->query("SELECT * FROM workerentry WHERE wo_uid LIKE '%".$searhcentry."%'");
	   /* OR wo_totalpiece LIKE '%".$searhcentry."%' OR wo_complete LIKE '%".  $searhcentry."%' OR wo_remaining LIKE '%".$searhcentry."%'");*/
		 return $sql->result_array();
	 
	 }
	 
	 
	 /*****  get worker assign entry ***/
	 
	  public function getworkerassignentries($id)
	 {
		 
	  // $sql=$this->db->query("SELECT * FROM barcode_entries WHERE wid = '".$id."'");
	   $sql=$this->db->query("SELECT be.*,we.wo_uid as workername,ce.cu_uid as cuttername FROM barcode_entries be LEFT JOIN workerentry we ON be.wid = we.wo_id LEFT JOIN cuttingentry ce ON be.ctid = ce.cu_id WHERE be.wid = '".$id."'");
	  
	  return $sql->result_array();
	 
	 }
	 
	 
	 /*****  get cutting assign entry ***/
	 
	  public function getcuttingassignentries($id)
	 {
		 

		  $sql=$this->db->query("SELECT be.*,we.wo_uid as workername,ce.cu_uid as cuttername FROM barcode_entries be LEFT JOIN workerentry we ON be.wid = we.wo_id LEFT JOIN cuttingentry ce ON be.ctid = ce.cu_id WHERE be.ctid = '".$id."'");
	  
	  return $sql->result_array();
	 
	 }
	
	/*** get cutting entry insert page  details ***/
		
	public function insert_addd($data)
	{
		$this->db->insert('cuttingentry',$data);
        
   
	}
	/*** get cutting edit page details **/
	
	
	public function getcuttingbyid($id)
	{
		
		$sql = $this->db->query('SELECT * FROM cuttingentry WHERE cu_id = '.$id);
		return $sql->row_array();
		
	}
	
	/**** cutting  Update entry ***/
	
	
	public function  updatecutting($data,$id){		
			
			$this->db->where('cu_id',$id);
			$this->db->update('cuttingentry', $data);
		
	}
	
	/*** Cutting pagination  ****/
	
	public function cuttingpageentries($limit,$offset)
	{
	   $sql = $this->db->query('SELECT * FROM cuttingentry  ORDER BY  last_updated DESC LIMIT '.$offset.','.$limit);
		return $sql->result_array();	  
    }
	  
	
	public function cuttingpageentriescount()
	{
	   $sql = $this->db->query('SELECT * FROM cuttingentry  ORDER BY  last_updated DESC');
		return $sql->num_rows();	
    }
	/**** cutting  Delete entrys ***/
	
	public function  cuttingdelete($id)
	{
	  $this->db->where('cu_id',$id);
	  $this->db->delete('cuttingentry'); 	
	
	
	}
       
	 /*** cutting search ***/  
	public function getsearchcuttingentries($searhcentry)
	   {
		   
	$sql=$this->db->query("SELECT * FROM cuttingentry WHERE cu_uid LIKE '%".$searhcentry."%'");// OR cu_totalpiece LIKE '%".$searhcentry."%' OR cu_complete LIKE '%".$searhcentry."%' OR cu_remaining LIKE '%".$searhcentry."%'");
		return $sql->result_array();
	   }
	   
	  /****get Key dailylimit***/
   
   
   public function getdailykeylimit(){
	   
	   $sql = $this->db->query('SELECT * FROM settingentries WHERE se_key ="daily_limit_pieces"');
	   return $sql->row_array();
	   
   }
     




/**** get entry edit page details by id Customer ****/
	
	public function getcustomerbyid($id)
	{
		
		$sql = $this->db->query('SELECT * FROM ip_clients WHERE client_id = '.$id);
		return $sql->row_array();
		
	}
	/*** customer search ***/
	
	public function gettcbpentries($searhcentry,$tcbtype)
	   {
		   
	$sql=$this->db->query("SELECT * FROM tcbp WHERE (taskname LIKE '%".trim($searhcentry)."%' OR 	
pmumanager LIKE '%".trim($searhcentry)."%' OR ba LIKE '%".trim($searhcentry)."%' OR sno LIKE '%".trim($searhcentry)."%'  OR status LIKE '%".trim($searhcentry)."%') AND tcbptype = '".trim($tcbtype)."'");
		return $sql->result_array();
	   }
	
	/**** customer Update entry ***/
	
	
	public function  updatecustomer($data,$id){		
			
			$this->db->where('client_id', $id);
			$this->db->update('ip_clients', $data);
		
	}

	/**** customer Delete entry ***/

	
	public function  customerdelete($id)
	{
	  $this->db->where('client_id',$id);
	  $this->db->delete('ip_clients'); 	
	
	
	}
	
	/*** get customer insert page details ***/
		
	public function insert_data($data)
	{
		$this->db->insert('ip_clients',$data);
        
   
	}
	/*** pagination in customer WHERE parenttask = '0' ***/
	
	 public function tcpcpageentries($limit,$offset,$category)
	{
	   $sql = $this->db->query("SELECT * FROM tcbp  WHERE parenttask = '0' OR parenttask = id ORDER BY  id  ASC LIMIT ".$offset.",".$limit);
		return $sql->result_array();	  
    }
	
	public function tcpcpageentriesall($limit,$offset,$category)
	{
	   $sql = $this->db->query("SELECT * FROM tcbp  ORDER BY  id  DESC LIMIT ".$offset.",".$limit);
		return $sql->result_array();	  
    }
	
	public function getpatenttaskname($id){
		
		 $sql = $this->db->query("SELECT taskname FROM tcbp WHERE id = '$id'");
		//echo "SELECT taskname FROM tcbp WHERE id = '$id'";
		return $sql->result_array();
	}
	
	 public function tcpcpageentrieschild($ptaskid)
	{
	   $sql = $this->db->query("SELECT * FROM tcbp  WHERE parenttask = '".$ptaskid."' ORDER BY  id ");
		return $sql->result_array();	  
    }
	  
	 public function getnumberuploadedbytask($taskid)
	{
	   $sql = $this->db->query("SELECT * FROM documents WHERE taskid = '".$taskid."'");
		return $sql->result_array();	  
    }
	
	public function getuploadeddocuments($taskid){
		
		 $sql = $this->db->query("SELECT d.*,u.email,u.name,u.mobile FROM documents d LEFT JOIN user u ON u.id = d.userid WHERE d.taskid = '".$taskid."'");
		return $sql->result_array();	  
		
	}
	
	
	 public function getnumberparticipantbytask($taskid)
	{
	   $sql = $this->db->query("SELECT * FROM documents WHERE taskid = '".$taskid."'  GROUP BY userid");
		return $sql->result_array();	  
    }
	
	public function tcpcpageentriescount()
	{
	   $sql = $this->db->query('SELECT * FROM tcbp  ORDER BY  last_updated DESC');
		return $sql->num_rows();	
    }	

      /*** Customermap Insert data table ****/
	  
	  public function insert_datacustomermap($data)
	  {
		 
		$this->db->insert('ip_client_chart',$data);  
	  }
	  /*** Customermap search entry    ***/
	 
    public function getcustomermap($searhcentry)
	 {
		   
	$sql=$this->db->query("SELECT * FROM ip_client_chart WHERE name LIKE '%".$searhcentry."%' OR mobile LIKE '%".$searhcentry."%' OR email LIKE '%".$searhcentry."%' OR notes LIKE '%".$searhcentry."%'");
		return $sql->result_array();
	 }

  

  public function customermappageentriescount()
	{
	   $sql = $this->db->query('SELECT * FROM ip_client_chart  ORDER BY  cchart_id DESC');
		return $sql->num_rows();	
    }
	/***  Customermap Pagination        ***/

   public function customermappageentries($limit,$offset)
	{
	   $sql = $this->db->query('SELECT * FROM ip_client_chart  ORDER BY  entrydate DESC LIMIT '.$offset.','.$limit);
		return $sql->result_array();	  
    }



/**** get entry edit page details by id Customermap ****/
	
	public function getcustomermapbyid($id)
	{
		
		$sql = $this->db->query('SELECT * FROM ip_client_chart WHERE cchart_id = '.$id);
		return $sql->row_array();
		
	}


	/**** customer Update entry ***/
	
	
	public function  updatecustomermap($data,$id){		
			
			$this->db->where('cchart_id', $id);
			$this->db->update('ip_client_chart', $data);
		
	}

  /**** customermap Delete entry ***/

	
	public function  customermapdelete($id)
	{
	  $this->db->where('cchart_id',$id);
	  $this->db->delete('ip_client_chart'); 	
	}

/**** check if worker exists ****/

    public function checkworker($username){
		
		$sql = $this->db->query('SELECT * FROM workerentry WHERE wo_uid = "'.$username.'"');
		return $sql->row_array();
		
	}	

/**** check if cutting exists ****/

    public function checkcutting($username){
		
		$sql = $this->db->query('SELECT * FROM cuttingentry WHERE cu_uid = "'.$username.'"');
		return $sql->row_array();
		
	}	

/****  update worker total pieces ****/
   
    public function updateworker1piecetotal($piece,$id){
		
		 $this->db->query("UPDATE workerentry SET wo_totalpiece = wo_totalpiece + '".$piece."'  WHERE wo_id = '".$id."'");
		 return false;
	}
	
	 
    public function updateworker2piecetotal($piece,$id){
		
		 $this->db->query("UPDATE workerentry SET wo_totalpiece = wo_totalpiece + '".$piece."'  WHERE wo_id = '".$id."'");
		 return false;
	}
	 public function updateworker3piecetotal($piece,$id){
		
		 $this->db->query("UPDATE workerentry SET wo_totalpiece = wo_totalpiece + '".$piece."'  WHERE wo_id = '".$id."'");
		 return false;
	}
	/****  get Update Cutting Entry total pieces in         ***/ 
	 public function updatecutting1piecetotal($piece,$id){
		
		 $this->db->query("UPDATE cuttingentry SET cu_totalpiece = cu_totalpiece + '".$piece."'  WHERE cu_id = '".$id."'");
		 return false;
	}
	 public function updatecutting2piecetotal($piece,$id){
		
		 $this->db->query("UPDATE cuttingentry SET cu_totalpiece = cu_totalpiece + '".$piece."'  WHERE cu_id = '".$id."'");
		 return false;
	}
	/****  get Worker enyry in front page Remainning    ****/
	public function remainningdatashow()
	   {
        $sql = $this->db->query("SELECT * FROM barcode_entries WHERE status = '0' ");
		   
		
	     return $sql->num_rows();
	   }
	/****  get Worker enyry in front page Complete    ****/   
	public function completedatashow()
	   {
		   
        $sql = $this->db->query("SELECT * FROM barcode_entries WHERE status = '2' ");
		
	     return $sql->num_rows();
	   }
	   
	/****  Total entry show in front page    ****/   
	public function totalentriesshow()
	   {
		   
        $sql= $this->db->query("SELECT * FROM customerentries");
		
	     return $sql->num_rows();
	   }
	/****  Total status show in active in front page    ****/
	
	public function totalstatusactive()
	   {
		   
        $sql= $this->db->query("SELECT * FROM customerentries WHERE entrystatus = 'active' ");
		
	     return $sql->num_rows();
	   }
	/****  get Cutting  enyry in front page Remainning    ****/
	
	public function cuttingdateshow()
	   {
		   
        $sql =$this->db->query("SELECT * FROM barcode_entries WHERE status = '0' ");
		
	     return $sql->num_rows();
	   }
	/****  get cutting enyry show  in front page Complete    ****/
	
	public function completedateshow()
	   {
		   
        $sql = $this->db->query("SELECT * FROM barcode_entries WHERE status != '0' ");
		
	     return $sql->num_rows();
	   }
	   /****  get deleverdate enyry show in front page  ****/
	   public function deliverydateshow()
	   {
		   
        $sql= $this->db->query("SELECT *,AVG(deliverydate) AS ce_id  FROM customerentries ");
	
		
	     return $sql->num_rows();
	   }
	   public function delivereddateshow()
	   {
		   
        $sql= $this->db->query("SELECT *,AVG(deliverydate < delivereddate) AS ce_id  FROM customerentries ");
	
		
	     return $sql->num_rows();
	   }
	   
	   /*** Getbarcodelistby entryid**/
	   
	   public function getbarcodebyentryid($id){
		   
		   $sql = $this->db->query("SELECT * FROM barcode_entries WHERE eid = '".$id."' ");
		
	     return $sql->result_array();
	   }
	   
	   /*** Update delivery date while status completed ***/
	   
	   public function updatedeliverydate($id){
		   
		  $this->db->query("UPDATE customerentries SET delivereddate ='".date('d-m-Y',time())."' WHERE ce_id = '".$id."' ");
	   }
	   
	   
	   /**** generatebarcode ****/
	   
	   public function generatebarcode($data){
		   
		   $this->db->insert('barcode_entries', $data);
		   
	   }
	   
	   /*** getbarcode entries ***/
	   
	   public function getbarcodeentries($eid){
		   
		  // $sql = $this->db->get_where('barcode_entries', array('eid' => $eid)); 
		   $sql=$this->db->query("SELECT be.*,we.wo_uid as workername,ce.cu_uid as cuttername FROM barcode_entries be LEFT JOIN workerentry we ON be.wid = we.wo_id LEFT JOIN cuttingentry ce ON be.ctid = ce.cu_id WHERE be.eid = '".$eid."'");
		   return $sql->result_array();   
		   		
	   }
	   
	  public function getworkertotal($wid)
	  {
		  $sql=$this->db->query("SELECT * FROM barcode_entries WHERE wid ='".$wid."' ");
		  return $sql->num_rows();
	  }		

public function getworkercomplete($wid)
	  {
		  $sql=$this->db->query("SELECT * FROM barcode_entries WHERE wid ='".$wid."' AND status = '2' ");
		  return $sql->num_rows();
	  }		

public function getworkerremaining($wid)
	  {
		  $sql=$this->db->query("SELECT * FROM barcode_entries WHERE wid ='".$wid."' AND status = '0' ");
		  return $sql->num_rows();
	  }	
 public function getcuttingtotal($ctid)
	  {
		  $sql=$this->db->query("SELECT * FROM barcode_entries WHERE ctid ='".$ctid."' ");
		  return $sql->num_rows();
	  }		

public function getcuttingcomplete($ctid)
	  {
		  $sql=$this->db->query("SELECT * FROM barcode_entries WHERE ctid ='".$ctid."' AND status != '0' ");
		  return $sql->num_rows();
	  }		

public function getcuttingremaining($ctid)
	  {
		  $sql=$this->db->query("SELECT * FROM barcode_entries WHERE ctid ='".$ctid."' AND status = '0' ");
		  return $sql->num_rows();
	  }		  
	  
	  /**** get total entry count worker per entry ****/
public function getworkerperidcountbarcode($wid,$eid){
	
	 $sql=$this->db->query("SELECT * FROM barcode_entries WHERE wid ='".$wid."' AND eid = '".$eid."' ");
     return $sql->num_rows();
	
}

public function getcuttingperidcountbarcode($ctid,$eid){
	
	 $sql=$this->db->query("SELECT * FROM barcode_entries WHERE ctid ='".$ctid."' AND eid = '".$eid."' ");
     return $sql->num_rows();
	
}

public function  deleteflushbarcode($id)
	{
	  $this->db->where('eid',$id);
	  $this->db->delete('barcode_entries'); 	
	
	
	}
	
	/**** get entry edit page details by id user ****/
	
	public function getuserbyid($id)
	{
		
		$sql = $this->db->query('SELECT * FROM user WHERE id = '.$id);
		return $sql->row_array();
		
	}
	/*** user search ***/
	
 	public function getuserentries($searhcentry)
	   {
		   
	$sql=$this->db->query("SELECT * FROM user WHERE name LIKE '%".$searhcentry."%' OR email LIKE '%".$searhcentry."%' OR phone LIKE '%".$searhcentry."%'");
		return $sql->result_array();
	   }
	
	/**** user Update entry ***/
	 
	public function  updateuser($data,$id){		
			
			$this->db->where('id', $id);
			$this->db->update('user', $data);
		
	}

	/**** user Delete entry ***/
 
	
	public function  userdelete($id)
	{
	  $this->db->where('id',$id);
	  $this->db->delete('user'); 	
	
	
	}
	
	/*** get user insert page details ***/
	 	
	public function insert_dataa($data)
	{
		$this->db->insert('user',$data);
        
   
	}
	/*** pagination in user ***/
	 
	 public function userpageentries($limit,$offset)
	{
	   $sql = $this->db->query('SELECT * FROM user  ORDER BY  last_modified DESC LIMIT '.$offset.','.$limit);
		return $sql->result_array();	  
    }
	  
	
	public function userpageentriescount()
	{
	   $sql = $this->db->query('SELECT * FROM user  ORDER BY  last_modified DESC');
		return $sql->num_rows();	
    }
	
	/*** import csv  ***/
	public function insert_csv($data)
	{
		$this->db->insert('ip_clients',$data);
   
	}
	
	public function insert_foundry_payments($data)
	{
		$this->db->insert('foundry_payments',$data);
   
	}
	
	public function  getfoundrypayments($id){
		
		$sql=$this->db->query("SELECT * FROM foundry_payments WHERE sid='".$id."' ORDER BY pid DESC");
		return $sql->result_array();
		
	}
	public function  getfoundrypaymentsall(){
		
		$sql=$this->db->query("SELECT * FROM foundry_payments ORDER BY pid DESC ");
		return $sql->result_array();
		
	}
	public function edit_foundry_payments($id)
	{
		$sql = $this->db->query('SELECT * FROM foundry_payments WHERE pid = '.$id);
		return $sql->row_array();
		
	}
	
	public function getfoundrylabels($id){
		
		$sql = $this->db->query('SELECT * FROM foundry_label WHERE sid = '.$id);
		return $sql->result_array();
		
	}
	
     	/*** Organization  ****/
		/*** get Organization insert page details ***/
		
	public function insert_organization($data)
	{
		$this->db->insert('ukac_organization',$data);
        
   
	}
		/**** Update entry ***/
	
	
	public function  updateorga($data,$id){		
			
			$this->db->where('cert_id', $id);
			$this->db->update('ukac_organization', $data);
		
	}
	
	public function getorgabyid($id)
	{
		
		$qry = $this->db->query('SELECT * FROM ukac_organization WHERE cert_id = '.$id);
		return $qry->row_array();
		
	}

	/**** Delete entry ***/ 	
	
	
	public function deleteorga($id){
			$this->db->delete('ukac_organization', array('cert_id' => $id));			
	}
	/*** organization search ***/
	
	public function getorgaentries($searhcentry)
	   {
		   
	$sql=$this->db->query("SELECT * FROM ukac_organization WHERE cert_name LIKE '%".trim($searhcentry)."%' OR 	
        cert_number LIKE '%".trim($searhcentry)."%' OR status LIKE '%".trim($searhcentry)."%'");
		return $sql->result_array();
	   }
	   /*** pagination in customer ***/
	
	 public function orgapageentries($limit,$offset,$category)
	{
	   $sql = $this->db->query('SELECT * FROM ukac_organization  ORDER BY  cert_id  DESC LIMIT '.$offset.','.$limit);
		return $sql->result_array();	  
    }
	  public function orgapageentriescount()
	{
	   $sql = $this->db->query('SELECT * FROM ukac_organization  ORDER BY  lastupdated DESC');
		return $sql->num_rows();	
    }	

	public function allparenttask()
	{
		
		$sql = $this->db->query("SELECT * FROM `tcbp` WHERE parenttask = '0' AND status = '1'");
		return $sql->result_array();	  
		
	}
	
	public function allparenttask2()
	{
		
		$sql = $this->db->query("SELECT * FROM `tcbp` WHERE parenttask = '0' LIMIT 0,100000");
		return $sql->result_array();	  
		
	}
	public function addtask($tdata){
		
		$this->db->insert('tcbp',$tdata);
		
	}
	
	public function getdocforverifier($offset,$limit){
		
		$sql = $this->db->query("SELECT d.*,u.email,u.name,u.mobile,uv.name as vname,uv.mobile as vmobile,uv.email as vemail FROM documents d LEFT JOIN user u ON u.id = d.userid LEFT JOIN user uv ON uv.id = d.rejectedby  ORDER BY d.isverified ASC,d.isrejected ASC,d.docid ASC LIMIT $offset,$limit");
		return $sql->result_array();	  
		
	}
	
	
	public function getdocforapproval($offset,$limit){
		
		$sql = $this->db->query("SELECT d.*,u.email,u.name,u.mobile,uv.name as vname,uv.mobile as vmobile,uv.email as vemail FROM documents d LEFT JOIN user u ON u.id = d.userid  LEFT JOIN user uv ON uv.id = d.verifyby WHERE d.isverified = '1' OR isrejected = '1' ORDER BY d.isapproved ASC,d.isrejected asc LIMIT $offset,$limit");
		return $sql->result_array();	  
		
	}
	
	public function rejectdoc($docid,$userid,$remarks)
	{
			
		$sql = $this->db->query("UPDATE `documents` SET isrejected = '1', rejectedby = '".$userid."', `remarks` = '".$remarks."'   WHERE docid = ".$docid."");
		return true;	  
		
	}
	
	public function veridfydoc($docid,$userid)
	{
		
		$sql = $this->db->query("UPDATE documents SET isverified = '1',verifyby = '".$userid."' WHERE docid = '".$docid."'");
		return true;	  
		
	}
	
	public function approvedoc($docid,$userid)
	{
		
		$sql = $this->db->query("UPDATE documents SET isapproved = '1',approvedby = '".$userid."' WHERE docid = '".$docid."'");
		return true;	  
		
	}
	
	public function gettotalverifycount()
	{
		
		$sql = $this->db->query("SELECT * FROM `documents` WHERE isverified = '0' AND isrejected = '0'");
		return $sql->num_rows();	  
		
	}
	
	public function gettotalapprovedcount()
	{
		
		$sql = $this->db->query("SELECT * FROM `documents` WHERE isapproved = '0' AND isverified = '1' AND isrejected = '0'");
		return $sql->num_rows();	  
		
	}
	
	
	public function getbankdetail($pgid){
		
		
		$sql = $this->db->query("SELECT * FROM `pg_bankdetails` WHERE pgid = '".$pgid."'");
		return $sql->result_array();	  
		
	}
	
	
	public function updateparenttaskid($id){
		
		$sql = $this->db->query("UPDATE tcbp SET parenttask = '".$id."' WHERE id  = '".$id."'");
		return true;	
		
	}
	
	
	public function uploadblocks($data){
		
		
		/***check n upload block **/
		$i = 0;
		foreach($data as $d){
			
			if($i != 0){
				
			if($d[0] != '' && $d[1] != ''  && $d[2] != ''  && $d[3] != '' && $d[0] != 'NULL' && $d[1] != 'NULL'  && $d[2] != 'NULL'  && $d[3] != 'NULL'){
			
			$sql1 = $this->db->query("SELECT * FROM `location` WHERE block = '".$d[1]."' AND district = '".$d[0]."'  AND grampanchayat = '".$d[2]."'  AND village = '".$d[3]."'  ");
			
		    $sql1->num_rows();
            
            if($sql1->num_rows() == 0){
				
				$this->db->query("INSERT INTO `location`(`district`,`block`, `grampanchayat`, `village`) VALUES ('".strtolower(trim($d[0]))."','".strtolower(trim($d[1]))."','".strtolower(trim($d[2]))."','".strtolower(trim($d[3]))."')");
				
			}			
			
			}
			}
			
			$i++;
		}
		
		
		return true;	
		
	}
	
	public function uploadpgprofile($data){
		
		error_reporting(false);
		/***check n upload profile **/
		$i = 0;
		foreach($data as $d){
			
			if($i != 0){
				//echo '<pre/>';print_r($d);//echo $d[0];
			if(!is_null($d[0])){
			
			$sql1 = $this->db->query("SELECT * FROM `pg_panel` WHERE pgname = '".strtolower(trim($d[0]))."'  ");
			
		    $sql1->num_rows();
            
            if($sql1->num_rows() == 0){
				
				$originalDate = strtolower(trim($d[5]));
				$newDate = date("d-m-Y", strtotime($originalDate));
				
				//$this->db->query("INSERT INTO `pg_panel`(`pgname`,`district`,`block`, `grampanchayat`, `village`, `dof`, `president_name`, `secretary_name`, `treasurer_name`, `pramoted_uder`, `VAAUS`, `VAAPS`, `VAAKS`,`VAACRP`,`cb_cihcb`,`cb_cihbb`,`cb_total`,`cb_frombuyer`,`cb_payproducermember`,`category`,`sub_category`,`commodityname`,`TLAgriculture`,`TLHorticulture`,`TLLivestock`,`TLFishery`,`TLSericulture`,`TLOthers`,`BOR`,`ABOR`) VALUES ('".strtolower(trim($d[0]))."','".strtolower(trim($d[2]))."','".strtolower(trim($d[3]))."','".strtolower(trim($d[4]))."','".strtolower(trim($d[5]))."','".$newDate."','".strtolower(trim($d[7]))."','".strtolower(trim($d[8]))."','".strtolower(trim($d[9]))."','".strtolower(trim($d[10]))."','".strtolower(trim($d[31]))."','".strtolower(trim($d[32]))."','".strtolower(trim($d[33]))."','".strtolower(trim($d[34]))."','".strtolower(trim($d[165]))."','".strtolower(trim($d[166]))."','".strtolower(trim($d[167]))."','".strtolower(trim($d[168]))."','".strtolower(trim($d[168]))."','".strtolower(trim($d[16]))."','".strtolower(trim($d[17]))."','".strtolower(trim($d[18]))."','".strtolower(trim($d[37]))."','".strtolower(trim($d[38]))."','".strtolower(trim($d[39]))."','".strtolower(trim($d[40]))."','".strtolower(trim($d[41]))."','".strtolower(trim($d[42]))."','".strtolower(trim($d[35]))."','".strtolower(trim($d[36]))."')");
				
				$this->db->query("INSERT INTO `pg_panel`(`pgname`,`district`,`block`, `grampanchayat`, `village`, `dof`, `president_name`, `secretary_name`, `treasurer_name`, `pramoted_uder`) VALUES ('".strtolower(trim($d[0]))."','".strtolower(trim($d[1]))."','".strtolower(trim($d[2]))."','".strtolower(trim($d[3]))."','".strtolower(trim($d[4]))."','".$newDate."','".strtolower(trim($d[6]))."','".strtolower(trim($d[7]))."','".strtolower(trim($d[8]))."','".strtolower(trim($d[9]))."')");
				
			}			
			
			}
			}
			
			$i++;
		}
		
		
		return true;	
		
	}
	
	
	public function uploadmembers($data){
		
		
		/***check n upload members **/
		$i = 0;
		foreach($data as $d){
			
			if($i != 0){
				
			if($d[0] != ''){
			
			$sql1 = $this->db->query("SELECT pgid,pgname FROM `pg_panel` WHERE pgname = '".strtolower(trim($d[0]))."'  ");
			
		    $pgcount = $sql1->num_rows();
			
            $pgarr =  $sql1->result_array();
			
            if($pgcount > 0){
				
				$pgid = $pgarr[0]['pgid'];
				
				
				$originalDate = strtolower(trim($d[6]));
				$newDate = date("d-m-Y", strtotime($originalDate));
				
				$this->db->query("INSERT INTO `member_panel`(`pgid`, `name`, `SHGname`, `SHGcode`, `district`, `block`, `grampanchayat`, `village`, `middlename`, `education`, `contactno`, `aadharno`, `membershiptype`, `landarea`, `irrigatedland`, `nonirrigatedland`, `totalwaterbody`, `grazingland`, `agriculture1`, `agriculture2`, `agriculture3`, `agriculture4`, `agriculture5`, `horticulture1`, `horticulture2`, `horticulture3`, `horticulture4`, `horticulture5`, `livestock1`, `livestock2`, `livestock3`, `livestock4`, `livestock5`, `fishery`, `sericulture`, `others`, `commodity`, `qty`, `price`, `saleamount`, `paymentrecieved`, `paymentdue`) VALUES ('".addslashes(strtolower(trim($pgid)))."','".addslashes(strtolower(trim($d[1])))."','".addslashes(strtolower(trim($d[2])))."','".addslashes(strtolower(trim($d[3])))."','".addslashes(strtolower(trim($d[4])))."','".addslashes(strtolower(trim($d[5])))."','".addslashes(strtolower(trim($d[6])))."','".addslashes(strtolower(trim($d[7])))."','".addslashes(strtolower(trim($d[8])))."','".addslashes(strtolower(trim($d[9])))."','".addslashes(strtolower(trim($d[10])))."','".addslashes(strtolower(trim($d[11])))."','".addslashes(strtolower(trim($d[12])))."','".addslashes(strtolower(trim($d[13])))."','".addslashes(strtolower(trim($d[14])))."','".addslashes(strtolower(trim($d[15])))."','".addslashes(strtolower(trim($d[16])))."','".addslashes(strtolower(trim($d[17])))."','".addslashes(strtolower(trim($d[18])))."','".addslashes(strtolower(trim($d[19])))."','".addslashes(strtolower(trim($d[20])))."','".addslashes(strtolower(trim($d[21])))."','".addslashes(strtolower(trim($d[22])))."','".addslashes(strtolower(trim($d[23])))."','".addslashes(strtolower(trim($d[24])))."','".addslashes(strtolower(trim($d[25])))."','".addslashes(strtolower(trim($d[26])))."','".addslashes(strtolower(trim($d[27])))."','".addslashes(strtolower(trim($d[28])))."','".addslashes(strtolower(trim($d[29])))."','".addslashes(strtolower(trim($d[30])))."','".addslashes(strtolower(trim($d[31])))."','".addslashes(strtolower(trim($d[32])))."','".addslashes(strtolower(trim($d[33])))."','".addslashes(strtolower(trim($d[34])))."','".addslashes(strtolower(trim($d[35])))."','".addslashes(strtolower(trim($d[36])))."','".addslashes(strtolower(trim($d[37])))."','".addslashes(strtolower(trim($d[38])))."','".addslashes(strtolower(trim($d[39])))."','".addslashes(strtolower(trim($d[40])))."','".addslashes(strtolower(trim($d[41])))."')");
				
				
				
			}			
			
			}
			}
			
			$i++;
		}
		
		
		return true;	
		
	}
	
	
	public function getpglist(){		
		
		$sql1 = $this->db->query("SELECT * FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' AND grampanchayat   LIKE '%".$this->input->get('grampanchayatname')."%' AND village LIKE '%".$this->input->get('villagename')."%' ORDER BY pgname ASC ");
		return  $sql1->result_array();
		
	}
	
	
	public function getpglistdropdown(){		
		
		$sql1 = $this->db->query("SELECT pgid,pgname FROM `pg_panel` ORDER BY pgname ASC ");
		return  $sql1->result_array();
		
	}
	
	public function getpgva($type){
		
		
		$sql1 = $this->db->query("SELECT * FROM `pg_panel` WHERE (VAAUS  LIKE '%".$type."%' OR VAAPS LIKE '%".$type."%' OR VAAKS   LIKE '%".$type."%' OR VAACRP LIKE '%".$type."%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
	}
	
	
	public function getcommoddity1member($type){
		
	if($type == 'agri'){
	 
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (agriculture1  LIKE '%paddy%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->num_rows();
		
	}
	
	if($type == 'horti'){
	 
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (horticulture1  LIKE '%arecanut%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->num_rows();
		
	}
	
	if($type == 'livestocks'){
	 
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (livestock1  LIKE '%bakcyard poultry%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->num_rows();
		
	}
		
	}
	
	
	public function getcommoddity2member($type){
		
	if($type == 'agri'){
	 
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (agriculture2  LIKE '%mustard%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->num_rows();
		
	}
	
	if($type == 'horti'){
	 
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (horticulture2  LIKE '%coconut%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->num_rows();
		
	}
	
	if($type == 'livestocks'){
	 
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (livestock2  LIKE '%pig%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->num_rows();
		
	}
		
	}
	
	public function getcommoddity3member($type){
		
	if($type == 'agri'){
	 
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (agriculture3  LIKE '%vegetables%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->num_rows();
		
	}
	
	if($type == 'horti'){
	 
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (horticulture3  LIKE '%mango%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->num_rows();
		
	}
	
	if($type == 'livestocks'){
	 
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (livestock3  LIKE '%goat%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->num_rows();
		
	}
		
	}
	
	
	public function getbor($type){
		
		//echo "SELECT * FROM `pg_panel` WHERE (BOR  LIKE '%".$type."%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ";
		
		$sql1 = $this->db->query("SELECT * FROM `pg_panel` WHERE (BOR  LIKE '%".$type."%') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
	}
	
	
	public function gettrainingcount($type){
		
		if($type == 'TLAgriculture'){
			
			$sql1 = $this->db->query("SELECT TLAgriculture FROM `pg_panel` WHERE TLAgriculture != '' AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		
     		$results = $sql1->result_array();
			
			$sum = 0;
			foreach($results as $result){
				
				//echo  count(array_filter(explode(',',$result['TLAgriculture']))).'<br/>';
				$sum += count(explode(',',$result['TLAgriculture']));
				
			}
			return $sum ;
			//print_r($result);
		}
		
		
		if($type == 'TLHorticulture'){
			
			//echo "SELECT TLHorticulture FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ";
			
			$sql1 = $this->db->query("SELECT TLHorticulture FROM `pg_panel` WHERE TLHorticulture != '' AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		
     		$results = $sql1->result_array();
			
			$sum = 0;
			foreach($results as $result){
				
				//echo  count(array_filter(explode(',',$result['TLHorticulture']))).'<br/>';
				$sum += count(explode(',',$result['TLHorticulture']));
				
			}
			//echo $sum;
			return $sum ;
			//print_r($result);
		}
		
		
		if($type == 'TLLivestock'){
			
			$sql1 = $this->db->query("SELECT TLLivestock FROM `pg_panel` WHERE  TLLivestock != '' AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		
     		$results = $sql1->result_array();
			
			$sum = 0;
			foreach($results as $result){
				
				//echo  count(array_filter(explode(',',$result['TLLivestock']))).'<br/>';
				$sum += count(explode(',',$result['TLLivestock']));
				
			}
			return $sum ;
			//print_r($result);
		}
		
		if($type == 'TLFishery'){
			
			$sql1 = $this->db->query("SELECT TLFishery FROM `pg_panel` WHERE  TLFishery != '' AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		
     		$results = $sql1->result_array();
			
			$sum = 0;
			foreach($results as $result){
				
				//echo  count(array_filter(explode(',',$result['TLFishery']))).'<br/>';
				$sum += count(explode(',',$result['TLFishery']));
				
			}
			return $sum ;
			//print_r($result);
		}
		
		if($type == 'TLSericulture'){
			
			$sql1 = $this->db->query("SELECT TLSericulture FROM `pg_panel` WHERE  TLSericulture != '' AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		
     		$results = $sql1->result_array();
			
			$sum = 0;
			foreach($results as $result){
				
				//echo  count(array_filter(explode(',',$result['TLSericulture']))).'<br/>';
				$sum += count(explode(',',$result['TLSericulture']));
				
			}
			return $sum ;
			//print_r($result);
		}
		
		if($type == 'TLOthers'){
			
			$sql1 = $this->db->query("SELECT TLOthers FROM `pg_panel` WHERE TLOthers != '' AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		
     		$results = $sql1->result_array();
			
			$sum = 0;
			foreach($results as $result){
				
				//echo  count(array_filter(explode(',',$result['TLOthers']))).'<br/>';
				$sum += count(explode(',',$result['TLOthers']));
				
			}
			return $sum ;
			//print_r($result);
		}
		
		
	}
	
	public function getcpcount($type){
		
		
		if($type == 'cb_cihcb'){
		
		$sql1 = $this->db->query("SELECT sum(cb_cihcb) as cihcbcount FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		if($type == 'cb_cihbb'){
		
		$sql1 = $this->db->query("SELECT sum(cb_cihbb) as cihbbcount FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		}
		
	}
	
	
	public function getlandareamembers($type){
		
		
		if($type == 'landarea'){
		
		$sql1 = $this->db->query("SELECT sum(landarea) as landareacount FROM `member_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
		
		if($type == 'irrigatedland'){
		
		$sql1 = $this->db->query("SELECT sum(irrigatedland) as irrigatedlandcount FROM `member_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($type == 'nonirrigatedland'){
		
		$sql1 = $this->db->query("SELECT sum(nonirrigatedland) as nonirrigatedlandcount FROM `member_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($type == 'totalwaterbody'){
		
		$sql1 = $this->db->query("SELECT sum(totalwaterbody) as totalwaterbodycount FROM `member_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($type == 'grazingland'){
		
		$sql1 = $this->db->query("SELECT sum(grazingland) as grazinglandcount FROM `member_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
	}
	
	
		public function getcpcount2($type){
		
		
		if($type == 'cb_cihcb'){
		
		$sql1 = $this->db->query("SELECT sum(cb_cihcb) as cihcbcount FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		if($type == 'cb_cihbb'){
		
		$sql1 = $this->db->query("SELECT sum(cb_cihbb) as cihbbcount FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		}
		
		if($type == 'cb_payproducermember'){
		
		$sql1 = $this->db->query("SELECT sum(cb_payproducermember) aspayproducermembercount FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		}
		
		if($type == 'cb_frombuyer'){
		
		$sql1 = $this->db->query("SELECT sum(cb_frombuyer) as frombuyercount FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY pgid ASC ");
		return  $sql1->result_array();
		}
		
		
		
	}
	
	public function getblocks($district){
		
		/*$sql1 = $this->db->query("SELECT * FROM `location` WHERE district = '".$disctrict."' ORDER BY district ASC ");
		
		return  $sql1->result_array();*/
		  $this->db->distinct();
		  $this->db->select('block');
		  $this->db->where('district', $district);
		  $this->db->order_by('block', 'ASC');
		  $query = $this->db->get('location');
		  $output = '<option value="">Select Block</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->block .'">'.ucfirst($row->block) .'</option>';
		  }
		  return $output;
		
	}
	
	
	public function getgrampanchayat($blocknames){
		
		/*$sql1 = $this->db->query("SELECT * FROM `location` WHERE district = '".$disctrict."' ORDER BY district ASC ");
		
		return  $sql1->result_array();*/
		 $this->db->distinct();
		  $this->db->select('grampanchayat');
		 $this->db->where('block', $blocknames);
		  $this->db->order_by('grampanchayat', 'ASC');
		  $query = $this->db->get('location');
		  $output = '<option value="">Select Grampanchayat</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->grampanchayat  .'">'.ucfirst($row->grampanchayat ) .'</option>';
		  }
		  return $output;
		
	}
	
		public function getvillage($grampanchayatname){
		/*$sql1 = $this->db->query("SELECT * FROM `location` WHERE district = '".$disctrict."' ORDER BY district ASC ");
		
		return  $sql1->result_array();*/
		  $this->db->distinct();
		  $this->db->select('village');
		  $this->db->where('grampanchayat', $grampanchayatname);
		  $this->db->order_by('village', 'ASC');
		  $query = $this->db->get('location');
		  $output = '<option value="">Select village</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->village  .'">'.ucfirst($row->village ) .'</option>';
		  }
		  return $output;
		
	}

	public function getproducergroup($villagename){
		$this->db->distinct();
		$this->db->select('pgname');
		$this->db->from('pg_panel');
		// $this->db->where_in('village', $villagename);
		$this->db->group_start();
		foreach ($villagename as $village) {
			$escaped = $this->db->escape($village);
			$this->db->or_where("FIND_IN_SET($escaped, village) !=", 0);
		}
		$this->db->group_end();
	
		$this->db->order_by('pgname', 'ASC');
		$query = $this->db->get();

		$output = '<option value="">Select Producer Group</option>';
		foreach ($query->result() as $row) {
			$output .= '<option value="' . $row->pgname . '">' . ucfirst($row->pgname) . '</option>';
		}

		return $output;		
	}
	public function getlocations($type){
		
	
		if($type == 'district'){
		
		$sql1 = $this->db->query("SELECT DISTINCT district FROM `location` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY district ASC ");
		return  $sql1->result_array();
		
		}
		
	   if($type == 'district2'){
		
		$sql1 = $this->db->query("SELECT DISTINCT district FROM `location`  ORDER BY district ASC ");
		return  $sql1->result_array();
		
		}
		
		if($type == 'block'){
		
		$sql1 = $this->db->query("SELECT DISTINCT block FROM `location` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY block ASC ");
		return  $sql1->result_array();
		
		}
		
		if($type == 'grampanchayat'){
		
		$sql1 = $this->db->query("SELECT DISTINCT grampanchayat FROM `location` ORDER BY grampanchayat ASC ");
		return  $sql1->result_array();
		
		}
		
		if($type == 'village'){
		
		$sql1 = $this->db->query("SELECT DISTINCT village FROM `location` ORDER BY village ASC ");
		return  $sql1->result_array();
		
		}
		
		
	}
	
	
	public function getpgdetail($pgid){
		
		$sql1 = $this->db->query("SELECT * FROM `pg_panel` WHERE pgid  = '".$pgid."' ORDER BY pgname ASC ");
		return  $sql1->result_array();
				
	}
	
	public function getmemberslist(){
		
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' ORDER BY name ASC ");
		return  $sql1->result_array();
				
	}
	
	public function getcommoditylist(){
		
		$sql1 = $this->db->query("SELECT DISTINCT commodity FROM `commodities` ");
		return  $sql1->result_array();
				
	}
	
	
	public function getcommovsblockchartcount($commotype){
		
		if($commotype == 'agriculture1'){
		
		$sql1 = $this->db->query("SELECT distinct district,block  FROM `member_panel` WHERE (agriculture1 = 'paddy') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY mid  ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'agriculture2'){
		
		$sql1 = $this->db->query("SELECT distinct district,block  FROM `member_panel` WHERE (agriculture2 = 'mustard') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'horticulture1'){
			
		$sql1 = $this->db->query("SELECT distinct district,block  FROM `member_panel` WHERE (horticulture1 = 'arecanut') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'horticulture2'){
			
		$sql1 = $this->db->query("SELECT distinct district,block  FROM `member_panel` WHERE (horticulture2 = 'coconut')  AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'horticulture3'){
			
		$sql1 = $this->db->query("SELECT distinct district,block  FROM `member_panel` WHERE (horticulture3 = 'orange') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'livestock1'){
			
		$sql1 = $this->db->query("SELECT distinct district,block  FROM `member_panel` WHERE (livestock1 = 'bakcyard poultry')  AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'fishery'){
			
		$sql1 = $this->db->query("SELECT distinct district,block  FROM `member_panel` WHERE (fishery = 'local breed carps') AND (district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%') ORDER BY pgid ASC ");
		return  $sql1->result_array();
		
		}
		
	}
	
	public function getcommovsblockchartcount2($commotype,$district,$block){
		
		if($commotype == 'agriculture1'){
		
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (agriculture1 = 'paddy') AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%') ORDER BY mid  ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'agriculture2'){
		
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (agriculture2 = 'mustard') AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%') ORDER BY mid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'horticulture1'){
			
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (horticulture1 = 'arecanut') AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%') ORDER BY mid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'horticulture2'){
			
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (horticulture2 = 'coconut')  AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%') ORDER BY mid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'horticulture3'){
			
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (horticulture3 = 'orange') AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%') ORDER BY mid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'livestock1'){
			
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (livestock1 = 'bakcyard poultry')  AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%') ORDER BY mid ASC ");
		return  $sql1->result_array();
		
		}
		
		if($commotype == 'fishery'){
			
		$sql1 = $this->db->query("SELECT * FROM `member_panel` WHERE (fishery = 'local breed carps') AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%') ORDER BY mid ASC ");
		return  $sql1->result_array();
		
		}
		
	}
	
	
	public  function totallandchart($type){
		
		$district = $this->input->get('districtname');
		$block = $this->input->get('blockname');
		//echo "SELECT sum(landarea) as totalland,COUNT(mp.mid) as totalmembers  FROM `member_panel` mp LEFT JOIN `pg_panel` pg ON pg.pgid = mp.pgid WHERE (pg.category  LIKE '%".$type."%') AND (mp.district  LIKE '%".$district."%' AND mp.block LIKE '%".$block."%') ORDER BY mp.mid ASC ";
		$sql1 = $this->db->query("SELECT sum(landarea) as totalland,COUNT(mp.mid) as totalmembers  FROM `member_panel` mp LEFT JOIN `pg_panel` pg ON pg.pgid = mp.pgid WHERE (pg.category  LIKE '%".$type."%') AND (mp.district  LIKE '%".$district."%' AND mp.block LIKE '%".$block."%') ORDER BY mp.mid ASC ");
		return  $sql1->result_array();
	}
	
   	public  function totallandchartlivestock($type){
		
		$district = $this->input->get('districtname');
		$block = $this->input->get('blockname');
		$sql1 = $this->db->query("SELECT sum(mp.landarea) as totalland,COUNT(mp.mid) as totalmembers  FROM `member_panel` mp LEFT JOIN `pg_panel` pg ON pg.pgid = mp.pgid WHERE (mp.livestock1  LIKE '%".$type."%' OR mp.livestock2  LIKE '%".$type."%' OR mp.livestock3  LIKE '%".$type."%' OR mp.livestock4  LIKE '%".$type."%' OR mp.livestock5 LIKE '%".$type."%') AND (mp.district  LIKE '%".$district."%' AND mp.block LIKE '%".$block."%') ORDER BY mp.mid ASC ");
		return  $sql1->result_array();
	}
	
	public  function totallandchartagri($type){
		
		$district = $this->input->get('districtname');
		$block = $this->input->get('blockname');
		$sql1 = $this->db->query("SELECT sum(mp.landarea) as totalland,COUNT(mp.mid) as totalmembers  FROM `member_panel` mp LEFT JOIN `pg_panel` pg ON pg.pgid = mp.pgid WHERE (mp.agriculture1   LIKE '%".$type."%' OR mp.agriculture2   LIKE '%".$type."%' OR mp.agriculture3   LIKE '%".$type."%' OR mp.agriculture4   LIKE '%".$type."%' OR mp.agriculture5 LIKE '%".$type."%') AND (mp.district  LIKE '%".$district."%' AND mp.block LIKE '%".$block."%') ORDER BY mp.mid ASC ");
		return  $sql1->result_array();
	}
	
	public  function totallandcharthorti($type){
		
		$district = $this->input->get('districtname');
		$block = $this->input->get('blockname');
		
		$sql1 = $this->db->query("SELECT sum(mp.landarea) as totalland,COUNT(mp.mid) as totalmembers  FROM `member_panel` mp LEFT JOIN `pg_panel` pg ON pg.pgid = mp.pgid WHERE (mp.horticulture1   LIKE '%".$type."%' OR mp.horticulture2   LIKE '%".$type."%' OR mp.horticulture3   LIKE '%".$type."%' OR mp.horticulture4   LIKE '%".$type."%' OR mp.horticulture5  LIKE '%".$type."%') AND (mp.district  LIKE '%".$district."%' AND mp.block LIKE '%".$block."%') ORDER BY mp.mid ASC ");
		
		return  $sql1->result_array();
	}
	
	public function totalcommoditywithfilter(){
		
		$district = $this->input->get('districtname');
		$block = $this->input->get('blockname');
		
		$sql1 = $this->db->query("SELECT *  FROM `member_panel` WHERE (agriculture1   != '' OR agriculture2   != '' OR agriculture3   != '' OR agriculture4   != '' OR agriculture5   != '' OR horticulture1   != '' OR horticulture2   != '' OR horticulture3   != '' OR horticulture4   != '' OR horticulture5   != '' OR livestock1   != '' OR livestock2   != '' OR livestock3   != '' OR livestock4   != '' OR livestock5   != '' OR fishery   != '' OR sericulture  != ''  OR others != '') AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%') GROUP BY agriculture1,agriculture2,agriculture3,horticulture1,horticulture2,horticulture3,livestock1,livestock2,livestock3,fishery ORDER BY mid ASC ");
		
		return  $sql1->num_rows();
		
		/*
		$sql1 = $this->db->query("SELECT * FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' AND grampanchayat   LIKE '%".$this->input->get('grampanchayatname')."%' AND village LIKE '%".$this->input->get('villagename')."%' ORDER BY pgname ASC ");
		return  $sql1->result_array();*/
	}
	
	public function totalcommoditynamewithfilter(){
		
		$district = $this->input->get('districtname');
		$block = $this->input->get('blockname');
		
		$sql1 = $this->db->query("SELECT agriculture1,agriculture2,agriculture3,agriculture4,agriculture5,horticulture1,horticulture2,horticulture3,horticulture4,horticulture5,livestock1,livestock2,livestock3,livestock4,livestock5,fishery,sericulture,others FROM `member_panel` WHERE (agriculture1   != '' OR agriculture2   != '' OR agriculture3   != '' OR agriculture4   != '' OR agriculture5   != '' OR horticulture1   != '' OR horticulture2   != '' OR horticulture3   != '' OR horticulture4   != '' OR horticulture5   != '' OR livestock1   != '' OR livestock2   != '' OR livestock3   != '' OR livestock4   != '' OR livestock5   != '' OR fishery   != '' OR sericulture  != ''  OR others != '') AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%') GROUP BY agriculture1,agriculture2,agriculture3,horticulture1,horticulture2,horticulture3,livestock1,livestock2,livestock3,fishery ORDER BY mid ASC ");
		
		return  $sql1->result_array();
		
		/*
		$sql1 = $this->db->query("SELECT * FROM `pg_panel` WHERE district  LIKE '%".$this->input->get('districtname')."%' AND block LIKE '%".$this->input->get('blockname')."%' AND grampanchayat   LIKE '%".$this->input->get('grampanchayatname')."%' AND village LIKE '%".$this->input->get('villagename')."%' ORDER BY pgname ASC ");
		return  $sql1->result_array();*/
	}
	
	
   public function getvacount(){
	   
	  $district = $this->input->get('districtname');
	  $block = $this->input->get('blockname');
	
	  $sql = $this->db->query("SELECT * FROM `pg_panel` WHERE (VAAUS != '' OR  VAAPS  != '' OR VAAKS  != '' OR VAACRP  != '') AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%')");
	  
	  return  $sql->num_rows();
	  
   }
   
   public function getcommoncount($commodity){
	   
	     $district = $this->input->get('districtname');
	     $block = $this->input->get('blockname');
	
	    $sql = $this->db->query("SELECT * FROM `member_panel` WHERE (agriculture1 LIKE '%".$commodity."%' OR agriculture2   LIKE '%".$commodity."%' OR agriculture3   LIKE '%".$commodity."%' OR agriculture4   LIKE '%".$commodity."%' OR agriculture5  LIKE '%".$commodity."%' OR horticulture1   LIKE '%".$commodity."%' OR horticulture2   LIKE '%".$commodity."%' OR horticulture3   LIKE '%".$commodity."%' OR horticulture4  LIKE '%".$commodity."%' OR horticulture5  LIKE '%".$commodity."%' OR livestock1   LIKE '%".$commodity."%' OR livestock2   LIKE '%".$commodity."%' OR livestock3   LIKE '%".$commodity."%' OR livestock4   LIKE '%".$commodity."%' OR livestock5   LIKE '%".$commodity."%' OR fishery  LIKE '%".$commodity."%' OR sericulture  LIKE '%".$commodity."%'  OR others LIKE '%".$commodity."%') AND (district  LIKE '%".$district."%' AND block LIKE '%".$block."%')");
		
		
	  
	  return  $sql->num_rows();
   }
	
  public function savebuyerdetails($data){
	// print_r($data);
	// die();
	  $sql = $this->db->query("INSERT INTO `buyer_details`(`name`, `district`, `block`, `contactno`, `commodity`, `email`, `category`, `sub_category`, `volume_of_sale`, `rate_of_commodity`) VALUES ('".$data['name']."','".$data['district']."','".$data['block']."','".$data['contact']."','".$data['commodities']."','".$data['email']."','".$data['categories']."','".$data['subcategories']."','".$data['volumes']."','".$data['rates']."')");
	  
	  
	  return  true;
	  
	  
  }	
	
		public function getbuyerdetails()
	{		
		
		$qry = $this->db->query('SELECT * FROM buyer_details ORDER BY  last_updated DESC');
		 
		return  $qry->result_array();
		
	}
	
	public function savelandarea($data){
		
		$sql = $this->db->query("INSERT INTO `land_area`(`landarea`,`irrigatedland`,`nonirrigatedland`,`waterbody`,`	grazingland`,`grazingland`) VALUES ('".$data['landarea']."','".$data['agriculturalland']."','".$data['irrigatedland']."','".$data['nonIrrigatedland']."','".$data['waterbodies']."','".$data['grazingland']."')"); 
		
		return true;
	}
	
	public function getlandarea()
	{
	  $qry = $this->db->query('SELECT * FROM land_area ORDER BY  last_updated DESC');
	
	return $qry->result_array();
	}
	
	
	public function getcommoditybycat($category){
				
    $qry = $this->db->query('SELECT DISTINCT commodity FROM commodities WHERE category LIKE "%'.$category.'%"');	
	return $qry->result_array();

	}
	
	public function  updatepg($data,$id){		
			
			$this->db->where('pgid', $id);
			$this->db->update('pg_panel', $data);
		
	}

	/**
	 * District and block data
	 */
	public function get_district_data(){
		$qry = $this->db->query('SELECT DISTINCT dist FROM district');
		$result = $qry->result_array();
		// $districts = array_column($result, 'dist');
		return $result;
	}
	
	public function get_blocks_by_district($district) {
		$qry = $this->db->query('SELECT block FROM district WHERE dist = "'.$district.'"');
		return $qry->result_array();
    }

	/**
	 * Member transaction details
	 */

	public function save_member_transaction_details($data){
		$this->db->insert('member_transaction',$data);
		return $this->db->insert_id();
	 }

	public function update_member_transaction_details($data,$id){
		$this->db->where('id', $id);
		$this->db->update('member_transaction',$data);
	}

	public function get_member_transaction_details($pgid){
		$qry = $this->db->query('SELECT * FROM member_transaction WHERE pgid = "'.$pgid.'"');
		return $qry->result_array();
	}

	public function get_member_transaction_details_current_month($id){
		$qry = $this->db->query('SELECT current_month_payment,cumulative_payment,due_payment FROM member_transaction WHERE id = "'.$id.'"');
		return $qry->row_array();
	}

	public function get_members_by_pg($pgid)
	{
		$qry = $this->db->query('SELECT * FROM member_panel WHERE pgid = "'.$pgid.'"');
		return $qry->result_array();
		// return $this->db->get_where('member_transaction', ['pgid' => $pgid])->result_array();
	}



}
?>