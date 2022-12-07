<?php
  include 'header.php';
  include 'navbar.php';
      $no = 1;
      $x = 25;
      $data = mysqli_query($koneksi,"select * from login join activity on activity.id_activity = login.id_login where username='$_SESSION[username]'");
      while($d = mysqli_fetch_array($data)){
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <div class="page-content-wrapper py-3">
      <div class="container">
        <!-- Element Heading -->
        <div class="element-heading mt-3">
          <h6>Profesionalitas</h6>
        </div>
      </div>

      <div class="container">
        <!-- Rating Card -->
        <div class="card">
          <div class="card-body">
            <div class="rating-card-two">
              <!-- Rating result -->
              <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                <!-- <div class="rating"><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a></div> -->
                <span>Nilai Maksimal 4</span>
              </div>
              <!-- Rating Details -->
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">KETERLAMBATAN</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['keterlambatan']; ?></span>x</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['keterlambatan']*$x; ?>%;" role="progressbar"></div>
                  </div>
                </div>
              </div>
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-slash" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                    <path d="M14.975 10.025a3.5 3.5 0 1 0-4.95 4.95 3.5 3.5 0 0 0 4.95-4.95Zm-4.243.707a2.501 2.501 0 0 1 3.147-.318l-3.465 3.465a2.501 2.501 0 0 1 .318-3.147Zm.39 3.854 3.464-3.465a2.501 2.501 0 0 1-3.465 3.465Z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">IJIN TIDAK HADIR</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['ijintidakhadir']; ?></span>x</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['ijintidakhadir']*$x; ?>%;" role="progressbar"></div>
                  </div>
                </div>
              </div>
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet-half" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                    <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">IJIN SAKIT</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['ijinsakit']; ?></span>x</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['ijinsakit']*$x; ?>%;" role="progressbar"></div>
                  </div>
                </div>
              </div>
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">ALPA</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['alpa']; ?></span>x</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['alpa']*$x; ?>%;" role="progressbar"></div>
                  </div>
                </div>
              </div>
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                    <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z"/>
                    <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">KEPATUTAN</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['kepatutan']; ?></span>x</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['kepatutan']*$x; ?>%;"></div>
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
          <h6>Produktivitas</h6>
        </div>
      </div>

      <div class="container">
        <!-- Rating Card -->
        <div class="card">
          <div class="card-body">
            <div class="rating-card-two">
              <!-- Rating result -->
              <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                <!-- <div class="rating"><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a></div> -->
                <span>Nilai Maksimal 4</span>
              </div>
              <!-- Rating Details -->
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">KETUNTASAN</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['ketuntasan']; ?></span>%</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['ketuntasan']*$x; ?>%;"></div>
                  </div>
                </div>
              </div>
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                    <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">INISIATIF</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['inisiatif']; ?></span>%</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['inisiatif']*$x; ?>%;"></div>
                  </div>
                </div>
              </div>
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                    <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">KARYA</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['karya']; ?></span>%</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['karya']*$x; ?>%;"></div>
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
          <h6>Sosial</h6>
        </div>
      </div>

      <div class="container">
        <!-- Rating Card -->
        <div class="card">
          <div class="card-body">
            <div class="rating-card-two">
              <!-- Rating result -->
              <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                <!-- <div class="rating"><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a></div> -->
                <span>Nilai Maksimal 4</span>
              </div>
              <!-- Rating Details -->
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-microsoft-teams" viewBox="0 0 16 16">
                    <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682v.766Zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0Zm-2.238 9.488c-.04 0-.08 0-.12-.002a5.19 5.19 0 0 0 .381-2.07V6.306a1.692 1.692 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.598 2.598 0 0 1-2.598 2.598h-.013Z"/>
                    <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.682.682 0 0 1-.682.682H.682A.682.682 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945h1.363Z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">KERJA TIM</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['kerjatim']; ?></span>%</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['kerjatim']*$x; ?>%;"></div>
                  </div>
                </div>
              </div>
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                    <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                    <path d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">KOMUNIKASI</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['komunikasi']; ?></span>%</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['komunikasi']*$x; ?>%;"></div>
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
          <h6>Kepribadian</h6>
        </div>
      </div>

      <div class="container">
        <!-- Rating Card -->
        <div class="card">
          <div class="card-body">
            <div class="rating-card-two">
              <!-- Rating result -->
              <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                <!-- <div class="rating"><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a><a href="#"><i class="bi bi-star"></i></a></div> -->
                <span>Nilai Maksimal 4</span>
              </div>
              <!-- Rating Details -->
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                    <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">KETELADANAN</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['keteladanan']; ?></span>%</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['keteladanan']*$x; ?>%;"></div>
                  </div>
                </div>
              </div>
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
                    <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">ETOS KERJA</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['etoskerja']; ?></span>%</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['etoskerja']*$x; ?>%;"></div>
                  </div>
                </div>
              </div>
              <div class="skill-progress-bar d-flex align-items-center">
                <!-- Skill Icon -->
                <div class="skill-icon shadow-sm p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z"/>
                  </svg>
                </div>
                <div class="skill-data">
                  <!-- Skill Name -->
                  <div class="skill-name d-flex align-items-center justify-content-between">
                    <p class="mb-1">KOMPETITIF</p><small class="mb-1"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['kompetitif']; ?></span>%</small>
                  </div>
                  <!-- Progress -->
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $d['kompetitif']*$x; ?>%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="card image-gallery-card direction-rtl">
          <div class="card-body">
            <h5>Where can I get some?</h5>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            <!-- Single Skill Progress Bar -->
            <!-- Single Skill Progress Bar -->
            <!-- Single Skill Progress Bar -->
            <p class="mb-4">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
            <div class="row">
              <div class="col-6">
                <!-- Single Counter -->
                <div class="single-counter-wrap text-center mb-6"><i class="bi bi-clipboard-data-fill mb-2 text-success"></i>
                  <h3 class="mb-0 text-success"><span class="counter is-visible" style="visibility: visible;"><?php echo $d['keterlambatan']+$d['ijintidakhadir']+$d['ijinsakit']+$d['alpa']+$d['kepatutan']+$d['ketuntasan']+$d['inisiatif']+$d['karya']+$d['kerjatim']+$d['komunikasi']+$d['keteladanan']+$d['etoskerja']+$d['kompetitif'];?></span>+</h3>
                </div>
              </div>
              <div class="col-6">
                <!-- Single Counter -->
                <div class="single-counter-wrap text-center mb-6"><i class="bi bi-clipboard-pulse mb-2 text-danger"></i>
                  <h3 class="mb-0 text-danger"><span class="counter is-visible" style="visibility: visible;">963</span>+</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <!-- Element Heading -->
        <div class="element-heading mt-3">
          <h6>Hasil Survey</h6>
        </div>
      </div>

      <div class="container">
        <!-- Rating Card -->
        <div class="card">
          <div class="row">
              <div class="col-6">
                <!-- Single Counter -->
                <div class="card-body py-5">
                  <div class="rating-card-three text-center">
                    <h6 class="mb-3">Student</h6>
                    <div class="stars">
                      <input class="stars-checkbox" id="first-star" type="radio" name="star">
                      <label class="stars-star" for="first-star">
                        <svg class="star-icon" id="star1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                      <input class="stars-checkbox" id="second-star" type="radio" name="star">
                      <label class="stars-star" for="second-star">
                        <svg class="star-icon" id="star2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                      <input class="stars-checkbox" id="third-star" type="radio" name="star">
                      <label class="stars-star" for="third-star">
                        <svg class="star-icon" id="star3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                      <input class="stars-checkbox" id="fourth-star" type="radio" name="star">
                      <label class="stars-star" for="fourth-star">
                        <svg class="star-icon" id="star4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                      <input class="stars-checkbox" id="fifth-star" type="radio" name="star">
                      <label class="stars-star" for="fifth-star">
                        <svg class="star-icon" id="star5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <!-- Single Counter -->
                <div class="card-body py-5">
                  <div class="rating-card-three text-center">
                    <h6 class="mb-3">Parent's</h6>
                    <div class="stars">
                      <input class="stars-checkbox" id="first-star" type="radio" name="star">
                      <label class="stars-star" for="first-star">
                        <svg class="star-icon" id="star1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                      <input class="stars-checkbox" id="second-star" type="radio" name="star">
                      <label class="stars-star" for="second-star">
                        <svg class="star-icon" id="star2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                      <input class="stars-checkbox" id="third-star" type="radio" name="star">
                      <label class="stars-star" for="third-star">
                        <svg class="star-icon" id="star3" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                      <input class="stars-checkbox" id="fourth-star" type="radio" name="star">
                      <label class="stars-star" for="fourth-star">
                        <svg class="star-icon" id="star4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                      <input class="stars-checkbox" id="fifth-star" type="radio" name="star">
                      <label class="stars-star" for="fifth-star">
                        <svg class="star-icon" id="star5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                          <polygon points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182"></polygon>
                        </svg>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    <script>
            progressBar = document.querySelectorAll('.progress-bar');
            progressBar.forEach(function(onebyone) {
                // console.log(onebyone.style.width)

                if (onebyone.style.width == '100%') {
                    onebyone.classList.add('bg-danger');
                } else if (onebyone.style.width == '75%') {
                    onebyone.classList.add('bg-warning');
                } else if (onebyone.style.width == '50%') {
                    onebyone.classList.add('bg-success');
                } else if (onebyone.style.width == '25%') {
                    onebyone.classList.add('bg-primary');
                }
            })
        </script>

  <?php } ?>

<?php include 'footer.php'; ?>