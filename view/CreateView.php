<?php
include("KontrakView.php");
include("presenter/ProsesPasien.php");


class CreateView implements KontrakView{

    private $pasien;

    function __construct(){
        $this->pasien = new ProsesPasien();
    }

    function tampil(){
        $crud = new Template("templates/skinFormCreate.html");
        if(isset($_POST['submit'])){
            $this->pasien->add($_POST);   
            header("location:index.php");
        }
        $crud->write();
    }
    
}




