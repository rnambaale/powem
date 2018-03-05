<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model(array('posts_model'));
	}

	public function index(){
		$this->data['title'] = 'Home';
		$this->load->view('home/index', $this->data);
	}
}