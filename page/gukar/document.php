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
          <?php }elseif ($_GET['pesan'] == "hapus") { ?>
            <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
              <div class="toast-body">
                <i class="bi bi-check-circle-fill"></i><div class="toast-text ms-3 me-2"><small class="d-block">Berhasil Menghapus Foto Sertifikat !</small>
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
              <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Ijasah Pendidikan Dasar - Menengah</small>
                <form action="#">
                  <select class="pe-4 form-select form-select-sm" id="defaultSelectSm" name="defaultSelectSm" aria-label="Default select example">
                    <option value="1" selected="">Sort by Newest</option>
                    <option value="2">Sort by Older</option>
                    <option value="3">Sort by Ratings</option>
                    <option value="4">Sort by Sales</option>
                  </select>
                </form>
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
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p1.jpg" alt="">
                    <!-- Badge --><span class="badge bg-warning">Sale</span></a>
                  <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Wooden Tool</a>
                  <!-- Product Price -->
                  <p class="sale-price">$9.89<span>$13.42</span></p><a class="btn btn-outline-info btn-sm" href="#">
                    <svg class="bi bi-cart me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                    </svg>Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card -->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p2.jpg" alt="">
                    <!-- Badge --><span class="badge bg-primary">-10%</span></a>
                  <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Atoms Musk</a>
                  <!-- Product Price -->
                  <p class="sale-price">$3.36<span>$5.99</span></p><a class="btn btn-outline-info btn-sm" href="#">
                    <svg class="bi bi-cart me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                    </svg>Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p3.jpg" alt="">
                    <!-- Badge --><span class="badge bg-info">-15%</span></a>
                  <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Black T-shirt</a>
                  <!-- Product Price -->
                  <p class="sale-price">$10.99<span>$12</span></p><a class="btn btn-outline-info btn-sm" href="#">
                    <svg class="bi bi-cart me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                    </svg>Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card-->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p4.jpg" alt="">
                    <!-- Badge --><span class="badge bg-primary">Sale</span></a>
                  <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Headphone</a>
                  <!-- Product Price -->
                  <p class="sale-price">$2.99<span>$4</span></p><a class="btn btn-outline-danger btn-sm disabled" href="#">
                    <svg class="bi bi-cart-x me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"></path>
                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>Out of Stock</a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card -->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p5.jpg" alt="">
                    <!-- Badge --><span class="badge bg-danger">Sale</span></a>
                  <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Crispy Biscuit</a>
                  <!-- Product Price -->
                  <p class="sale-price">$0.78<span>$1.12</span></p><a class="btn btn-outline-info btn-sm" href="#">
                    <svg class="bi bi-cart me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                    </svg>Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Single Top Product Card -->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card single-product-card">
                <div class="card-body p-3">
                  <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p6.jpg" alt="">
                    <!-- Badge --><span class="badge bg-primary">Hot</span></a>
                  <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Sports Shoes</a>
                  <!-- Product Price -->
                  <p class="sale-price">$110<span>$128</span></p><a class="btn btn-outline-danger btn-sm disabled" href="#">
                    <svg class="bi bi-cart-x me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"></path>
                      <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>Out of Stock</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <div class="shop-pagination pt-3">
        <div class="container">
          <div class="card">
            <div class="card-body py-3">
              <nav aria-label="Page navigation example">
                <ul class="pagination pagination-two justify-content-center">
                  <li class="page-item"><a class="page-link" href="#" aria-label="Previous">
                      <svg class="bi bi-chevron-left" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                      </svg></a></li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">9</a></li>
                  <li class="page-item"><a class="page-link" href="#" aria-label="Next">
                      <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                      </svg></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- ######################################################## -->

	<div class="page-content-wrapper py-3">
    <div class="container">
      <!-- Element Heading -->
      <div class="element-heading mt-3">
        <h6>Ijasah Pendidikan Dasar - Menengah</h6>
      </div>
    </div>

    <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="row g-3">
              <!-- Single Image Gallery -->
              <div class="col-4">
                <div class="single-gallery-item">
                  <?php if ($d['ijasahsd'] =="-") { ?>
                    <img class="image" src="https://via.placeholder.com/350x500.png?text=IJASAH SD / MI" alt="">
                  <?php } else {
                    if (!empty($d['ijasahsd'])) {
                       $pecah = explode(".", $d['ijasahsd']);
                       $ekstensi = $pecah[1];
                       if ($ekstensi == 'pdf') { ?>
                   <div class="center">
                   <a href="ijasah/<?php echo $d['ijasahsd']; ?>" class="image"><i class='bi bi-file-pdf'></i></a>
                 </div>
                   <?php 
                       } else if ($ekstensi == 'png') { ?>
                        <img class="image" src="ijasah/<?php echo $d['ijasahsd']; ?>" alt="">
                  <?php } } } ?>

                  <div class="middle">
                    <a class="btn btn-primary" href="editsd.php?id=<?php echo $d['id_study']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit Ijasah SD/MI"><i class="bi bi-pencil"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="single-gallery-item">
                  <?php if ($d['ijasahsmp'] =="-") { ?>
                    <img class="image" src="https://via.placeholder.com/350x500.png?text=IJASAH SMP / MTS" alt="">
                  <?php } else { ?>
                    <img class="image" src="ijasah/<?php echo $d['ijasahsmp']; ?>" alt="">
                  <?php } ?>
                  <div class="middle">
                    <a class="btn btn-success" href="editsmp.php?id=<?php echo $d['id_study']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit Ijasah SMP/MTS"><i class="bi bi-pencil"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="single-gallery-item">
                  <?php if ($d['ijasahsma'] =="-") { ?>
                    <img class="image" src="https://via.placeholder.com/350x500.png?text=IJASAH SMA / MAN" alt="">
                  <?php } else { ?>
                    <img class="image" src="ijasah/<?php echo $d['ijasahsma']; ?>" alt="">
                  <?php } ?>
                  <div class="middle">
                    <a class="btn btn-warning" href="editsma.php?id=<?php echo $d['id_study']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit Ijasah SMA/MAN/SMK"><i class="bi bi-pencil"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <!-- Element Heading -->
        <div class="element-heading mt-3">
          <h6>Ijasah Pendidikan Tinggi</h6>
        </div>
      </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="row g-3">
              <!-- Single Image Gallery -->
              <div class="col-4">
                <div class="single-gallery-item">
                  <?php if ($d['ijasahs1'] =="") { ?>
                    <img class="image" src="https://via.placeholder.com/500x350.png?text=IJASAH S1" alt="">
                  <?php } else { ?>
                    <img class="image" src="ijasah/<?php echo $d['ijasahs1']; ?>" alt="">
                  <?php } ?>
                  <div class="middle">
                    <a class="btn btn-danger" href="edits1.php?id=<?php echo $d['id_study']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit Ijasah S1"><i class="bi bi-pencil"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="single-gallery-item">
                  <?php if ($d['ijasahs2'] =="") { ?>
                    <img class="image" src="https://via.placeholder.com/500x350.png?text=IJASAH S2" alt="">
                  <?php } else { ?>
                    <img class="image" src="ijasah/<?php echo $d['ijasahs2']; ?>" alt="">
                  <?php } ?>
                  <div class="middle">
                    <a class="btn btn-danger" href="edits2.php?id=<?php echo $d['id_study']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit Ijasah S2"><i class="bi bi-pencil"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="single-gallery-item">
                  <?php if ($d['ijasahs3'] =="") { ?>
                    <img class="image" src="https://via.placeholder.com/500x350.png?text=IJASAH S3" alt="">
                  <?php } else { ?>
                    <img class="image" src="ijasah/<?php echo $d['ijasahs3']; ?>" alt="">
                  <?php } ?>
                  <div class="middle">
                    <a class="btn btn-danger" href="edits3.php?id=<?php echo $d['id_study']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit Ijasah S3"><i class="bi bi-pencil"></i></a>
                  </div>
                </div>
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
              <input name="id_user" id="exampleInputText" type="text" value="<?php echo $d['id_study']; ?>" readonly style="visibility: hidden;">
              <div class="form-group">
                <label class="form-label" for="exampleInputemail">Nama Sertifikat</label>
                <input class="form-control" name="nama_sertifikat" id="exampleInputemail" type="text">
              </div>
              <div class="form-group">
                <label class="form-label" for="customFile">Upload Foto Sertifikat</label>
                <input class="form-control border-0" id="customFile" type="file" name="sertifikat_foto">
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
        <h6>Sertifikat</h6>
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