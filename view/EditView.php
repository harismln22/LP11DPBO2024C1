<?php
include("KontrakView.php");
include("presenter/ProsesPasien.php");


class EditView implements KontrakView{

    private $pasien;

    function __construct(){
        $this->pasien = new ProsesPasien();
    }

    function tampil(){
        
        if(isset($_POST['submit'])){
            if(isset($_GET['id_edit'])){
                $id = $_GET['id_edit'];
                $this->pasien->update($id, $_POST); 
                header("location:index.php");  
            }
            else
            {
                echo "id_edit tidak ditemukan";
            }
        }
        $crud = new Template("templates/skinFormEdit.html");
        $crud->write();
    }
    
}




