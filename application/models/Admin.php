<?php

class Admin extends CI_Model
{
	function __construct(){
		$this->load->database();
	}

    function read($filter=null, $limit = 0, $offset = 0, $ar_sort = null){
		return $filter;
		
    }
    
	static function getSingleQuestion($id){
		$sql = "SELECT * FROM tbl WHERE id_pertanyaan = ?";

		$prep = DB::conn()->prepare($sql);
		$prep->execute([$id]);

		return $prep->fetch(PDO::FETCH_OBJ);
	}


	static function getAllOption($id){
		$sql    = "SELECT 
				   *, 
				   (SELECT COUNT(id_opsi) FROM tbl_hasil WHERE tbl_hasil.id_opsi = tbl_jawab.id_opsi) as hasil
    			   FROM tbl_jawab
    			   WHERE tbl_jawab.id_pertanyaan = ?";
		$param  = [$id];
		$prep = DB::conn()->prepare($sql);
		$prep->execute($param);

		return $prep->fetchAll(PDO::FETCH_OBJ);
	}

	
}