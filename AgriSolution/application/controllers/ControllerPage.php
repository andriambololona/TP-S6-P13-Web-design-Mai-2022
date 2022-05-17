<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPage extends CI_Controller {

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
	
    public function indexAbout(){
		$this->load->helper('assets');
		//$data['caisse'] = $this->session->userdata('caisse');
		//$data['template'] = 'login.php';
		$this->load->view('about');
		
	}
    public function indexGallery(){
		$this->load->helper('assets');
		//$data['caisse'] = $this->session->userdata('caisse');
		//$data['template'] = 'login.php';
		$this->load->view('gallery');
		
	}
    public function indexContact(){
		$this->load->helper('assets');
		//$data['caisse'] = $this->session->userdata('caisse');
		//$data['template'] = 'login.php';
		$this->load->view('contact');
		
	}
    public function indexServices(){
		$this->load->helper('assets');
		//$data['caisse'] = $this->session->userdata('caisse');
		//$data['template'] = 'login.php';
		$this->load->view('services');
		
	}
    public function indexTypography(){
		$this->load->helper('assets');
		//$data['caisse'] = $this->session->userdata('caisse');
		//$data['template'] = 'login.php';
		$this->load->view('typography');
		
	}

	public function indexAdmin(){
		$this->load->helper('assets');
		//$data['caisse'] = $this->session->userdata('caisse');
		//$data['template'] = 'login.php';
		$this->load->view('admin');
		
	}

	public function indexInscription()
	{
		$this->load->helper('assets');
		$data['inscription']='inscription.php';
		//$data['caisse'] = $this->session->userdata('caisse');
		//$data['template'] = 'login.php';
		$this->load->view('admin',$data);
	}
}
