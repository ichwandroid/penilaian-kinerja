<script type="text/javascript">
	$("form").submit(function(e) {
		e.preventDefault();
		var sd_form	= $('#form-sd')[0];
		var data = new FormData(sd_form);
		$.ajax({
			url: 'editsd.php',
			type: 'POST',
			enctype: 'multipart/form-data',
			data: data,
			processData: false,
			contentType: false,
			cache: false,
			success: function(data){
				alert(data);
			}
		});
	});
</script>