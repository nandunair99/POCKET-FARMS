<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserM extends CI_Model
 {

 	public function selectcity()
 	{
      return $this->db->get('tblcity')->result();
 	}
 	public function selectcityname($cid)
 	{
 		$where=  array('cityid'=>$cid);
      return $this->db->where($where)->get('tblcity')->result();
 	}
 	public function insertuser($data)
 	{

 		$this->db->insert('tbluser',$data);
    }
    public function check($data)
	{
		return $this->db->where($data)->get('tbluser')->result();
	}
	function countAuctions()
	{

		$this->db->select('count(*) totauctions');
		$this->db->from('tblauctiontransaction');
		return $this->db->get()->result();
	}
	function countcurrentAuctions()
	{
		$d1=time();
		$date=date('Y-m-d H:i:s',$d1);

		$this->db->select('count(*) totcurauctions');
		$this->db->from('tblauction');
		$this->db->where('\''.$date.'\'  between startdatetime and enddatetime');
		return $this->db->get()->result();
	}
	function countcustomers()
	{
		$this->db->select('count(*) totcustomers');
		$this->db->from('tbluser');
		return $this->db->get()->result();
	}
	function countfarmers()
	{
		$this->db->select('count(*) totfarmers');
		$this->db->from('tblfarmer');
		return $this->db->get()->result();
	}
	public function userinfo()
 	{
 		$where=array("userid"=>$_SESSION['userid']);

      return $this->db->where($where)->get('tbluser f')->result();
 	}
 	public function edituser($data)
 	{
 		$where=array("userid"=>$_SESSION['userid']);
 		$this->db->where($where)->update('tbluser',$data);
 	}
 	public function profile($where)
 	{
	    	return $this->db->where($where)->get('tbluser')->result();
 	}
public function timeline($info)
 	{
 		if(empty($info))
 		{
 		$data=array("userid"=>$_SESSION['userid']);
 		$this->db->select('a.auctiontransactionid,aa.auctionid,p.productimage,p.title,p.description,aa.enddatetime');
			$this->db->from('tblauctiontransaction as a');
			$this->db->join('tblauction as aa','aa.auctionid=a.auctionid');
			$this->db->join('tblproduct as p','p.productid=aa.productid');
	        $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	        $this->db->order_by('aa.enddatetime','ASC');
	        return $this->db->where($data)->get()->result();
	    }
	    else
	    {
	    	$data=array("userid"=>$_SESSION['userid'],"DATE(aa.enddatetime)"=>$info);
 		$this->db->select('a.auctiontransactionid,aa.auctionid,p.productimage,p.title,p.description,aa.enddatetime');
			$this->db->from('tblauctiontransaction as a');
			$this->db->join('tblauction as aa','aa.auctionid=a.auctionid');
			$this->db->join('tblproduct as p','p.productid=aa.productid');
	        $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	        $this->db->order_by('aa.enddatetime','ASC');
	        return $this->db->where($data)->get()->result();
	    }
 	}
 	public function allproduct()
 	{
 		//$data=array("f.farmerid"=>$_SESSION['farmerid']);
 		$this->db->select('a.auctionid,p.productimage,p.title,p.description,f.fullname,f.profileimage,a.askedprice');
			$this->db->from('tblauction as a');
			$this->db->join('tblproduct as p','p.productid=a.productid');
	        $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	      //  $this->db->join('tblcategory as c','c.categoryid=f.categoryid');
	        return $this->db->get()->result();
 	}
 	public function moreinfo($data)
 	{
 		$dta=array("a.auctionid"=>$data);
 		$this->db->select('a.auctionid,p.productimage,p.title,p.description,f.fullname,f.profileimage,f.fullname,a.askedprice,a.enddatetime');
			$this->db->from('tblauction as a');
			$this->db->join('tblproduct as p','p.productid=a.productid');
	        $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	      //  $this->db->join('tblcategory as c','c.categoryid=f.categoryid');
	        return $this->db->where($dta)->get()->result();
 	}
 	function selectallauctions()
	{
		$d1=time();
		$date=date('Y-m-d H:i:s',$d1);
		
	   $this->db->select('a.auctionid,a.title as atitle,a.productid,a.askedprice,a.quantity,a.featuredimage,a.farmerid,a.startdatetime,a.enddatetime,a.addeddatetime,a.status,p.title as ptitle,p.season,f.fullname,f.cityid,f.profileimage');
	   $this->db->from('tblauction as a ');
	   $this->db->join('tblproduct as p','p.productid=a.productid');
	   $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	   $this->db->where('\''.$date.'\'  between a.startdatetime and a.enddatetime');
	   return $this->db->get()->result();
	}
	function selectfutureauctions()
	{
		$d1=time();
		$date=date('Y-m-d H:i:s',$d1);

	   $this->db->select('a.auctionid,a.title as atitle,a.productid,a.askedprice,a.quantity,a.featuredimage,a.farmerid,a.startdatetime,a.enddatetime,a.addeddatetime,a.status,p.title as ptitle,p.season,f.fullname,f.cityid,f.profileimage,cat.categoryname,p.description as pdesc,a.description as adesc');
	   $this->db->from('tblauction as a ');
	   $this->db->join('tblproduct as p','p.productid=a.productid');
	   $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	   $this->db->join('tblcategory as cat','cat.categoryid=p.categoryid');
	   $this->db->where('\''.$date.'\' < a.startdatetime');

	   return $this->db->get()->result();
	}
	function selectpastauctions()
	{
		$d1=time();
		$date=date('Y-m-d H:i:s',$d1);

	   $this->db->select('a.auctionid,a.title as atitle,a.productid,a.askedprice,a.quantity,a.featuredimage,a.farmerid,a.startdatetime,a.enddatetime,a.addeddatetime,a.status,p.title as ptitle,p.season,f.fullname,f.cityid,f.profileimage,cat.categoryname,p.description as pdesc,a.description as adesc,c.cityname');
	   $this->db->from('tblauction as a ');
	   $this->db->join('tblproduct as p','p.productid=a.productid');
	   $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	   $this->db->join('tblcity as c','c.cityid=f.cityid');
	   $this->db->join('tblcategory as cat','cat.categoryid=p.categoryid');
	   $this->db->where('\''.$date.'\' >= a.enddatetime');

	   return $this->db->get()->result();
	}
	function selectauctionbyid($data)
	{
       $this->db->select('a.auctionid,a.title as atitle,a.productid,a.askedprice,a.quantity,a.description as adesc,a.featuredimage,a.farmerid,a.startdatetime,a.enddatetime,a.addeddatetime,a.status,p.title as ptitle,cat.categoryname,p.productimage,p.description as pdesc,p.season,f.fullname,c.cityname,f.profileimage');
	   $this->db->from('tblauction as a ');
	   $this->db->join('tblproduct as p','p.productid=a.productid');
	   $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	   $this->db->join('tblcity as c','c.cityid=f.cityid');
	   $this->db->join('tblcategory as cat','cat.categoryid=p.categoryid');
	   $this->db->join('tblstate as s','s.stateid=c.stateid');
       $this->db->where($data);

	   return $this->db->get()->result();
	}
	function selecttagbyproduct($data)
	{
		// SELECT tagname from tbltagproduct t join tbltags g on g.tagid=t.tagid join tblauction a on a.productid=t.productid where a.auctionid=16 
		$this->db->select('tagname');
		$this->db->from('tbltagproduct as tp');
		$this->db->join('tbltags as t','t.tagid=tp.tagid');
		$this->db->join('tblauction as a','a.productid=tp.productid');
		$this->db->where($data);
		return $this->db->get()->result();
	}

    function selectalltags()
    {
    	return $this->db->get('tbltags')->result();
    }

	function insertbid($data)
	{
		$this->db->insert('tblauctionbid',$data);
	}
	function selectallbid($where)
	{
		$this->db->select('b.*,u.userid,u.username,u.profilepic,u.emailid');
		$this->db->from('tblauctionbid as b');
		$this->db->join('tbluser as u','u.userid=b.userid');
		$this->db->where($where);
        return $this->db->get()->result();

	}
	function getmaxbid($where)
	{
	    // select max(offerprice) from tblauctionbid where auctionid=39
	    // SELECT * FROM `tblauctionbid` where auctionid=39 and offerprice=140 
		$this->db->select('max(offerprice) as mofferprice');
		$this->db->from('tblauctionbid as b');
		$this->db->where($where);
		return $this->db->get()->result();
	}
	function getwinner($where)
	{
       $this->db->select('*');
       $this->db->from('tblauctionbid as b');
       $this->db->join('tbluser as u','u.userid=b.userid');
       $this->db->where($where);
       return $this->db->get()->result();

	}
	function getpendingauction()
	{
		//SELECT * FROM `tblauction` WHERE enddatetime<'2020-05-30 17:45' and status='pending' 
		$d1=time();
		$date=date("Y-m-d H:i:s",$d1);
		$this->db->select('a.auctionid,f.farmerid,f.contactnumber');
		$this->db->from('tblauction as a');
		$this->db->join('tblfarmer as f','a.farmerid=f.farmerid');
		$this->db->where('enddatetime <'.'\''.$date.'\'');
		$this->db->where('status=\'pending\'');
		return $this->db->get()->result();
	}
	function getpendingbid()
	{

	}
	function transact($data)
	{
		$this->db->insert('tblauctiontransaction',$data);
	}
	function updateauction($where)
	{
		$data=array('status'=>'complete');
		$this->db->where($where)->update('tblauction',$data);
	}

	function sendmessage($nums,$mess)
	{

     // $mess=$this->input->post('messagetxt');
     //        $nums=$this->input->post('mobiletxt');
            // Account details
     $apiKey = urlencode("c2FoYpNdqww-eOEkJV5H5uW9URBQLVgdGeCtMg9ojU");
     // Message details
     $numbers = $nums;
     $sender = urlencode("TXTLCL");
     $message = $mess;
 
      //$numbers = implode(‘,’, $numbers);
     // Prepare data for POST request
     $data = array('apikey' => $apiKey, 'numbers' => $numbers,'sender' => $sender, 'message' => $message);
     // Send the POST request with cURL
     $ch = curl_init("http://api.textlocal.in/send/");
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     $response = curl_exec($ch);
     curl_close($ch);
     // Process your response here
     // echo $response;
     	}

	
 }
 ?>