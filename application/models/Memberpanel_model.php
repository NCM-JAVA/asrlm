<?php
class Memberpanel_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
       
             
    }
	 
 
 
 /*** Insert Client Entry ***/
	
	public function insert_memberpanel($data)		 
	{
		$this->db->insert('member_table',$data);
        
   
	}
	
	public function insertmember($data)	 
	{
		$this->db->insert('member_panel',$data);
        
   
	}
	
	public function insertverfierdata($vdata)	 
	{
		$this->db->insert('verifier_panel',$vdata);
        
   
	}
	
	public function getvdatalist()
	{		
		$qry = $this->db->query('SELECT mp.*,pgp.pgname,mp.name as membername FROM member_panel mp LEFT JOIN pg_panel pgp ON mp.pgid = pgp.pgid WHERE mp.name LIKE "%'.trim(strtolower($this->input->post('searchtxt'))).'%" OR pgp.pgname LIKE "%'.trim(strtolower($this->input->post('searchtxt'))).'%" ORDER BY  mp.last_updated,mp.verifierapprover ASC');
		 
		return  $qry->result_array();
		
	}
	
	
	public function getadatalist()
	{		
		$qry = $this->db->query('SELECT mp.*,pgp.pgname,mp.name as membername FROM member_panel mp LEFT JOIN pg_panel pgp ON mp.pgid = pgp.pgid WHERE (mp.name LIKE "%'.trim(strtolower($this->input->post('searchtxt'))).'%" OR pgp.pgname LIKE "%'.trim(strtolower($this->input->post('searchtxt'))).'%") AND mp.isverified = "1"  ORDER BY  mp.isrejected ASC');
		 
		return  $qry->result_array();
		
	}
	

		
	/**** Update entry Member***/
	
	public function  updatemember($data,$id){		
			
			$this->db->where('mid', $id);
			$this->db->update('member_panel', $data);
		
	}
	
	
	/**** Update entry PG***/
	
	public function  updatepg($data,$id){		
			
			$this->db->where('pgid', $id);
			$this->db->update('pg_panel', $data);
		
	}
	
	/*** organization search ***/
	
	public function getmemberslistsearch($searhcentry)
	   {
		   
		$sql=$this->db->query("SELECT  m.*,pg.pgname FROM member_panel  m LEFT JOIN pg_panel pg ON m.pgid = pg.pgid WHERE m.name LIKE '%".trim($searhcentry)."%' OR 	
        m.SHGname LIKE '%".trim($searhcentry)."%' OR m.SHGcode LIKE '%".trim($searhcentry)."%'");
		return $sql->result_array();
	   }
	   /*** pagination in Members ***/
	
	 public function getmemberslist($limit,$offset,$search)
	{
	   $sql = $this->db->query('SELECT m.*,pg.pgname FROM member_panel m LEFT JOIN pg_panel pg ON m.pgid = pg.pgid ORDER BY  m.mid  DESC LIMIT '.$offset.','.$limit);
		return $sql->result_array();	  
    }
	 
    public function getmemberslistcount()
	{
	   $sql = $this->db->query('SELECT mid FROM member_panel');
		return $sql->num_rows();	
    }	
		
	public function getmemberdetail($mid){
		
		 $sql = $this->db->query('SELECT m.*,pg.pgname FROM member_panel m LEFT JOIN pg_panel pg ON m.pgid = pg.pgid WHERE mid = "'.$mid.'"');
		 return $sql->result_array();	
		
	}
	
	public function deletemem($id){
			$this->db->delete('member_panel', array('mid' => $id));			
	}
	
	public function rejectmember($memberid,$userid,$remarks)
	{
			
		$sql = $this->db->query("UPDATE `member_panel` SET verifierapprover = '3', isrejected = '1', rejectedby = '".$userid."',remarks = '".$remarks.'~~'.date('d-m-Y h:i:s A')."',rejecteddate  = '".date('d-m-Y h:i:s A')."' WHERE mid = ".$memberid."");
		
	
		return true;	  
		
	}

	
    public function veridfymember($memberid,$userid)
	{
		
		$sql = $this->db->query("UPDATE member_panel SET verifierapprover = '1',isverified = '1',verifyby = '".$userid."',verifydate = '".date('d-m-Y h:i:s A')."' WHERE mid = '".$memberid."'");
		return true;	  
		
	}
	
	public function approvemember($memberid,$userid)
	{
		
		$sql = $this->db->query("UPDATE member_panel SET verifierapprover = '2',isapproved = '1',approvedby = '".$userid."',approvedate = '".date('d-m-Y h:i:s A')."' WHERE mid = '".$memberid."'");
		return true;	  
		
	}
	
}