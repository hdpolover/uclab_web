<?php
class Template_Backend
{
    protected $_ci;

    function __construct()
    {
        $this->_ci = &get_instance();
        $this->_ci->load->database();
    }

    // get data from information
    public function get_data($param)
    {
        $query = $this->_ci->db->query("SELECT a.description, b.value FROM tb_information_type a, tb_information b WHERE a.key = 'website' AND b.name = '$param'");
        return $query->row()->value;
    }

    function view($content, $data = NULL)
    {
        $data['web_title'] = $this->get_data('title');
        $data['web_description'] = $this->get_data('description');
        $data['web_about'] = $this->get_data('about');
        $data['web_address'] = $this->get_data('address');
        $data['web_phone'] = $this->get_data('phone');
        $data['web_mail'] = $this->get_data('email');

        $data['logo'] = $this->get_data('logo');
        $data['logo2'] = $this->get_data('logo2');

        $this->_ci->load->view('template/backend/header', $data);
        $this->_ci->load->view('template/backend/sidebar', $data);
        $this->_ci->load->view($content, $data);
        $this->_ci->load->view('template/backend/footer', $data);
    }
}
