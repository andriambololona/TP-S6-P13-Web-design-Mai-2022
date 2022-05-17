<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerContenu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Load
	 *	- or -
	 * 		http://example.com/index.php/Load/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Load/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
	}
	public function select(){
		$this->load->model('contenu');
        $id=$this->input->get('id');
        
		$data['content']=$this->contenu->selectContenuCause($id);
        //var_dump($data['content']);
		$this->load->helper('assets');
		$this->load->view('contenu',$data);
		
	}

	public function insertContenuCause()
	{
		$this->load->model('contenu');
		$titre=$this->input->post('titre');
		$submit=$this->input->post('submit');
		$idCause=$this->input->post('idCause');
		$date=$this->input->post('date');
		$image=$_FILES['file']['name'];
		$file=$_FILES['file']['tmp_name'];
		$description=$this->input->post('description');
		//$imagebase64=$this->contenu->convertBase64($file);

		//var_dump($imagebase64);
		//echo '<img src="'.$imagebase64.'">';
		//$this->contenu->insertContenuCause($titre,$imagebase64,$idCause,$description,$date);
		$ret=$this->contenu->uploadImageCause($titre,$submit,$image,$file,$idCause,$description,$date);
		
		$this->load->helper('assets');
		$data['contenu']='from_content_cause.php';
		$data['cause']=$this->contenu->get_Cause();
		$this->load->view('admin',$data);
	}

	public function deleteContenuCause()
	{
		$this->load->helper('assets');
		$id=$this->input->get('id');
		$this->load->model('contenu');
		$this->contenu->delete_Contenu_cause($id);
		$data['contenu']='liste_contenu.php';
		$data['cause']=$this->contenu->get_contenu_cause();	
		$this->load->view('admin',$data);
	}
		
}
?>