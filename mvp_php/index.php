<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

include("view/TampilMahasiswa.php");

$tp = new TampilMahasiswa();

if(isset($_POST['Add'])){
    $tp->addData();
    header("Location: index.php");
    exit;
}else if(!empty($_GET['id_hapus'])){
    $tp->deleteData();
    header("Location: index.php");
    exit;
}else if(isset($_POST['Edit'])){
    $tp->editData();
    header("Location: index.php");
    exit;
}else{
    $tp->tampil();
}