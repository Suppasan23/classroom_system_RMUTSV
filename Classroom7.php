<?php 
session_start(); 
?>

<!doctype html>
<html lang="en">
<head>


 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex,nofollow" /> <!-- Hide clawing from search engine  -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">


<title>ClassRoom7</title>
</head>



<style>
		div.status
        {
            background-color: #800000;
            width:1400px;
            margin: auto;
            text-align: right;
            color: white;
            border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
         /*   border-top-left-radius: 3px;*/
         /*   border-top-right-radius: 3px;*/

        }


        div.first
        {
            background-color: #800000;
            width:1400px;
            margin: auto;
            text-align: center;
            color: white;
            padding-top: 1px;
            padding-bottom: 20px;
            border-left: 1px solid black;
            border-right: 1px solid black;
         /*   border-top: 1px solid black;*/
          /*  border-top-left-radius: 3px;*/
          /*  border-top-right-radius: 3px;*/
        }

        div.seccond 
        {
            background-color: #f2f2f2;
            width: 1400px;
            margin: auto;
            border-left: 1px solid black;
            border-right: 1px solid black;
            border: 1px solid black;
          /*  padding-bottom: 12%; */
          /*  padding-top: 1%; */
        }


		div.sub-seccond 
        {
            background-color: #f2f2f2;
            width: 1350px;
            margin: auto;
          /*  border-left: 1px solid black;*/
          /*  border-right: 1px solid black;*/
          /*  border: 1px solid black;*/
		  	border: none;
            padding-bottom: 1%; 
          /*  padding-top: 1%; */
        }



        div.third 
        {
            background-color: #e0e0e0;
            width: 1400px;
            margin: auto;
            text-align: left;
            color: black;
            padding-top: 1px;
           	border-left: 1px solid black;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
           /* border-bottom-left-radius: 3px;*/
          /*  border-bottom-right-radius: 3px;*/
        }

		green
        {
	        color:#00802b;
	    }

        black
        {
	        color:#000000;
	    }

        white
        {
            color:#f2f2f2;
        }

        bold
        {
            font-weight: bold;
        }

		a.blue
	{
		color:#f2f2f2;
	}

        a.yellow
	{
		color:#ffff99;
	}

        a.orange
	{
		color:#ff3300;
	}

		a.lightgreen
	{
		color:#00ff00;
	}

	img.img-room{
		width: 500px;
		margin: 0 auto;
		border: 1px solid black;
	}

</style>

<!----------------------------------------------------------- Style เลือกชั้น -------------------------------------------------------------------------->
<style>

</style>
<!----------------------------------------------------------- Style เลือกห้อง ------------------------------------------------------------------------->
<style type="text/css">body {font-family: Arial;}

/* Style Classroom plan */
div.room {
	border: 1px solid black;
}


/* Style Hallway Space */
.Hallway {
  vertical-align: baseline;
  text-align: center;
  padding: 30px;
  background-color: #f5f5f5;
}
	
/* Style the tab */
.tab {
  overflow: hidden;
  border: none;
  background-color: #f5f5f5;
}
	

/* Style the buttons inside the tab */
.tab button {
  background-color: lightyellow;
  border: none;
  outline: 1px solid #000000;
  cursor: pointer;
 /* padding: 44px 46px;*/
  transition: 0.1s;
 font-size:18px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #FFFFC8;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: khaki;
}

/* Style the tab content */
.tabcontent {
  display: none;
  background-color: #f2f2f2;
	text-align: center;
}
</style>

