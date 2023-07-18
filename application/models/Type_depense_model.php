<?php   if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Type_depense_model extends CI_Model{
         
        public function __construct(){
		}

		public function insert($libelle_depense){
			$sql = "INSERT INTO type_depense(libelle_depense, est_actif) VALUES (?, 0)";
			$query = $this->db->query($sql,array($libelle_depense));
			return $query;
		}

        public function udpate($id_type_depense, $libelle_depense){
			$sql = "UPDATE type_depense SET libelle_depense = ? WHERE id_type_depense = ?";
			$query = $this->db->query($sql,array($libelle_depense, $id_type_depense));
			return $query;
		}

        public function get_liste_type_depense(){
            $sql = "SELECT * FROM type_depense WHERE est_actif = 0";
			$query = $this->db->query($sql);
            $result = $query->result_array();
			return $result;
        }

        public function get_type_depense($id_type_depense){
            $sql = "SELECT * FROM type_depense WHERE id_type_depense = ? AND est_actif = 0 LIMIT 1";
			$query = $this->db->query($sql, array($id_type_depense));
            $result = $query->row_array();
			return $result;
        }

        public function desactivate_type_depense($id_type_depense){
            $sql = "UPDATE type_depense SET est_actif = 1 WHERE id_type_depense = ?";
			$query = $this->db->query($sql, array($id_type_depense));
			return $query;
        }
    }
?>
