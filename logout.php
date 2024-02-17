<?php
session_start();
session_destroy();

$floor = $_GET['floor'];
header("refresh: 2; url=/Other_system/classroom_system/Classroom$floor.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
		<h2 align="center">ระบบจองใช้ห้องเรียนนอกตารางอาคารศรีวิศววิทยา (คณะวิศวกรรมศาสตร์)</h2>
	
<style>
	body {
		cursor: wait;
		text-align: center;
	}
	h3.orange {
		color: #ff6600;
	}

	
</style>
	
<title>Logout</title>
</head>

<body>
	<h3 class="orange">ท่านได้ออกจากระบบแล้ว จะกลับสู่หน้าหลักใน 2 วินาที</h3>
</body>
</html>