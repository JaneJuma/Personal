<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('includes/header2');
		$this->load->view('login');
		$this->load->view('includes/footer');
	}



	public function registration() {
		$this->load->view('includes/header2');
		$this->load->view('registration');
		$this->load->view('includes/footer');
	}


	public function bus_info() {
		$this->load->view('includes/header');
		$this->load->view('bus_info');
		$this->load->view('includes/footer');
	}


	public function route_info() {
		$this->load->view('includes/header');
		$this->load->view('route_info');
		$this->load->view('includes/footer');
	}

	public function schedules() {
		$this->load->view('includes/header');
		$this->load->view('schedules');
		$this->load->view('includes/footer');
	}



	public function editschedule() {
		$this->load->view('includes/header');
		$this->load->view('editschedule');
		$this->load->view('includes/footer');
	}

	public function view_buses() {
		$this->load->view('includes/header');
		$this->load->view('view_buses');
		$this->load->view('includes/footer');
	}


	public function ticketing() {
		$this->load->view('includes/header');
		$this->load->view('ticketing');
		$this->load->view('includes/footer');
	}

	public function payment() {
		$this->load->view('includes/header');
		$this->load->view('payment');
		$this->load->view('includes/footer');
	}

	
	public function dashboard() {
		$this->load->view('includes/header');
		$this->load->view('dashboard');
		$this->load->view('includes/footer');
	}

	public function ticketreturn() {
		$this->load->view('includes/header');
		$this->load->view('ticketreturn');
		$this->load->view('includes/footer');
	}

      
      public function login() {
		$this->load->view('includes/header2');
		$this->load->view('login');
		$this->load->view('includes/footer');
	}



	public function print_ticket() {
		$this->load->view('includes/header');
		$this->load->view('print_ticket');
		$this->load->view('includes/footer');
	}






public function finalization(){
    	$result = $this->Main_model->manageticket();
    	if (!empty($result)) {
    		$data['ticketing'] = $result;
    	$this->load->view('includes/header');
		$this->load->view('finalization',$data);
		$this->load->view('includes/footer');
         }
         }


}
