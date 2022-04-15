<?php
	// get the radius from the textfields
	$radius = $_POST['radius'];

	// calculate the area
	$volume = (4/3) * pi() * ($radius ** 3) ;
  $volumeRounded = number_format ($volume, 2) ;
?>
<!-- Answers -->
The volume of the sphere is <?php echo "$volumeRounded"; ?>cm<sup>2</sup>.