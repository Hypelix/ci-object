<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test_controller extends CI_Controller {



    function __construct()
    {
		parent::__construct();

        $this->load->model('Test_model','Test_model');
    }

  

	function delete_test(){
    $test_id = $this->input->get('test_id');
    $this->load->model('Test_model');
    $this->Test_model->delete_test($test_id);
		redirect('Test_controller/ViewTest');
	}

	public function TestRegister()
  {
    if(!empty($_POST))
    {
      $data =  array('test_id' => $this->input->post('test_id'),
          'test1' => $this->input->post('test1'),
          'test2' => $this->input->post('test2'),
          'test3' => $this->input->post('test3'),
          'test4' => $this->input->post('test4'),
          );
      $this->Test_model->TestRegister($data);
      redirect('Test_controller/ViewTest');
    }
    else
    {
      $data['getTest'] = $this->Test_model->getTest();
      $this->load->view('test_register',$data);
    }

  }

	public function ViewTest() 
{
		$data['getTest'] = $this->Test_model->getTest();
		$this->load->view('view_test',$data);


}

  public function update_test() 
{
    $test_id = $this->input->get('test_id');
    $data['getTest'] = $this->Test_model->getTestbyId($test_id);
    $this->load->view('update_test',$data);

}


  public function UpdateTest()
  {
    $data =  array('test_id' => $this->input->post('test_id'),
          'test1' => $this->input->post('test1'),
          'test2' => $this->input->post('test2'),
          'test3' => $this->input->post('test3'),
          'test4' => $this->input->post('test4'),
          );
      
      $this->Test_model->TestUpdate($data);
      redirect('Test_controller/ViewTest');
  }

}//end
