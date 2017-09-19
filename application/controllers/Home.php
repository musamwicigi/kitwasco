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
	function watersources(){
		$data['main_content'] = 'fe/watersource';
		$this->load->view('fe/includes/template',$data);
	}
	function faq(){
		$data['main_content'] = 'fe/faq';
		$this->load->view('fe/includes/template',$data);
	}
	function contact(){
		$data['main_content'] = 'fe/contact';
		$this->load->view('fe/includes/template',$data);
	}
	function download(){
		$data['main_content'] = 'fe/download';
		$this->load->view('fe/includes/template',$data);
	}
	function tenders(){
		$data['main_content'] = 'fe/tenders';
		$this->load->view('fe/includes/template',$data);
	}
	function gallery(){
		$data['main_content'] = 'fe/gallery';
		$this->load->view('fe/includes/template',$data);
	}
	function news(){
		$data['main_content'] = 'fe/news';
		$this->load->view('fe/includes/template',$data);
	}


}
