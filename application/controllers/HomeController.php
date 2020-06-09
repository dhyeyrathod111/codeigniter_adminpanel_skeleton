<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Dhyey Rathod
 */
class HomeController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
}