<!----------------------------------------------------------- ตารางจองห้อง -------------------------------------------------------------------------->
<style>
	table {
		border-collapse: collapse;
		border: 1px solid black;
		width: 80%;
		margin: auto;
		font-size: 18px;
		text-align: center;
	}
	th{
		border: 1px solid black;
		text-align: center;
		background-color: #e0e0e0;
	}
	td{
		border: 1px solid black;
		text-align: center;
		background-color: #ffffff;
	}
	td.delete {
		border-left: none;
		border-top: groove;
		border-bottom: groove;
		border-right: groove;
		text-align: center;
	}

	caption{
		text-align: center;
		padding: 0px;
	}


	div.right{
		text-align: right;
	}
	.acLikeLink {
     	cursor:pointer;
    	color:blue;
     	text-decoration:underline;	
	}
	.acLikeLink:active{
		color: red;
	}
	.acDelete {
     	cursor:pointer;
    	color:red;
     	text-decoration:underline;	
	}
	.acDelete:active{
		color:firebrick;
	}
	
	.acNomal{
		color:black;
		cursor:default;
		text-decoration:none;
	}

	div.ex1 {
			padding: 0px;
			text-align:center
		}

		.btn-link-Add { /* Add แก้สไตน์ Button ของ Bootstrap */
		border-radius: 5px;
		padding: 0px;
		padding-bottom: 2px;
		color: blue;
    	text-decoration: underline;	
	}

	.btn-link-Add:active{ /* Add แก้สไตน์ Button ของ Bootstrap */
		border-radius: 5px;
		padding: 0px;
		padding-bottom: 2px;
		color: red;
	}


	.btn-link-Delete { /* Delete แก้สไตน์ Button ของ Bootstrap */
		border-radius: 5px;
		padding: 0px;
		padding-bottom: 2px;
		color:red;
    	text-decoration: underline;	
	}

	.btn-link-Delete:active{ /* Delete แก้สไตน์ Button ของ Bootstrap */
		border-radius: 5px;
		padding: 0px;
		padding-bottom: 2px;
		color:firebrick;
	}
	
	
	fontcolor1{
		color: #662200;
		font-size:18px;
	}
	fontcolor2{
		color: darkgreen;
		font-size:18px;
	}
	
	monday{
	color:gold;
	}
	tuesday{
	color: deeppink;
	}
	wednesday{
	color: green;
	}
	thursday{
	color: orangered;
	}
	friday{
	color: deepskyblue;
	}
	saturday{
	color: darkviolet;
	}
	sunday{
	color: red;
	}
</style>	
	

<p></p>
	
<div class="status" >
<?php 
if(!isset($_SESSION['user'])) 
{
     echo "<a class='blue' href='/Other_system/classroom_system/Classroom7.php'><u>Home</u></a> | 
     <a class='blue' href='/Other_system/classroom_system/login.php?floor=7'><u>เข้าสู่ระบบ</u></a>&nbsp;";
}
else
{
    echo "<a class='blue' href='/Other_system/classroom_system/Classroom7.php'><u>Home</u></a> | 
    <a class='lightgreen' >".$_SESSION['user']."</a>&nbsp<a class='blue'  href='/Other_system/classroom_system/logout.php?floor=7'><u>Logout</u></a>&nbsp;";
}
?>
</div>



<div class="first">
 
    <h2><white> ระบบจองใช้ห้องเรียนนอกตารางอาคารศรีวิศววิทยา (คณะวิศวกรรมศาสตร์) </white></h2>

</div>
		
	
	
<div class="seccond">
<br>



<div class="sub-seccond">
		<div class="dropdown">
		<h5>เลือกชั้น:
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		ชั้น 7
		</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item"  href="/Other_system/classroom_system/Classroom8.php">ชั้น 8</a> 
						<a class="dropdown-item"  href="/Other_system/classroom_system/Classroom7.php">ชั้น 7</a> 
						<a class="dropdown-item"  href="/Other_system/classroom_system/Classroom6.php">ชั้น 6</a>
				</div>
		และห้องเรียน:</h5>
		</div>


