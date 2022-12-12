<?php 
	include 'header.php'; 
	include 'navbar.php';
      $no = 1;
      $data = mysqli_query($koneksi,"SELECT * FROM login JOIN study ON study.id_study = login.id_login WHERE username='$_SESSION[username]'");
      while($d = mysqli_fetch_array($data)){
?>

<style type="text/css">
  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }
  .single-gallery-item:hover .image {
    opacity: 0.3;
  }
  .single-gallery-item:hover .middle {
    opacity: 1;
  }
  .text {
    background-color: #04AA6D;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
  }
  .center {
  line-height: 200px;
  height: 200px;
  border: 3px solid green;
  text-align: center;
}

.center a {
  line-height: 1.5;
  display: inline-block;
  vertical-align: middle;
}
</style>

        <?php if (isset($_GET['pesan'])) { ?>
          <?php if ($_GET['pesan'] == "berhasil") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-check-circle-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">File Berhasil diupload !</small>
                </div>
              </div>
            </div>
          <?php }elseif ($_GET['pesan'] == "gagal") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-danger home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-exclamation-square-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">File Gagal diupload !</small>
                </div>
              </div>
            </div>
          <?php }elseif ($_GET['pesan'] == "ekstensi") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-warning home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-exclamation-square-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">File Harus berupa File PDF !</small>
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
          <?php }elseif ($_GET['pesan'] == "hapus") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-check-circle-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">Berhasil Menghapus File Sertifikat !</small>
                </div>
              </div>
            </div>
          <?php }elseif ($_GET['pesan'] == "gagalhapus") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-danger home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-exclamation-square-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">Gagal Menghapus Foto Sertifikat !</small>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php } ?>

    <div class="page-content-wrapper py-3">
      <!-- Pagination -->
      <div class="shop-pagination pb-3">
        <div class="container">
          <div class="card">
            <div class="card-body p-2">
              <div class="d-flex align-items-center justify-content-between">
                <h6><small class="ms-1">Ijasah Pendidikan Dasar s/d Tinggi</small></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top Products -->
      <div class="top-products-area">
        <div class="container">
          <div class="row g-3">
            <!-- Single Top Product Card -->
            <div class="col-4 col-sm-3 col-lg-2">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbn75l -->
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 80px;">
                    <?php if ($d['ijasahsd'] == "-") { ?>
                      <i class="bi bi-file-earmark-x-fill text-danger"></i>
                  </a>
                  <span class="badge bg-danger text-truncate" style="max-width: 70px;">Belum Upload Ijasah SD</span>
                  <a class="product-title d-block text-truncate"></a>
                  <a class="btn btn-outline-primary btn-sm" href="editsd.php?id=<?php echo $d['id_study']; ?>">Upload</a>
                    <?php } else { ?>
                  <a href="ijasah/<?php echo $d['ijasah'];?>" style="text-align: center;font-size: 75px;">
                    <i class="bi bi-file-earmark-pdf-fill text-dark"></i>
                  </a>
                  <span class="badge bg-warning">IJASAH SD</span>
                  <a class="product-title d-block text-truncate"></a>
                  <a class="btn btn-outline-primary btn-sm" href="editsd.php?id=<?php echo $d['id_study']; ?>">Edit</a>
                    <?php } ?>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card -->
            <div class="col-4 col-sm-3 col-lg-2">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail -->
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 75px;">
                    <?php if ($d['ijasahsmp'] == "-") { ?>
                      <i class="bi bi-file-earmark-x-fill text-danger"></i>
                  </a>
                  <span class="badge bg-danger text-truncate" style="max-width: 70px;">Belum Upload Ijasah SMP</span>
                  <a class="product-title d-block text-truncate"></a>
                  <a class="btn btn-outline-primary btn-sm" href="editsmp.php?id=<?php echo $d['id_study']; ?>">Upload</a>
                    <?php } else { ?>
                  <a href="ijasah/<?php echo $d['ijasah'];?>" style="text-align: center;font-size: 75px;">
                    <i class="bi bi-file-earmark-pdf-fill text-dark"></i>
                  </a>
                  <span class="badge bg-warning">IJASAH SMP</span>
                  <a class="product-title d-block text-truncate"></a>
                  <a class="btn btn-outline-primary btn-sm" href="editsmp.php?id=<?php echo $d['id_study']; ?>">Edit</a>
                    <?php } ?>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card -->
            <div class="col-4 col-sm-3 col-lg-2">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail -->
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 75px;">
                    <?php if ($d['ijasahsma'] == "-") { ?>
                      <i class="bi bi-file-earmark-x-fill text-danger"></i>
                  </a>
                  <span class="badge bg-danger text-truncate" style="max-width: 70px;">Belum Upload Ijasah SMA</span>
                  <a class="product-title d-block text-truncate"></a>
                  <a class="btn btn-outline-primary btn-sm" href="editsma.php?id=<?php echo $d['id_study']; ?>">Upload</a>
                    <?php } else { ?>
                  <a href="ijasah/<?php echo $d['ijasah'];?>" style="text-align: center;font-size: 75px;">
                    <i class="bi bi-file-earmark-pdf-fill text-dark"></i>
                  </a>
                  <span class="badge bg-warning">IJASAH SMA</span>
                  <a class="product-title d-block text-truncate"></a>
                  <a class="btn btn-outline-primary btn-sm" href="editsma.php?id=<?php echo $d['id_study']; ?>">Edit</a>
                    <?php } ?>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card -->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail -->
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 80px;">
                    <?php if ($d['ijasahs1'] == "") { ?>
                      <i class="bi bi-file-earmark-x-fill text-danger"></i>
                  </a>
                  <!-- Badge --><span class="badge bg-danger text-truncate" style="max-width: 145px;">Belum Upload Ijasah S1</span>
                    <?php } else { ?>
                      <i class="bi bi-file-earmark-pdf-fill text-dark"></i>
                  </a>
                  <!-- Badge --><span class="badge bg-warning">IJASAH S1</span>
                    <?php } ?>
                  <!-- Product Title --><a class="product-title d-block text-truncate"></a>
                  <!-- Product Price --><a class="btn btn-outline-primary btn-sm" href="edits1.php?id=<?php echo $d['id_study']; ?>"><i class="bi bi-cloud-arrow-up-fill"></i> Upload</a>
                  <!-- Product Price --><a class="btn btn-outline-success btn-sm" href="ijasah/<?php echo $d['ijasahs1']; ?>"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card -->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail -->
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 80px;">
                    <?php if ($d['ijasahs2'] == "") { ?>
                      <i class="bi bi-file-earmark-x-fill text-danger"></i>
                  </a>
                  <!-- Badge --><span class="badge bg-danger text-truncate" style="max-width: 145px;">Belum Upload Ijasah S2</span>
                    <?php } else { ?>
                      <i class="bi bi-file-earmark-pdf-fill text-dark"></i>
                  </a>
                  <!-- Badge --><span class="badge bg-warning">IJASAH S2</span>
                    <?php } ?>
                  <!-- Product Title --><a class="product-title d-block text-truncate"></a>
                  <!-- Product Price --><a class="btn btn-outline-primary btn-sm" href="edits2.php?id=<?php echo $d['id_study']; ?>"><i class="bi bi-cloud-arrow-up-fill"></i> Upload</a>
                  <!-- Product Price --><a class="btn btn-outline-success btn-sm" href="ijasah/<?php echo $d['ijasahs2']; ?>"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card -->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail -->
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 80px;">
                    <?php if ($d['ijasahs3'] == "") { ?>
                      <i class="bi bi-file-earmark-x-fill text-danger"></i>
                  </a>
                  <!-- Badge --><span class="badge bg-danger text-truncate" style="max-width: 145px;">Belum Upload Ijasah S3</span>
                    <?php } else { ?>
                      <i class="bi bi-file-earmark-pdf-fill text-dark"></i>
                  </a>
                  <!-- Badge --><span class="badge bg-warning">IJASAH S3</span>
                    <?php } ?>
                  <!-- Product Title --><a class="product-title d-block text-truncate"></a>
                  <!-- Product Price --><a class="btn btn-outline-primary btn-sm" href="edits3.php?id=<?php echo $d['id_study']; ?>"><i class="bi bi-cloud-arrow-up-fill"></i> Upload</a>
                  <!-- Product Price --><a class="btn btn-outline-success btn-sm" href="ijasah/<?php echo $d['ijasahs3']; ?>"><i class="bi bi-eye-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Sertifikat -->
      <div class="shop-pagination pt-3">
        <div class="container">
          <div class="card">
            <div class="card-body p-2">
              <div class="d-flex align-items-center justify-content-between">
                <h6><small class="ms-1">Sertifikat</small></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
        

    <!-- Bootstrap Basic Modal -->
    <div class="modal fade" id="bootstrapBasicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLabel">Upload Sertifikat</h6>
            <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="action/act_addsertificate.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label class="form-label" for="exampleInputemail">Nama Sertifikat</label>
                <input class="form-control" name="namasertifikat" id="exampleInputemail" type="text">
              </div>
              <div class="form-group">
                <label class="form-label" for="exampleInputemail">Nama Penyelenggara</label>
                <input class="form-control" name="namapenyelenggara" id="exampleInputemail" type="text">
              </div>
              <div class="form-group">
                <label class="form-label" for="exampleInputemail">Tanggal Sertifikat</label>
                <input class="form-control" name="tanggalsertifikat" id="exampleInputemail" type="date">
              </div>
              <div class="form-group">
                <label class="form-label" for="defaultSelect">Tingkat Sertifikat</label>
                <select class="form-select" id="defaultSelect" name="nilaisertifikat" aria-label="Default">
                  <option value="100">Internasional</option>
                  <option value="75">Nasional</option>
                  <option value="50">Provinsi</option>
                  <option value="25">Kota / Gugus</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label" for="customFile">Upload File PDF Sertifikat</label>
                <input class="form-control border-0 form-control-sm" id="customFile" type="file" name="sertifikatfile">
                <input name="iduser" id="exampleInputText" type="text" value="<?php echo $d['id_study']; ?>" readonly style="visibility: hidden;">
              </div>
              <button class="btn m-1 btn-primary" type="submit" name="submit">
                <svg class="bi bi-cursor me-2" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"></path>
                </svg>Send Now</button><!-- 
              <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center" type="submit" name="submit">Submit
                <svg class="bi bi-arrow-right-short" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg>
              </button> -->
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

    <div class="container">
      <!-- Element Heading -->
      <div class="element-heading mt-3">
      </div>
    </div>
    <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="row gx-2 align-items-end">
              <div class="col-6">
                <div class="image-gallery-text mb-4">
                  <p class="mb-0">Awesome portfollio.</p>
                </div>
              </div>
              <div class="col-6 text-end">
                <a class="btn btn-primary btn-sm mb-4" data-bs-toggle="modal" data-bs-target="#bootstrapBasicModal">Upload Sertifikat</a>
              </div>
            </div>
            <!-- Image Gallery Slides Wrapper -->
            <div class="image-gallery-slides-wrapper">
              <div class="tns-outer" id="tns1-ow">
                <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">6 to 8</span>  of 5</div>
                <div id="tns1-mw" class="tns-ovh">
                  <div class="tns-inner" id="tns1-iw">
                    <div class="image-gallery-carousel  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transform: translate3d(-33.3333%, 0px, 0px); transition-duration: 0s;">

                      <?php $query = mysqli_query($koneksi,"SELECT * FROM login JOIN certification ON certification.id_user = login.id_login WHERE username='$_SESSION[username]'"); while ($row = mysqli_fetch_array($query)) { ?>

                      <div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                        <div class="single-gallery-item">
                          <!-- Gallery Image -->
                          <img src="sertifikat/<?php echo $row['foto_sertifikat']; ?>" alt="">
                          <!-- Fav Icon -->
                          <a class="fav-icon shadow" href="action/act_delsertificate.php?id_certification=<?php echo $row['id_certification']; ?>"><i class="bi bi-trash-fill"></i></a>
                        </div>
                      </div>

                      <?php } ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>



<?php include 'footer.php'; ?>