<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		
		parent::__construct();
		$this->load->model('UserM','um');

	}
	public function index()
	{   //ist home view entry as unlogged user by default
		$temp=array(
         'auctions'=>$this->um->selectallauctions(),
         'tags'=>$this->um->selectalltags(),
         'futureauctions'=>$this->um->selectfutureauctions(),
         'pastauctions'=>$this->um->selectpastauctions(),
         'totalauctions'=>$this->um->countAuctions()[0],
         'totalcurrentauctions'=>$this->um->countcurrentAuctions()[0],
         'totalcustomers'=>$this->um->countcustomers()[0],
         'totalfarmers'=>$this->um->countfarmers()[0]
		);
		$this->load->view('homeV',$temp);
	}
	
	public function signup()
	{
		$data=array("city"=>$this->um->selectcity());
		$this->load->view("usersignupV",$data);	

	}
	public function adduser()
	{

		$img=$_FILES['image']['name'];
		copy($_FILES['image']['tmp_name'],"C:/xampp/htdocs/Project/resources/shared/customerimg/".$img);
		$data=array(
		
	"username"=>$this->input->post('username'),
	"password"=>$this->input->post('password'),
	"emailid"=>$this->input->post('emailid'),
	"contact"=>$this->input->post('contactnumber'),
	"cityid"=>$this->input->post('cityid'),
	"bio"=>$this->input->post('bio'),	
	"profilepic"=>$img

      );
		$this->um->insertuser($data);



$sub="E-Farming";
$msg="welcome ". $data["username"] ." to our website";
$rec=$data["emailid"];

if(mail($rec,$sub,$msg))
{
	
}
else
{
	echo "not send";
}

$this->load->view("loginuserV");
	}
	public function validate()
	{
    $_SESSION['av']='no';
		$data=array(
             'username'=>$this->input->post('username'),
             'password'=>$this->input->post('password')
		);
       $info=$this->um->check($data);
       if(count($info)>0)
       {
       	$this->session->set_userdata('username',$info[0]->username);
       	$this->session->set_userdata('userid',$info[0]->userid);
       $this->session->set_userdata('profileimage',$info[0]->profilepic);
          $_SESSION['sw']='';
       	redirect('User/index');//home view for logged customer
       }
       else
       {
         $_SESSION['av']='start';
       
       	$this->load->view('loginuserV.php');
       }
	}
	
	public function profile($uid)
	{
      //        if(empty($_SESSION['username']))
     	// redirect('User/index');
    $data=array('userid'=>$uid);
               $temp=array("data"=>$this->um->profile($data)[0]);
             //  print_r($temp);
		$this->load->view('uprofileV',$temp);
		
	}
	public function logout()
	{
		   unset($_SESSION["username"]);
           unset($_SESSION["userid"]);
           unset($_SESSION["profileimage"]);
			if(isset($_SESSION['farmername']))//if farmername set redirect to farmer page as logged farmer
              redirect('Farmer/index');
            else//else redirect to userpage as unlogged user
              redirect('User/index');
	}
	public function editprofile()
	{
     $a=$this->um->userinfo();
    foreach ($a as $d) {
      $c=$d->cityid;
    }
		$data=array("city"=>$this->um->selectcity(),"info"=>$this->um->userinfo(),"cname"=>$this->um->selectcityname($c));
		//print_r($data);
		$this->load->view('farmereditprofileV',$data);
		
	}
		public function updateuser()
	{

		
		$data=array(
		"username"=>$this->input->post('username'),
	"password"=>$this->input->post('password'),
	"emailid"=>$this->input->post('emailid'),
	"contact"=>$this->input->post('contactnumber'),
	"cityid"=>$this->input->post('cityid'),
	"bio"=>$this->input->post('bio')	
	
      );
		$this->um->edituser($data);
		$_SESSION['username']=$data["username"];
		
     redirect('User/profile/'.$_SESSION['userid']);
	}
	public function updateprofileimage($value='')
	{
		$img=$_FILES['image']['name'];
		copy($_FILES['image']['tmp_name'],"C:/xampp/htdocs/Project/resources/shared/customerimg/".$img);
		$data=array("profilepic"=>$img);
		$this->um->edituser($data);
		
		$_SESSION['profileimage']=$img;
     redirect('User/profile/'.$_SESSION['userid']);
	}
	public function editprofileimage()
	{
		
		$this->load->view('farmereditprofileimageV');
		
	}
	public function timeline()
	{
		
		$data= $this->input->get('data');
		echo $data;
     
              $temp=array("data"=>$this->um->timeline($data));
           
          
           //  print_r($temp);
	
		$this->load->view('timelineV',$temp);
	}
