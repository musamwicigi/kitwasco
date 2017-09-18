<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){

		$data['main_content'] = 'fe/home';

		$this->load->view('fe/includes/template',$data);
	}
	function about(){
		$data['main_content'] = 'fe/about';
		$this->load->view('fe/includes/template',$data);
	}
	function services(){
		$data['main_content'] = 'fe/services';
		$this->load->view('fe/includes/template',$data);
	}
	function customercare(){
		$data['main_content'] = 'fe/customercare';
		$this->load->view('fe/includes/template',$data);
	}

}
