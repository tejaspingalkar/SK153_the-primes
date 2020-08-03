<?php
require 'image.compare.class.php';
$img2 = $_POST['imgtarget'];
echo $img2;
/*
	these two images are almost the same so the hammered distance will be less than 10
	try it with images like this:
		1. the example images
		2. two complatly different image
		3. the same image (returned number should be 0)
		4. the same image but with different size, even different aspect ratio (returned number should be 0)
	you will see how the returned number will represent the similarity of the images.
*/ 

$class = new compareImages;
$hh =  $class->compare($img1,$img2);
if($hh == '0'){
	echo 'Difference In Percentage ' .$hh .'%';
}
else{
	$hh = $hh + 10;
	echo 'Difference In Percentage ' .$hh .'%';
}
?>