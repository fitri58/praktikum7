<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('matakuliah_model','mkl1');

        // buat object model 1 dan nilai nya
        $this->mkl1->nama='dasar dasar pemrograman';
        $this->mkl1->sks='3';
        $this->mkl1->kode='ddp1';

        $this->load->model('matakuliah_model','mkl2');

        // buat object model 2 dan nilai nya
        $this->mkl2->nama='sistem operasi';
        $this->mkl2->sks='3';
        $this->mkl2->kode='so2';
       

        // simpan object yang kita buat tadi ke dalam array
        $list_mkl = [$this->mkl1, $this->mkl2];
        // Siapkan data untuk di kirim kedalam view, dimana data nya di ambil dari object yang kita simpan ke dalam array
        $data['list_mkl'] = $list_mkl;
        // render data dan kirim data ke dalam view
        $this->load->view('matakuliah/index', $data);
    }
}
?>