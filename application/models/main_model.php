<?php

/**
*
*/
class Main_model extends CI_Model
{

	//function to add school

    public function registration()
    {
       
    	$post_data = array(
                
                'first_name' => $this->input->post("first_name"),
                'last_name' => $this->input->post("last_name"),
                'email' => $this->input->post("email"), 
                'password' => $this->input->post("password"),
                
                
		       );

    	$query = $this->db->insert('registration', $post_data);

    	if($query){
    		return true;
    	}

    	else{
    		return false;

    	}


    }

    //TICKETING FUNCTION

      public function ticketing()
    {
       
        $post_data = array(
                 'first_name' => $this->input->post("first_name"),
                'last_name' => $this->input->post("last_name"),
                'departing_date' => $this->input->post("departing_date"),
                'source' => $this->input->post("source"),
                'destination' => $this->input->post("destination"), 
                
                
                
               );

        $query = $this->db->insert('ticketing', $post_data);

        if($query){
            return true;
        }

        else{
            return false;

        }

}
//end of model


//PAYMENT FUNCTION

   public function payment()
    {
        $enc_password = md5($this->input->post('password'));

       
        $post_data = array(
                 'holders_name' => $this->input->post("holders_name"),
                'card_number' => $this->input->post("card_number"),
                'expiry_date' => $this->input->post("expiry_date"),
                'card_cvv' => $this->input->post("card_cvv"),
               
                
                
                
               );

        $query = $this->db->insert('payment', $post_data);

        if($query){
            return true;
        }

        else{
            return false;

        }

}

//end of model




    //TICKETING FUNCTION

      public function editschedule()
    {
       
        $post_data = array(
                'first_name' => $this->input->post("first_name"),
                'last_name' => $this->input->post("last_name"),
                'departing_time' => $this->input->post("departing_time"),
                'source' => $this->input->post("source"),
                'destination' => $this->input->post("destination"), 
                
                
                
               );

        $query = $this->db->insert('edit_schedule', $post_data);

        if($query){
            return true;
        }

        else{
            return false;

        }

}
//end of model


 //TICKET_RETURN FUNCTION

      public function ticket_return()
    {
       
        $post_data = array(
                'full_names' => $this->input->post("full_names"),
                'id_no' => $this->input->post("id_no"),
                'ticket_no' => $this->input->post("ticket_no"),
               
                
                
                
               );

        $query = $this->db->insert('ticket_return', $post_data);

        if($query){
            return true;
        }

        else{
            return false;

        }

}
//end of model


//public function login_user($username,$password){
    //secure password
    //$enc_password=md5($password);

    //Validate
   //$this->db->where('username',$username);
    //$this->db->where('password',$enc_password);

    //$result= $this->db->get('system');
    //if($result->num_rows()== 1){
       // return$result->row(0)->id;
    //} else {
       // return false;
   // }
//}






//}


//model
   
function can_login($email, $password)

{
$enc_password =     md5($password);

     $this->db->where('email', $email);
     $this->db->where('password',$password);

    $query = $this->db->get('registration');

   if($query->num_rows() > 0)
     {
        return true;
    } else
    {         return false;
     }
}






public function manageticket(){
   $query = $this->db->get('ticketing');
   return $result = $query->result();
   }


} 