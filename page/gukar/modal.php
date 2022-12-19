<div class="modal fade bottom-align-modal" id="modalSD" tabindex="-1" aria-labelledby="bottomAlignModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-end">
    <div class="modal-content">
      <div class="modal-body">
        <div class="file-upload-card">
          <i class="bi bi-file-earmark-arrow-up-fill" style="font-size: 55px;"></i>
          <h5 class="mt-2 mb-2">Upload Ijasah SD / MIN Anda</h5>
          <form id="form-sd" action="action/act_editsd.php" method="POST" enctype="multipart/form-data">
            <div class="form-file">
              <input type="hidden" name="idsd" class="form-control" value="<?php echo $d['id_study']; ?>" >
              <input name="namasd" class="form-control mb-2" placeholder="Nama Sekolah SD" value="<?php echo $d['namasd']; ?>" >
              <input class="form-control d-none" id="customFile" type="file" name="filesd">
              <label class="form-file-label justify-content-center" for="customFile"><span class="form-file-button btn btn-primary shadow w-100">Upload File</span></label>
              <input class="form-file-button btn btn-success shadow" type="submit" name="submit-sd" value="Submit">
            </div>
          </form>
          <h6 class="mt-2 mb-0">Supported files</h6><small>.PDF Only</small>
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
                </svg>Send Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>