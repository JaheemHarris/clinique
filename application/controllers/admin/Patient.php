<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'controllers/BaseAdmin.php');

class Patient extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('patient_model');
	}

	public function new(){
		$data = [];
		$data['page'] = 'patient-form.php';
		$this->load->view("admin-template",$data);
	}

	public function add(){
        $nom = $this->input->post('nom');
        $date_naissance = $this->input->post('date_naissance');
        $genre = $this->input->post('genre');
        $remboursement = $this->input->post('remboursement');

        $result = $this->patient_model->insert($nom, $genre, $date_naissance, $remboursement);
        if($result == FALSE){
            redirect(base_url('/admin/patient/new?error'));
        }
        redirect(base_url('/admin/patient/new?success'));
	}

    public function liste(){
        $data = [];
        $patients = $this->patient_model->get_liste_patient();
        $data['patients'] = $patients;
		$data['page'] = 'patient-liste.php';
		$this->load->view("admin-template",$data);
	}

	public function delete(){
		$id_patient = $this->input->get('id_patient');
		$result = $this->patient_model->desactivate_patient($id_patient);
        if($result == FALSE){
            redirect(base_url('/admin/patient/liste?error'));
        }
        redirect(base_url('/admin/patient/liste?success'));

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
