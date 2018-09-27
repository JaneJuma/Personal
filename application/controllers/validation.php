<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller {

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

	function __constact(){
		$this->load->model('main_model');
	}


	

	//validation for post form

	public function add_validation(){

		//validation starts here

	$this->load->library('form_validation');

	$this->form_validation->set_rules('first_name', 'First Name', 'required','min_length[3]');
	$this->form_validation->set_rules('last_name', 'Last Name', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('password', 'Password', 'required|md5');
	//$this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|matches[password]');
	
	//if validation runs it will perform the below function

	if ($this->form_validation->run()) {
		  
		  $this->load->model('main_model');
		  $this->main_model->registration();


          $this->load->view('includes/header2');
		  $this->load->view('login');
		  $this->load->view('includes/footer');
	}

	//if validation fails it will perform the below function

	else{

		$this->registration();

	}



	}
	


	//function to load page with the form

	public function registration(){

		

		$data['title'] = "regisration";


		$this->load->view('includes/header2', $data);
		$this->load->view('registration');
		$this->load->view('includes/footer');



	}

	//TICKET VALIDATION

	public function ticketing_validation(){

		//validation starts here

	$this->load->library('form_validation');
    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'required');
	$this->form_validation->set_rules('departing_date', 'departing_date', 'required');
	$this->form_validation->set_rules('source', 'source', 'required');
	$this->form_validation->set_rules('destination', 'destination', 'required');
	
	//if validation runs it will perform the below function

	if ($this->form_validation->run()) {
		  
		  $this->load->model('main_model');
		  $this->main_model->ticketing();


          $this->load->view('includes/header');
		  $this->load->view('dashboard');
		  $this->load->view('includes/footer');
		
	}

	//if validation fails it will perform the below function

	else{

		$this->ticketing();

	}



	}


	//function to load page with the form

	public function ticketing(){

		

		$data['title'] = "ticketing";


		$this->load->view('includes/header', $data);
		$this->load->view('ticketing');
		$this->load->view('includes/footer');



	}

	//PAYMENT VALIDATION

	public function payment_validation(){

		//validation starts here

	$this->load->library('form_validation');
    $this->form_validation->set_rules('holders_name', 'Holders Name', 'required');
    $this->form_validation->set_rules('card_number', 'Card Number', 'required');
	$this->form_validation->set_rules('expiry_date', 'Expiry Date', 'required');
	$this->form_validation->set_rules('card_cvv', 'Card CVV', 'required');
	
	
	//if validation runs it will perform the below function

	if ($this->form_validation->run()) {
		  
		  $this->load->model('main_model');
		  $this->main_model->payment();


          $this->load->view('includes/header');
		  $this->load->view('dashboard');
		  $this->load->view('includes/footer');
		
	}

	//if validation fails it will perform the below function

	else{

		$this->payment();

	}



	}


	//function to load page with the form

	public function payment(){

		

		$data['title'] = "payment";


		$this->load->view('includes/header', $data);
		$this->load->view('payment');
		$this->load->view('includes/footer');



	}



	//EDITSCHEDULE VALIDATION

	public function editschedule_validation(){

		//validation starts here

	$this->load->library('form_validation');
    $this->form_validation->set_rules('first_name', 'First name', 'required');
    $this->form_validation->set_rules('last_name', 'Last name', 'required');
	$this->form_validation->set_rules('departing_time', 'Departing Time', 'required');
	$this->form_validation->set_rules('source', 'Source', 'required');
	$this->form_validation->set_rules('destination', 'Destination', 'required');
	
	
	//if validation runs it will perform the below function

	if ($this->form_validation->run()) {
		  
		  $this->load->model('main_model');
		  $this->main_model->editschedule();


          $this->load->view('includes/header');
		  $this->load->view('dashboard');
		  $this->load->view('includes/footer');
		
	}

	//if validation fails it will perform the below function

	else{

		$this->editschedule();

	}



	}


	//function to load page with the form

	public function editschedule(){

		

		$data['title'] = "editschedule";


		$this->load->view('includes/header', $data);
		$this->load->view('editschedule');
		$this->load->view('includes/footer');



	}


	//ticket return VALIDATION

	public function ticketreturn_validation(){

		//validation starts here

	$this->load->library('form_validation');
    $this->form_validation->set_rules('full_names', 'Full names', 'required');
    $this->form_validation->set_rules('id_no', 'Id_no', 'required');
	$this->form_validation->set_rules('ticket_no', 'Ticket no', 'required');
	
	
	//if validation runs it will perform the below function

	if ($this->form_validation->run()) {
		  
		  $this->load->model('main_model');
		  $this->main_model->ticketreturn();


          $this->load->view('includes/header');
		  $this->load->view('dashboard');
		  $this->load->view('includes/footer');
		
	}

	//if validation fails it will perform the below function

	else{

		$this->ticketreturn();

	}



	}


	//function to load page with the form

	public function ticketreturn(){

		

		$data['title'] = "ticketreturn";


		$this->load->view('includes/header', $data);
		$this->load->view('ticketreturn');
		$this->load->view('includes/footer');



	}


	//public function login(){
		//$this->form_validation->set_rules('username','Username','trim|required|min_length[8]');
		//$this->form_validation->set_rules('password','Passsword','trim|required|min_length[8]|max_length[50]');

		//if ($this->form_validation->run()==FALSE){
			//SET ERROR
			//$this->session->set_flashdata('login_failed','Sorry,the login infothat you entered is invalid');
			//redirect('login');
		//} else {
			//Get from post
			//$username=$this->input->post('username');
			//$password=$this->input->post('password');

			//Get user id from model
			//$user_id=$this->Main_model->login_user($username,$password);

			//VALIDATE USER
			//if($user_id){
				//create array of user data
				//$user_data=array(
					//'user_id' =>$user_id,
					//'username' =>$username,
					//'logged_in'=>true
					//);
				//set session userdata
				//$this->session->set_userdata($user_data);

				//redirect('main/dashboard');
			//} else {
				//set error
				 //print('login_failed', 'Sorry the login info that you entered is invalid');
				//redirect('validation/dashboard');
			//}

		//}
	//}

//controller

function login(){
	//http://localhost/system/

	$data['title'] = 'codeigniter simple login form with sessions';
	$this->load->view('includes/header2');
	$this->load->view('login', $data);
	$this->load->view('includes/footer');
}

public function login_validation(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('email','Email','required|valid_email');
	$this->form_validation->set_rules('password','Password','required|md5');

	if($this->form_validation->run())
	{
		//true
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		//model function
		$this->load->model('main_model');
		if($this->main_model->can_login($email, $password))
		{
			$session_data = array(
				'email' => $email
				);
			$this->session->set_flashdata($session_data);
			redirect(base_url() . 'main/dashboard');
		} else
		{
			$this->session->set_flashdata('error', 'Invalid Email and Password');
			redirect(base_url() . 'main/login');
		}




	} else{
		//false
		$this->login();
	}

}


	public function log_in(){
		$this->load->model('main_model');
          // Validate the user can login
          $result = $this->main_model->can_login();
          // Now we verify the result
          if(! $result){
              // If user did not validate, then show them login page again
              $msg = '<font color=red>Invalid username and/or password.</font><br />';
              redirect(base_url() . 'main/login', $msg);
          }else{
          	redirect(base_url() . 'main/dashboard');
          }
	}

	function dashboard(){
		if($this->session->userdata('email') != '')
		{
			echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';
			echo '<label><a href="'.base_url().'validation/logout">Logout</a></label>';

		} else
		{
			redirect(base_url() . 'validation/login');
		}
	}

    public function logout(){
        //Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        
        $this->load->view('includes/header2');
        $this->load->view('login');
        $this->load->view('includes/footer');
    }






}
























































