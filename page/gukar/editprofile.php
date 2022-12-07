<?php 
	include 'header.php'; 
	include 'navbar.php';
      $no = 1;
      $data = mysqli_query($koneksi,"select * from login join user on user.id_user = login.id_login where username='$_SESSION[username]'");
      while($d = mysqli_fetch_array($data)){
?>

<form action="action/act_editprofile.php" method="POST" enctype="multipart/form-data">
    <div class="page-content-wrapper py-3">
      <div class="container">
        <!-- Element Heading -->
        <div class="element-heading">
          <h6>Profile</h6>
          <input type="text" name="id" value="<?php echo $d['id_user']; ?>" hidden>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="accordion accordion-style-three" id="accordionStyle3">
              <!-- Single Accordion -->
              <div class="accordion-item">
                <div class="accordion-header" id="accordionSeven">
                  <h6 class="shadow-sm rounded border collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyleSeven" aria-expanded="false" aria-controls="accordionStyleSeven">Edit Foto Profile ?
                    <svg class="bi bi-arrow-down-short" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"></path>
                    </svg>
                  </h6>
                </div>
                <div class="accordion-collapse collapse" id="accordionStyleSeven" aria-labelledby="accordionSeven" data-bs-parent="#accordionStyle3" style="">
                  <div class="accordion-body">
                    <label class="form-label" for="customFile">Upload foto</label>
                    <input class="form-control border-0" id="customFile" type="file" value="<?php echo $d['gukar_foto']; ?>" name="pas_foto">
                  </div>
                </div>
              </div>
              <!-- Single Accordion -->
              <div class="accordion-item">
                <div class="accordion-header" id="accordionNine">
                  <h6 class="shadow-sm rounded border" data-bs-toggle="collapse" data-bs-target="#accordionStyleNine" aria-expanded="true" aria-controls="accordionStyleNine">Edit Biodata ?
                    <svg class="bi bi-arrow-down-short" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"></path>
                    </svg>
                  </h6>
                </div>
                <div class="accordion-collapse collapse" id="accordionStyleNine" aria-labelledby="accordionNine" data-bs-parent="#accordionStyle3" style="">
                  <div class="accordion-body">
                    <label class="form-label" for="customFile">Nama Lengkap</label>
                    <input class="form-control border-2" id="customFile" type="text" value="<?php echo $d['nama']; ?>" name="namalengkap">
                    <label class="form-label" for="customFile">Tempat Lahir</label>
                    <input class="form-control border-2" id="customFile" type="text" value="<?php echo $d['tempat_lahir']; ?>" name="tempatlahir">
                    <label class="form-label" for="customFile">Tanggal Lahir</label>
                    <input class="form-control border-2" id="inputDate" type="date" value="<?php echo $d['tanggal_lahir']; ?>" name="tanggallahir">
                    <label class="form-label" for="customFile">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="primaryRadio" <?php if (isset($d['jeniskelamin']) && $d['jeniskelamin']=="L") echo "checked";?> value="L">
                        <label class="form-check-label" name="jeniskelamin" for="primaryRadio">Laki - Laki</label>
                    </div>
                    <div class="mb-2"></div>
                    <div class="form-check">
                        <input class="form-check-input form-check-danger" type="radio" name="jeniskelamin" id="dangerRadio" <?php if (isset($d['jeniskelamin']) && $d['jeniskelamin']=="P") echo "checked";?> value="P">
                        <label class="form-check-label" name="jeniskelamin" for="dangerRadio">Perempuan</label>
                    </div>
                    <div class="mb-2"></div>
                    <label class="form-label" for="customFile">Alamat</label>
                    <textarea class="form-control border-2" id="exampleTextarea1" name="alamat" cols="3" rows="5"><?php echo $d['alamat']; ?></textarea>
                    <label class="form-label" for="customFile">Whatsapp</label>
                    <input class="form-control border-2" id="exampleInputtelephone" type="tel" value="<?php echo $d['whatsapp']; ?>" name="whatsapp">
                    <label class="form-label" for="customFile">Email</label>
                    <input class="form-control border-2" id="customFile" type="email" value="<?php echo $d['email']; ?>" name="email">
                  </div>
                </div>
              </div>
                  <button class="btn m-1 btn-primary" type="submit" name="submit"><i class="bi bi-cursor"></i> Send Now</button>
            </div>
          </div>
        </div>
      </div>
    
    </div>
</form>

<?php } ?>

<?php include 'footer.php'; ?>