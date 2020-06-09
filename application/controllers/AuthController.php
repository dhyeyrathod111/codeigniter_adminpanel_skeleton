<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey rathod
 */
class AuthController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function login()
	{
		$this->load->view('admin/login_view');
	}
	public function registration()
	{
		$this->load->view('admin/registration_view');
	}
}