<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/AdminM","am");
	}

	public function index()//default dashbiz page
	{
		$this->load->view("admin/main");
		
	}
	public function index1()//default dashbiz page
	{
		$this->load->view("admin/index");
	}

	//login start

	public function login()
	{
		$this->load->view("admin/adminlogin");
	}
	public function logout()
	{
		session_destroy();
		redirect("admin/Admin/login");
	}
	public function validatelogin()
	{
		$data=array("username"=>$this->input->post('username'),"password"=>$this->input->post('password'));
		$ld=$this->am->selectlogin($data);
		if(count($ld)>0)
		{
			$_SESSION['adminid']=$ld[0]->adminid;
			$_SESSION['adminname']=$ld[0]->username;
			$_SESSION['adminimg']=$ld[0]->profilepic;
			redirect("admin/Admin/index");
		}
		else
		{
			$tmp = array('MsgErr' =>"Invalid Username or password" );
			$this->load->view("admin/adminlogin",$tmp);
		}
	}

	//login complete

	//Manage Categories start


	public function category()// displaying categories
		{
			$temp=array("cats"=>$this->am->selectallcategory());

			$this->load->view("admin/loadallcats",$temp);
		}
		public function loadaddcategory() // form for adding category..
		{
			$this->load->view("admin/addcat");			
		}
		public function addcategory()
		{
			$data=array("categoryname"=>$this->input->post('categoryname'));
			$this->am->insertcategory($data);
			redirect("admin/Admin/category");
		}
		public function removecategory($cid)
		{	
			$_SESSION['dc']='no';
			$data3=array("categoryid"=>$cid);
			$tgs=$this->am->checkcat($data3);

			if(count($tgs)>0)
            {
            	foreach($tgs as $avl)
                {
                  $tid=$avl->tagid;
                  $data=array('tagid'=>$tid);
                  $avail=$this->am->checktag($data);
                  if(count($avail)>0)
                  {
                  	$_SESSION['dc']="start";
                   // echo "Cannot delete, Category is in use by Customers.";
                     redirect("admin/Admin/category");
                     
                  }
                  else
                  {
                       $data=array("tagid"=>$tid,"categoryid"=>$cid);
			           $this->am->deletetag($data);
                       $this->am->deletecategory($data3);
			           redirect("admin/Admin/category");

                  }
                }

            	
            }
            else
            {
            	
            	//$data4=array("categoryid"=>$cid);
            	$this->am->deletecategory($data3);
			redirect("admin/Admin/category");
            }
			
			
		}
		public function loadeditcategory($id)//loading category for update
		{
			$data=array("categoryid"=>$id);
			$temp=array("catinfo"=>$this->am->selectcatbyid($data));
			$this->load->view("admin/eaddcat",$temp);//eaddcat for editing category
		}

		public function editcategory($id)
		{
			$where=array("categoryid"=>$id);
			$newdata=array("categoryname"=>$this->input->post('categoryname'));
			$this->am->updatecat($newdata,$where);
			redirect("admin/Admin/category");
		}
		
		public function loadallsubcategory($id)// displaying subcategories
		{
			$data=array("c.categoryid"=>$id);
			$temp = array(
				"subcat"=> $this->am->selectsubcatbyid($data),"categoryid"=>$id);
			$this->load->view("admin/loadallsubcats",$temp);			
		}
		public function loadalltag($id)// displayingtags
		{
			$data=array("c.categoryid"=>$id);
			$temp = array(
				"tags"=> $this->am->selecttagbyid($data),
				"categoryid"=>$id);
			$this->load->view("admin/loadalltags",$temp);			
		}
		public function loadaddtag($cid)// form for adding sub category..
		{
			$temp=array('categoryid'=>$cid);
			$this->load->view("admin/addtag",$temp);			
		}
		public function loadedittag($tid,$cid)//loading subcategory for update
		{
			$data=array("tagid"=>$tid,"categoryid"=>$cid);
			$temp=array("taginfo"=>$this->am->selectttagbyid($data),"categoryid"=>$cid);
			$this->load->view("admin/eaddtag",$temp);//eaddsubcat for editing sub category
		}
		public function addtag($cid)
		{
			$data=array("tagname"=>$this->input->post('tagname'),
				"categoryid"=>$cid);
			$this->am->inserttag($data);
			redirect("admin/Admin/loadalltag/$cid");// load hona chahiye ye loadallsubcategory pr error aarha hai..
		}
		public function removetag($tid,$cid)
		{
				$_SESSION['dt']='no';
			$data=array("tagid"=>$tid,"categoryid"=>$cid);
			$data2=array("tagid"=>$tid);
			$avail=$this->am->checktag($data2);
                  if(count($avail)>0)
                  {
                  	$_SESSION['dt']='start';
                     //echo "Cannot delete, Tag is in Use by Customers";
                  	redirect("admin/Admin/loadalltag/$cid");
                  }
                  else
                  {
                      $this->am->deletetag($data);
			redirect("admin/Admin/loadalltag/$cid");// load hona chahiye ye loadallsubcategory pr error aarha hai..

                  }
			
		}
		public function edittag($tid,$cid)
		{
			$where=array("tagid"=>$tid,"categoryid"=>$cid);
			$newdata=array(
				"tagname"=>$this->input->post('tagname')	
		);
			$this->am->updatetag($newdata,$where);
			redirect("admin/Admin/loadalltag/$cid");// load hona chahiye ye loadallsubcategory pr error aarha hai..
		}

		// Manage Categories Over

		//Profile Start

		public function profiles()
		{
			
			$this->load->view('admin/profiles');
		}
		public function adminview()
		{
			$temp=array("profile"=>$this->am->selectalladmin());
				$this->load->view('admin/adminview',$temp);
		}
		public function adminview1($aid)
		{
			$data = array('adminid' => $aid );
			$temp=array("profile"=>$this->am->selectalladmin1($data));
			$this->load->view('admin/adminview1',$temp);
		}
		public function updateadmin()
		{
			$img=$_FILES['image']['name'];
			//echo $img;	
			if(empty($img))
			{
			  
			       $info=array('username'=>$this->input->post('user'),
			 			'password'=>$this->input->post('pass1'),
			 			'emailid'=>$this->input->post('email'),
						'contact'=>$this->input->post('cno')
					 );
			    $this->am->updateadmin($info);
			   $_SESSION['adminname']=$this->input->post('user');

			  // echo "aaa";
			  $this->load->view('admin/profiles');
			}
			else
		   {
			  $img=  $_FILES['image']['name'];
			      copy($_FILES['image']['tmp_name'], "C:/xampp/htdocs/Project/resources/admin/images/".$img);
                 $info=array('username'=>$this->input->post('user'),
			 			'password'=>$this->input->post('pass1'),
			 			'emailid'=>$this->input->post('email'),
						'contact'=>$this->input->post('cno'),
						'profilepic'=>$img
					 );
			     $this->am->updateadmin($info);
			     $_SESSION['adminname']=$this->input->post('user');
			     $_SESSION['adminimg']=$img;
//echo "AD";
			   $this->load->view('admin/profiles');
			
		   }
		

		}
		public function userview()
		{
			$temp=array("users"=>$this->am->selectalluser());
				$this->load->view('admin/userview',$temp);
		}

		public function farmerview()
		{
			$temp=array("farmers"=>$this->am->selectallfarmer());
				$this->load->view('admin/farmerview',$temp);
		}
		//Profile Over


}