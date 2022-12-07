<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Aplikasi Rapor Kinerja Gukar Anak Saleh</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="../../img/core-img/favicon.ico">
    <!-- <link rel="apple-touch-icon" href="../../img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="../../img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../img/icons/icon-180x180.png"> -->
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/tiny-slider.css">
    <link rel="stylesheet" href="../../css/baguetteBox.min.css">
    <link rel="stylesheet" href="../../css/rangeslider.css">
    <link rel="stylesheet" href="../../css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="../../css/apexcharts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../../style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="../../manifest.json">
    <!-- Signature -->
    <link href="../../css/jquery.signaturepad.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="../../js/numeric-1.2.6.min.js"></script> 
    <script src="../../js/bezier.js"></script>
    <script src="../../js/jquery.signaturepad.js"></script> 
    
    <script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
    <script src="../../js/json2.min.js"></script>
    <link href="../../css/app_style.css" rel="stylesheet">
  </head>
  <body>

    <?php
      include '../../setting.php';
      $token = $_GET['token'];
      $data = mysqli_query($koneksi,"SELECT * FROM signature WHERE token = '$token'");
      while($d = mysqli_fetch_array($data)){
    ?>


    <div class="order-success-wrapper">
      <div class="custom-container">
        <div class="order-done-content">
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-award-fill text-success" viewBox="0 0 16 16">
            <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
          </svg>
          <h5>Verifikasi Tanda Tangan Digital !</h5>
          <p><?php echo $d['sign_date']; ?></p>
          <p>Tanda Tangan Dibutuhkan Oleh <strong class="badge bg-light text-dark shadow-sm me-2 fz-14"> <?php echo $d['sign_name']; ?> </strong>dibubuhkan untuk menandatangani berkas <strong class="badge bg-light text-dark shadow-sm me-2 fz-14"> <?php echo $d['sign_req']; ?> </strong></p>
          <a class="btn btn-warning mt-3" href="page-shop-grid.html">Go to Shop</a>
        </div>
      </div>
    </div>

  <?php } ?>

  </body>
</html>