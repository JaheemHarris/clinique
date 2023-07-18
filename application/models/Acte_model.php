<?php   if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Acte_model extends CI_Model{
         
        public function __construct(){
		}

		public function insert($user){
			$query = "INSERT INTO auth_user(role_id,firstname,lastname,email,password,is_enabled) VALUES (2,?,?,?,md5(?),1)";
			$query_result = $this->db->query($query,array($user['prenom'],$user['nom'],$user['email'],$user['password']));
			return $query_result;
		}
    }
?>
