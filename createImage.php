<?php 
if ($_GET) {
	require('function.php');




	header('Content-Type: image/png');
	$im = imagecreatefromjpeg("bg.jpg");
	$color = imagecolorallocate($im, 0, 0, 0);


	$number = seperation($_GET['name']);

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

	imagealphablending($im, false);
	imagesavealpha($im, true);

	imagecopy ( $im , $dst, 389 , 50 , 0, 0 , 150 , 150 );

	// $font = 'font/arial.ttf';
	$font = 'font/cn_cute.ttf';

	$text = $_GET['name'];
	imagettftext($im, 65, 0, 50, 170, $color, $font, $text);

		// imagepng($transparent);
		// imagedestroy($transparent);
		// imagepng($dst);
		// imagedestroy($dst);
	imagepng($im);
	imagedestroy($im);


} else {
	
}


?>

