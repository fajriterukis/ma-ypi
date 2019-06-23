<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_m');

	}

	public function index()
	{
		$data['title']  = 'Berita';
		$data['berita'] = $this->Berita_m->tampil()->result_array();
		$this->template->frontend('frontend/berita', $data);
	}

	public function read($id)
	{
		$data['title']  = 'Berita';
		$data['berita'] = $this->Berita_m->tampil($id)->row_array($id);
		$this->template->frontend('frontend/read_berita', $data);
	}
}
