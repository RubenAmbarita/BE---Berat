<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

function __construct(){
		parent::__construct();		
		$this->load->model('model');
		$this->load->helper('url');
 		$this->output->enable_profiler(TRUE);
}
 
function index(){
		$this->output->enable_profiler(TRUE);
		$data['sirclo'] = $this->model->tampil_data();
		$this->load->view('view',$data);
	}
 
function tambah(){
		$this->output->enable_profiler(TRUE);
		$this->load->view('view_input');
	}

function tambah_aksi(){
		$this->output->enable_profiler(TRUE);
		$tanggal = $this->input->post('tanggal');
		$max = $this->input->post('max');
		$min = $this->input->post('min');
		$perbedaan = $max - $min;
 
		$data = array(
			'tanggal' => $tanggal,
			'max' => $max,
			'min' => $min,
			'perbedaan' => $perbedaan
			);
		$this->model->input_data($data,'sirclo');
		redirect('controller/index');
	}

function edit($id){
		$this->output->enable_profiler(TRUE);
		$where = array('id' => $id);
		$data['sirclo'] = $this->model->edit_data($where,'sirclo')->result();
		$this->load->view('view_edit',$data);
	}

	function view($id){
		$this->output->enable_profiler(TRUE);
		$where = array('id' => $id);
		$data['sirclo'] = $this->model->view_data($where,'sirclo')->result();
		$this->load->view('view_data',$data);
	}

function update(){
	$this->output->enable_profiler(TRUE);
	$id = $this->input->post('id');
	$tanggal = $this->input->post('tanggal');
	$max = $this->input->post('max');
	$min = $this->input->post('min');
	$perbedaan = $max - $min; 
	$data = array(
		'tanggal' => $tanggal,
		'max' => $max,
		'min' => $min,
		'perbedaan' => $perbedaan
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->model->update_data($where,$data,'sirclo');
	redirect('controller/index');
}

function hapus($id){
	$this->output->enable_profiler(TRUE);
		$where = array('id' => $id);
		$this->model->hapus_data($where,'sirclo');
		redirect('controller/index');
	}
}