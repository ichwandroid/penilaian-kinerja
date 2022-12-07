<?php 
// Menghubungkan file ini dengan file database
include '../../../setting.php';
if (isset($_POST['submit'])) {
    $temp               = $_FILES['sertifikat_foto']['tmp_name'];
    $name               = rand(0,9999).$_FILES['sertifikat_foto']['name'];
    $size               = $_FILES['sertifikat_foto']['size'];
    $type               = $_FILES['sertifikat_foto']['type'];
    $iduser             = $_POST['id_user'];
    $namasertifikat     = $_POST['nama_sertifikat'];
    $folder             = "../sertifikat/";

    if ($size < 2048000 and ($type == 'image/jpeg' or $type == 'image/png')) {
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($koneksi, "INSERT INTO certification (id_user,nama_sertifikasi,foto_sertifikat) VALUES ('$iduser','$namasertifikat','$name')");
        header('location:../document.php?pesan=berhasil');
    } else {
        header("location:../document.php?pesan=gagal");
    }
}
?>