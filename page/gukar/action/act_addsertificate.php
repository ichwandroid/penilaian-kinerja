<?php 
// Menghubungkan file ini dengan file database
include '../../../setting.php';
if (isset($_POST['submit'])) {
    $temp               = $_FILES['sertifikatfile']['tmp_name'];
    $name               = rand(0,9999).$_FILES['sertifikatfile']['name'];
    $size               = $_FILES['sertifikatfile']['size'];
    $type               = $_FILES['sertifikatfile']['type'];
    $id                 = $_POST['iduser'];
    $nama               = $_POST['namasertifikat'];
    $nilai              = $_POST['nilaisertifikat'];
    $tanggal            = $_POST['tanggalsertifikat'];
    $folder             = "../sertifikat/";

    if ($size < 2048000 and ($type == 'pdf' or $type == 'pdf')) {
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($koneksi, "INSERT INTO certification (id_user,nama_sertifikasi,foto_sertifikat,nilai_sertifikat,tanggal_sertifikat) VALUES ('$id','$nama','$name','$nilai','$tanggal')");
        header('location:../document.php?pesan=berhasil');
    } else {
        header("location:../document.php?pesan=gagal");
    }
}
?>