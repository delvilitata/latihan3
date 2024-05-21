<?php
$tipe_file = $_FILES['fupload']['type'];
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];
$folder = './upload/';

if (
    $tipe_file != "image/gif" and
    $tipe_file != "image/jpeg" and
    $tipe_file != "image/png"
) {
    echo "<script>alert('Hanya boleh mengupload gambar. Pilih file yang lain');</script>";
    echo "<script>window.location ='index.php?p=upload';</script>";
} else {
    $isSuccessUpload = move_uploaded_file($lokasi_file, $folder . $nama_file);
    if ($isSuccessUpload) {
        echo "nama file : $nama_file sukses diupload<br>";
        echo "Ukuran file : $ukuran_file bytes";
    }
}
?>
