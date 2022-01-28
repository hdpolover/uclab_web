<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->template_frontend->view('beranda/home');
	}

	public function about()
	{
		$this->template_frontend->view('beranda/about');
	}

	public function gallery()
	{
		$this->template_frontend->view('beranda/gallery');
	}
}
