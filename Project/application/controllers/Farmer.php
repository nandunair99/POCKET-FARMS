<?php

defined('BASEPATH') or die("Direct access to code not allowed");
class Farmer extends CI_Controller
{
  public $img='';
	public $img1='';
	public $img2='';
	
	function __construct()
  {
    
    parent::__construct();
    $this->load->model('farmerM','fm');
    $this->load->model('userM','um');

  }
  function index()
  {
    $temp=array(
         'auctions'=>$this->fm->selectallauctions(),
         'tags'=>$this->fm->selectalltags(),
         'futureauctions'=>$this->fm->selectfutureauctions(),
         'pastauctions'=>$this->fm->selectpastauctions(),
         'totalauctions'=>$this->fm->countAuctions()[0],
         'totalcurrentauctions'=>$this->fm->countcurrentAuctions()[0],
         'totalcustomers'=>$this->fm->countcustomers()[0],
         'totalfarmers'=>$this->fm->countfarmers()[0]
            );
    $this->load->view('homeV',$temp);
  }
	
  function fetch()
  {
   
    $query='';

    if($this->input->post('query'))    //data:{query:query} if set then
    {
      $query=$this->input->post('query');
    }
    $data=$this->fm->fetch_data($query);
    $this->ajaxdata($data);
    
  }
    function loadupload()
	{

		$temp=array(
          'category'=>$this->fm->selectcategory()
		);
		$this->load->view('uploadProductsV',$temp);
	}
	function addproduct()
	{
		
        if(isset($_POST['uploadprodbtn']))
        { 
        $data=array(
            'title'=>$this->input->post('prodnametxt'),
            'categoryid'=>$this->input->post('categorytxt'),
            'productimage'=>$_SESSION['productimg'],
            'description'=>$this->input->post('proddesctxt'),
            'season'=>$this->input->post('seasontxt')
        );
        $this->fm->insertproduct($data);
        $pid=$this->fm->lastproduct();
        $ts=$this->input->post('tags');
        foreach($ts as $t)
        {
        	 $data2=array('tagid'=>$t,'productid'=>$pid);
        	$this->fm->inserttag($data2);
        }
       
        
        $this->addauction($pid);
        }
      
  redirect('Farmer/index');

	}

