<?php 
class Mahasiswa extends CI_Controller{
    // Membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model mahasiswa
        $this->load->model('mahasiswa_model', 'mahasiswa'); //1
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_ahir = $this->input->post('tgl_ahir');
        $_ipk = $this->input->post('ipk');

    $data_mahasiswa['nim'] = $_nim; // 2
    $data_mahasiswa['nama'] = $_nama;
    $data_mahasiswa['gender'] = $_gender;
    $data_mahasiswa['tmp_lahir'] = $_tmp_lahir;
    $data_mahasiswa['tgl_ahir'] = $_tgl_ahir;
    $data_mahasiswa['ipk'] = $_ipk;

    if((!empty($_idedit))){ //update
        $data_mahasiswa['id'] = $_idedit;
        $this->mahasiswa->update($data_mahasiswa);
    }else{
        // data baru
        $this->mahasiswa->simpan($data_mahasiswa);
    }
    redirect('mahasiswa','refresh');
}
    public function edit(){
        // // akses model mahasiswa
        $this->load->model('mahasiswa_model','mahasiswa');
        $obj_mahasiswa = $this->mahasiswa->getById($id);
        $data['obj_mahasiswa'] = $obj_mahasiswa;
        // kirim ke view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/edit');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('mahasiswa_model','mahasiswa');
        // mengecek data mahasiswa berdasarkan id
        $data_mahasiswa['id']=$id;
        $this->mahasiswa->delete($data_mahasiswa);
        redirect('mahasiswa','refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata ('logged_in')){
            redirect('/login');
        }
    }
}
?>