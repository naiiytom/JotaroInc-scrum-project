<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'GET') {
			json_output(400, array('status' => 400, 'message' => 'Bad request'));
		} else {
			json_output(200, array('status' => 200, 'message' => 'Welcome to Jotaro Inc API Page'));
		}
		//$this->load->view('showResult');
	}
}
