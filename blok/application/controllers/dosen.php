<?php
class dosen extends CI_Controller {
    // membuat method index
    public function index(){
        // akses model mahasiswa
        $this->load->model("Dosen_model", "dsn1");
        // membuat object model 1 dan nilainnya
        $this->dsn1->nidn='011';
        $this->dsn1->pendidikan='S1';

        $this->load->model("Dosen_model", "dsn2");
        $this->dsn2->nidn='022';
        $this->dsn2->pendidikan='S2';

        $this->load->model("Dosen_model", "dsn3");
        $this->dsn3->nidn='023';
        $this->dsn3->pendidikan='S3';

        // simpan object yang kita buat ke dalam arry
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // saipakan data untuk dikirim ke dalam view, dimana datanya di ambil dari object yang kita simpan ke dalam arry
        $data['list_dsn'] = $list_dsn;
        // render data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    public function __constract()
    {
        parent::__constract();
        if(!$this->session->userdata->('logged_in')){
            redirect('/login');
        }
    }
}
?>