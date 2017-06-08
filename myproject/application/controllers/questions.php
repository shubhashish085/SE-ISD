<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Questions extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function quizdisplay()
	{
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestions();
		$this->load->view('play_quiz', $this->data);
	}
	
		public function resultdisplay()
	{
		$this->data['checks'] = array(
		     'ques1' => $this->input->post('quizid7'),
		     'ques2' => $this->input->post('quizid8'),
			 'ques3' => $this->input->post('quizid9'),
			 'ques4' => $this->input->post('quizid10'),
		     'ques5' => $this->input->post('quizid11'),
			 'ques6' => $this->input->post('quizid12'),
			 'ques7' => $this->input->post('quizid13'),
			 'ques8' => $this->input->post('quizid14'),
		     'ques9' => $this->input->post('quizid15'),
			 'ques10' => $this->input->post('quizid16'),
		);
        $this->load->model('quizmodel');
		$this->data['results'] = $this->quizmodel->getQuestions();
		$this->load->view('result_display', $this->data);
	}

	public function worddisplay()
	{
$this->load->view('wordMatching');
	}


}