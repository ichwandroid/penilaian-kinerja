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