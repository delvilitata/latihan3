<?php
$ukuran_maks_file = 1000000;
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];
$folder = './upload/';

if($ukuran_file > $ukuran_maks_file) {
    echo "<script>alert('ukuran  file terlalu besar. pilih file yang lain');</script>";
    echo "<script>window.location ='index.php?p=upload';</script>";
}else{
    $isSuccessUpload = move_uploaded_file($lokasi_file, $folder.$nama_file);
    if($isSuccessUpload)
    {
        echo "nama file : $nama_file sukses diupload<br>";
        echo "ukuran file : $ukuran_file bytes";
    }
}