public function timelinec()
	{
		$data= $this->input->get('data');
		if(empty($_SESSION['username']))
     	redirect('Farmer/index');
     
               $temp=array("data"=>$this->fm->timeline($data));
           
          
           //  print_r($temp);
	
		$this->load->view('timelineV',$temp);
	}
	public function forgot()
	{
		$this->load->view('forgotpasswordV');
	}
	public function chk()
	{
	   $data=array(
             'emailid'=>$this->input->post('emailid'));
       $info=$this->um->check($data);
       if(count($info)>0)
       {
         $sub="E-Farming";
         foreach ($info as $e) {
          
         
		 $msg="Username ".  $e->username ." and Password".$e->password;
		}
		 $rec=$data["emailid"];

        if(mail($rec,$sub,$msg))
        {
	 	 redirect('User/');

		}
		 else
       {
        
       	$this->load->view('forgotpasswordV');
       }

      
       }
       else
       {
        
       	$this->load->view('forgotpasswordV');
       }
	}
	function loadloginpage()
	{
		$this->load->view('loginuserV');
	}
	

	function loadbidpage($actid)
    {
    	$d1=time();
		$date=date('Y-m-d H:i:s',$d1);

    	$data=array('auctionid'=>$actid);
    	 $a=$this->um->selectauctionbyid($data)[0];

        if(($date>= $a->enddatetime))//past auctions
        {
        	
        	$d=$this->um->getmaxbid($data)[0];
    	$data2=array('auctionid'=>$actid,'offerprice'=>$d->mofferprice);
            if($d->mofferprice==null)
            {
            	$temp=array(
            'auctiondet'=>$this->um->selectauctionbyid($data)[0],
            'tagdet'=>$this->um->selecttagbyproduct($data),
            'biddet'=>$this->um->selectallbid($data),
            'winnerdet'=>null
             );
            }
            else
            {
            	$temp=array(
            'auctiondet'=>$this->um->selectauctionbyid($data)[0],
            'tagdet'=>$this->um->selecttagbyproduct($data),
            'biddet'=>$this->um->selectallbid($data),
            'winnerdet'=>$this->um->getwinner($data2)[0]
             );
            }
        	
        }
        else if(($date< $a->enddatetime)&&($date> $a->startdatetime))//active auctions
        {
        	$temp=array(
            'auctiondet'=>$this->um->selectauctionbyid($data)[0],
            'tagdet'=>$this->um->selecttagbyproduct($data),
            'biddet'=>$this->um->selectallbid($data)
            // 'winnerdet'=>$this->um->getwinner($data2)[0]
            );
        }
        else
        {
            $temp=array(
            'auctiondet'=>$this->um->selectauctionbyid($data)[0],
            'tagdet'=>$this->um->selecttagbyproduct($data),
            'biddet'=>$this->um->selectallbid($data)
            );	
        }

      $this->load->view('bidpageV',$temp);
    
    }

	    function addbid($actid)
    {
       $data=array(
          'userid'=>$_SESSION['userid'],
          'auctionid'=>$actid,
          'offerprice'=>$this->input->post('offerpricetxt'),
          'description'=>$this->input->post('biddesctxt'),
          'status'=>'working'
          // 'addeddatetime'=>$this->input->post('addeddatetxt'),
       );
       $this->um->insertbid($data);
       redirect('User/loadbidpage/'.$actid);
    }
    function loadtransact()
    {
        $pinfo=$this->um->getpendingauction();//date wise auction selection
    	foreach($pinfo as $p)
    	{
    		 $ad=array('auctionid'=>$p->auctionid);
    	     $mbid=$this->um->getmaxbid($ad)[0];//max price
           if($mbid->mofferprice != null)
           {
               $wdet=array('auctionid'=>$p->auctionid,'offerprice'=>$mbid->mofferprice);//aid n max
           $winner=$this->um->getwinner($wdet)[0];//winning bid and user details
          

        $d1=time();
        $date=date("Y-m-d H:i:s",$d1);

        $data=array(
          'auctionid'=>$p->auctionid,
          'amount'=>$winner->offerprice,
          'userid'=>$winner->userid,
          'farmerid'=>$p->farmerid,
          'createddt'=>$date,
          'status'=>'complete'
        );

       $this->um->transact($data);
       $this->um->sendmessage($p->contactnumber,$winner->offerprice.'Rs. have been credited to your account. You had a Great Bussiness today...!');
       $this->um->sendmessage($winner->contact,$winner->offerprice.'Rs. have been debited from your account. We are sure you invested your money in the right place. Thanks for purchasing');
       $this->um->updateauction($ad);
           }
           else
           {
              $this->um->sendmessage($p->contactnumber,'We are sorry .. You didnt get any bidders for your product');
              $this->um->updateauction($ad);
           }
    	     
    	}
    }
    function loadviewuserprofile($uid)
    {
     
    if(isset($_SESSION['userid']))
    {
       if($_SESSION['userid']==$uid)
       {
         $this->profile($uid);
       }
       else
       {
          $data=array('userid'=>$uid);
        
      $temp=array(
                "data"=>$this->um->profile($data)[0],
             );
             
         $this->load->view('viewuserprofileV.php',$temp);
       }
    }
    else
    {
       $data=array('userid'=>$uid);
        
      $temp=array(
                "data"=>$this->um->profile($data)[0],
             );
             
         $this->load->view('viewuserprofileV.php',$temp);
   
    }
  }
    

function contact()
{
  $this->load->view('contactV.php');
}
   
}
?>
