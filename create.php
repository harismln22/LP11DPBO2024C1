<?php
include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/CreateView.php");

$tp = new CreateView();
$data = $tp->tampil();
