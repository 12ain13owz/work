<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab 2</title>
</head>
<body>
	<form action="lab3.php" method="post">
		<table>
			<tr>
				<td>รหัสสมาชิค</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>ชื่อ</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr>
				<td>สกุล</td>
				<td><input type="text" name="lastname"></td>    
			</tr>
			<tr>
				<td>ชื่อผู้ใช้งาน</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>รหัสผ่าน</td>
				<td><input type="password" name="password">		</td>   
			</tr>
			<tr>
				<td>ยืนยันรหัสผ่าน</td>
				<td><input type="password" name="repass"></td>   
			</tr>
			<tr>
				<td>เพศ</td>
				<td><input type="radio" name="gender" value="m">ชาย
					<input type="radio" name="gender" value="f">หญืง
				</td>   
			</tr>
			<tr>
				<td>ที่อยู่</td>
				<td><input type="text" name="addr"></td>   
			</tr>
			<tr>
				<td><button type="submit" name="regis">ลงทะเบียน</button></td>
				<td></td>   
			</tr>
		</table>
	</form>
</body>
</html>