<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Sphere, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anita Kay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <!-- Link to CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Volume of a Sphere, with PHP</title>
	</head>
	<body>
    <center>
    <!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Volume of a Sphere, in PHP</h1>";
			echo "<h3>This program will calculate the volume of a sphere.</h3>";
		?>
		<!-- form to get the sides of the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblRadius">Radius (cm):</label>
      <input type="text" id="radius" placeholder="Enter the radius (cm)" name="radius"><br><br>
      <input type="submit" value="Calculate Volume">
    </form>
		<!-- iframe so results can show on the web page. -->
			<iframe id="results" name="results">			
				
	    </iframe>
    <!-- Image -->
    <?php
      echo "<br><img src='./images/sphere.png' alt='Sphere' width='50%'>";
    ?>
	</body>
</html>