<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autocrud extends CI_Controller {

	public function index() {
		redirect('/autocrud/passo1');
	}

	public function passo1() {
		$tables = $this->db->list_tables();

		$data['tabelas'] = $tables;
		$this->load->view('autocrud_passo1', $data);
	}

	public function passo2() {
		$tabela = $this->input->post('tabela');
		
		$tables = $this->db->list_tables();
		$fields = $this->db->field_data($tables[$tabela]);

		$data['campos'] = $fields;
		$this->load->view('autocrud_passo2', $data);
	}

	public function passo3() {
		$this->load->view('autocrud_passo3');
	}
}
