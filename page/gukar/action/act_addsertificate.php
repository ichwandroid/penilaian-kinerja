<?php 
// Menghubungkan file ini dengan file database
include '../../../setting.php';

$id_user             = $_POST['iduser'];
$nama_sertifikat     = $_POST['namasertifikat'];
$nilai_sertifikat    = $_POST['nilaisertifikat'];
$tanggal_sertifikat  = $_POST['tanggalsertifikat'];
$folder              = "../sertifikat/";

$rand       = rand();
$ekstensi   = array('pdf');
$filename   = $_FILES['sertifikatfile']['name'];
$ukuran     = $_FILES['sertifikatfile']['size'];
$temp       = $_FILES['sertifikatfile']['tmp_name'];
$ext        = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:../document.php?pesan=ekstensi");
} else {
    if ($ukuran < 1044070) {
        $file = $rand.'_'.$filename;
        move_uploaded_file($temp, $folder.$file);
        mysqli_query($koneksi, "INSERT INTO certification VALUES (NULL,'$id_user','$nama_sertifikat','$file','$nilai_sertifikat','$tanggal_sertifikat')");
        header("location:../document.php?pesan=berhasil");
    } else {
        header("location:../document.php?pesan=size");
    }
}
?>