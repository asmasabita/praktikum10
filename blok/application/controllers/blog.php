<?php 
class blog extends CI_Controller{
    public function index(){
        $data ["nama"] = "CodeIgniter 3";
        $this->load->view("blog.php/index", $data);
    }
    public function add(){
        $this->load->view("blog.php/add");
    }
}
?>