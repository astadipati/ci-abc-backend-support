<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rama extends CI_Controller {

	
	public function index()
	{
		$this->load->view('depan/tamvan');
	}
}
