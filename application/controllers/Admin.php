<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("CampModel", "campModel");
        $this->load->model("packageModel", "packageModel");
    }

    public function index()
    {
        $this->load->view("admin/index");
    }

    public function camps()
    {
        $this->load->library('pagination');
        $config=[
          'base_url' => base_url('Admin/camps'),
          'per_page' => 6,
          'total_rows' => $this->campModel->total_rows(),
          'full_tag_open' => "<ul class='pagination'>",
          'full_tag_close' => '</ul>',
          'prev_tag_open' => '<li>',
          'prev_tag_close' => '</li>',
          'next_tag_open' => '<li>',
          'next_tag_close' => '</li>',
          'num_tag_open' => '<li>',
          'num_tag_close' => '</li>',
          'cur_tag_open' => '<li class="active"></li><a>',
          'cur_tag_close' => '</a></li>'
        ];
        $this->pagination->initialize($config);
        $data['camps'] = $this->campModel->get_camps($config['per_page'],$this->uri->segment(3));
        $this->load->view("admin/camps", $data);
    }

    public function post_camp()
    {
        $this->load->view("admin/add_camps");
    }

    public function save_camp()
    {
       $ctitle = $this->input->post('ctitle');
       $cdesc = $this->input->post('cdesc');
       $cdate = $this->input->post('cdate');
       $cprice = $this->input->post('price');
       $cdays = $this->input->post('day');
       $cnights = $this->input->post('night');
       $created = date("d-m-Y"); 
       $isPopular = $this->input->post('is_popular');
       $active = $this->input->post('active');
       $img_path = "";

       if ($isPopular == 1) {
           $isPopular = 1;
       } else {
           $isPopular = 0;
       }

       if ($active == 1) {
        $active = 1;
       } else {
        $active = 0;
       }

       if (!empty($_FILES['cimage']['name'])) {
        $config = [
          'upload_path' => './upload/',
          'allowed_types'  => 'gif|jpg|png'
        ];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('cimage')) {
          $data = $this->upload->data();
          $img_path = base_url("upload/".$data['raw_name'].$data['file_ext']);
        }
        else {
          $img_path = '';
        }
      }
      else {
        $img_path = '';
      } 

      $post_data = array(
          'ctitle' => $ctitle,
          'cdesc' => $cdesc,
          'cimage' => $img_path,
          'cdate' => $cdate,
          'price' => $cprice,
          'day' => $cdays,
          'night' => $cnights,
          'created_at' => $created,
          'is_popular' => $isPopular,
          'active' => $active
      );

        
        if ($this->campModel->create_camp($post_data)) {
            $this->session->set_flashdata('sucess','!Camp successfully created...');
            return redirect('Admin/camps');
        }
        else {
            $this->session->set_flashdata('error','!Something is weong please try again...');
            return redirect('Admin/camps');
        }
    }

    public function update_camp($campId)
    {
      $data['getCampById'] = $this->campModel->get_data_byId($campId);
      $this->load->view("admin/edit_camps", $data);
    }

    public function edit_camp($campId)
    {
      $ctitle = $this->input->post('ctitle');
       $cdesc = $this->input->post('cdesc');
       $cdate = $this->input->post('cdate');
       $cprice = $this->input->post('price');
       $cdays = $this->input->post('day');
       $cnights = $this->input->post('night');
       $created = date("d-m-Y"); 
       $isPopular = $this->input->post('is_popular');
       $active = $this->input->post('active');
       $img_path = "";

       if ($isPopular == 1) {
           $isPopular = 1;
       } else {
           $isPopular = 0;
       }

       if ($active == 1) {
        $active = 1;
       } else {
        $active = 0;
       }

       if (!empty($_FILES['cimage']['name'])) {
        $config = [
          'upload_path' => './upload/',
          'allowed_types'  => 'gif|jpg|png'
        ];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('cimage')) {
          $data = $this->upload->data();
          $img_path = base_url("upload/".$data['raw_name'].$data['file_ext']);
        }
        else {
          $img_path = '';
        }
      }
      else {
        $img_path = '';
      } 

      $post_data = array(
          'ctitle' => $ctitle,
          'cdesc' => $cdesc,
          'cimage' => $img_path,
          'cdate' => $cdate,
          'price' => $cprice,
          'day' => $cdays,
          'night' => $cnights,
          'updated_at' => $created,
          'is_popular' => $isPopular,
          'active' => $active
      );

      if ($this->campModel->update_camp($campId,$post_data)) {
        $this->session->set_flashdata('sucess','!Camp successfully updated...');
        return redirect('Admin/camps');
      }
      else {
          $this->session->set_flashdata('error','!Something is weong please try again...');
          return redirect('Admin/camps');
      }
    }

    public function delete_camp($campId)
    {
      if ($this->campModel->delete_camp($campId)) {
        $this->session->set_flashdata('sucess','!Camp successfully deleted...');
        return redirect('Admin/camps');
      }
      else {
          $this->session->set_flashdata('error','!Something is weong please try again...');
          return redirect('Admin/camps');
      }
    }

    //for package
    public function package()
    {
        $this->load->library('pagination');
        $config=[
          'base_url' => base_url('Admin/package'),
          'per_page' => 6,
          'total_rows' => $this->packageModel->total_rows(),
          'full_tag_open' => "<ul class='pagination'>",
          'full_tag_close' => '</ul>',
          'prev_tag_open' => '<li>',
          'prev_tag_close' => '</li>',
          'next_tag_open' => '<li>',
          'next_tag_close' => '</li>',
          'num_tag_open' => '<li>',
          'num_tag_close' => '</li>',
          'cur_tag_open' => '<li class="active"></li><a>',
          'cur_tag_close' => '</a></li>'
        ];
        $this->pagination->initialize($config);
        $data['pkgs'] = $this->packageModel->get_package($config['per_page'],$this->uri->segment(3));
        $this->load->view("admin/package", $data);
    }

    public function post_package()
    {
      $data['campAll'] = $this->packageModel->get_all_camps();
      $this->load->view("admin/add_package", $data);
    }
}

?>