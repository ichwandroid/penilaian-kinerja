<?php 
// Menghubungkan file ini dengan file database
include '../../../setting.php';

$id_user    = $_POST['idsd'];
$nama_sd    = $_POST['namasd'];
$folder     = "../ijasah/";

$ekstensi   = array('pdf');
$filename   = $_FILES['filesd']['name'];
$ukuran     = $_FILES['filesd']['size'];
$temp       = $_FILES['filesd']['tmp_name'];
$ext        = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:../document.php?pesan=ekstensi");
} else {
    if ($ukuran < 1044070) {
        $file = $id_user.'_'.md5($filename);
        move_uploaded_file($temp, $folder.$file);
        mysqli_query($koneksi, "UPDATE study SET namasd='$nama_sd', ijasahsd='$file' WHERE id_study='$id_user'");
        header("location:../document.php?pesan=berhasil");
    } else {
        header("location:../document.php?pesan=size");
    }
}
// Mengecek apakah ID ada datanya atau tidak
// if (isset($_POST['submit'])) {
//     if ($_POST['idsd'] != "") {
//         // Mengambil data dari form lalu ditampung didalam variabel
//         $id = $_POST['idsd'];
//         $nama_sd = $_POST['namasd'];
//         $foto_nama = $_FILES['filesd']['name'];
//         $foto_size = $_FILES['filesd']['size'];

//     }else{
//         header("location:../document.php");
//     }

//     // Mengecek apakah file lebih besar 2 MB atau tidak
//     if ($foto_size > 2097152) {
//        // Jika File lebih dari 2 MB maka akan gagal mengupload File
//        header("location:../document.php?pesan=size");

//     }else{

//        // Mengecek apakah Ada file yang diupload atau tidak
//        if ($foto_nama != "") {

//           // Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
//           $ekstensi_izin = array('pdf');
//           // Memisahkan nama file dengan Ekstensinya
//           $pisahkan_ekstensi = explode('.', $foto_nama); 
//           $ekstensi = strtolower(end($pisahkan_ekstensi));
//           // Nama file yang berada di dalam direktori temporer server
//           $file_tmp = $_FILES['pas_foto']['tmp_name'];   
//           // Membuat angka/huruf acak berdasarkan waktu diupload
//           $tanggal = md5(date('Y-m-d h:i:s'));
//           // Menyatukan angka/huruf acak dengan nama file aslinya
//           $foto_nama_new = md5('ijasah sd -'.$id); 

//           // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
//           if(in_array($ekstensi, $ekstensi_izin) === true)  {

//             // Mengambil data siswa_foto didalam table siswa
//             $get_foto = "SELECT ijasahsd FROM study WHERE id_study='$id'";
//             $data_foto = mysqli_query($koneksi, $get_foto); 
//             // Mengubah data yang diambil menjadi Array
//             $foto_lama = mysqli_fetch_array($data_foto);

//             // Menghapus Foto lama didalam folder FOTO
//             unlink("../ijasah/".$foto_lama['ijasahsd']);    

//             // Memindahkan File kedalam Folder "FOTO"
//             move_uploaded_file($file_tmp, '../ijasah/'.$foto_nama_new);

//             // Query untuk memasukan data kedalam table SISWA
//             $query = mysqli_query($koneksi, "UPDATE study SET ijasahsd='$foto_nama_new', namasd='$nama_sd' WHERE id_study='$id'");

//             // Mengecek apakah data gagal diinput atau tidak
//             if($query){
//                 header("location:../document.php?pesan=berhasil");
//             } else {
//                 header("location:../document.php?pesan=gagal");
//             }

//         } else { 
//             // Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
//             header("location:../document.php?pesan=ekstensi");        }

//         }else{

//         // Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
//           $query = mysqli_query($koneksi, "UPDATE study SET id_study='$id' WHERE id_study='$id'");

//             // Mengecek apakah data gagal diinput atau tidak
//             if($query){
//                 header("location:../document.php?pesan=berhasil");
//             }else {
//                 header("location:../document.php?pesan=gagal");
//             }
//         }

//     }
// }else{
//     // Apabila ID tidak ditemukan maka akan dikembalikan ke halaman profile
//     header("location:../document.php");
// }
?>