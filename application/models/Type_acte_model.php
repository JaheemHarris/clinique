<?php   if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Type_acte_model extends CI_Model{
         
        public function __construct(){
		}

		public function insert($libelle_acte, $budget_annuel_acte, $code_acte){
			$sql = "INSERT INTO type_acte(libelle_acte,budget_annuel_acte, code_acte, est_actif) VALUES (?, ?, ?, 0)";
			$query = $this->db->query($sql,array($libelle_acte, $budget_annuel_acte, $code_acte));
			return $query;
		}

        public function udpate($id_type_acte, $libelle_acte, $budget_annuel_acte, $code_acte){
			$sql = "UPDATE type_acte SET libelle_acte = ?, budget_annuel_acte = ?, code_acte = ? WHERE id_type_acte = ?";
			$query = $this->db->query($sql,array($libelle_acte, $budget_annuel_acte, $code_acte, $id_type_acte));
			return $query;
		}

        public function get_liste_type_acte(){
            $sql = "SELECT * FROM type_acte WHERE est_actif = 0";
			$query = $this->db->query($sql);
            $result = $query->result_array();
			return $result;
        }

        public function get_type_acte($id_type_acte){
            $sql = "SELECT * FROM type_acte WHERE id_type_acte = ? AND est_actif = 0 LIMIT 1";
			$query = $this->db->query($sql, array($id_type_acte));
            $result = $query->row_array();
			return $result;
        }

        public function desactivate_type_acte($id_type_acte){
            $sql = "UPDATE type_acte SET est_actif = 1 WHERE id_type_acte = ?";
			$query = $this->db->query($sql, array($id_type_acte));
			return $query;
        }
    }
?>
