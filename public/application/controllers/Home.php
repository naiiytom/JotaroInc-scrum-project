<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
        session_start();
	}
	
	public function index()
	{
		$username =  array();
		if(isset($_SESSION) && isset($_SESSION['logged_in'])){
				if($_SESSION['access'] == 0){
					$username =  array( 'username' =>$_SESSION['username']);
					$this->homePageAdmin($username);
				}
				elseif($_SESSION['access'] == 1 || $_SESSION['access'] == 3){
					$username =  array( 'username' =>$_SESSION['username']);
					$this->homePageUser($username);
				}
				else {
					$this->homePage();
				}
		}
		else {
			$this->homePage();
		}
	}

	public function homePage()
	{
		$this->load->view('style/header');
		$this->load->view('home/home');
		$this->load->view('style/footer');
	}

	public function homePageAdmin($username)
	{
		$this->load->view('style/header');
		$this->load->view('home/homeAdmin', $username);
		$this->load->view('style/footer');
	}

	public function homePageUser($username)
	{
		$this->load->view('style/header');
		$this->load->view('home/homeUser', $username);
		$this->load->view('style/footer');
	}
}
