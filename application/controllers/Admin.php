<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // CEK APAKAH USER MASIH LOGIN
        if ($this->session->userdata('logged_in') == FALSE || !$this->session->userdata('logged_in')) {
            if (!empty($_SERVER['QUERY_STRING'])) {
                $uri = uri_string() . '?' . $_SERVER['QUERY_STRING'];
            } else {
                $uri = uri_string();
            }
            $this->session->set_userdata('redirect', $uri);
            $this->session->set_flashdata('error', "Harap masuk ke akun anda, untuk melanjutkan");
            redirect('login');
        } else {
            // SET ID_USER, SAAT USER MASIH LOGIN
            $this->user_id        = $this->session->userdata('user_id');
            $this->user_name      = $this->session->userdata('name');
            $this->user_email     = $this->session->userdata('email');
        }

        $this->load->model('M_authentication', 'M_auth');
        $this->load->model('M_admin');
    }
    public function index()
    {

        $this->template_backend->view('admin/dashboard');
    }

    public function information()
    {

        $data['w_title'] = $this->M_admin->get_websiteInfo("title");
        $data['w_description'] = $this->M_admin->get_websiteInfo("description");
        $data['w_about'] = $this->M_admin->get_websiteInfo("about");
        $data['w_address'] = $this->M_admin->get_websiteInfo("address");
        $data['w_phone'] = $this->M_admin->get_websiteInfo("phone");
        $data['w_email'] = $this->M_admin->get_websiteInfo("email");

        $data['w_about'] = $this->M_admin->get_websiteInfo("about");

        $data['w_logo'] = $this->M_admin->get_websiteInfo("logo");
        $data['w_logo2'] = $this->M_admin->get_websiteInfo("logo2");

        //mailer
        $data['w_username'] = $this->M_admin->get_mailerInfo("username");
        $data['w_password'] = $this->M_admin->get_mailerInfo("password");
        $data['w_allias'] = $this->M_admin->get_mailerInfo("set_form");

        $data['hero'] = $this->M_admin->get_websiteHero();
        $data['featured'] = $this->M_admin->get_websiteFeatured();

        $this->template_backend->view('admin/information', $data);
    }
    public function list_gallery()
    {

        $this->template_backend->view('admin/gallery/list_gallery');
    }
    public function add_gallery()
    {

        $this->template_backend->view('admin/gallery/add_gallery');
    }
    public function manage_collection()
    {

        $params['query'] = [
            'asset_owner' => '0x773a392c30aa5011c68d5bb5a89dc48ab7fd30f0',
        ];

        $data['collection'] = $this->opensea->get_collection($params);

        $this->template_backend->view('admin/manage_collection', $data);
    }
    public function list_foundation()
    {

        $this->template_backend->view('admin/foundation/list_foundation');
    }
    public function new_foundation()
    {

        $this->template_backend->view('admin/foundation/new_foundation');
    }

    public function change_websiteInfo()
    {
        if ($this->M_admin->change_websiteInfo() == true) {
            $this->session->set_flashdata('success', 'Successfully change your website information !');
            redirect(site_url('dashboard/information'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when change your website information !');
            redirect($this->agent->referrer());
        }
    }

    public function change_websiteContent()
    {
        if ($this->M_admin->change_websiteContent() == true) {
            $this->session->set_flashdata('success', 'Successfully change your website content !');
            redirect(site_url('dashboard/information'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when change your website content !');
            redirect($this->agent->referrer());
        }
    }

    public function change_featured()
    {
        if ($this->M_admin->change_featured() == true) {
            $this->session->set_flashdata('success', 'Successfully change your featured content !');
            redirect(site_url('dashboard/information'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when change your featured content !');
            redirect($this->agent->referrer());
        }
    }

    function change_icon()
    {
        // UPLOAD
        if (!empty($_FILES['image']['name'])) {
            // CREATE FILENAME
            $path          = $_FILES['image']['name'];
            $ext           = pathinfo($path, PATHINFO_EXTENSION);

            $filename    = "logo.{$ext}";

            // UPLOAD FILE
            $config['upload_path']          = "berkas/";
            $config['allowed_types']        = 'JPEG|jpeg|JPG|jpg|PNG|png';
            $config['max_size']             = 10 * 1024;
            $config['file_name']            = $filename;
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "There is a problem when trying upload your icon!");
                redirect($this->agent->referrer());
            } else {

                $this->db->where('name', 'logo');
                $this->db->update('tb_information', array('value' => $filename));
                $this->session->set_flashdata('success', 'Successfully change your icon !');
                redirect(site_url('dashboard/information'));
            }
        } else {
            $this->session->set_flashdata('error', 'Please choose an image !');
            redirect($this->agent->referrer());
        }
    }

    function change_logo()
    {
        // UPLOAD
        if (!empty($_FILES['image']['name'])) {
            // CREATE FILENAME
            $path          = $_FILES['image']['name'];
            $ext           = pathinfo($path, PATHINFO_EXTENSION);

            $filename    = "logo.{$ext}";

            // UPLOAD FILE
            $config['upload_path']          = "berkas/";
            $config['allowed_types']        = 'JPEG|jpeg|JPG|jpg|PNG|png';
            $config['max_size']             = 10 * 1024;
            $config['file_name']            = $filename;
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "There is a problem when trying upload your icon !");
                redirect($this->agent->referrer());
            } else {

                $this->db->where('name', 'logo2');
                $this->db->update('tb_information', array('value' => $filename));
                $this->session->set_flashdata('success', 'Successfully change your icon !');
                redirect(site_url('dashboard/information'));
            }
        } else {
            $this->session->set_flashdata('error', 'Please choose an image !');
            redirect($this->agent->referrer());
        }
    }

    function change_hero()
    {
        // UPLOAD
        if (!empty($_FILES['image']['name'])) {
            // CREATE FILENAME
            $path          = $_FILES['image']['name'];
            $ext           = pathinfo($path, PATHINFO_EXTENSION);

            $filename    = "hero.{$ext}";

            // UPLOAD FILE
            $config['upload_path']          = "berkas/hero";
            $config['allowed_types']        = 'JPEG|jpeg|JPG|jpg|PNG|png';
            $config['max_size']             = 10 * 1024;
            $config['file_name']            = $filename;
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "There is a problem when trying upload your hero data`s !");
                redirect($this->agent->referrer());
            } else {

                $this->M_admin->change_hero($filename);
                $this->session->set_flashdata('success', 'Successfully change your hero data`s !');
                redirect(site_url('dashboard/information'));
            }
        } else {

            $this->M_admin->change_hero(false);
            $this->session->set_flashdata('success', 'Successfully change your hero data`s !');
            redirect(site_url('dashboard/information'));
        }
    }
}