<div class="room">
		<div class="tab">
			<button class="tablinks" onclick="openCity(event, '701')" style="height:110px;width:34%;border-bottom:1px solid #000000;float:Left;">66701<br />
		<font size="2">(ห้องเรียน 40 ที่นั่ง)</font></font></button>
			<button class="tablinks" onclick="openCity(event, '702')" style="height:110px;width:34%;border-bottom:1px solid #000000;float:Left;">66702<br />
		<font size="2">(ห้องเรียน 70 ที่นั่ง)</font></font></button>
			<button class="tablinks" onclick="openCity(event, '703')" style="height:110px;width:16%;border-bottom:1px solid #000000;float:Left;">66703<br />
		<font size="2">(ห้องเรียน 40 ที่นั่ง)</font></button>
			<button class="tablinks" onclick="openCity(event, '704')" style="height:110px;width:16%;border-bottom:1px solid #000000;float:Left;">66704<br />
		<font size="2">(ห้องเรียน 40 ที่นั่ง)</font></button>
		</div>

		<div class="Hallway">
		<a ><font style="font-size: 30px" color="#808080">ทางเดิน</font></a>
		</div>

		<div class="tab">
			<button class="tablinks" onclick="openCity(event, '708')" style="height:110px;width:16%;border-top:1px solid #000000;float:Left;">66708<br />
		<font size="2">(ห้องเรียน 40 ที่นั่ง)</font></button>
			<button class="tablinks" onclick="openCity(event, '707')" style="height:110px;width:16%;border-top:1px solid #000000;float:Left;">66707<br />
		<font size="2">(ห้องเรียน 40 ที่นั่ง)</font></button>
			<button class="tablinks" onclick="openCity(event, '706')" style="height:110px;width:16%;border-top:1px solid #000000;float:Left;">66706<br />
		<font size="2">(ห้องเรียน 40 ที่นั่ง)</font></button>
			<button class="tablinks" onclick="openCity(event, '705')" style="height:110px;width:22%;border-top:1px solid #000000;float:Left;">66705<br />
		<font size="2">(ห้องเรียน 50 ที่นั่ง)</font></button>
		</div>
</div>
	
	
	
<!----------------------------------------------------------- 701 -------------------------------------------------------------------------->
<div class="tabcontent" id="701">
<p></p>
<h4 style=margin:1 align="center">66701(ห้องเรียน 40 ที่นั่ง)</h4>
<img class="img-room" src="img\701.jpg" alt="701">
<?php 
	ShowBooking(701);
?>
<br>	
</div>

	
<!----------------------------------------------------------- 702 -------------------------------------------------------------------------->
<div class="tabcontent" id="702">
<p></p>
<h4 style=margin:1 align="center">66702(ห้องเรียน 70 ที่นั่ง)</h4>
<img class="img-room" src="img\702.jpg" alt="702">
<?php
	ShowBooking(702);
?>
<br>	
</div>

	
<!----------------------------------------------------------- 703 -------------------------------------------------------------------------->
<div class="tabcontent" id="703">
<p></p>
<h4 style=margin:1 align="center">66703(ห้องเรียน 40 ที่นั่ง)</h4>
<img class="img-room" src="img\703.jpg" alt="703">
<?php
	ShowBooking(703);
?>	
<br>	
</div>

	
<!----------------------------------------------------------- 704 -------------------------------------------------------------------------->
<div class="tabcontent" id="704">
<p></p>
<h4 style=margin:1 align="center">66704(ห้องเรียน 40 ที่นั่ง)</h4>
<img class="img-room" src="img\704.jpg" alt="704">
<?php
	ShowBooking(704);
?>	
<br>	
</div>

	
<!----------------------------------------------------------- 705 -------------------------------------------------------------------------->
<div class="tabcontent" id="705">
<p></p>
<h4 style=margin:1 align="center">66705(ห้องเรียน 50 ที่นั่ง)</h4>
<img class="img-room" src="img\705.jpg" alt="705">
<?php
	ShowBooking(705);
?>	
<br>
</div>

	
<!----------------------------------------------------------- 706 -------------------------------------------------------------------------->
<div class="tabcontent" id="706">
<p></p>
<h4 style=margin:1 align="center">66706(ห้องเรียน 40 ที่นั่ง)</h4>
<img class="img-room" src="img\706.jpg" alt="706">
<?php
	ShowBooking(706);
