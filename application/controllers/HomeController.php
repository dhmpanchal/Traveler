<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', 'userModel');
        $this->load->model('CampModel', 'campModel');
    }

    public function index()
    {
        $this->load->view("users/index");
    }

    public function signup()
    {
        $this->load->view("users/signup");
    }

    public function login()
    {
        $this->load->view("users/login");
    }

    public function doRegister()
    {
        $fname = $this->input->post("first_name");
        $lname = $this->input->post("last_name");
        $email = $this->input->post("email");
        $phone = $this->input->post("phone");
        $uname = $this->input->post("username");
        $pwd = $this->input->post("password");
        $createdAt = date("d-m-Y");

        $post_data = array(
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email,
            'phone' => $phone,
            'username' => $uname,
            'password' => $pwd,
            'created_at' => $createdAt
        );
        
        if ($this->userModel->create_user($post_data)) {
          $this->session->set_flashdata('sucess','!You have Registered successfully...');
          return redirect('HomeController/signup');
        }
        else {
          $this->session->set_flashdata('error','!Something is weong please try again...');
          return redirect('HomeController/signup');
        }
    }

    public function doLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $user_id = $this->userModel->is_authenticate($username,$password);
        if ($user_id) {
          $this->session->set_userdata('id',$user_id);
          return redirect('HomeController/index');
        }
        else {
          $this->session->set_flashdata('login_faild','!Invalid username/password');
          return redirect('HomeController/login');
        }
    }

    public function camp_list()
    {
        $data["camps"] = $this->campModel->get_all_camps();
        $this->load->view("users/camp", $data);
    }

    public function camp_details($id)
    {
        $data["getcamp"] = $this->campModel->get_data_byId($id);
        $this->load->view("users/camp_details", $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->load->view('users/login');
    }
}
?>