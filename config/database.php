<?php 

class connection {
     public $conn;
     public $db_user = 'sp2372';
     public $db_host = 'sql1.njit.edu';
     public $db_name = 'sp2372';
     public $db_pass = 'EUGtORiY';
						
   function db_connection_function(){
    try{
  	$this->conn=new	PDO('mysql:host=sql1.njit.edu;dbname=sp2372;charset=utf8','sp2372','EUGtORiY',);
	$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $this->conn;
	}
	catch(PDOException $e){
	echo $e->getMessage();
	}
      }
				
     }
?>
