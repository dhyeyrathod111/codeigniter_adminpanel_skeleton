<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller  
{
    // protected $data = '';protected $responseapi = '';

	public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $this->load->model('Apimodel','apimodel');
        if($this->input->server('REQUEST_METHOD') === "OPTIONS") die();

    }
	public function contact_post()
	{
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('user_message', 'Message', 'required');
        if ($this->form_validation->run()) {
            $insert_payload['name'] = $this->security->xss_clean($this->input->post('name'));
            $insert_payload['contact'] = $this->security->xss_clean($this->input->post('contact')); 
            $insert_payload['email'] = $this->security->xss_clean($this->input->post('email')); 
            $insert_payload['message'] = $this->security->xss_clean($this->input->post('user_message')); 
            if ($this->apimodel->new_contact_message($insert_payload)) {
                $responseapi['status'] = 'T';
                $responseapi['message'] = 'Your query has been submited successfully.';
            } else {
                $responseapi['status'] = 'F';
                $responseapi['message'] = 'Sorry, we have to face some technical issues please try again later.';
            }
        } else {
            $responseapi['status'] = 'F';
            $responseapi['message'] = validation_errors();
        }
        return $this->output->set_content_type('application/json')->set_output(json_encode($responseapi));
	}
}