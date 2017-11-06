<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {


	public function driver()
	{
		
		$data['title']="Profile";
		//$this->load->model('check_for_cookie'); 

		

        $this->load->view('head',$data);
		$this->load->view('driver_prf',$data);
		$this->load->view('foot',$data);
	}

}
