<?php include('conn.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab 3</title>
</head>
<body>
	<?php 
		$id		   = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname  = $_POST['lastname'];
		$username  = $_POST['username'];
		$password  = $_POST['password'];
		$repass    = $_POST['repass'];
		$gender    = $_POST['gender'];
		$addr      = $_POST['addr'];
		$gender_s = '';

		if($gender == 'm' ) $gender_s = 'ชาย';
		else $gender_s = 'หญิง';
	?>
	
	<?php  
		if (!$firstname || !$lastname || !$username || !$password || !$repass ) {
			// ตรวจสอบ input form
			echo "กรุณาป้อนข้อมูลให้ครบถ้วน";
		} elseif ($password != $repass) {
			// ตรวจสอบรหัสผ่าน
			echo "รหัสผ่านไม่ตรงกัน กรุณากรอกใหม่";
		} else {
			// นำขอมูลเข้า Database
			$sql = "INSERT INTO member VALUES ('$id', '$firstname', '$lastname', '$username', '$password', '$gender', '$addr', '1');";
			$query = mysqli_query($conn, $sql);

			if($query) {
				echo "
				<table>
					<tr>
						<td>รหัสสมาชิค</td>
						<td>$id</td>
					</tr>
					<tr>
						<td>ชื่อ</td>
						<td>$firstname</td>
					</tr>
					<tr>
						<td>สกุล</td>
						<td>$lastname</td>    
					</tr>
					<tr>
						<td>ชื่อผู้ใช้งาน</td>
						<td>$username</td>
					</tr>
					<tr>
						<td>รหัสผ่าน</td>
						<td>$password</td>   
					</tr>
					<tr>
						<td>เพศ</td>
						<td>$gender_s</td>   
					</tr>
					<tr>
						<td>ที่อยู่</td>
						<td>$addr</td>   
					</tr>
				</table>
				";
			} else {
				echo "Error. ไม่สามารถเพิ่มข้อมูลได้";

			}
		
		}
	?>
</body>
</html>
