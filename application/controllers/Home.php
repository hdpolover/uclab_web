<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// LOAD MODEL
		$this->load->model('M_beranda');
	}

	public function index()
	{

		$params['query'] = [
			'asset_owner' => '0x773a392c30aa5011c68d5bb5a89dc48ab7fd30f0',
			'limit' => 4,
		];

		$data['collection'] = $this->opensea->get_collection($params);

		$data['hero'] = $this->M_beranda->get_hero();

		$data['featured_hero'] = $this->M_beranda->get_featuredHero();
		$data['featured_list'] = $this->M_beranda->get_featuredList();
		$this->template_frontend->view('beranda/home', $data);
	}

	public function not_found()
	{
		$this->template_frontend->view('beranda/not_found');
	}

	public function about()
	{

		$data['featured_about'] = $this->M_beranda->get_featuredAbout();
		$this->template_frontend->view('beranda/about', $data);
	}

	public function gallery()
	{
		$this->template_frontend->view('beranda/gallery/gallery');
	}

	public function gallery_detail($id)
	{
		$this->template_frontend->view('beranda/gallery/gallery_detail');
	}

	public function new_collection()
	{

		$params['query'] = [
			'asset_owner' => '0x773a392c30aa5011c68d5bb5a89dc48ab7fd30f0',
		];

		$data['collection'] = $this->opensea->get_collection($params);

		$this->template_frontend->view('beranda/new_collection', $data);
	}

	public function foundation($categories)
	{
		$this->template_frontend->view('beranda/foundation');
	}

	public function item_detail($slug)
	{
		$data['data'] = $this->opensea->get_collection_detail($slug);
		$this->load->view('beranda/ajax/item_detail', $data);
	}

	public function search()
	{
		$this->template_frontend->view('search');
	}
}
