<?php
if(isset($_GET['id_certification']))
{
    include('../../../setting.php');
    $id_gambar = $_GET['id_certification'];
    $query = mysqli_query($koneksi,"select * from certification where id_certification='$id_gambar'");
    $data_gambar = $query->fetch_array();

    $query_hapus = mysqli_query($koneksi,"delete from certification where id_certification='$id_gambar'");
    unlink('files/'.$data_gambar['foto_sertifikat']);
    header('location:../document.php?pesan=hapus');
}
else
{
    header("location:../document.php?pesan=gagalhapus");
}
?>