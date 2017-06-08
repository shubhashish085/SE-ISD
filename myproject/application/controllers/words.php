<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Words extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function worddisplay()
	{
		$this->load->model('wordmodel');
		$this->data['words'] = $this->wordmodel->getwords();
		$this->load->view('wordMatchingresult', $this->data);
	}
	



}