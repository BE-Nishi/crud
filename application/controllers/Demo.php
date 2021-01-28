<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

    public function __construct()  
    {  
        parent::__construct();  
  
        //calling model  
        $this->load->model("Ex_model");  
    }
    public function index()
	{
        $data['contacts'] = $this->Ex_model->fetchtable();
        $this->load->view('list',$data);
    }
    public function add()
	{
        $this->load->model('ex_model');
             $this->form_validation->set_rules('uname', 'Username', 'required');
             $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
             $this->form_validation->set_rules('phone', 'Phone', 'required');
             $this->form_validation->run();
             
             $formData = array();
             $formData['Name'] = $this->input->post('uname');
             $formData['Email'] = $this->input->post('email');
             $formData['Subject'] = $this->input->post('subject');
             $formData['Message'] = $this->input->post('msg');
             $formData['Phone'] = $this->input->post('phone');
             $this->Ex_model->addData($formData);
              redirect(base_url(). 'index.php/demo/inserted');
        }  
        
        public function inserted()
        {
            $this->index();
        }

        public function delete_data()
        {
            $id = $this->uri->segment(3);
            $this->load->model('ex_model');
            $this->Ex_model->delete_data($id);
            redirect(base_url().'index.php/demo/deleted');
        }

        public function deleted()
        {
            $this->index();
        }
	
        
	public function update_data()
    {
       $id = $this->uri->segment(3);
       $this->load->model('ex_model');
    $data['user_data'] = $this->Ex_model->fetch_single_data($id);
    $data['contacts'] = $this->Ex_model->fetchtable();
        $this->load->view('list',$data);
    }
        
}
?>