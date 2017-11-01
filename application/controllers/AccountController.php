<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountController extends CI_Controller {

	function AccountController(){
		parent::__construct();
		//1,如果不添加这个方法，在前端使用url的时候会出问题
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('account');
	}


	public function checkUser(){
		//1,接受参数
      $FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		//2，根据$LastName  和$ email  去获得 数据库保存的密码


		echo "";

	}
}
