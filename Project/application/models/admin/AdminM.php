`<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminM extends CI_Model
{
	public function selectlogin($data)
	{
		return $this->db->where($data)->get('tbladmin')->result();
	}
    public function checkcat($data)
    {
        $this->db->select('tagid');
        $this->db->from('tbltags');
        $this->db->where($data);
    	return $this->db->get()->result();
    }
    public function checktag($data)
    {
         $this->db->select('*');
        $this->db->from('tbltagproduct');
        $this->db->where($data);
    	return $this->db->get()->result();
    }
	function selectallcategory()
	{
		// $this->db->select('*');
		// $this->db->from('tblauction as a');
		// $this->db->join('tblproduct as p','a.productid=p.productid');
		// $this->db->join('tblcategory as c','c.categoryid=p.categoryid');
		// return $this->db->get()->result();
		return $this->db->get('tblcategory')->result();
	}
	function insertcategory($data)
	{
		return $this->db->insert("tblcategory",$data);
	}
	// function searchproductid($data)
	// {
	// 	// select p.productid,a.auctionid from tblauction a JOIN tblproduct p ON a.productid=p.productid JOIN tblcategory c ON p.categoryid=c.categoryid WHERE c.categoryid=1
	// 		$this->db->select('p.productid');
	// 		$this->db->from('tblauction as a');
	// 		$this->db->join('tblproduct as p','p.productid=a.productid');
	//         $this->db->join('tblcategory as c','c.categoryid =p.categoryid');
	//         return $this->db->where($data)->get()->result();
	// }
	// function searchauctionid($data1)
	// {
	// 	// select p.productid,a.auctionid from tblauction a JOIN tblproduct p ON a.productid=p.productid JOIN tblcategory c ON p.categoryid=c.categoryid WHERE c.categoryid=1
 // 			$this->db->select('a.auctionid');
	// 		$this->db->from('tblauction as a');
	// 		$this->db->join('tblproduct as p','p.productid=a.productid');
	//         $this->db->join('tblcategory as c','c.categoryid =p.categoryid');
	//         return $this->db->where($data1)->get()->result();
	// }
	function deletecategory($data3)
	{
		// $data=$this->searchproductid($data3);
		// $data1=$this->searchauctionid($data3);
		// foreach ($data as $d) 
		// {
		// 	$this->db->delete("tblauctiontransaction",array('productid'=>$d->productid));	
	 // 		$this->db->delete("tblauction",array('productid'=>$d->productid));
		// 	$this->db->delete("tbltagproduct",array('productid'=>$d->productid));
		// 	$this->db->delete("tblproduct",array('productid'=>$d->productid));
		// }
		// 	foreach ($data1 as $d2) 
		// 	{
		// 		$this->db->delete("tblauctionimage",array('auctionid'=>$d2->auctionid));
	 // 			$this->db->delete("tblauctionbid",array('auctionid'=>$d2->auctionid));	
		// 	}
	 		$this->db->delete("tbltags",$data3);
			return $this->db->delete("tblcategory",$data3);
	}
	function updatecat($newdata,$where)
	{
		return $this->db->where($where)->update("tblcategory",$newdata);
	}
	function selectalltag()
	{
		return $this->db->get("tbltags")->result();
	}
	function inserttag($data)
	{
		return $this->db->insert("tbltags",$data);
	}
	function deletetag($data)
	{
		return $this->db->delete("tbltags",$data);
	}
	function selectcatbyid($data)
	{
		return $this->db->where($data)->get("tblcategory")->result();
	}
	
	function selectttagbyid($data)
	{
		return $this->db->where($data)->get("tbltags")->result();
	}
	function updatetag($newdata,$where)
	{
		return $this->db->where($where)->update("tbltags",$newdata);
	}
	function selecttagbyid($data)//load sub cat
	{
		return $this->db->where($data)->from("tbltags t")->join("tblcategory c","c.categoryid=t.categoryid")->get() ->result();
	}
	// function selecttagbyid($data)//load tags
	// {
	// 	return $this->db->where($data)->from("tbltags t")->join("tblsubcat sc","sc.subcatid=t.subcatid")->join("tblcategory c","c.catid=sc.catid")->get() ->result();
	// }
	function selectalladmin()
	{
		return $this->db->get("tbladmin")->result();
	}
	function selectalladmin1($data)
	{
		return $this->db->where($data)->get("tbladmin")->result();
	}
	function selectalluser()
	{
		$this->db->select('*');
		$this->db->from('tbluser as u');
		$this->db->join('tblcity as c','c.cityid=u.cityid');
		return $this->db->get()->result();
	}
	function selectallfarmer()
	{
		$this->db->select('*');
		$this->db->from('tblfarmer as f');
		$this->db->join('tblcity as c','c.cityid=f.cityid');
		return $this->db->get()->result();
	}
	function adminupdate()
	{
		return $this->db->where($where)->update("tbladmin",$newdata);
	}
	function updateadmin($data)
	{
       $where=array('adminid'=>$_SESSION['adminid']);
 		$this->db->where($where)->update('tbladmin',$data);
	}
}
?>