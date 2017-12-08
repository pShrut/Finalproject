<?php
class todo
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
	  $val[]="'$vl'";											}
	$fkey=implode(",",$key);
	$fval=implode(",",$val);
	echo $sql1 = "insert into $table($fkey)values($fval)";
	//$this->db->query($sql);
	$statement1 = $this->db->prepare($sql1);
	$statement1->execute(array('3'));
        $data = "";
          if($statement1){
		$data = '1';
	    }else
	    {
		$data = '2';
	    }
           return $data;
		}
    }
?>
