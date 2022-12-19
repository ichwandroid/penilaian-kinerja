<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(e){
	// Submit form data via Ajax
	$("#fupForm").on('submit', function(e){
		e.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'editsd.php',
			data: new FormData(this),
			dataType: 'json',
			contentType: false,
			cache: false,
			processData:false,
			beforeSend: function(){
				$('.submitBtn').attr("disabled","disabled");
				$('#fupForm').css("opacity",".5");
			},
			success: function(response){ //console.log(response);
				$('.statusMsg').html('');
				if(response.status == 1){
					$('#fupForm')[0].reset();
					$('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
				}else{
					$('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
				}
				$('#fupForm').css("opacity","");
				$(".submitBtn").removeAttr("disabled");
			}
		});
	});
	
	// File type validation
	$("#file").change(function() {
		var file = this.files[0];
		var imagefile = file.type;
		var match= ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
		if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5]))){
			alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
			$("#file").val('');
			return false;
		}
	});
});
</script>