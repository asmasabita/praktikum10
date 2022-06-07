<?php
class Matakuliah extends CI_Controller {
    // membuat method index
    public function index(){
        // akses model mahasiswa
        // membuat object model 1 dan nilainnya
        $this->load->model("Matakuliah_model", "matkul1");
        $this->matkul1->id=0032;
        $this->matkul1->sks='21';
        $this->matkul1->nama='asma';
        $this->matkul1-> kode='PW';

        // simpan object yang kita buat ke dalam arry
        $list_matkul = [$this->matkul1, ];
        // saipakan data untuk dikirim ke dalam view, dimana datanya di ambil dari object yang kita simpan ke dalam arry
        $data['list_matkul'] = $list_matkul;
        // render data ke dalam view
        $this->load->view('Matakuliah/index', $data);
    }
    public function __constract()
    {
        parent::__constract();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }
}
?>