<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD PROJECT</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
 <?php require_once 'process.php'; ?>
<?php 
	   $mysqli = new mysqli('localhost', 'root', '', 'sm') or die(mysqli_error( $mysqli->error));
	   $result = $mysqli->query("SELECT * FROM data");

  ?>

	   





    
    

   



    <?php 

	   function pre_r( $array){
	   echo '<pre>';
	   	print_r($array);
	   echo '</pre>';
	} 
	?>
	
	  <?php 
	<div class="row justify-control-center">
	<form action="process.php" method="POST">
		<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="Enter your name">
	    </div>
	    <div class="form-group">
	    		<label>Location</label>
		<input type="text" name="location" class="form-control" value="Enter your location">
	</div>
	<div class="from-group">
		<button type="submit" class="btn-primary" name="save">Save</button>
	</form>
</div>

</body>
</html>