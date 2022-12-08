<?php 
	include 'header.php';
	include 'navbar.php';

	if (isset($_GET['id'])) {
		if ($_GET['id']) {
			$id = $_GET['id'];
			$query = mysqli_query($koneksi,"SELECT * FROM study WHERE id_study = '$id'");
			$row = mysqli_fetch_array($query); 
		} else {
			header("location:edits2.php");
		}
	} else {
		header("location:edits2.php");
	}
?>

<div class="page-content-wrapper py-3">
	<div class="container">
		<!-- Element Heading -->
		<div class="element-heading">
			<h6>File Upload Ijasah S2</h6>
		</div>
	</div>
	<div class="container">
        <div class="card">
          <div class="card-body">
            <div class="file-upload-card">
              <svg class="bi bi-file-earmark-arrow-up text-primary" width="48" height="48" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"></path>
                <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"></path>
                <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 7.707V11.5a.5.5 0 0 0 .5.5z"></path>
              </svg>
              <h5 class="mt-2 mb-4">Upload Ijasah S2 Anda</h5>
              <form action="action/act_edits2.php" method="POST" enctype="multipart/form-data">
                <div class="form-file">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $row['id_study']; ?>" >
                  <input class="form-control d-none" id="customFile" type="file" name="pas_foto">
                  <label class="form-file-label justify-content-center" for="customFile"><span class="form-file-button btn btn-primary shadow w-100">Upload File</span></label>
                  <button class="form-file-button btn btn-success shadow" type="submit">Submit</button>
                </div>
              </form>
              <h6 class="mt-4 mb-0">Supported files</h6><small>.PDF Only</small>
            </div>
          </div>
        </div>
      </div>
  </div>

<?php include 'footer.php'; ?>