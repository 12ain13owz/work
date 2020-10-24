<?php
	session_start();
	include('conn.php');

	$type = $_SESSION['type'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>member data</title>
	<style>
		table {
  			border-collapse: collapse;
  			text-align: center;
  			margin: 0 auto;
  			margin-top: 30px;  			
		}

		table, th, td {
  			border: 1px solid #ccc;
  			padding: 12px
		}		

		th {
			background-color: cornflowerblue ;
  			color: white;
		}

		.search-box {
			position: relative;
		    border: 3px solid cornflowerblue;
		    height: 50px;
		    overflow: hidden;
    		margin: 0 auto;
    		width: 570px;
		}

		.search-text {		    
		    width: 100%;
		    padding: 8px;
		    line-height: 30px;
		    font-size: 20px;
		    border: none;
		}

		.btn {
			cursor: pointer;
			position: absolute;
		    line-height: 45px;
		    padding-bottom: 4px;
		    right: 0;
		    top: 0;
		    background: cornflowerblue;
		    color: white;
		    border: none;
		    font-weight: bold;
		    font-size: 18px;
		    transition: color 0.2s
		}

		.btn:hover {
			color: blue;
		}

		input:focus, textarea:focus, select:focus{
        	outline: none;
    	}


	</style>
</head>


<body>
<?php
if ($type == '0') {

?>
	<div style="width: 100%">

	<form method="post" style="text-align: center; margin-top: 100px;" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="search-box">
			<input type="text" name="keyword" class="search-text">
			<input type="submit" name="search" class="btn" value="ค้นหา">
		</div>
	</form>
	<?php 
	
		$kw = $_POST['keyword'];
		$sql = "SELECT * FROM member WHERE memName like '%$kw%';";
		$qry = mysqli_query($conn, $sql);
		$rows = mysqli_num_rows($qry);

		function consoleLog($value) {
			echo '<script>console.log("' . $value . '")</script>';
		}
	?>
	<table>
		<tr>
			<th>รหัสสมาชิค</th>
			<th>ชื่อ</th>
			<th>สกุล</th>
			<th>ชื่อผู้ใช้งาน</th>
			<th>เพศ</th>
			<th>ที่อยู่</th>
		</tr>
		<?php 
			while ($data = mysqli_fetch_array($qry)) {
				if($data['gender'] == 'm' ) $gender_s = 'ชาย';
				else $gender_s = 'หญิง';

				echo "				
				<tr>
					<td>$data[memId]</td>
					<td>$data[memName]</td>
					<td>$data[memLast]</td>
					<td>$data[username]</td>
					<td>$gender_s</td>
					<td>$data[address]</td>
				</tr>
				";
			}
		?>
	</table>
	</div>

	
	<div id="countdown"></div>
	<button type="button" onclick="countd()">Count Down</button>
<?php 
}
else {
	echo "Please Login";
	echo "<meta http-equiv='refresh' content='3; url=login.php'>";
}
?>
</body>
</html>
<script>
	function countd() {
	var timeleft = 10;
		var downloadTimer = setInterval(function(){
		  if(timeleft <= 0){
		    clearInterval(downloadTimer);
		    document.getElementById("countdown").innerHTML = "Finished";
		  } else {
		    document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
		  }
		  timeleft -= 1;
		}, 1000);
	}	

</script>