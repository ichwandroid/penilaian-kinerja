<?php 
	include 'header.php';
	include 'navbar.php';
	$no = 1;
      $data = mysqli_query($koneksi,"select * from login join user on user.id_user = login.id_login where username='$_SESSION[username]'");
      while($d = mysqli_fetch_array($data)){
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../../js/numeric-1.2.6.min.js"></script>
<script src="../../js/bezier.js"></script>
<script src="../../js/jquery.signaturepad.js"></script>
<script type='text/javascript' src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script>
<script src="../../js/json2.min.js"></script>
<link href="../../css/app_style.css" rel="stylesheet">
<link href="../../css/jquery.signaturepad.css" rel="stylesheet">

	<div class="page-content-wrapper py-3">
      <div class="container">               
        <!-- Contact Form -->
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="mb-3">E-Signature</h5>
            <div class="contact-form">
              <form method="POST">
                <div class="form-group mb-3">
                  <input type="text" id="signid" name="signid" class="form-control" value="<?php echo $d['id_user']; ?>" hidden>
                </div>
                <div class="form-group mb-3">
                  <input id="signname" name="signname" class="form-control" type="text" placeholder="Nama Penanda Tangan Beserta Gelar">
                </div>
                <div class="form-group mb-3">
                  <textarea id="signreq" name="signreq" class="form-control" cols="30" rows="10" placeholder="Kebutuhan Tanda Tangan"></textarea>
                </div>
                <div class="form-group mb-3">
                 <div id="signArea" >
                 	<p class="fst-italic">Put signature below,.</p>
                 	<div class="sig sigWrapper" style="height:auto;">
                 		<div class="typed"></div>
                 		<canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
                 	</div>
                 </div>
             	</div>
                <button class="btn btn-danger m-1" id="btnback">Back</button>
                <button class="btn btn-warning m-1" id="btnclear">Clear</button>
                <button class="btn btn-primary m-1" id="btnSaveSign">Send Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

		
		<script>
			$(document).ready(function() {
				$('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, variableStrokeWidth:true, lineTop:90});
			});

			$('#btnclear').click(function() {
				$('#signArea').signaturePad().clearCanvas();
			});

			$('#btnback').click(function() {
				window.location='qrcode.php';
			});

			
			$("#btnSaveSign").click(function(e){
				html2canvas([document.getElementById('sign-pad')], {
					onrendered: function (canvas) {
						var canvas_img_data = canvas.toDataURL('image/png');
						var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");

						var signid = $("#signid").val();
						var signname = $("#signname").val();
						var signreq = $("#signreq").val();
						//ajax call to save image inside folder
						$.ajax({
							url: 'action/act_esign.php',
							data: { 'signid':signid, 'signname':signname, img_data:img_data, 'signreq':signreq },
							type: 'POST',
							dataType: 'JSON',
							success: function (data) {
								window.location='qrcode.php';
							}
						});
					}
				});
			});
		  </script> 
		
		<?php } ?>

<?php include 'footer.php' ?>