	function addauction($pid)
	{
		echo $this->img2;
        $data=array(
            'title'=>$this->input->post('auctnametxt'),
            'productid'=>$pid,
            'askedprice'=>$this->input->post('startpricetxt'),
            'quantity'=>$this->input->post('quantity'),
            'description'=>$this->input->post('auctdesctxt'),
            'featuredimage'=>$_SESSION['auctionimg'],
            'farmerid'=>$_SESSION['farmerid'],
            'isaddedbyadmin'=>$this->input->post('byadmin'),
            'startdatetime'=>$this->input->post('startdatetxt'),
            'enddatetime'=>$this->input->post('enddatetxt'),
            'status'=>'pending'
            // 'addeddatetime'=>$this->input->post('addeddatetxt')
            
        );
        $this->fm->insertauction($data);
       // redirect('Farmer/loadupload');
         $aid=$this->fm->lastauction();
         $filecnt=count($_FILES['files3']['name']);
     
      for($i=0;$i<$filecnt;$i++)
      {
          $fname=$_FILES['files3']['name'][$i];
          $data=array(
          'auctionid'=>$aid,
          'imageurl'=>$fname,
          'description'=>'nothing much'
        );
        $this->fm->insertauctionimg($data);
      }

	}
  function uploadproductimg()
  {
     if(!empty($_FILES['files']['name']))
     {
        $this->img1=$_FILES['files']['name'];
    copy($_FILES['files']['tmp_name'],'C:/xampp/htdocs/Project/resources/shared/productimg/'.$this->img1);
    $_SESSION['productimg']=$this->img1;
     }
  }
  function uploadauctionimg()
  {
     if(!empty($_FILES['files2']['name']))
     {
        $this->img2=$_FILES['files2']['name'];
    copy($_FILES['files2']['tmp_name'],'C:/xampp/htdocs/Project/resources/shared/auctionimg/'.$this->img2);
    $_SESSION['auctionimg']=$this->img2;
     }
  }
  public function updateproduct()
  {
    $pid=$this->input->get('pid');
    $aid=$this->input->get('aid');
    echo $pid;
    echo $aid;
    if(empty($_FILES['files']['name']))
    {
       $data=array(
            'title'=>$this->input->post('prodnametxt'),
            'categoryid'=>$this->input->post('categorytxt'),
            
            'description'=>$this->input->post('proddesctxt'),
            'season'=>$this->input->post('seasontxt')
        );
        $this->fm->updateproduct($data,$pid);
    
    }
    else
    {
      $this->img1=$_FILES['files']['name'];
    copy($_FILES['files']['tmp_name'],'C:/xampp/htdocs/Project/resources/shared/productimg/'.$this->img1);
    $_SESSION['productimg']=$this->img1;
    $data=array(
            'title'=>$this->input->post('prodnametxt'),
            'categoryid'=>$this->input->post('categorytxt'),
            'productimage'=>$_SESSION['productimg'],
            'description'=>$this->input->post('proddesctxt'),
            'season'=>$this->input->post('seasontxt')
        );
        $this->fm->updateproduct($data,$pid);
    }
     if(empty($_FILES['files2']['name']))
    {
      $sd=$this->input->post('startdatetxt');
      if($sd==0)
      {
        $data=array(
            'title'=>$this->input->post('auctnametxt'),

            'askedprice'=>$this->input->post('startpricetxt'),
            'quantity'=>$this->input->post('quantity'),
            'description'=>$this->input->post('auctdesctxt'),
            
            'farmerid'=>$_SESSION['farmerid'],
            //'isaddedbyadmin'=>,
            //'startdatetime'=>$this->input->post('startdatetxt'),
            'enddatetime'=>$this->input->post('enddatetxt'),
            'addeddatetime'=>$this->input->post('addeddatetxt')
            
        );
      }
      else
      {
        $data=array(
            'title'=>$this->input->post('auctnametxt'),

            'askedprice'=>$this->input->post('startpricetxt'),
            'quantity'=>$this->input->post('quantity'),
            'description'=>$this->input->post('auctdesctxt'),
            
            'farmerid'=>$_SESSION['farmerid'],
            //'isaddedbyadmin'=>,
            'startdatetime'=>$this->input->post('startdatetxt'),
            'enddatetime'=>$this->input->post('enddatetxt'),
            'addeddatetime'=>$this->input->post('addeddatetxt')
            
        );
      }
        
        $this->fm->updateauction($data,$aid);
      
    }
    else
    {
      $this->img2=$_FILES['files2']['name'];
    copy($_FILES['files2']['tmp_name'],'C:/xampp/htdocs/Project/resources/shared/auctionimg/'.$this->img2);
    $_SESSION['auctionimg']=$this->img2;
    $sd=$this->input->post('startdatetxt');
      if($sd==0)
      {
         $data=array(
            'title'=>$this->input->post('auctnametxt'),
            
            'askedprice'=>$this->input->post('startpricetxt'),
            'quantity'=>$this->input->post('quantity'),
            'description'=>$this->input->post('auctdesctxt'),
            'featuredimage'=>$_SESSION['auctionimg'],
            'farmerid'=>$_SESSION['farmerid'],
            //'isaddedbyadmin'=>,
            //'startdatetime'=>$this->input->post('startdatetxt'),
            'enddatetime'=>$this->input->post('enddatetxt'),
            'addeddatetime'=>$this->input->post('addeddatetxt')
            
        );
      }
      else
      {
            $data=array(
            'title'=>$this->input->post('auctnametxt'),
            
            'askedprice'=>$this->input->post('startpricetxt'),
            'quantity'=>$this->input->post('quantity'),
            'description'=>$this->input->post('auctdesctxt'),
            'featuredimage'=>$_SESSION['auctionimg'],
            'farmerid'=>$_SESSION['farmerid'],
            //'isaddedbyadmin'=>,
            'startdatetime'=>$this->input->post('startdatetxt'),
            'enddatetime'=>$this->input->post('enddatetxt'),
            'addeddatetime'=>$this->input->post('addeddatetxt')
            
        );
      }
     
        $this->fm->updatetauction($data,$aid);
    }

      redirect('Farmer/editallproduct');
  }

