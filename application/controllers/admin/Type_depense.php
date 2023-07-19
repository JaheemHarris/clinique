<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'controllers/BaseAdmin.php');

class Type_depense extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('type_depense_model');
	}

	public function new(){
		$data = [];
		$data['page'] = 'type_depense-form.php';
		$this->load->view("admin-template",$data);
	}

	public function add(){
        $libelle_depense = $this->input->post('libelle_depense');
		$budget_annuel_depense = $this->input->post('budget_annuel_depense');
		$code_depense = strtoupper(substr($libelle_depense, 0 , 3));

        $result = $this->type_depense_model->insert($libelle_depense, $budget_annuel_depense, $code_depense);
        if($result == FALSE){
            redirect(base_url('/admin/type_depense/new?error'));
        }
        redirect(base_url('/admin/type_depense/new?success'));
	}

    public function liste(){
        $data = [];
        $types_depense = $this->type_depense_model->get_liste_type_depense();
        $data['types_depense'] = $types_depense;
		$data['page'] = 'type_depense-liste.php';
		$this->load->view("admin-template",$data);
	}

	public function delete(){
		$id_type_depense = $this->input->get('id_type_depense');
		$result = $this->type_depense_model->desactivate_type_depense($id_type_depense);
        if($result == FALSE){
            redirect(base_url('/admin/type_depense/liste?error'));
        }
        redirect(base_url('/admin/type_depense/liste?success'));

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
