<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    function __construct() 
    {
        parent::__construct();
        $this->data = array();
        $this->load->model('user_model');		
        $this->load->model('Assignmodule_model');		
        $this->load->model('usergroup_model');
		error_reporting(0);
    }

    public function index() 
    {
        $admin_session = $this->session->userdata('admin_session');        
        if ($admin_session['active'] == TRUE)
        {
           redirect('user-profile');
        }
        else 
            $this->doLogin();
    }
    
    /*
        @Description : Check Login is valid or not (Admin login)
        @Author      : Kashyap Padh
        @Input       : useremail, passowrd and / or useremail
        @Output      : true or false
        @Date        : 21-09-2013
    */
    public function doLogin() 
    {
			
        $email           = $this->input->post('email');
        $password        = $this->input->post('password');
        $forgot_password = $this->input->post('forgotpwd');
		
        if($forgot_password)
        {
            $this->forgetpw_action();
        }
        else
        {            
            if($email && $password)
            {                
                $field = array('sha_key');
                $match = array('email'=>$email);
                $sha = $this->user_model->getuser($field,$match,'','=');                
                if($sha)
                {
                    $sha = $sha[0]['sha_key'];
                   
                    $password = sha1($password.$sha);
                    $result = $this->user_model->check_login($email, $password);
                    $field = array('id','name','email','profile_img','user_group_id','status');
                    $match = array('email'=>$email,'password'=>$password);
                    $udata = $this->user_model->getuser($field, $match,'','=');
                
                    if(count($udata) > 0)
                    {
                        if($udata[0]['status']==1)
                        {    
                        $user_group = $this->user_model->getuser_type($udata[0]['user_group_id']);
                        $group_type = $user_group[0]['group_type'];
                        $newdata = array(
                                'name'  => $udata[0]['name'],
                                'id' =>$udata[0]['id'],
                                'useremail' =>$udata[0]['email'],
                                'group_type' =>$group_type,
                                'user_group_id'=>$udata[0]['user_group_id'],
				                'profile_pic'=>$udata[0]['profile_img'],																												'profile_img' =>$udata[0]['profile_img'],
                                'active' => TRUE);
                        $this->session->set_userdata('admin_session', $newdata);
						$fields=array('module_id');
                                                
                        $match=array('user_id'=>$udata[0]['id']);
                        $assmodule=$this->Assignmodule_model->getassignmodule($fields,$match,'','=');
                        
                        if($_POST['remember']) {
                                $month = time() + (60 * 60 * 24 * 30);
                            setcookie('remember', $_POST['email'], $month);
                            setcookie('username', $_POST['email'], $month);
                            setcookie('password',$_POST['password'], $month);
                        }
                        else
                        {
                            if(isset($_COOKIE['username']))
                                  setcookie('username','',1);
                           if(isset($_COOKIE['remember']))
                                  setcookie('remember','',1);
                            if(isset($_COOKIE['password']))
                                  setcookie('password','',1);
                        }    
                        // redirect('user-profile');
                        redirect('overview');
                        }
                        else
                        {
                         $this->data['msg'] = " Your Account is Inactive";
                        //$this->load->view('login',$this->data); 
						$this->load->view('loginform/loginform',$this->data);
                        }   
                    }
                    else
                    {
                        $this->data['msg'] = "Invalid user name or password";
                       $this->load->view('loginform/loginform',$this->data);
                    }
                }
                else
                {
                    $this->data['msg'] = "<span style='color:#ff0000;'>Invalid user name or password</span>";
                    $this->load->view('loginform/loginform',$this->data);
                }
            }
            else
                $this->load->view('loginform/loginform',$this->data);
        }
    }   
    
    /*
        @Description : Function to generate password and email the same to user
        @Author      : Kashyap Padh
        @Input       : email address
        @Output      : password to the email address
        @Date        : 21-09-2013
    */
    public function forgetpw_action()
    {
        $email = strip_tags($this->input->post('email'));
        if(isset($email))
        {
            $fields=array('id','name');
            $arr=array('email'=> $email);
            $result = $this->user_model->getuser($fields,$arr,'','=');
            if($result)
            {
                $gen_pw = $this->randr(8);
                $sha = uniqid(mt_rand(), true);
                $pass = sha1($gen_pw.$sha);
                $forget_pw = $this->user_model->forgetpw($email,$pass,$sha);

                if($forget_pw == 1)
                {                    
                    $sub = "Amazon API : New Password ";                    
                    $msg = '<body>
                    <table width="750" border="0" cellspacing="0" cellpadding="5" style="border:5px solid #333; background:#f0f0f0;">
                    <tr style="padding-left:5px"><th>
                    <h1 id="logo" style="float:left;">
                    <a href="'.$this->config->item("base_url").'"icons"><img src="'.base_url().'/images/admin/logo1.png" align="logo"  title="Olivenation" alt="logo"></a>
                    </h1>
                    </th></tr>
                    <tr style="padding-left:5px;margin-left:5px">
                    <td align="left"><h2 style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#333;">Hello <span style="color:#990000;">'.ucfirst($result[0]['name']).',</span></h2></td>
                    </tr>
                    
                    <tr style="padding-left:5px;margin-left:5px">
                    <td style="color:#333; font-size:14px; font-family:Arial, Helvetica, sans-serif; text-align:left;">Your New password is : <b>'.$gen_pw.'</b></td>
                    </tr>
                    <tr style="padding-left:5px;margin-left:5px">
                    <td height="20">&nbsp;</td>
                    </tr>
                    <tr style="padding-left:5px;margin-left:5px">
                    <td style="color:#333; font-size:14px; font-family:Arial, Helvetica, sans-serif; text-align:left;">Thanks,<br>Olivenation Admin</td>
                    </tr>
                    <tr>
                    <td height="10">&nbsp;</td>
                    </tr>
                    </table>
                    </body>';

                    unset($config);
                    $this->load->library('email');
                  
                    $config['charset']   =  'utf-8';
                    $config['wordwrap']  = TRUE;
                    $config['protocol']  = 'smtp';
                    $config['smtp_port'] = '587';
                    $config['smtp_host'] = 'smtp.hostinger.in';
                    $config['smtp_user'] = 'test@uniformshop.co.in';  
                    $config['smtp_pass'] = 'Alldone?123';  
                    $config['mailtype']  = 'html';
                    $config['newline']   = "\r\n";
                    $this->load->library('email', $config);

                    $this->email->initialize($config);
                    $this->email->from('info@uniformshop.in',"Administrator");                
                    $this->email->to($email);                
                    $this->email->subject($sub);
                    $this->email->message($msg);	
                    $this->email->send();
                }
                $this->data['msg'] = "Mail sent successfully";                
            }
            else
                $this->data['msg'] = "No such user found";
        }
        else
            $this->data['msg'] = "No such user found";
        
        $this->load->view('loginform/loginform',$this->data);
    }
    
    /*
        @Description : Function to generate random password
        @Author      : Kashyap Padh
        @Input       : length of password 
        @Output      : generated password
        @Date        : 21-09-2013
    */
    public function randr($j = 8)
    {
        $string = "";
        for($i=0;$i < $j;$i++)
        {
            srand((double)microtime()*1234567);
            $x = mt_rand(0,2);
            switch($x)
            {
                case 0:$string.= chr(mt_rand(97,122));break;
                case 1:$string.= chr(mt_rand(65,90));break;
                case 2:$string.= chr(mt_rand(48,57));break;
            }
        }
        return strtoupper($string);
    }
	
	public function logout()
	{
		session_destroy();
		redirect('login');
	}
		
    
}