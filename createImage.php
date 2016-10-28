<?php 
if ($_GET) {
	require('function.php');




	header('Content-Type: image/png');
	$im = imagecreatefromjpeg("bg.jpg");
	$color = imagecolorallocate($im, 0, 0, 0);


	$number = countNumber($_GET['name']);

	$chance = $number % 10;
	

	if ($chance <= 3){
		$figure = $number * 97 % 12 + 1;

		$dst = resize_image("figures/n".$figure.".jpg", 150, 150, true);


	}else if ($chance <= 6){
		$figure = $number * 97 % 27 + 1;

		$dst = resize_image("figures/r".$figure.".jpg", 150, 150, true);		


	}else if ($chance <= 8){
		$figure = $number * 97 % 16 + 1;

		$dst = resize_image("figures/sr".$figure.".jpg", 150, 150, true);
	}else if ($chance == 9){
		$figure = $number * 97 % 8 + 1;

		$dst = resize_image("figures/ssr".$figure.".jpg", 150, 150, true);
	}else{

	}

	imagecopy ( $im , $dst, 389 , 50 , 0, 0 , 150 , 150 );


	$font = 'font/cn_cute.ttf';

	$text = "Hi," . $_GET['name'] . "，";
	imagettftext($im, 25, 0, 50, 80, $color, $font, $text);

	imagettftext($im, 25, 0, 50, 110, $color, $font, "与你相性最高的");

	imagettftext($im, 25, 0, 50, 140, $color, $font, "式神是...");

	imagepng($im);
	imagedestroy($im);


} else {
	
}


?>

