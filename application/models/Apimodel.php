<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class Apimodel extends CI_Model
{	
	public function __construct()
	{
		parent::__construct();
	}
	public function new_contact_message($data_payload)
	{
		return $this->db->insert('contact_us', $data_payload);	
	}
}