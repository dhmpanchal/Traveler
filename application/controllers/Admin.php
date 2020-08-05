<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("admin/index");
    }

    public function camps()
    {
        $this->load->view("admin/camps");
    }

    public function post_camp()
    {
        $this->load->view("admin/add_camps");
    }

    public function save_camp()
    {
        echo "post camp";
    }
}

?>