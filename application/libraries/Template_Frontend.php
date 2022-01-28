<?php
class Template_Frontend
{
    protected $_ci;

    function __construct()
    {
        $this->_ci = &get_instance();
    }

    function view($content, $data = NULL)
    {
        $this->_ci->load->view('template/header', $data);
        $this->_ci->load->view('template/navbar', $data);
        $this->_ci->load->view($content, $data);
        $this->_ci->load->view('template/footer', $data);
    }
}
