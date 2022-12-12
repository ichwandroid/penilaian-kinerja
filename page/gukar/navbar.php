<?php 
      session_start();
     
      // cek apakah yang mengakses halaman ini sudah login
      if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
      }

      include '../../setting.php';
      $no = 1;
      $data = mysqli_query($koneksi,"select * from login join user on user.id_user = login.id_login where username='$_SESSION[username]'");
      while($d = mysqli_fetch_array($data)){
 
  ?>
    <!-- Preloader -->
    <div id="preloader">
      <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
    </div>
    <!-- Internet Connection Status -->
    <!-- # This code for showing internet connection status -->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Header Area -->
    <div class="header-area" id="headerArea">
      <div class="container">
        <!-- # Paste your Header Content from here -->
        <!-- # Header Five Layout -->
        <!-- # Copy the code from here ... -->
        <!-- Header Content -->
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
          <!-- Logo Wrapper -->
          <div class="logo-wrapper"><large>Hi, <b><?php echo $d['nama']; ?></b></large></div>
          <!-- Navbar Toggler -->
          <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
        </div>
        <!-- # Header Five Layout End -->
      </div>
    </div>
    <!-- # Sidenav Left -->
    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1" aria-labelledby="affanOffcanvsLabel">
      <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <div class="offcanvas-body p-0">
        <!-- Side Nav Wrapper -->
        <div class="sidenav-wrapper">
          <!-- Sidenav Profile -->
          <div class="sidenav-profile bg-gradient">
            <div class="sidenav-style1"></div>
            <!-- User Thumbnail -->
            <div class="user-profile">
              <?php if ($d['gukar_foto'] =="") { ?>
                <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+GUKAR" alt="">
              <?php } else { ?>
                <img src="foto/<?php echo $d['gukar_foto']; ?>" alt="">
              <?php } ?>
            </div>
            <!-- User Info -->
            <div class="user-info">
              <h6 class="user-name mb-0"><?php echo $d['nama']; ?></h6><span><?php echo $d['level']; ?></span>
            </div>
          </div>
          <!-- Sidenav Nav -->
          <ul class="sidenav-nav ps-0">
            <li><a href="index.php"><i class="bi bi-house-door"></i>Home</a></li>
            <li><a href="activity.php"><i class="bi bi-bar-chart-line"></i>Activity</a></li>
            <li><a href="document.php"><i class="bi bi-folder2-open"></i>Document</a></li>
            <li><a href="#" class="nav-url"><i class="bi bi-rocket-takeoff"></i>Application</i></a>
              <ul style="display: none;">
                <li><a href="qrcode.php"><i class="bi bi-qr-code"></i>QR Code</a></li>
              </ul>
            </li>
            <li>
              <div class="night-mode-nav"><i class="bi bi-moon"></i>Night Mode
                <div class="form-check form-switch">
                  <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
                </div>
              </div>
            </li>
            <li><a href="../../page-logout.php"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
          </ul>
          <!-- Social Info -->
          <div class="social-info-wrap"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a></div>
          <!-- Copyright Info -->
          <div class="copyright-info">
            <p>2022 &copy; Made by<a href="#">OP SD Anak Saleh</a></p>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>