<?php
	session_start();
	include('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Login"></td>				
			</tr>
		</table>
	</form>

	<?php
		if($_POST['login']) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM member WHERE member.username = '$username' AND member.password = '$password'";
			$qry = mysqli_query($conn, $sql);
			$data = mysqli_fetch_array($qry);
			$rows = mysqli_num_rows($qry);

			/*
			if($rows == 1) {
				echo "ยินดีต้อนรับคุณ " .$data['memName'] ." " .$data['memLast'] ." เข้าสู่ระบบค่ะ";				
			} else {
				echo "<font color='red'>โปรดตรวจสอบชื่อผู้ใช้งานและรหัสผ่านค่ะ</font>";
			}
			*/
			if ($rows == 1) {
				$_SESSION['memId'] = $data['memId'];

				//กำหนดไปหน้า user ตามประเภท
				if ($data['type'] == '1') {
					// customer
					$_SESSION['type'] = '1';
					echo "<meta http-equiv='refresh' content='0; url=customer.php'>";
				} else {
					// admin
					$_SESSION['type'] = '0';
					echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
				}
				// echo "<meta http-equiv='refresh' content='0; url=showdata.php'";
			} else {
				echo "<font color='red'>โปรดตรวจสอบชื่อผู้ใช้งานและรหัสผ่านค่ะ</font>";
			}
		}
	?>
</body>
</html>