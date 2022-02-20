<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // get website info by param
    public function get_websiteInfo($name)
    {
        $this->db->select('b.value');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'website');
        $this->db->where('b.name', $name);
        $query = $this->db->get();
        return $query->row()->value;
    }

    // get mailer info by param
    public function get_mailerInfo($name)
    {
        $this->db->select('b.value');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'mailer');
        $this->db->where('b.name', $name);
        $query = $this->db->get();
        return $query->row()->value;
    }

    // get hero info 
    public function get_websiteHero()
    {
        $this->db->select('*');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'hero');
        $query = $this->db->get();
        return $query->row();
    }

    // get featured info 
    public function get_websiteFeatured()
    {
        $this->db->select('*');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'featured_hero');
        $query = $this->db->get();
        return $query->row();
    }

    // procces
    public function change_passAdmin()
    {
        $pass         = htmlspecialchars($this->input->post('new_pass'), true);
        $pass         = password_hash($pass, PASSWORD_DEFAULT);

        $this->db->where('user_id', $this->session->userdata("user_id"));
        $this->db->update('tb_auth', array('password' => $pass));

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function change_websiteInfo()
    {
        $title             = $this->input->POST('title');
        $description         = $this->input->POST('description');
        $about             = $this->input->POST('about');
        $address     = $this->input->POST('address');
        $phone         = $this->input->POST('phone');
        $email         = $this->input->POST('email');


        $this->db->where('name', "title");
        $this->db->update('tb_information', array('value' => $title));

        $this->db->where('name', "description");
        $this->db->update('tb_information', array('value' => $description));

        $this->db->where('name', "about");
        $this->db->update('tb_information', array('value' => $about));

        $this->db->where('name', "address");
        $this->db->update('tb_information', array('value' => $address));

        $this->db->where('name', "phone");
        $this->db->update('tb_information', array('value' => $phone));

        $this->db->where('name', "email");
        $this->db->update('tb_information', array('value' => $email));

        return true;
    }

    public function change_websiteContent()
    {
        $about             = $this->input->POST('about');


        $this->db->where('name', "about");
        $this->db->update('tb_information', array('value' => $about));

        return true;
    }

    public function change_mailer()
    {
        $username         = $this->input->post('username');
        $password         = $this->input->post('password');
        $set_form         = $this->input->post('set_form');

        $this->db->where('name', "username");
        $this->db->update('tb_information', array('value' => $username));

        $this->db->where('name', "password");
        $this->db->update('tb_information', array('value' => $password));

        $this->db->where('name', "set_form");
        $this->db->update('tb_information', array('value' => $set_form));


        return true;
    }

    public function change_hero($background)
    {
        $title         = $this->input->post('hero_title');
        $description   = $this->input->post('hero_description');

        if ($background == false) {
            $data = [
                'name' => $title,
                'value' => $description
            ];
        } else {
            $data = [
                'image' => $background,
                'name' => $title,
                'value' => $description
            ];
        }

        $this->db->where('id', 16);
        $this->db->update('tb_information', $data);

        return true;
    }

    public function change_featured()
    {
        $title         = $this->input->post('featured_title');
        $description   = $this->input->post('featured_description');

        $data = [
            'name' => $title,
            'value' => $description
        ];

        $this->db->where('id', 21);
        $this->db->update('tb_information', $data);

        return true;
    }
}