  function addmoreimages()
  { 
    if(!empty($_FILES['files3']['name']))
    {
      $filecnt=count($_FILES['files3']['name']);
     
      for($i=0;$i<$filecnt;$i++)
      {
        $fname=$_FILES['files3']['name'][$i];
        copy($_FILES['files3']['tmp_name'][$i],'C:/xampp/htdocs/Project/resources/shared/auctionimg/'.$fname);
        // echo '<div class="col-md-3">
        //           <img src="'.base_url('resources/shared/auctionimg/'.$fname).'" class="img-responsive img-thumbnail"/>
        //       </div>';
      }

    }
  }
	function loadtags($cid)
	{
       $data=array('categoryid'=>$cid);
       $tinfo=$this->fm->selecttagbycategory($data);
       foreach($tinfo as $t)
       {?><div class="col-md-3">
           <input type="checkbox" name="tags[]" value="<?php echo $t->tagid;?>">
           <label><?php echo $t->tagname; ?></label>
       </div>
           <?php
           
       }
	}
  function loadallproducts()
  {
    $this->load->view('allProductsV');
  }
  function loadsingleproduct($actid)
  {
    $data=array('auctionid'=>$actid);
    $temp=array(
      'moreimages'=>$this->fm->selectmoreimages($data),
      'auctiondet'=>$this->fm->selectauctionbyid($data)[0],
      'tagdet'=>$this->fm->selecttagbyproduct($data)
    );
    $this->load->view('singleProductV',$temp);
  }
	
  function loadproductby($col,$id)
  {
   $where=array($col=>$id);//load product by col and value in dropdown
   $data=$this->fm->selectproductby($where); 
   $this->ajaxdata($data);
  }
   function loadproductbyprice($val)
  {
       
        $data=$this->fm->selectproductbyprice($val); 
         $this->ajaxdata($data);
       
  }
   function loadproductbyrate($val)
  {
       $dat=$this->fm->farmerbyreview($val);
       
       foreach ($dat as $dd) {
        $d=$dd->farmerid;
        $data=$this->fm->selectproductbyrate($d); 
        $this->ajaxdata($data);
       }
        
       
  }
  function loadproductbytags($tname)
  {
    $where=array('tagname'=>$tname);
    $data=$this->fm->selectproductbytag($where);
    $this->ajaxdata($data);
  }
  function ajaxdata($data)//displays each product in ajax
  {
    if(count($data) > 0)
    {
       foreach($data as $row )
       {
       
          echo '<!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="'. base_url('resources/shared/auctionimg/'.$row->featuredimage).'" alt="Product Image">
                            <div class="prod_btn">
                                <a href="'.site_url('Farmer/loadsingleproduct/'.$row->auctionid).'" class="transparent btn--sm btn--round">More Info</a>
                                
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="'.base_url('resources/user/single-product.html').'" class="product_title">
                                <h4> '.$row->atitle.'</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="'.base_url('resources/shared/farmerimg/'.$row->profileimage).'" alt="author image">
                                    <p>
                                        <a href="'.site_url('Farmer/loadviewfarmerprofile/'.$row->farmerid).'">'.$row->fullname.'</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>'.$row->categoryname.'</a>
                                </li>
                            </ul>

                            <span><b>Product Name: </b>'.$row->ptitle.'<br/>
                                  <b>Auction Name: </b>'.$row->atitle.'<br/>
                                  <b>Minimum Quantity: </b>'.$row->quantity.' kgs<br/>
                                  <b>City: </b>'.$row->cityname.'<br/>
                            </span>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span><i class="fa fa-inr"></i>'.$row->askedprice.' Onwards</span>
                                <p>
                                    
                            </div>
                            <div class="sell">
                                <p>
                                    <b>'.$row->status.'</b>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->
';
       }
    }
    else
    {
      echo '<span>No records found...</span>';
    }

  }

