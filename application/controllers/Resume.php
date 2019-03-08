<?php
class resume extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
		if(!$this->session->userdata('uid')){
                redirect('login', 'refresh');
         }

	}
	
	public function index()
	{
		$details = $this->user_model->get_college_by_id($this->session->userdata('uid'));
        	if (!empty($details)){
        	$data['id'] = $details[0]->id;
        	$data['cname'] = $details[0]->cname;
        	$data['cdept'] = $details[0]->cdept;
        	$data['ccourse'] = $details[0]->ccourse;
        	$data['cyear'] = $details[0]->cyear;
        	$data['cobt'] = $details[0]->cobt;
        	$data['cout'] = $details[0]->cout;
        	$data['cadditional'] = $details[0]->cadditional;
        }
			else {
				$data['id'] = '';
				$data['cname'] = '';
        	$data['cdept'] = '';
        	$data['ccourse'] = '';
        	$data['cyear'] = '';
        	$data['cobt'] = '';
        	$data['cout'] = '';
        	$data['cadditional'] = '';
			}

		$details = $this->user_model->get_school_by_id($this->session->userdata('uid'));
        	if (!empty($details)){
        	$data['id'] = $details[0]->id;
        	$data['sname'] = $details[0]->sname;
        	$data['sboard'] = $details[0]->sboard;
        	$data['per'] = $details[0]->per;
        	$data['syear'] = $details[0]->syear;
        	$data['additional'] = $details[0]->additional;
        }
			else {
				$data['id'] = '';
				$data['sname'] = '';
        	$data['sboard'] = '';
        	$data['per'] = '';
        	$data['syear'] = '';
        	$data['additional'] = '';
			}
		$details = $this->user_model->get_skills_by_id($this->session->userdata('uid'));
            if (!empty($details))
			{	$data['id'] = $details[0]->id;
				$data['i'] = $details[0]->i;
        	$data['cl'] = $details[0]->cl;
        	$data['s'] = $details[0]->s;
        	$data['a'] = $details[0]->a;
        	$data['l'] = $details[0]->l;
        	$data['details'] = $details[0]->details;
				
			}
			else {$data['id'] = '';
				$data['i'] = '';
        	$data['cl'] ='';
        	$data['s'] = '';
        	$data['a'] = '';
        	$data['l'] ='';
        	$data['details'] ='';
			}
        	
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$data['query2']=$this->user_model->showachievement($this->session->userdata('uid'));
		$data['query1']=$this->user_model->showwork($this->session->userdata('uid'));
		$data['query']=$this->user_model->showothercourses($this->session->userdata('uid'));
        	$data['ucontact'] = $details[0]->contact;
        	$data['fname'] = $details[0]->fname;
        	$data['lname'] = $details[0]->lname;
			$this->load->view('sidenav',$data);
			$this->load->view('resume1',$data);
	 
	}
		
}