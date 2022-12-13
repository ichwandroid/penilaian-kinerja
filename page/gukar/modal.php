<div class="modal fade bottom-align-modal" id="modalSD" tabindex="-1" aria-labelledby="bottomAlignModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-end">
    <div class="modal-content">
      <div class="modal-body">
        <div class="file-upload-card">
          <i class="bi bi-file-earmark-arrow-up-fill" style="font-size: 55px;"></i>
          <h5 class="mt-2 mb-2">Upload Ijasah SD / MIN Anda</h5>
          <form name="formsd" action="action/act_editsd.php" method="POST" enctype="multipart/form-data">
            <div class="form-file">
              <input type="hidden" name="idsd" class="form-control" value="<?php echo $d['id_study']; ?>" >
              <input name="namasd" class="form-control mb-2" placeholder="Nama Sekolah SD" value="<?php echo $d['namasd']; ?>" >
              <input class="form-control d-none" id="customFile" type="file" name="filesd">
              <label class="form-file-label justify-content-center" for="customFile"><span class="form-file-button btn btn-primary shadow w-100">Upload File</span></label>
              <input class="form-file-button btn btn-success shadow" type="submit" name="submitsd" value="Submit">
            </div>
          </form>
          <h6 class="mt-2 mb-0">Supported files</h6><small>.PDF Only</small>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bottom-align-modal" id="modalSMP" tabindex="-1" aria-labelledby="bottomAlignModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-end">
    <div class="modal-content">
      <div class="modal-body">
        <div class="file-upload-card">
          <i class="bi bi-file-earmark-arrow-up-fill" style="font-size: 55px;"></i>
          <h5 class="mt-2 mb-2">File Upload Ijasah SMP / MTS</h5>
          <form name="formsmp" action="action/act_editsmp.php" method="POST" enctype="multipart/form-data">
            <div class="form-file">
              <input type="hidden" name="idsmp" class="form-control" value="<?php echo $d['id_study']; ?>" >
              <input name="namasmp" class="form-control mb-2" placeholder="Nama Sekolah SMP" value="<?php echo $d['namasmp']; ?>" >
              <input class="form-control d-none" id="customFile" type="file" name="filesmp">
              <label class="form-file-label justify-content-center" for="customFile"><span class="form-file-button btn btn-primary shadow w-100">Upload File</span></label>
              <input class="form-file-button btn btn-success shadow" type="submit" name="submitsmp" value="Submit">
            </div>
          </form>
          <h6 class="mt-2 mb-0">Supported files</h6><small>.PDF Only</small>
        </div>
      </div>
    </div>
  </div>
</div>