<?php 
	include 'header.php'; 
	include 'navbar.php';
      $no = 1;
      $data = mysqli_query($koneksi,"SELECT * FROM login JOIN study ON study.id_study = login.id_login WHERE username='$_SESSION[username]'");
      while($d = mysqli_fetch_array($data)){
?>

    <?php include 'alert.php';?>    
    <?php include 'modal.php';?>    

    <div class="page-content-wrapper py-3">
      <!-- Pagination -->
      <div class="shop-pagination pb-3">
        <div class="container">
          <div class="card">
            <div class="card-body p-2">
              <div class="d-flex align-items-center justify-content-between">
                <h6><small class="ms-1">Ijasah Pendidikan Dasar</small></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- File SD -->
      <div class="top-products-area">
        <div class="container">
          <div class="row g-3">
            <!-- Single Top Product Card -->
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
          </div>
        </div>
      </div>
      
      

    <?php } ?>


  </div>



<?php include 'footer.php'; ?>