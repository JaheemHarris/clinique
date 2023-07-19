<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'controllers/BaseUser.php');

class Depense extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('depense_model');
	}

	public function new(){
        $this->load->model('type_depense_model');
		$data = [];
        $data['mois'] = [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        $data['liste_type_depense'] = $this->type_depense_model->get_liste_type_depense();
		$data['page'] = 'depense-form.php';
		$this->load->view("user_template",$data);
	}

	public function add(){
        $id_type_depense = $this->input->post('id_type_depense');
        $jour = $this->input->post('jour');
        $mois = $this->input->post('mois');
        $annee = $this->input->post('annee');
        $montant_depense = $this->input->post('montant_depense');

		$result = $this->depense_model->insert($id_type_depense, $jour, $mois, $annee, $montant_depense);
		if($result == FALSE){
			redirect(base_url('user/depense/new?error'));
		}
		redirect(base_url('user/depense/new?success'));
	}

    public function liste(){
	}

	public function delete(){
	}

	public function to_pdf($id){
		$data = [];
		// $data['place'] = $this->placeModel->get_situation_by_id($id);
        // $this->load->view('pdf', $data);
		// $html = $this->output->get_output();
		// $this->load->library('../pdf');
		// $this->dompdf->loadHtml($html);
		// $this->dompdf->setPaper('A10', 'portrait');
		// $this->dompdf->render();
		// ob_end_clean();
		// $this->dompdf->stream("ticker.pdf", array("Attachment"=>0));
		
		$this->load->view("pdf",$data);
	}
}
