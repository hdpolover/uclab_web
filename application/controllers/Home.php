<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->template_frontend->view('beranda/home');
	}

	public function not_found()
	{
		$this->template_frontend->view('beranda/not_found');
	}

	public function about()
	{
		$this->template_frontend->view('beranda/about');
	}

	public function gallery()
	{
		$this->template_frontend->view('beranda/gallery');
	}

	public function new_collection()
	{
		$this->template_frontend->view('beranda/new_collection');
	}

	public function foundation($categories)
	{
		$this->template_frontend->view('beranda/foundation');
	}

	public function item_detail($categories)
	{
		$this->load->view('beranda/ajax/item_detail');
	}

	public function search()
	{
		$this->template_frontend->view('search');
	}
}
