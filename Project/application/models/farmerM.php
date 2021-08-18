<?php
defined('BASEPATH') or die("Direct access to code not allowed");
class farmerM extends CI_Model
{
		public function ltimeline($info)
 	{
 		$data=array("f.farmerid"=>$info);
 		$this->db->select('a.auctiontransactionid,aa.auctionid,p.productimage,p.title,p.description,aa.enddatetime');
			$this->db->from('tblauctiontransaction as a');
			$this->db->join('tblauction as aa','aa.auctionid=a.auctionid');
			$this->db->join('tblproduct as p','p.productid=aa.productid');
	        $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	        $this->db->order_by('aa.enddatetime','DSC');
	        return $this->db->where($data)->get()->result();
	    
	    
 	}
 	function complete()
 	{
 		$c="complete";
 		$where2=array("farmerid"=>$_SESSION['farmerid']);
 		$where=array('status'=>$c);
 		$this->db->select('productid');
 		$this->db->from('tblauction');
 		$this->db->where($where);
 		$this->db->where($where2);
 		return $this->db->get()->result();

 	}
	function countreview($data)
	{
		 $this->db->select('AVG(rating) rate');
		$this->db->from('tblfarmerreview');
		$this->db->where($data);
		return $this->db->get()->result();
	}
    function selectuname($data)
    	{

    		return $this->db->where($data)->get('tblfarmer')->result();
    	}
    function farmerSold($where)
    {
    	$this->db->select('count(*) farmersold');
    	$this->db->from('tblauctiontransaction');
    	$this->db->where($where);
    	return $this->db->get()->result();
    }
    function selectcategory()
	{
	     return $this->db->get('tblcategory')->result();
	}
	function insertproduct($data)
	{
		$this->db->insert('tblproduct',$data);
	}
	function insertauction($data)
	{
		$this->db->insert('tblauction',$data);
	}
	function insertauctionimg($data)
	{
        $this->db->insert('tblauctionimage',$data);
	}
	function lastproduct()
	{
		return $this->db->insert_id('tblproduct');
	}
	function lastauction()
	{
		return $this->db->insert_id('tblauction');
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
	 function selectalltags()
    {
    	return $this->db->get('tbltags')->result();
    }
	function selecttagbycategory($where)
	{
		return $this->db->where($where)->get('tbltags')->result();
	}
	function inserttag($data)
	{
		$this->db->insert('tbltagproduct',$data);
	}
	function fetch_data($query)
	{
		$d1=time();
		$date=date('Y-m-d H:i:s',$d1);

      $this->db->select('a.auctionid,a.title as atitle,a.productid,a.askedprice,a.quantity,a.featuredimage,a.farmerid,a.startdatetime,a.enddatetime,a.addeddatetime,a.status,p.title as ptitle,p.season,f.fullname,c.cityname,f.profileimage,cat.categoryname');
	   $this->db->from('tblauction as a ');
	   $this->db->join('tblproduct as p','p.productid=a.productid');
	   $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	   $this->db->join('tblcity as c','c.cityid=f.cityid');
	   $this->db->join('tblcategory as cat','cat.categoryid=p.categoryid');
	   if($query != '')
	   {
	   	$this->db->like('a.title',$query);
	   	$this->db->or_like('p.title', $query);
	   	$this->db->or_like('p.season', $query);
	   	$this->db->or_like('f.fullname', $query);
	   	$this->db->or_like('c.cityname', $query);

	   }
       $this->db->where('\''.$date.'\'  between a.startdatetime and a.enddatetime');

	   $this->db->order_by('a.startdatetime','DESC');
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
	function selectproductbyprice($val)
	{
		if($val=="high")
		{
		$this->db->select('a.auctionid,a.title as atitle,a.productid,a.askedprice,a.quantity,a.description as adesc,a.featuredimage,a.farmerid,a.startdatetime,a.enddatetime,a.addeddatetime,a.status,p.title as ptitle,cat.categoryname,p.productimage,p.description as pdesc,p.season,f.fullname,c.cityname,f.profileimage');
	   $this->db->from('tblauction as a ');
	   $this->db->join('tblproduct as p','p.productid=a.productid');
	   $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	   $this->db->join('tblcity as c','c.cityid=f.cityid');
	   $this->db->join('tblcategory as cat','cat.categoryid=p.categoryid');
	   $this->db->join('tblstate as s','s.stateid=c.stateid');
        $this->db->order_by('a.askedprice','desc');

	   return $this->db->get()->result();
	}
	else if($val=="low")
	{
$this->db->select('a.auctionid,a.title as atitle,a.productid,a.askedprice,a.quantity,a.description as adesc,a.featuredimage,a.farmerid,a.startdatetime,a.enddatetime,a.addeddatetime,a.status,p.title as ptitle,cat.categoryname,p.productimage,p.description as pdesc,p.season,f.fullname,c.cityname,f.profileimage');
	   $this->db->from('tblauction as a ');
	   $this->db->join('tblproduct as p','p.productid=a.productid');
	   $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	   $this->db->join('tblcity as c','c.cityid=f.cityid');
	   $this->db->join('tblcategory as cat','cat.categoryid=p.categoryid');
	   $this->db->join('tblstate as s','s.stateid=c.stateid');
        $this->db->order_by('a.askedprice','asc');

	   return $this->db->get()->result();
	}
	}
	function farmerbyreview($val)
	{

		if($val=="high")
		{
		 $this->db->select('AVG(rating) rate,farmerid');
		$this->db->from('tblfarmerreview');
		$this->db->group_by('farmerid');
		$this->db->order_by('rate','desc');
		return $this->db->get()->result();
     	}
     	else if($val=="low")
     	{
 $this->db->select('AVG(rating) rate,farmerid');
		$this->db->from('tblfarmerreview');
		$this->db->group_by('farmerid');
		$this->db->order_by('rate','asc');
		return $this->db->get()->result();
     	}
	}
	function selectproductbyrate($val)
	{
		$in=array("a.farmerid"=>$val);
		$this->db->select(' a.auctionid,a.title as atitle,a.productid,a.askedprice,a.quantity,a.description as adesc,a.featuredimage,a.farmerid,a.startdatetime,a.enddatetime,a.addeddatetime,a.status,p.title as ptitle,cat.categoryname,p.productimage,p.description as pdesc,p.season,f.fullname,c.cityname,f.profileimage');
	   $this->db->from('tblauction as a ');
	   $this->db->join('tblproduct as p','p.productid=a.productid');
	   $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	   $this->db->join('tblcity as c','c.cityid=f.cityid');
	   $this->db->join('tblcategory as cat','cat.categoryid=p.categoryid');
	   $this->db->join('tblstate as s','s.stateid=c.stateid');
	   
	  

	   return $this->db->where($in)->get()->result();
	
	}
	function selectproductby($data)
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
	function selectproductbytag($data)
	{
		$this->db->select('a.auctionid,a.title as atitle,a.productid,a.askedprice,a.quantity,a.description as adesc,a.featuredimage,a.farmerid,a.startdatetime,a.enddatetime,a.addeddatetime,a.status,p.title as ptitle,cat.categoryname,p.productimage,p.description as pdesc,p.season,f.fullname,c.cityname,f.profileimage,t.tagname');
	   $this->db->from('tblauction as a ');
	   $this->db->join('tblproduct as p','p.productid=a.productid');
	   $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	   $this->db->join('tblcity as c','c.cityid=f.cityid');
	   $this->db->join('tblcategory as cat','cat.categoryid=p.categoryid');
	   $this->db->join('tblstate as s','s.stateid=c.stateid');
	   $this->db->join('tbltagproduct as tp','tp.productid=p.productid');
	   $this->db->join('tbltags as t','t.tagid=tp.tagid');
       $this->db->where($data);

	   return $this->db->get()->result();
	}
    public function selectmoreimages($where)
    {
      return $this->db->where($where)->get('tblauctionimage')->result();
    }
	public function selectcity()
 	{
      return $this->db->get('tblcity')->result();
 	}
 		public function selectcityname($cid)
 	{
 		$where=  array('cityid'=>$cid);
      return $this->db->where($where)->get('tblcity')->result();
 	}
 	public function insertfarmer($data)
 	{

 		$this->db->insert('tblfarmer',$data);
    }
    public function check($data)
	{
		return $this->db->where($data)->get('tblfarmer')->result();
	}
	public function farmerinfo()
 	{
 		$where=array("farmerid"=>$_SESSION['farmerid']);

      return $this->db->where($where)->get('tblfarmer f')->result();
 	}
 	public function editfarmer($data)
 	{
 		$where=array("farmerid"=>$_SESSION['farmerid']);
 		$this->db->where($where)->update('tblfarmer',$data);
 	}
 	public function profile($where)
 	{
	    	return $this->db->where($where)->get('tblfarmer as f')->result();
 	}
 	function myallproducts($where)
 	{
 		$this->db->select('a.auctionid,p.productimage,p.productid,p.title,p.description,f.fullname');
			$this->db->from('tblauction as a');
			$this->db->join('tblproduct as p','p.productid=a.productid');
	        $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	        return $this->db->where($where)->get()->result();
 	}
public function timeline($info)
 	{
 		if(empty($info))
 		{
 		$data=array("f.farmerid"=>$_SESSION['farmerid']);
 		$this->db->select('a.auctiontransactionid,aa.auctionid,p.productimage,p.title,p.description,aa.enddatetime');
			$this->db->from('tblauctiontransaction as a');
			$this->db->join('tblauction as aa','aa.auctionid=a.auctionid');
			$this->db->join('tblproduct as p','p.productid=aa.productid');
	        $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	        $this->db->order_by('aa.enddatetime','DSC');
	        return $this->db->where($data)->get()->result();
	    }
	    else
	    {
	    	$data=array("f.farmerid"=>$_SESSION['farmerid'],"DATE(aa.enddatetime)"=>$info);
 		$this->db->select('a.auctiontransactionid,aa.auctionid,p.productimage,p.title,p.description,aa.enddatetime');
			$this->db->from('tblauctiontransaction as a');
			$this->db->join('tblauction as aa','aa.auctionid=a.auctionid');
			$this->db->join('tblproduct as p','p.productid=aa.productid');
	        $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	        $this->db->order_by('aa.enddatetime','DSC');
	        return $this->db->where($data)->get()->result();
	    }
 	}
 	 function editauctionimage($id,$data)
    {
    	 $aa=array('auctionimageid'=>$id);
       $this->db->where($id)->update('tblauctionimage',$data);
    }	
public function getproductinfo($id)
 	{  
 		    $data=array('auctionid'=>$id);
           return $this->db->where($data)->get('tblauction')->result(); 
 	}
 	public function deleteproduct($data,$data1)
 	{
 		$this->db->delete("tblauctiontransaction",$data1);
 		$this->db->delete("tblauctionimage",$data1);
 		$this->db->delete("tblauctionbid",$data1);
 		$this->db->delete("tblauction",$data);
 		$this->db->delete("tbltagproduct",$data);
 		
 		return $this->db->delete("tblproduct",$data);
 		//return $this->db->delete("tbltags",$data);
 	}
 	public function selectproduct($id)
 	{  
 		    $data=array('productid'=>$id);
           return $this->db->where($data)->get('tblproduct')->result(); 
 	}
 	public function selectcategory1($id)
 	{  
 		    $data=array('categoryid'=>$id);
           return $this->db->where($data)->get('tblcategory')->result(); 
 	}
 	function updateauction($data,$aid)
	{
		$where=array('auctionid'=>$aid);
		$this->db->where($where)->update('tblauction',$data);
	}
	function updateproduct($data,$pid)
	{
		$where=array('productid'=>$pid);
		$this->db->where($where)->update('tblproduct',$data);
	}
	  function allauctionimg($id)
    {
     return  $this->db->where($id)->get('tblauctionimage')->result();
    }
    function getmaxbid($where)
	{
	    // select max(offerprice),b.*,u.* from tblauctionbid b join tbluser u on b.userid=u.userid where auctionid=18 
		$this->db->select('max(offerprice) as mofferprice,b.*,u.*');
		$this->db->from('tblauctionbid as b');
		$this->db->join('tbluser as u','b.userid=u.userid');
		$this->db->where($where);
		return $this->db->get()->result();
	}
	function farmerprofile($where)
	{
		return $this->db->where($where)->get('tblfarmer as f')->result();
	}
	function farmerproducts($where)
	{
     
 		$this->db->select('a.auctionid,p.productimage,p.title,p.description,f.fullname');
			$this->db->from('tblauction as a');
			$this->db->join('tblproduct as p','p.productid=a.productid');
	        $this->db->join('tblfarmer as f','f.farmerid=a.farmerid');
	        return $this->db->where($where)->get()->result();
	}
	function selectreviews($where)
	{
       $this->db->select('*,u.username as uname,f.username as fname');
       $this->db->from('tblfarmerreview as r');
       $this->db->join('tbluser as u','u.userid=r.userid');
       $this->db->join('tblfarmer as f','f.farmerid=r.farmerid');
       $this->db->where($where);
       return $this->db->get()->result();
	}
	function insertreview($data)
	{
		$this->db->insert('tblfarmerreview',$data);
	}
	function selectreviewbyid($where)
	{
		if(isset($_SESSION['userid']))
		{
			$where2=array('userid'=>$_SESSION['userid']);
		$this->db->select('*');
		$this->db->from('tblfarmerreview');
		$this->db->where($where);
		$this->db->where($where2);
		$this->db->order_by("farmerreviewid", "desc");
		return $this->db->get()->result();
		}
		else
		{
			$this->db->select('*');
		$this->db->from('tblfarmerreview');
		$this->db->where($where);
		return $this->db->get()->result();
		}
		
       
	}
    

}
?>