<?php

class login
  {
   function __construct($db) 
   {
       $this->db = $db;
   }
    function insert($table,$record)
   {
       foreach($record as $ky=>$vl)
	{
	  $key[]=$ky;
	  $val[]="'$vl'";
	}
	$fkey=implode(",",$key);
	$fval=implode(",",$val);
	$sql1 = "insert into $table($fkey)values($fval)";
	//$this->db->query($sql);
	$statement = $this->db->prepare($sql1);
        $statement->execute(array('2'));

	$data = "";
	if($statement){
	  $data = '1';
	 }else 
	 {
	  $data = '2';
	 }
	 return $data;
    }
    function ProfileUpdate($table,$recode,$id)
    	{
	$update_arr = array();
	foreach($recode as $key=>$value)
	{
	   $update_arr[]=$key."='".$value."'";
	}
	$update	= implode(",",$update_arr);
	$sql = "UPDATE $table SET $update WHERE id='$id'";
	$this->db->query($sql);
	$statement1 = $this->db->prepare($sql);
	$statement1->execute(array('2'));
	if($statement1)
	{
	   return "1";
	}else
	{
	   return "2";
        }
     }	
       function chkRegister($table,$where)
      {
        $sql = "select * from $table where $where";
	$stm = $this->db->prepare($sql);
	$stm->execute(array('2'));
	//print_r($stm->fetchAll());die;
	return $stm->fetchAll();	
	}
	 function ChkPassword($table,$where)
	{	
	  $sql = "select * from $table where $where";
	  $stm = $this->db->prepare($sql);
	  $stm->execute(array('2'));
	 //print_r($stm->fetchAll());die;
	  return $stm->fetchAll();	
	}
	 function ChkLogin($table,$where)
	{
	  $sql = "select * from $table where $where";
	  $stm = $this->db->prepare($sql);
	  $stm->execute(array('2'));
	  //print_r($stm->fetchAll());die;
	  return $stm->fetchAll();	
	}
	 function AllData($table,$where)
	{
	  $sql = "select * from	$table where $where";
	  $stm = $this->db->prepare($sql);
	  $stm->execute(array('2'));
	 //print_r($stm->fetchAll());die;
	 return $stm->fetchAll();	
    }
    	function DeleteData($table,$where)
    {
        $sql1 = "DELETE FROM $table where $where";
	//$this->db->query($sql);
	$statement = $this->db->prepare($sql1);
        $statement->execute(array('2'));
	return 'success';
    }
   }
?>
