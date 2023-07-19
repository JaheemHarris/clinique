<?php   if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Depense_model extends CI_Model{
         
        public function __construct(){
		}

		public function insert($id_type_depense, $jour, $mois, $annee, $montant_depense){
			$this->db->trans_start();
			for($i = 0; $i < count($mois); $i++){
				$date_depense = $annee."-".$mois[$i]."-".$jour;
				$sql = "INSERT INTO depense(id_type_depense, montant_depense, date_depense) VALUES (?, ?, ?)";
				$this->db->query($sql,array($id_type_depense, $montant_depense, $date_depense));
			}
			$status = $this->db->trans_status();
			if ($status === FALSE) {
				$this->db->trans_rollback(); // Rollback transaction if any operation fails
			} else {
				$this->db->trans_commit(); // Commit transaction if all operations succeed
			}
			$this->db->trans_complete();
			return $status;
		}
    }
?>