  public function signup()
  {
    $data=array("city"=>$this->fm->selectcity());
    $this->load->view("farmersignupV",$data); 

  }
  public function addfarmer()
  {
 $img=$_FILES['image']['name'];
    copy($_FILES['image']['tmp_name'],"C:/xampp/htdocs/Project/resources/shared/farmerimg/".$img);
    $data=array(
    "fullname"=>$this->input->post('fullname'),
  "username"=>$this->input->post('username'),
  "password"=>$this->input->post('password'),
  "cityid"=>$this->input->post('cityid'),
  "address"=>$this->input->post('address'),
  "aadharnumber"=>$this->input->post('aadharnumber'),
  "emailid"=>$this->input->post('emailid'),
  "contactnumber"=>$this->input->post('contactnumber'),
  "optionalnumber"=>$this->input->post('optionalnumber'),
  "bio"=>$this->input->post('bio'), 
  "profileimage"=>$img

      );
    $dat=array('username'=>$this->input->post('username'));
    $i=$this->fm->selectuname($dat);
    if(count($i)>0)
    {
      $_SESSION['nandu']='';
      $data=array("city"=>$this->fm->selectcity());
    $this->load->view("farmersignupV",$data); 
    }
    else
    {
    $this->fm->insertfarmer($data);

      

$sub="E-Farming";
$msg="welcome ". $data["fullname"] ." to our website";
$rec=$data["emailid"];

if(mail($rec,$sub,$msg,))
{
  
}
else
{
  echo "not send";
}

$this->load->view("loginfarmerV");
  }
}
  public function validate()
  {
      $_SESSION['ad']='no';
    $data=array(
             'username'=>$this->input->post('username'),
             'password'=>$this->input->post('password')
    );
       $info=$this->fm->check($data);
       if(count($info)>0)
       {
        $this->session->set_userdata('farmername',$info[0]->username);
        $this->session->set_userdata('farmerid',$info[0]->farmerid);
       $this->session->set_userdata('fprofileimage',$info[0]->profileimage);
          $_SESSION['sw']='';
    
        redirect('Farmer/index');//home for logged in as farmer
       }
       else
       {
         $_SESSION['ad']='start';
       
        $this->load->view('loginfarmerV');
       }
  }
  
   public function profile($fid)
  {
      //        if(empty($_SESSION['farmername']))
      // redirect('Farmer/index');
    $data=array('f.farmerid'=>$fid);
    $dat=array('farmerid'=>$fid);
               $temp=array(
                "data"=>$this->fm->profile($data),
                "data2"=>$this->fm->myallproducts($data),
                "data3"=>$this->fm->countreview($dat),
                "data4"=>$this->fm->farmerSold($dat)[0]
             );
             //  print_r($temp);
    $this->load->view('profileV',$temp);
    
  }
  public function logout()
  {
    unset($_SESSION["farmername"]);
    unset($_SESSION["farmerid"]);
    unset($_SESSION["fprofileimage"]);
    if(isset($_SESSION['username']))//if username set then redirect to user page as logged user
      redirect('User/index');
    else
      redirect('Farmer/index');//else redirect to farmer page as unlogged farmer
  }
  public function editprofile()
  {
    $a=$this->fm->farmerinfo();
    foreach ($a as $d) {
      $c=$d->cityid;
    }

    $data=array("city"=>$this->fm->selectcity(),"info"=>$this->fm->farmerinfo(),"cname"=>$this->fm->selectcityname($c));
    //print_r($data);
    $this->load->view('farmereditprofileV',$data);
    
  }
  public function deleteeditproduct($aid,$pid)
  {
      $data=array("productid"=>$pid);
      $data1=array("auctionid"=>$aid);
      
      $this->fm->deleteproduct($data,$data1);
      redirect("Farmer/editallproduct");
  }
  public function editproduct()
  {
    $id=$this->input->get('id');
    $in=$this->fm->getproductinfo($id);
    
    foreach ($in as $b) {
      $a=$b->productid;   
    }
    $info=$this->fm->selectproduct($a);
    foreach ($info as $aa) {
      $ab=$aa->categoryid;
          }
    

    $data=array('data'=>$in,'da'=>$info,'category'=>$this->fm->selectcategory(),'c'=>$this->fm->selectcategory1($ab));
    
  $this->load->view('editproduct.php',$data);
  }
    public function editallproduct()
  {
     $data1=array('f.farmerid'=>$_SESSION['farmerid']);
   
   // print_r($info);
    $data=array('data'=>$this->fm->myallproducts($data1),'daa'=>$this->fm->complete());
    $this->load->view('editallproductV.php',$data);
  }

