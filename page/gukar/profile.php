<?php 
	include 'header.php'; 
	include 'navbar.php';
      $no = 1;
      $data = mysqli_query($koneksi,"select * from login join user on user.id_user = login.id_login where username='$_SESSION[username]'");
      while($d = mysqli_fetch_array($data)){
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <?php if (isset($_GET['pesan'])) { ?>
          <?php if ($_GET['pesan'] == "berhasil") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-check-circle-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">File Berhasil diupdate !</small>
                </div>
              </div>
            </div>
          <?php }elseif ($_GET['pesan'] == "gagal") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-danger home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-exclamation-square-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">File Gagal diupdate !</small>
                </div>
              </div>
            </div>
          <?php }elseif ($_GET['pesan'] == "ekstensi") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-warning home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-exclamation-square-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">File Harus berupa Gambar !</small>
                </div>
              </div>
            </div>
          <?php }elseif ($_GET['pesan'] == "size") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-warning home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-exclamation-square-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">File Tidak Boleh Lebih dari 2 Mb !</small>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php } ?>

    <div class="page-content-wrapper py-3">
      <div class="container">
        <!-- User Information-->
        <div class="card user-info-card mb-3">
          <div class="card-body d-flex align-items-center">
            <div class="user-profile me-3">
              <?php if ($d['gukar_foto'] =="") { ?>
                <img class="image" src="https://via.placeholder.com/500x500.png?text=Foto Profil" alt="">
              <?php } else { ?>
                <img src="foto/<?php echo $d['gukar_foto']; ?>" alt="">
              <?php } ?>
            </div>
            <div class="user-info">
              <div class="d-flex align-items-center">
                <h5 class="mb-1"><?php echo $d['username']; ?></h5><span class="badge bg-warning ms-2 rounded-pill"><?php echo $d['level']; ?></span>
              </div>
              <p class="mb-0"><?php echo $d['nama']; ?></p>
              <a class="m-1 badge bg-warning text-dark" href="editprofile.php"><i class="bi bi-pen"></i> Update Now</a>
            </div>
          </div>
        </div>
        <!-- User Meta Data-->
        <div class="card user-data-card">
          <div class="card-body">
            <div class="form-group mb-2">
              <i class="bi bi-calendar2-heart"></i> <label class="form-label"><?php echo $d['tempat_lahir']; ?>, <?php echo $d['tanggal_lahir']; ?></label>
            </div>
            <div class="form-group mb-2">
              <?php if ($d['jeniskelamin'] == "L") {
                echo '<i class="bi bi-gender-male"></i> <label class="form-label">Laki -Laki</label>';
              } else if ($d['jeniskelamin'] == "P"){
                echo '<i class="bi bi-gender-female"></i> <label class="form-label">Perempuan</label>';
              } ?>
            </div>
            <div class="form-group mb-2">
              <i class="bi bi-shop"></i> <label class="form-label"><?php echo $d['alamat']; ?></label>
            </div>
            <div class="form-group mb-2">
              <i class="bi bi-whatsapp"></i> <label class="form-label"><?php echo $d['whatsapp']; ?></label>
            </div>
            <div class="form-group mb-2">
              <i class="bi bi-envelope-at"></i> <label class="form-label"><?php echo $d['email']; ?></label>
            </div>
          </div>
        </div>
      </div>
    </div>	

<?php } ?>

<?php include 'footer.php'; ?>