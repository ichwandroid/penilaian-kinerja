<?php 
	include 'header.php'; 
	include 'navbar.php';
      $no = 1;
      $data = mysqli_query($koneksi,"SELECT * FROM login JOIN study ON study.id_study = login.id_login WHERE username='$_SESSION[username]'");
      while($d = mysqli_fetch_array($data)){
?>

    <?php include 'alert.php';?>    
    <?php include 'modal.php';?>

    <div id="tampilData"></div>    

    <div class="page-content-wrapper py-3">
      <!-- Pagination -->
      <div class="shop-pagination pb-3">
        <div class="container">
          <div class="card">
            <div class="card-body p-2">
              <div class="d-flex align-items-center justify-content-between">
                <h6><small class="ms-1">Ijasah Pendidikan Dasar - Menengah</small></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Ijasah Pendidikan Dasar  -->
      <div class="top-products-area">
        <div class="container">
          <div class="row g-3">
            <!-- Ijasah SD -->
            <div class="col-4 col-sm-4 col-lg-2">
              <div class="card single-product-card">
                <div class="card-body p-3">
                <?php if ($d['ijasahsd'] == "-") { ?>
                  <a class="btn m-1 btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalSD"><i class="bi bi-cloud-arrow-up-fill"></i> Upload Ijasah SD</a>
                <?php } else { ?>
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 75px;"><i class="bi bi-file-earmark-pdf-fill text-dark"></i></a>
                  <span class="badge bg-primary">IJASAH SD</span>
                  <a class="badge bg-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalSD">Edit</a>
                  <a class="badge bg-secondary" href="ijasah/<?php echo $d['ijasahsd']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } ?>
                </div>
              </div>
            </div>
            <!-- Ijasah SMP -->
            <div class="col-4 col-sm-4 col-lg-2">
              <div class="card single-product-card">
                <div class="card-body p-3">
                <?php if ($d['ijasahsmp'] == "-") { ?>
                  <a class="btn m-1 btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalSMP"><i class="bi bi-cloud-arrow-up-fill"></i> Upload Ijasah SMP</a>
                <?php } else { ?>
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 75px;"><i class="bi bi-file-earmark-pdf-fill text-dark"></i></a>
                  <span class="badge bg-primary">IJASAH SMP</span>
                  <a class="badge bg-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalSMP">Edit</a>
                  <a class="badge bg-secondary" href="ijasah/<?php echo $d['ijasahsmp']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } ?>
                </div>
              </div>
            </div>
            <!-- Ijasah SMA -->
            <div class="col-4 col-sm-4 col-lg-2">
              <div class="card single-product-card">
                <div class="card-body p-3">
                <?php if ($d['ijasahsma'] == "-") { ?>
                  <a class="btn m-1 btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalSMA"><i class="bi bi-cloud-arrow-up-fill"></i> Upload Ijasah SMA</a>
                <?php } else { ?>
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 75px;"><i class="bi bi-file-earmark-pdf-fill text-dark"></i></a>
                  <span class="badge bg-primary">IJASAH SMA</span>
                  <a class="badge bg-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalSMA">Edit</a>
                  <a class="badge bg-secondary" href="ijasah/<?php echo $d['ijasahsma']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <div class="shop-pagination pt-3 mb-3">
        <div class="container">
          <div class="card">
            <div class="card-body p-2">
              <div class="d-flex align-items-center justify-content-between">
                <h6><small class="ms-1">Ijasah Pendidikan Tinggi</small></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Ijasah Pendidikan Tinggi  -->
      <div class="top-products-area">
        <div class="container">
          <div class="row g-3">
            <!-- Ijasah S1 -->
            <div class="col-4 col-sm-4 col-lg-2">
              <div class="card single-product-card">
                <div class="card-body p-3">
                <?php if ($d['ijasahs1'] == "-") { ?>
                  <a class="btn m-1 btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalS1"><i class="bi bi-cloud-arrow-up-fill"></i> Upload Ijasah S1</a>
                <?php } else { ?>
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 75px;"><i class="bi bi-file-earmark-pdf-fill text-dark"></i></a>
                  <span class="badge bg-primary">IJASAH S1</span>
                  <a class="badge bg-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalS1">Edit</a>
                  <a class="badge bg-secondary" href="ijasah/<?php echo $d['ijasahs1']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } ?>
                </div>
              </div>
            </div>
            <!-- Ijasah S2 -->
            <div class="col-4 col-sm-4 col-lg-2">
              <div class="card single-product-card">
                <div class="card-body p-3">
                <?php if ($d['ijasahs2'] == "-") { ?>
                  <a class="btn m-1 btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalS2"><i class="bi bi-cloud-arrow-up-fill"></i> Upload Ijasah S2</a>
                <?php } else { ?>
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 75px;"><i class="bi bi-file-earmark-pdf-fill text-dark"></i></a>
                  <span class="badge bg-primary">IJASAH S2</span>
                  <a class="badge bg-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalS2">Edit</a>
                  <a class="badge bg-secondary" href="ijasah/<?php echo $d['ijasahs2']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } ?>
                </div>
              </div>
            </div>
            <!-- Ijasah S3 -->
            <div class="col-4 col-sm-4 col-lg-2">
              <div class="card single-product-card">
                <div class="card-body p-3">
                <?php if ($d['ijasahs3'] == "-") { ?>
                  <a class="btn m-1 btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalS3"><i class="bi bi-cloud-arrow-up-fill"></i> Upload Ijasah S3</a>
                <?php } else { ?>
                  <a class="product-thumbnail d-block" style="text-align: center;font-size: 75px;"><i class="bi bi-file-earmark-pdf-fill text-dark"></i></a>
                  <span class="badge bg-primary">IJASAH S3</span>
                  <a class="badge bg-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalS3">Edit</a>
                  <a class="badge bg-secondary" href="ijasah/<?php echo $d['ijasahs3']?>"><i class="bi bi-eye-fill"></i></a>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- Pagination -->
      <div class="shop-pagination pt-3 mb-3">
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
                          <a href="sertifikat/<?php echo $row['foto_sertifikat']; ?>">
                            <img src="https://img.icons8.com/external-fauzidea-flat-fauzidea/64/null/external-pdf-file-file-extension-fauzidea-flat-fauzidea.png"/>
                          </a>
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