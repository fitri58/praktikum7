<?php
class Dosen extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('dosen_model','dsn1');

        // buat object model 1 dan nilai nya
        $this->dsn1->nidn='223344556';
        $this->dsn1->pendidikan='s2';

        $this->load->model('dosen_model','dsn2');

        // buat object model 2 dan nilai nya
        $this->dsn2->nidn='344556678';
        $this->dsn2->pendidikan='s3';

        // simpan object yang kita buat tadi ke dalam array
        $list_dsn = [$this->dsn1, $this->dsn2];
        // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke dalam view
        $this->load->view('dosen/index', $data);
    }
}
?>