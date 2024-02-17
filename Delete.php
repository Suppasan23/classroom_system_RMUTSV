<?php 
session_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete</title>
<style>

	body {
		text-align: center;
		min-width: 500px;
		font: 20px tahoma;
	}
	fieldset {
		width: 500px;
		margin: auto;
		background: #def;
		border-radius: 4px
	}
	legend {
		text-align: left;
		color: navy;
		font: 22px tahoma;
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
	button {
		background: steelblue;
		color: #f0f0f5;
		border:solid 1px orange;
		border-radius: 3px;
		padding: 6px 24px;
		margin-left: 10px;
		font: 22px tahoma;
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
	$ID=$_POST['input_id'];
	
	$sql="DELETE FROM $ROOM WHERE id = $ID";
	$delete = mysqli_query($link,$sql);

	
	if(!$delete) 
	{
				echo "<h3><font color='red'>การลบข้อมูล เกิดข้อผิดพลาด</font></h3>";
				echo mysqli_error($link);
				Close();
	}
	else 
	{
				echo "<h3><font color='green'>ข้อมูลถูกลบแล้ว</font></h3>";
				echo "<p>กรุณา Refresh หน้าหลักอีกครั้งเพื่ออัพเดทการเปลี่ยนแปลง</p>";
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

if(!isset($_GET['id'])) {
	echo "<h3>กระบวนการไม่ถูกต้อง</h3>";
	Close();
	}

if(isset($_GET['Room'])) {
	$Room_number = $_GET['Room'];
	}
	
if(isset($_GET['id'])) {
	$id_number = $_GET['id'];
	}

function Close() {
	global $link;
 	mysqli_close($link);
	exit('<h3><a href="javascript:window.close();">ปิด</a><h3></body></html>');
}

mysqli_close($link);	
?>

<fieldset><legend>ยกเลิกการจองใช้ห้องเรียน</legend>

<form method="post">
	<div align="right">

		<p>ท่านต้องการลบรายการจองนี้ออกจากห้อง "<?php echo $Room_number; ?>" ใช่หรือไม่</p>

		<input type="hidden" name="input_room" value="<?php echo $Room_number; ?>">
		<input type="hidden" name="input_id" value="<?php echo $id_number; ?>">

		<button>ใช่</button>
		&nbsp;
		<a href="javascript:window.close();">ปิด</a>
		&nbsp;&nbsp;
	</div>


</fieldset>
</body>
</html>
