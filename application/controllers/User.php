<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('GeneralModel');
	}

	public function index()
	{
		$data['product'] = $this->GeneralModel->get_data('product')->result();
		$this->load->view('user/homepage', $data);
	}
}
