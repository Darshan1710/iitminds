<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index() {
        $this->load->view('login.php');
    }

    public function register() {
        $this->load->view('register.php');
    }

    public function add_register() {
        $this->Admin_model->register();
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->Admin_model->logindetails_select($username,$password);
        if(!empty($result)){
        foreach ($result as $log) {
            
            $logdata = array(
                'logged_in' => TRUE,
                'username' => $log['username'],
                'user_id' => $log['id'],
            );

            $this->session->set_userdata($logdata);
            $data['main_view'] = 'dashboard';
            $this->load->view('base_template_admin', $data);
        }
       }else{
            $this->load->view('login.php');
       }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        $this->load->view('login.php');
    }

    // admin
    public function admin_view() {
        $id = '';
        $data['result'] = $this->Admin_model->admin_list($id);
        $data['main_view'] = 'admin_view';
        $this->load->view('base_template_admin', $data);
    }

    public function admin_form() {

        if ($this->uri->segment(3) != '') {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $result = $this->Admin_model->admin_list($id);
            $data['result'] = $result[0];
        } else {
            $data['id'] = "new";
        }
        $data['main_view'] = 'admin_form';
        $this->load->view('base_template_admin', $data);
    }

    public function add_admin() {
        $id = $this->input->post('id');
        $this->Admin_model->add_admin($id);
    }

    //slider
    public function slider_view() {
        $id = '';
        $data['result'] = $this->Admin_model->select($id,'slider');
        $data['main_view'] = 'slider_view';
        $this->load->view('base_template_admin', $data);
    }

    public function slider_form() {
        if ($this->uri->segment(3) != '') {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $result = $this->Admin_model->select($id,'slider');
            $data['result'] = $result[0];
        } else {
            $data['id'] = "new";
        }
        $data['main_view'] = 'slider_form';
        $this->load->view('base_template_admin', $data);
    }

    public function add_slider() {
        $id = $this->input->post('id');
        $this->Admin_model->add_slider($id);
    }

    //result
    public function result_view() {
        $id = '';
        $data['result'] = $this->Admin_model->select($id,'result');
        $data['main_view'] = 'result_view';
        $this->load->view('base_template_admin', $data);
    }

    public function result_form() {
        if ($this->uri->segment(3) != "") {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $result = $this->Admin_model->select($id,'result');
            $data['result'] = $result[0];
        } else {
            $data['id'] = 'new';
        }
        $data['main_view'] = 'result_form';
        $this->load->view('base_template_admin', $data);
    }

    public function add_result() {
        $this->Admin_model->add_result();
    }
    
    //hours
    public function hours_view() {
        $id = '';
        $data['result'] = $this->Admin_model->select($id,'opening_hours');
        $data['main_view'] = 'hours_view';
        $this->load->view('base_template_admin', $data);
    }

    public function hours_form() {
        if ($this->uri->segment(3) != "") {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $result = $this->Admin_model->select($id,'opening_hours');
            $data['result'] = $result[0];
        } else {
            $data['id'] = 'new';
        }
        $data['main_view'] = 'hours_form';
        $this->load->view('base_template_admin', $data);
    }

    public function add_hours() {
        $this->Admin_model->add_hours();
    }
    
     //news
    public function news_view() {
        $id = '';
        $data['result'] = $this->Admin_model->select($id,'news');
        $data['main_view'] = 'news_view';
        $this->load->view('base_template_admin',$data);
    }

    public function news_form() {
        if ($this->uri->segment(3) != "") {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $result = $this->Admin_model->select($id,'news');
            $data['result'] = $result[0];
        } else {
            $data['id'] = 'new';
        }
        $data['main_view'] = 'news_form';
        $this->load->view('base_template_admin', $data);
    }

    public function add_news() {
        $this->Admin_model->add_news();
    }
    
      //mediapress
    public function mediapress_view() {
        $id = '';
        
        $data['result'] = $this->Admin_model->select($id,'mediapress');
        $data['main_view'] = 'mediapress_view';
        $this->load->view('base_template_admin',$data);
    }

    public function mediapress_form() {
        if ($this->uri->segment(3) != "") {
            $id = '';
            $data['m_id'] = $this->Admin_model->select($id,'mediagroup');
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $result = $this->Admin_model->select($id,'mediapress');
            $data['result'] = $result[0];
        } else {
            $id = '';
            $data['m_id'] = $this->Admin_model->select($id,'mediagroup');
            $data['id'] = 'new';
        }
        $data['main_view'] = 'mediapress_form';
        $this->load->view('base_template_admin',$data);
    }

    public function add_mediapress() {
        $this->Admin_model->add_mediapress();
    }
    
       //feedback
    public function feedback_view() {
        $id = '';
        $data['result'] = $this->Admin_model->select($id,'feedback');
        $data['main_view'] = 'feedback_view';
        $this->load->view('base_template_admin',$data);
    }

    public function feedback_form() {
        if ($this->uri->segment(3) != "") {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $result = $this->Admin_model->select($id,'feedback');
            $data['result'] = $result[0];
        } else {
            $data['id'] = 'new';
        }
        $data['main_view'] = 'feedback_form';
        $this->load->view('base_template_admin',$data);
    }
    
    
    public function add_feedback() {
        $this->Admin_model->add_feedback();
    }
    
     public function enquiry_view() {
        $id = '';
        $data['result'] = $this->Admin_model->select($id,'enquiry');
        $data['main_view'] = 'enquiry_view';
        $this->load->view('base_template_admin',$data);
    }
    
           //courses
    public function courses_view() {
        $id = '';
        $data['result'] = $this->Admin_model->select($id,'courses');
        $data['main_view'] = 'courses_view';
        $this->load->view('base_template_admin',$data);
    }

    public function courses_form() {
        if ($this->uri->segment(3) != "") {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $result = $this->Admin_model->select($id,'courses');
            $data['result'] = $result[0];
        } else {
            $data['id'] = 'new';
        }
        $data['main_view'] = 'courses_form';
        $this->load->view('base_template_admin',$data);
    }
    
    
    public function add_courses() {
        $this->Admin_model->add_courses();
    }
    
    public function blog_view() {
        $id = '';
        $data['result'] = $this->Admin_model->blog_list($id);
        $data['main_view'] = 'blog_view';
        $this->load->view('base_template_admin', $data);
    }

    public function blog_form() {
        if ($this->uri->segment(3) != '') {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $data['form_type'] = 'edit';
            $result = $this->Admin_model->blog_list($id);
            $data['result'] = $result[0];
        } else {
            $data['id'] = "new";
        }
        $data['main_view'] = 'blog_form';
        $this->load->view('base_template_admin', $data);
    }

    public function add_blog() {
        $id = $this->input->post('id');
        $this->Admin_model->add_blog($id);
    }

    public function blog_in_detail() {

        $id = $this->uri->segment(3);
        $result = $this->Admin_model->blog_list($id);
        $data['result'] = $result[0];
        $data['main_view'] = 'blog_in_detail';
        $this->load->view('base_template_admin', $data);
    }

    //Future post
       public function future_post_view() {
        $id = '';
        $data['result'] = $this->Admin_model->select($id,'future_post');
        $data['main_view'] = 'future_post_view';
        $this->load->view('base_template_admin', $data);
    }

    public function future_post_form() {
        if ($this->uri->segment(3) != '') {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $data['form_type'] = 'edit';
            $result = $this->Admin_model->select($id,'future_post');
            $data['result'] = $result[0];
        } else {
            $data['id'] = "new";
        }
        $data['main_view'] = 'future_post_form';
        $this->load->view('base_template_admin', $data);
    }
    
    public function add_future_post() {
        $id = $this->input->post('id');
        $this->Admin_model->add_future_post($id);
    }

    //Marquee text
       public function marqueeView() {
        $id = '';
        $data['result'] = $this->Admin_model->select($id,'marquee_text');
        $data['main_view'] = 'marquee_view';
        $this->load->view('base_template_admin', $data);
    }

    public function marqueeForm() {
        if ($this->uri->segment(3) != '') {
            $id = $this->uri->segment(3);
            $data['id'] = $id;
            $data['form_type'] = 'edit';
            $result = $this->Admin_model->select($id,'marquee_text');
            $data['result'] = $result[0];
        } else {
            $data['id'] = "new";
        }
        $data['main_view'] = 'marquee_form';
        $this->load->view('base_template_admin', $data);
    }
    
    public function addMarquee() {
        $id = $this->input->post('id');

        $input_data = $this->input->post();

        $data['heading'] = $input_data['heading'];
        $data['status']  = $input_data['status'];

        $table_name = 'marquee_text';
        if($id == 'new'){
            $this->Admin_model->add($data,$table_name);
        }else{
            $filter = array('id'=>$id);
            $this->Admin_model->update($filter,$data,$table_name);
        }
        redirect('Admin/marqueeView');
        
    }
    
    public function change_status() {
        $table_name = $this->input->post('table_name');
        $id = $this->input->post('id');
        $result = $this->Admin_model->change_status($table_name, $id);
        echo $result;
    }

    public function delete() {
        $delete_id = $this->input->post('delete_id');
        $table_name = $this->input->post('table_name');
        $this->db->delete($table_name, array('id' => $delete_id));
        $result = $this->db->affected_rows();
        echo $result;
    }

}
