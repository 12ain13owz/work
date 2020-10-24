<?php
	session_start();
	include('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
</head>
<body>
	<?php 
		$memId = $_SESSION['memId'];
		$sql = "SELECT * FROM member WHERE memId = '$memId';";
		$qry = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($qry);	
	?>

	Hello <?php echo $data['memName']; ?>
	<a href="logout.php">Logout</a>
</body>
</html>