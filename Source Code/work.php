<?php
   $con = mysqli_connect("localhost","root",'',"communitynetworking") or die('$con');
   $id = $_GET['id'];
   $sql = "UPDATE useracc SET status = 1 WHERE registerid = $id";
   $result = mysqli_query($con,$sql) or die(mysqli_error($con));
   //header('Location: userrequest.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>register id is <?php echo $id; ?></h1>
<?php header('Location: userrequest.php'); ?>
</body>
</html>
