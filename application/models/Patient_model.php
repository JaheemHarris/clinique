<?php   if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Patient_model extends CI_Model{
         
        public function __construct(){
		}

		public function insert($nom, $genre, $date_naissance, $remboursement){
			$sql = "INSERT INTO patient(nom, genre, date_naissance, remboursement, est_actif) VALUES (?, ?, ?, ?, 0)";
			$query = $this->db->query($sql,array($nom, $genre, $date_naissance, $remboursement));
			return $query;
		}

        public function udpate($id_patient, $nom, $genre, $date_naissance, $remboursement){
			$sql = "UPDATE patient SET nom = ?, genre = ?, date_naissance = ?, remboursement = ? WHERE id_patient = ?";
			$query = $this->db->query($sql,array($nom, $genre, $date_naissance, $remboursement, $id_patient));
			return $query;
		}

        public function get_liste_patient(){
            $sql = "SELECT * FROM patient WHERE est_actif = 0";
			$query = $this->db->query($sql);
            $result = $query->result_array();
			return $result;
        }

        public function get_patient($id_patient){
            $sql = "SELECT * FROM patient WHERE id_patient = ? AND est_actif = 0 LIMIT 1";
			$query = $this->db->query($sql, array($id_patient));
            $result = $query->row_array();
			return $result;
        }

        public function desactivate_patient($id_patient){
            $sql = "UPDATE patient SET est_actif = 1 WHERE id_patient = ?";
			$query = $this->db->query($sql, array($id_patient));
			return $query;
        }
    }
?>
