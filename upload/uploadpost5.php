<?php
$ukuran_maks_file = 2000000;
$tipe_file = $_FILES['fupload']['type'];
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];
$folder = './upload/';


if (
    $tipe_file != "application/pdf" and
    $tipe_file != "application/vnd.openxmlformats-officedocument.wordprocessingml.document" and
    $tipe_file != "application/msword"
){
    echo "<script>alert('Hanya boleh mengupload document. Pilih doc yang lain');</script>";
    echo "<script>window.location ='index.php?p=upload';</script>";  
}

else if($ukuran_file > $ukuran_maks_file) {
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