?>
<br>
</div>
	
<!----------------------------------------------------------- 707 -------------------------------------------------------------------------->
<div class="tabcontent" id="707">
<p></p>
<h4 style=margin:1 align="center">66707(ห้องเรียน 40 ที่นั่ง)</h4>
<img class="img-room" src="img\707.jpg" alt="707">
<?php
	ShowBooking(707);
?>
<br>
</div>	
	
<!----------------------------------------------------------- 708 -------------------------------------------------------------------------->
<div class="tabcontent" id="708">
<p></p>
<h4 style=margin:1 align="center">66708(ห้องเรียน 40 ที่นั่ง)</h4>
<img class="img-room" src="img\708.jpg" alt="708">
<?php
	ShowBooking(708);
?>
<br>

</div>
</div>
</div>
	


<div class="third">
<p><font color="#cc0000"  size="3"><b>&nbsp;*คำอธิบายการใช้งาน</b></font><br>
		<font size="3">
&nbsp;&nbsp;1.ให้ยึดการใช้งานห้องเรียนตาม <b>"ระบบตรวจสอบ ตารางเรียน – ตารางสอบ"</b> ของสำนักส่งเสริมวิชาการและงานทะเบียน (สวท.) <b>เป็นหลัก</b> "<a href='https://reg.rmutsv.ac.th/timetable/timetable.php' class='acLikeLink' target="_blank">ตรวจสอบที่นี้</a>" (รหัสผ่าน User : <font color="#006622">rmutsv</font> , Password : <font color="#006622">1234</font>)
<br>
&nbsp;&nbsp;2.หากต้องการ <b>ปรับเปลี่ยน</b>, <b>แก้ไข</b>, <b>แอดเพิ่ม</b> <b>"ตารางเรียน" หรือ "ตารางสอบ"</b> <b>หลัก</b> กรุณาติดต่อสำนักส่งเสริมวิชาการและงานทะเบียน (สวท.) ให้ดำเนินการให้เท่านั้น
<br>
&nbsp;&nbsp;3.ระบบนี้ใช้สำหรับจองใช้ห้องเรียนชั่วคราว เพื่อวัตถุประสงค์ต่างๆ เช่น <b>นัดสอนชดเชย</b>, <b>จัดกิจกรรม</b>, <b>จัดอบรม</b>, <b>นัดประชุม</b>, <b>นัดพรีเซนต์งาน</b> ฯลฯ <b>เท่านั้น</b>
<br>
&nbsp;&nbsp;4.การจองใช้ห้องเรียนนอกตาราง<b>จะต้องไม่ชนกับ</b> ตารางเรียน - ตารางสอบ หลัก ของ สวท. 
		</font>
	</p>
</div>






