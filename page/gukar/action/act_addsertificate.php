<?php 
// Menghubungkan file ini dengan file database
include '../../../setting.php';
// if (isset($_POST['submit'])) {
//     $temp               = $_FILES['sertifikatfile']['tmp_name'];
//     $name               = rand(0,9999).$_FILES['sertifikatfile']['name'];
//     $size               = $_FILES['sertifikatfile']['size'];
//     $type               = $_FILES['sertifikatfile']['type'];
//     $id                 = $_POST['iduser'];
//     $nama               = $_POST['namasertifikat'];
//     $nilai              = $_POST['nilaisertifikat'];
//     $tanggal            = $_POST['tanggalsertifikat'];
//     $folder             = "../sertifikat/";

//     if ($size < 2048000 and ($type == 'pdf')) {
//         move_uploaded_file($temp, $folder . $name);
//         mysqli_query($koneksi, "INSERT INTO certification VALUES (NULL,'$id','$nama','$name','$nilai','$tanggal')");
//         header('location:../document.php?pesan=berhasil');
//     } else {
//         header("location:../document.php?pesan=gagal");
//     }
// }
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