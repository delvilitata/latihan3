<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];
$folder ='./upload/';
$isSuccessUpload =move_uploaded_file($lokasi_file, $folder.$nama_file);
if($isSuccessUpload)
{
    echo "nama file : $nama_file sukses diupload<br>";
    echo "Ukuran file : $ukuran_file bytes";
}

?>