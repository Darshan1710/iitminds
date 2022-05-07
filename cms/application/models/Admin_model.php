<?php

	class Admin_model extends CI_Model {

	function __construct()
	{
        parent::__construct();
    }

    function register(){
           $data = array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
            'saluation'=>$this->input->post('saluation'),
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'email'=>$this->input->post('email'),
            'mobile'=>$this->input->post('mobile'),
            'note'=>$this->input->post('note'),
            'currentlogin'=>date('Y-m-d H:i:s'),
            'currentIP'=>$this->input->ip_address(),
            'logincount'=>1,
            'is_active'=> 1,   
        );
        $this->db->insert('admin',$data);
        redirect('admin/index');
    }

    function logindetails_select($username, $password) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where(array('username' => $username, 'password' => $password,'is_active'=>1));
        $sql = $this->db->get();
        return $sql->result_array();
    }
    
    function select($id,$table_name){
        if($id != ''){
           $this->db->select('*');
           $this->db->from($table_name);
           $this->db->where('id',$id); 
        }else{
            $this->db->select('*');
           $this->db->from($table_name);
        }
        $sql = $this->db->get();

        return $sql->result_array();
    }
    
    function admin_list($id){
        if($id != ''){
           $this->db->select('*');
           $this->db->from('admin');
           $this->db->where('id',$id); 
        }else{
            $this->db->select('*');
           $this->db->from('admin');
        }
        $sql = $this->db->get();
        return $sql->result_array();
    }

    function change_status($table_name,$id){

        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where('id',$id);
        $sql = $this->db->get();
        $status = $sql->row('is_active');
 
        if($status == 1){
            $this->db->set('is_active','0');
        }else{
            $this->db->set('is_active','1');
        }
        $this->db->where('id',$id);
        $this->db->update($table_name);
        $result = $this->db->affected_rows();
        return $result;
    }
    
   function add_admin($id){
       $data = array(
           'username'=>$this->input->post('username'),
           'password'=>$this->input->post('password'),
           'is_active'=>$this->input->post('is_active'),   
       );
    
       if($id == "new"){
            $this->db->insert('admin',$data);
       }else{
          $this->db->where('id',$id);
          $this->db->update('admin',$data);
       }
       redirect('admin/admin_view');
       
   }
    
    function select_downloads($id){
        if($id != ''){
            $this->db->select('*');
            $this->db->from('downloads');
            $this->db->where('id',$id);
        }else{
            $this->db->select('*');
            $this->db->from('downloads');
        }
        $sql = $this->db->get();
        return $sql->result_array();
    }
    
    

    function add_slider($id){
        if($id != "new"){
                $this->db->select('slider');
                $this->db->from('slider');
                $this->db->where('id',$id);
                $slider_name = $this->db->get()->row()->slider;
                $final_slider_name = explode("/",$slider_name);
                $last_slider_name = end($final_slider_name);
                $slider = $this->slider_image_upload('slider','bg',$last_slider_name);
            }else{
                $slider = $this->image_upload('slider','bg');
            }
        
        if($slider == ""){
            $slider = $this->input->post('pic1');
        }
        $data = array(
            'slider'=>$slider,
            );
        if($id == "new"){
          $this->db->insert('slider',$data);
        }else{
          $this->db->where('id',$id);
        $this->db->update('slider',$data);
        } 
        redirect('admin/slider_view');
    }

    function slider_image_upload($file_name,$folder_name,$last_slider_name){
        $config['upload_path'] = 'assets/admin/images/'.$folder_name;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '10000';
        $config['max_width']  = '';
        $config['max_height']  = '';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $last_slider_name;
        
        $this->load->library('upload', $config);
     
        
         if ( ! $this->upload->do_upload($file_name))
        {
            $error = array('error' => $this->upload->display_errors());  
        }
        else
        {
            $upload_data =$this->upload->data();
            $file_path = $config['upload_path'].'/'.$last_slider_name;
            return $file_path;
        }

    }
    
    function add_hours(){

        $day = $this->input->post('day');
        $hours1 = $this->input->post('hours1');
        $minutes1 = $this->input->post('minutes1');
        $hours2 = $this->input->post('hours2');
        $minutes2 = $this->input->post('minutes2');
        
        $data=array(
            'day'=>$day,
            'open'=>$hours1.':'.$minutes1.':00',
            'close'=>$hours2.':'.$minutes2.':00',
        );
        
            $this->db->where('day',$day);
            $this->db->update('opening_hours',$data);
        
       // print_r($this->db->last_query());exit;
        redirect('admin/hours_view');
    }
    
    function add_result(){

        $id = $this->input->post('id');
        $src = $this->image_upload('src','result');
        
        if($src == ''){
            $src = $this->input->post('pic2');
        }
        
        $data=array(
            'src'=>$src,
            'name'=>$this->input->post('name'),
            'percentage'=>$this->input->post('percentage'),
            'section'=>$this->input->post('section')
        );
        
        if($id == "new"){
            $this->db->insert('result',$data);
        }else{
           $this->db->where('id',$id);
           $this->db->update('result',$data); 
        }
        redirect('admin/result_view');
    }
    
     function add_news(){
        $id = $this->input->post('id');
        $news = $this->input->post('news');        
        $data=array(
            'news'=>$news,
        );
            if($id == 'new'){
                $this->db->insert('news',$data);
            }
            $this->db->where('id',$id);
            $this->db->update('news',$data);
        
       // print_r($this->db->last_query());exit;
        redirect('admin/news_view');
    }
    
      function add_mediapress(){
        $id = $this->input->post('id');
               
        $src = $this->image_upload('src','media-press');
        
        if($src == ""){
            $src = $this->input->post('pic1');
        }
        $data=array(
        'class' => $this->input->post('class'),
        'src' => $src,
        'width' => $this->input->post('width'),
        'height' => $this->input->post('height'),
        'title' => $this->input->post('title'),
        'media_id' => $this->input->post('media_id')
        );
            if($id == 'new'){
                $this->db->insert('mediapress',$data);
            }
            $this->db->where('id',$id);
            $this->db->update('mediapress',$data);
        
       // print_r($this->db->last_query());exit;
        redirect('admin/mediapress_view');
    }
    
     function add_feedback(){
        $id = $this->input->post('id');
        $photo = $this->image_upload('photo','testimonials');
 
        if($photo == ''){
            $photo = $this->input->post('pic2');
        }
        $data=array(
            'author'=>$this->input->post('author'),
            'photo'=>$photo,
            'batch'=>$this->input->post('batch'),
            'comment'=>$this->input->post('comment'),
        );
            if($id == 'new'){
                $this->db->insert('feedback',$data);
            }
            $this->db->where('id',$id);
            $this->db->update('feedback',$data);
        
       // print_r($this->db->last_query());exit;
        redirect('admin/feedback_view');
    }
    
    function add_courses(){
        $id = $this->input->post('id');
        $image_path = $this->image_upload('image_path','project');
 
        if($image_path == ''){
            $image_path = $this->input->post('pic2');
        }
        $data=array(
            'image_path'=>$image_path,
            'heading'=>$this->input->post('heading'),
            'description'=>$this->input->post('description'),
            'integrated_batch'=>$this->input->post('integrated_batch'),
            'regular_batch'=>$this->input->post('regular_batch'),
            'commencement'=>$this->input->post('commencement'),
            'duration'=>$this->input->post('duration')
        
        );
            if($id == 'new'){
                $this->db->insert('courses',$data);
            }
            $this->db->where('id',$id);
            $this->db->update('courses',$data);
        
       // print_r($this->db->last_query());exit;
        redirect('admin/courses_view');
    }
    
    //future post
     function add_future_post(){
        $id = $this->input->post('id');
        $image = $this->image_upload('image','future_post');
        
        if($image == ''){
            $image = $this->input->post('pic1');
        }
        $data=array(
            'title'=>$this->input->post('title'),
            'image'=>$image,
            'date'=>$this->input->post('date')
        
        );
            if($id == 'new'){
                $this->db->insert('future_post',$data);
            }else{
               $this->db->where('id',$id);
              $this->db->update('future_post',$data); 
            }
            
        
       // print_r($this->db->last_query());exit;
        redirect('admin/future_post_view');
    }
    
    
    function blog_list($id){
        if($id != ''){
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->where('id',$id);
        }else{
            $this->db->select('*');
            $this->db->from('blog');
        }
        $sql = $this->db->get();
        return $sql->result_array();
    }
    
    function add_blog($id){
        
        $author_img = $this->image_upload('author_img','blog');
        $blog_img = $this->image_upload('blog_img','blog');
        
        if($author_img == ''){
            
            $author_img = $this->input->post('pic1');
        }
        if($blog_img == ''){
            $blog_img = $this->input->post('pic2');
        }
        
 
       
        $data = array(
            'author_name'=>$this->input->post('author_name'),
            'author_description'=>$this->input->post('author_description'),
            'author_img'=>$author_img,
            'title'=>$this->input->post('title'),
            'blog_img'=>$blog_img,
            'description'=> $this->input->post('description'),
            'date'=>date('Y-m-d'),
            'tag'=> $this->input->post('tag')
            );
//        echo "<pre>";
//        print_r($data);exit;
        if($id == "new"){
            $this->db->insert('blog',$data);
        }else{
            $this->db->where('id',$id);
            $this->db->update('blog',$data);
        } 
        redirect('admin/blog_view');
    }
 

    public function image_upload($file_name,$folder_name){
        $config['upload_path'] = 'assets/admin/images/'.$folder_name;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '10000';
        $config['max_width']  = '';
        $config['max_height']  = '';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;
        
        $this->load->library('upload', $config);
     
        
         if ( ! $this->upload->do_upload($file_name))
        {
            $error = array('error' => $this->upload->display_errors());  
        }
        else
        {
            $upload_data =$this->upload->data();
            $file_path = $config['upload_path'].'/'.$upload_data['file_name'];
            return $file_path;
        }
    }

    public function add($data,$table_name){
        return $this->db->insert($table_name,$data);
    }

    public function update($filter,$data,$table_name){
        $this->db->where($filter);
        return $this->db->update($table_name,$data);
    }
}