<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
	
		

		
<script>
function ToAdding($room_number) {
	var X = $room_number

  window.open('/Other_system/classroom_system/Add.php?Room='+X, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=600,height=300");
}
</script>
	
	

<script>
function ToDeletting($room_number,$id_number) {
	var Y = $room_number
	var Z = $id_number
	
  window.open('/Other_system/classroom_system/Delete.php?Room='+Y+'&id='+Z, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=600,height=200");
}
</script>	




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


	
	
<?php
function ShowBooking($room_number) {
	
include "config.php";
	
$sql = "SELECT *
FROM room$room_number
WHERE date >= CURDATE()";
$result = mysqli_query($link, $sql);
if(!$result) {
	echo mysqli_error($link);
}
else if(mysqli_num_rows($result) == 0) 
{
	echo "<div class='ex1'>";
	echo "<fontcolor1>ไม่มีรายการจองใช้ห้องเรียนนอกตาราง</fontcolor1>";
	
			if(!isset($_SESSION['user'])) 
			{
				echo "&nbsp;[กรุณา <a href='/Other_system/classroom_system/login.php?floor=7' class='acLikeLink'>ล็อคอิน</a> เพื่อจองใช้ห้องเรียนนอกตาราง]";
			}
			else 
			{
				echo "&nbsp;[<button type='button' class='btn btn-link-Add' onclick=ToAdding($room_number)>คลิกที่นี้</button> เพื่อจองใช้ห้องเรียนนอกตาราง]";	
			}
	echo "</div>";
}
	
else 
{
	echo "<div class='ex1'>";
	echo "<fontcolor2>รายการจองใช้ห้องเรียนนอกตาราง</fontcolor2>";
			if(!isset($_SESSION['user'])) 
			{
				echo "&nbsp;[กรุณา <a href='/Other_system/classroom_system/login.php?floor=7' class='acLikeLink'>ล็อคอิน</a> เพื่อจองใช้ห้องเรียนนอกตาราง]";
			}
			else 
			{
				echo "&nbsp;[<button type='button' class='btn btn-link-Add' onclick=ToAdding($room_number)>คลิกที่นี้</button> เพื่อจองใช้ห้องเรียนนอกตาราง]";	
			}
	echo "</div>";
	

echo "<table>";	
	echo "
	<tr>
		<th>ที่</th>
		<th>ผู้ใช้</th>
		<th>จุดประสงค์</th>
		<th>วัน</th>
		<th>ที่</th>
		<th>เริ่มเวลา</th>
		<th>ถึงเวลา</th>
	</tr>";
	
	//อ่านข้อมูลที่ละแถวจาก result set ในแบบอาร์เรย์
	$i=0;
	while($data = mysqli_fetch_array($result)) {
		$i++;
		echo "<tr>"; 	//เริ่มแถวใหม่
			echo "<td>" . $i . "</td>";
  			echo "<td>" . $data['booker'] . "</td>";
  			echo "<td>" . $data['purpose'] . "</td>";
		
		$day= date("l", strtotime($data['date']));
		switch($day){
			case "Monday":
				echo "<td>" . "<monday>จันทร์</monday>" . "</td>";
				break;
			case "Tuesday":
				echo "<td>" . "<tuesday>อังคาร</tuesday>" . "</td>";
				break;	
			case "Wednesday":
				echo "<td>" . "<wednesday>พุธ</wednesday>" . "</td>";
				break;
			case "Thursday":
				echo "<td>" . "<thursday>พฤหัสบดี</thursday>" . "</td>";
				break;
			case "Friday":
				echo "<td>" . "<friday>ศุกร์</friday>" . "</td>";
				break;	
			case "Saturday":
				echo "<td>" . "<saturday>เสาร์</saturday>" . "</td>";
				break;
			case "Sunday":
				echo "<td>" . "<sunday>อาทิตย์</sunday>" . "</td>";
				break;
			default: 
				echo "<td>" . "-" . "</td>";
		}
  			echo "<td>" . date('d-M-Y', strtotime($data['date'])) . "</td>";
			echo "<td>" . date('H:i', strtotime($data['timeset'])) ."น.". "</td>";
			echo "<td>" . date('H:i', strtotime($data['timedue'])) ."น.". "</td>";
		
		
		if(isset($_SESSION['user'])) 
		{		
			$id_number=$data['id'];
			
				switch($_SESSION['user']){
			case "suppasan.c":/*ระบุ user ที่จะกำหนดให้สามารถลบได้ทุกอย่าง (suppasan.c)*/
				echo "<td class='delete'>" . "<button type='button' class='btn btn-link-Delete'  onclick=ToDeletting($room_number,$id_number)>ยกเลิก</button>" . "</td>";	
				break;
			case $data['user']:
				echo "<td class='delete'>" . "<button type='button' class='btn btn-link-Delete'  onclick=ToDeletting($room_number,$id_number)>ยกเลิก</button>" . "</td>";	
				break;
			default: 
				break;
				}
		}
		
		
		echo "</tr>";
	}
	echo "</table>";

	
}
mysqli_close($link);	
	}
?>
<br>

