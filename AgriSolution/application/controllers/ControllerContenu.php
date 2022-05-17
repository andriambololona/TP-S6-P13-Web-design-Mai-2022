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
		
}
?>