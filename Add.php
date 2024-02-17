<?php 
session_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add</title>
<style>

	body {
		text-align: center;
		min-width: 500px;
		font: 18px tahoma;
	}
	fieldset {
		width: 500px;
		margin: auto;
		background: #def;
		border-radius: 4px
	}
	legend {
		text-align: left;
		font-size: 18px;
		color: navy;
		font: 18px tahoma;
	}
	form {
		text-align: left;
	}	
	label {
		display: inline-block;
		width: 100px;
		text-align: right;
		font: 18px tahoma;
	}
	label.float {
		float: left;
		margin-right: 4px !important;
		font: 18px tahoma;
	}
	textarea {
		float: left;
		width: 100px;
		height: 40px;
		resize: none;
		overflow: auto;
		font: 18px tahoma;
	}
	input, textarea, select {
		background: #ffc;
		border: solid 1px gray;
		margin: 3px;
		padding: 3px;
		border-radius: 2px;	
		font: 18px tahoma;
	}
	button {
		background: steelblue;
		color: #f0f0f5;
		border:solid 1px orange;
		border-radius: 3px;
		padding: 3px 20px;
		margin-left: 10px;
		font: 18px tahoma;
	}
	br.clear {
		clear: left;
	}
	h3, p {
		text-align: center;
	}
	
</style>
</head>

<body>
	
	
<?php
include "config.php";

if(isset($_POST['input_room'])) {
	
		$ROOM='room'.$_POST['input_room'];
				$NAME=$_POST['input_name'];
				$PURPOSE=$_POST['input_purpose'];
				$DATE=$_POST['input_date'];
				$TIMESET=$_POST['input_timeset'];
				$TIMEDUE=$_POST['input_timedue'];
				$USER=$_SESSION['user'];

$sql = "SELECT *
FROM $ROOM 
WHERE date = '$DATE' 
AND ((timeset <= '$TIMESET' AND '$TIMESET' <= timedue)
	OR (timeset <= '$TIMEDUE' AND '$TIMEDUE' <= timedue)
	OR ('$TIMESET' <= timeset AND timedue <= '$TIMEDUE'))";
$result = mysqli_query($link, $sql);
if(!$result) {
	echo mysqli_error($link);
}
	
	
else if(mysqli_num_rows($result) == 0) 
	{
	$sql = "INSERT
	INTO $ROOM (booker, purpose, date, timeset, timedue, user)
	VALUES('$NAME', '$PURPOSE', '$DATE', '$TIMESET' , '$TIMEDUE' , '$USER')";
	
	$insert = mysqli_query($link, $sql);
	
	if(!$insert) 
	{
				echo "<h3><font color='red'>การเพิ่มข้อมูล เกิดข้อผิดพลาด</font></h3>";
				echo mysqli_error($link);
				Close();
	}
	else 
	{
				echo "<h3><font color='green'>ข้อมูลถูกบันทึกแล้ว</font></h3>";
				echo "<p>กรุณา Refresh หน้าหลักอีกครั้งเพื่ออัพเดทการเปลี่ยนแปลง</p>";
				Close();
	}
	}

	
else 
	{
	echo "<h3><font color='red'>เกิดข้อผิดพลาด</font></h3>";
	echo "<h3><font color='red'>เนื่องจากมีผู้จองใช้ห้องเรียนในเวลาดังกล่าวแล้ว</font></h3>";
	Close();
	}
}

// ------------------------------------------------------------------

if(!isset($_SESSION['user'])) {
	echo "<h3>ท่านยังไม่ได้ทำการล็อคอิน</h3>";
	Close();
	}

if(!isset($_GET['Room'])) {
	echo "<h3>กระบวนการไม่ถูกต้อง</h3>";
	Close();
	}

if(isset($_GET['Room'])) {
	$Room_number = $_GET['Room'];
	}

function Close() {
	global $link;
 	mysqli_close($link);
	exit('<h3><a href="javascript:window.close();">ปิด</a><h3></body></html>');
}
mysqli_close($link);	
?>


<fieldset><legend>จองใช้ห้องเรียน</legend>

<form method="post">
		
		<label>ห้อง:</label>
		<input size="5" style="background:#cccccc" type="text" name="input_room" value="<?php echo $Room_number; ?>" readonly><br>
        
		<label>ชื่อผู้จอง:</label>
       <input size="35" type="text" name="input_name" value="" placeholder="ชื่อ-นามสกุล" required><br>
	
    	<label>จุดประสงค์:</label>
       <input size="35" type="text" name="input_purpose" value="" required><br>
	
		<label>วันที่:</label>
       	<input style="width:350px" type="date" name="input_date" value="" min="<?= date('Y-m-d'); ?>" max="2050-01-01" required> <br>
	
		<label>จากเวลา:</label>
      	<input type="time" name="input_timeset" value="" required>
	
		<label>ถึงเวลา:</label>
   		<input type="time" name="input_timedue" value="" required> <br><br>
        
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	<label>&nbsp;</label>
	<button>ส่งข้อมูล</button>
	&nbsp;
	<a href="javascript:window.close();">ปิด</a>
	
	
</fieldset>
</body>
</html>
