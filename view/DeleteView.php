<?php
include("KontrakView.php");
include("presenter/ProsesPasien.php");


class DeleteView implements KontrakView{

    private $pasien;

    function __construct(){
        $this->pasien = new ProsesPasien();
    }

    function tampil(){
        if (!empty($_GET['id_hapus'])) {
            $id = $_GET['id_hapus'];
            $this->pasien->delete($id);
            header("location:index.php");
        }
    }
}






