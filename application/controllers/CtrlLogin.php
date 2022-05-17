<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Base_Controller.php');
class CtrlLogin extends CI_Controller {

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

	/*public function Test_Login(){
		$this->load->helper('assets');

		$email = $this->input->post('email');
		$mdp = $this->input->post('mdp');

		if(){
			$data['template'] = 'accueil.php';
			$this->load->view('template',$data);
		}else{
			$data['template'] = 'login.php';
			$this->load->view('template',$data);
		}
	}*/

	public function index()
	{

		$this->load->helper('assets');
		$data['caisse'] = $this->session->userdata('caisse');
		$this->load->view('accueil',$data);
	}
	public function loginTrait(){
		
		$this->load->model('login');
		$id= $this->input->post('id');
		$mdp = $this->input->post('mdp');
		$numRows= $this->login->loginAdmin($id,$mdp);
		$data['erreur']=$numRows;
		
		if($numRows>0){
			$this->load->helper('assets');
			redirect(site_url("Accueil/indexAccueil"));
		}
		else{
			redirect(site_url());
		}
	}
	
	public function Changer_Caisse(){
		$this->session->sess_destroy();
		redirect(site_url());
	}
}