<?php
// Menghubungkan file ini dengan file database
include '../../../setting.php';

date_default_timezone_set("Asia/Jakarta");

$id = $_POST['signid'];
$nama = $_POST['signname'];
$signreq = $_POST['signreq'];
$date = date("Y-m-d H:i:s");
$token = md5($nama.$signreq.$date);

// create signature
	$imagedata = base64_decode($_POST['img_data']);
	$filename = md5(date("dmYhisA"));
	//Location to where you want to created sign image
	$file_name = '../doc_signs/'.$filename.'.png';
	file_put_contents($file_name,$imagedata);
	$result['status'] = 1;
	$result['file_name'] = $file_name;


	/**
	 * QR Code + Logo Generator
	 *
	 * http://labs.nticompassinc.com
	 */
	$filepath = 'generateqrcode/'.$token.'.png';
	$link = 'http://10.10.10.110:8080/dist/page/view/index.php?token=';
	$url  = $link.$token;
	$data = isset($_GET['data']) ? $_GET['data'] : $url;
	$size = isset($_GET['size']) ? $_GET['size'] : '200x200';
	$logo = isset($_GET['logo']) ? $_GET['logo'] : '../../../img/core-img/logo fixed.png';

	header('Content-type: image/png');
	// Get QR Code image from Google Chart API
	// http://code.google.com/apis/chart/infographics/docs/qr_codes.html
	$QR = imagecreatefrompng('https://chart.googleapis.com/chart?cht=qr&chld=H|1&chs='.$size.'&chl='.urlencode($data));
	if($logo !== FALSE){
		$logo = imagecreatefromstring(file_get_contents($logo));

		$QR_width = imagesx($QR);
		$QR_height = imagesy($QR);
		
		$logo_width = imagesx($logo);
		$logo_height = imagesy($logo);
		
		// Scale logo to fit in the QR Code
		$logo_qr_width = $QR_width/3;
		$scale = $logo_width/$logo_qr_width;
		$logo_qr_height = $logo_height/$scale;
		
		imagecopyresampled($QR, $logo, $QR_width/3, $QR_height/3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
	}
	imagepng($QR,$filepath);
	imagedestroy($QR);

$data = mysqli_query($koneksi, "INSERT INTO signature (id_user, sign_name, sign_req, sign_date, signature, token, qrcode) VALUES ('$id','$nama','$signreq','$date','$filename','$token','$token')");

echo json_encode($data);

header("location:../document.php");

?>