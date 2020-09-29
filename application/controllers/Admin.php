<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
		$this->load->view('admin/listproduct', $data);
	}

	public function add_product()
	{
		$config['upload_path']          = './assets/foto';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('product_img')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		} else {
			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name'];

			$product_insert = array(
				'product_name' => $this->input->post('product_name'),
				'product_price' => $this->input->post('product_price'),
				'product_desc' => $this->input->post('product_desc'),
				'product_img' => $file_name
			);

			$this->GeneralModel->add_data('product', $product_insert);
			redirect('admin/');
		}
	}

	public function get_selected_product()
	{
		$where = $this->input->post('id_product');
		$data = $this->GeneralModel->get_selected('product', array('id_product' => $where))->row();
		$this->load->view('admin/', $data);
	}


	public function edit_product()
	{
		$config['upload_path']          = './assets/foto';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		$where = array('id_product' => $this->input->post('edit_id_product'));
		if (!$this->upload->do_upload('edit_product_img')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		} else {
			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name'];

			$product_update = array(
				'product_name' => $this->input->post('edit_product_name'),
				'product_price' => $this->input->post('edit_product_price'),
				'product_desc' => $this->input->post('edit_product_desc'),
				'product_img' => $file_name
			);

			// var_dump($product_update);
			// exit();

			$this->GeneralModel->update_data('product', $product_update, $where);
			redirect('admin');
		}
	}

	public function delete_product()
	{
		$id = array('id_product' => $this->input->post('id'));
		$result = $this->GeneralModel->delete_data($id, 'product');
		var_dump($result);
		// redirect('admin', $result);
	}
}