    public function updatefarmer()
  {

    
    $data=array(
    "fullname"=>$this->input->post('fullname'),
  "username"=>$this->input->post('username'),
  "password"=>$this->input->post('password'),
  "cityid"=>$this->input->post('cityid'),
  "address"=>$this->input->post('address'),
  "aadharnumber"=>$this->input->post('aadharnumber'),
  "emailid"=>$this->input->post('emailid'),
  "contactnumber"=>$this->input->post('contactnumber'),
  "optionalnumber"=>$this->input->post('optionalnumber'),
  "bio"=>$this->input->post('bio')
  
      );
    $this->fm->editfarmer($data);
    $_SESSION['farmername']=$data["username"];
    
     redirect('Farmer/profile/'.$_SESSION['farmerid']);
  }
  public function updateprofileimage($value='')
  {
    $img=$_FILES['image']['name'];
    copy($_FILES['image']['tmp_name'],"C:/xampp/htdocs/Project/resources/shared/farmerimg/".$img);
    $data=array("profileimage"=>$img);
    $this->fm->editfarmer($data);
    
    $_SESSION['fprofileimage']=$img;
     redirect('Farmer/profile/'.$_SESSION['farmerid']);
  }
  public function editprofileimage()
  {
    
    $this->load->view('farmereditprofileimageV');
    
  }
  public function timeline()
  {
    
    $data= $this->input->get('data');
    if(empty($_SESSION['farmername']))
      redirect('Farmer/index');
     
               $temp=array("data"=>$this->fm->timeline($data));
           
          
           //  print_r($temp);
  
    $this->load->view('timelineV',$temp);
  }
  public function loadtimeline($fid)
  {

    
    
    // if(empty($_SESSION['farmername']))
    //   redirect('Farmer/index');
    
     
               $temp=array("data"=>$this->fm->ltimeline($fid),"fd"=>$fid);
           
          
           //  print_r($temp);
  
    $this->load->view('timelinevV',$temp);
  
  }
 
public function timelinec()
  {
    $data= $this->input->get('data');
    if(empty($_SESSION['farmername']))
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
       $info=$this->fm->check($data);
       $tem=array();
       if(count($info)>0)
       {
         $sub="E-Farming";
         foreach ($info as $e) {
          
         
     $msg="Username ".  $e->username ." and Password".$e->password;
    }
     $rec=$data["emailid"];

        if(mail($rec,$sub,$msg))
        {
     redirect('Farmer/');

    }

      
       }
       else
       {
        
        $this->load->view('forgotpasswordV');
       }
  }
  function loadloginpage()
  {
    $this->load->view('loginfarmerV');
  }

   function allauctionimg()
 {
  $id=array('auctionid'=>$_GET['id']);
  $_SESSION['aid']=$_GET['id'];
 $data= array('info'=>$this->fm->allauctionimg($id));
 
   $this->load->view('allauctionimageV',$data);
 }
  function editauctionimage()
  {
    if(!empty($_FILES['ig']['name']))
    {
    $i=array('auctionimageid'=>$_GET['id']);

    $im=$_FILES['ig']['name'];
    // echo $im;
     //print_r($i);
    copy($_FILES['ig']['tmp_name'],'C:/xampp/htdocs/Project/resources/shared/auctionimg/'.$im);
   
    $data=array('imageurl'=>$im);
    $this->fm->editauctionimage($i,$data);
    redirect('Farmer/allauctionimg?id='.$_SESSION['aid']);
   }
    redirect('Farmer/allauctionimg?id='.$_SESSION['aid']);
  
  }

  function loadviewfarmerprofile($fid)
  {
    if(isset($_SESSION['farmerid']))
    {
       if($_SESSION['farmerid']==$fid)
       {
         $this->profile($fid);
       }
       else
       {
         $data=array('f.farmerid'=>$fid);
    
    
         $dat=array('farmerid'=>$fid);
         $temp=array(
                "data"=>$this->fm->profile($data)[0],
                "data2"=>$this->fm->myallproducts($data),
                "data3"=>$this->fm->countreview($dat),
                "data4"=>$this->fm->farmerSold($dat)[0]


             );
             
         $this->load->view('viewfarmerprofileV.php',$temp);
       }
    }
    else
    {
     $data=array('f.farmerid'=>$fid);
    
    
    $dat=array('farmerid'=>$fid);
    $temp=array(
                "data"=>$this->fm->profile($data)[0],
                "data2"=>$this->fm->myallproducts($data),
                "data3"=>$this->fm->countreview($dat),
                "data4"=>$this->fm->farmerSold($dat)[0]

             );
             
    $this->load->view('viewfarmerprofileV.php',$temp);
    }
  }
  
