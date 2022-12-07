<?php 
	include 'header.php';
	include 'navbar.php';
  $data = mysqli_query($koneksi,"SELECT * FROM signature JOIN login ON signature.id_user = login.id_login WHERE username='$_SESSION[username]'");
  $countdata = mysqli_num_rows($data);
?>

		<div class="page-content-wrapper py-3">
      <!-- Pagination-->
      <div class="shop-pagination pb-3">
        <div class="container">
          <div class="card">
            <div class="card-body p-2">
              <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Showing <?php echo $countdata; ?></small>
              	<a class="btn m-1 btn-creative btn-success" href="esign.php"><i class="bi bi-qr-code-scan"></i> Buat QR Code</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Top Products-->
      <div class="top-products-area product-list-wrap">
      <?php
      	$no = 1;
        while($d = mysqli_fetch_array($data)){
      ?>
        <div class="container">
          <div class="row g-3">
            <!-- Single Top Product Card-->
            <div class="col-12">
              <div class="card single-product-card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-side-img">
                      <a class="product-thumbnail d-block" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Token : <?php echo $d['token']; ?>">
                        <img src="action/generateqrcode/<?php echo $d['qrcode']; ?>.png" alt="">
                      </a>
                    </div>
                    <div class="card-content px-4 py-2">
                      <a class="product-title d-block text-truncate mt-0" style="max-width: 145px;"><?php echo $d['sign_name']; ?></a>
                      <span class="d-inline-block text-truncate mb-0" style="max-width: 145px;"><?php echo $d['sign_req']; ?></span><br>
                      <span class="d-inline-block text-truncate mb-0" style="max-width: 145px;"><?php echo $d['sign_date']; ?></span><br>
                      <a class="btn m-1 btn-sm btn-primary" href="action/generateqrcode/<?php echo $d['qrcode']; ?>.png" download="QRCode Tanda Tangan"> Download</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <!-- Single Top Product Card-->
          </div>
        </div>
      </div>
      <!-- Pagination -->
      
    </div>
		
		

<?php include 'footer.php' ?>