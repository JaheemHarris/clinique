<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'controllers/BaseAdmin.php');

class Type_acte extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('type_acte_model');
	}

	public function new(){
		$data = [];
		$data['page'] = 'type_acte-form.php';
		$this->load->view("admin-template",$data);
	}

	public function add(){
        $libelle_acte = $this->input->post('libelle_acte');
		$budget_annuel_acte = $this->input->post('budget_annuel_acte');
		$code_acte = strtoupper(substr($libelle_acte, 0 , 3));

        $result = $this->type_acte_model->insert($libelle_acte, $budget_annuel_acte, $code_acte);
        if($result == FALSE){
            redirect(base_url('/admin/type_acte/new?error'));
        }
        redirect(base_url('/admin/type_acte/new?success'));
	}

    public function liste(){
        $data = [];
        $types_acte = $this->type_acte_model->get_liste_type_acte();
        $data['types_acte'] = $types_acte;
		$data['page'] = 'type_acte-liste.php';
		$this->load->view("admin-template",$data);
	}

	public function delete(){
		$id_type_acte = $this->input->get('id_type_acte');
		$result = $this->type_acte_model->desactivate_type_acte($id_type_acte);
        if($result == FALSE){
            redirect(base_url('/admin/type_acte/liste?error'));
        }
        redirect(base_url('/admin/type_acte/liste?success'));

	}

	public function to_pdf($id){
		$data = [];
		$data['place'] = $this->placeModel->get_situation_by_id($id);
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