  function loadreview($fid)
  {
    $cnt=0;
    $dat=array('farmerid'=>$fid);
    $data=array('f.farmerid'=>$fid);
    $rinfo=$this->fm->selectreviewbyid($dat);
    if(!empty($rinfo))
    {
      foreach($rinfo as $r)
      {
        // if($cnt=0){
            $temp=array('farmid'=>$fid,'ratings'=>$r,"data2"=>$this->fm->myallproducts($data),"data3"=>$this->fm->countreview($dat),"data4"=>$this->fm->farmerSold($dat)[0]);
            $this->load->view('reviewV.php',$temp);
            break;
            // }
      }

    }
    else
    {
      $temp=array('farmid'=>$fid,'ratings'=>null,"data2"=>$this->fm->myallproducts($data),"data3"=>$this->fm->countreview($dat),"data4"=>$this->fm->farmerSold($dat)[0]);
            $this->load->view('reviewV.php',$temp);
            
    }
      
      
  }

  function fetchreviews($fid)
  {
    $color='';
    $output='';
    $d1=time();
    $date=date('Y-m-d H:i:s',$d1);
    $data=array('f.farmerid'=>$fid);
    $info=$this->fm->selectreviews($data);
    foreach($info as $i)
    {
      $rhrs=date("H",strtotime($i->reviewdate));
      $rmin=date("i",strtotime($i->reviewdate));
      $rsec=date("s",strtotime($i->reviewdate));
      $rday=date("d",strtotime($i->reviewdate));
      $rmon=date("m",strtotime($i->reviewdate));
      $ryrs=date("Y",strtotime($i->reviewdate));

      $hrs=date("H",$d1);
      $min=date("i",$d1);
      $sec=date("s",$d1);
      $day=date("d",$d1);
      $mon=date("m",$d1);
      $yrs=date("Y",$d1);

      if((intval($yrs)-intval($ryrs))>0)
      {
         $rdate=(intval($yrs)-intval($ryrs)).' Years';
      }
      else
      {
         if((intval($mon)-intval($rmon))>0)
         {
           $rdate=(intval($mon)-intval($rmon)).' Months';
         }
         else
         {
           if((intval($day)-intval($rday))>0)
           {
             $rdate=(intval($day)-intval($rday)).' Days';
           }
           else
           {
             if((intval($hrs)-intval($rhrs))>0)
             {
               $rdate=(intval($hrs)-intval($rhrs)).' Hours';
             }
             else
             {
               if((intval($min)-intval($rmin))>0)
               {
                 $rdate=(intval($min)-intval($rmin)).' Minutes';
               }
               else
               {
                 
                   $rdate=(intval($sec)-intval($rsec)).' Seconds';
                 
               }
             }
           }
         }
      }

      


      

      
      $output.=' <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="'.base_url('resources/shared/customerimg/'.$i->profilepic).'" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>'.$i->uname.'</h4>
                                                            </a>
                                                            
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                            ';
                                              for($count=0;$count<5;$count++)
                                              {
                                                  if($count<=$i->rating)
                                                  {
                                                     $color='color:#ffcc00';
                                                  }
                                                  else
                                                  {
                                                     $color='color:#ccc';
                                                  }
                                                  $output.=' <span class="fa fa-star" style="'.$color.'"></span>';
                                              }
                                              $output.='</ul>
                                                            
                                                        </div>
                                                        <span class="review_tag">support</span>
                                                    </div>

                                                    <div class="pull-right rev_time">'.$rdate.' Ago</div>
                                                </div>
                                                <p>'.$i->review.'
                                                </p>
                                            </div>
                                        </div>
                                    </li>';
                               
    } echo $output;    
  }
     
  function addreview()
  {
   
    $data=array(
       'userid'=>$_SESSION['userid'],
       'review'=>$this->input->post('reviewt'),
       'rating'=>$this->input->post('rating'),
       'farmerid'=>$this->input->post('farmerid'),
      
    );

    $this->fm->insertreview($data);
  }

  
}
?>