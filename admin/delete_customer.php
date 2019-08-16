<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
require("../connection.php"); //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$Id_customer = $_REQUEST["Id_customer"];
 
//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา
 
$sql = "DELETE FROM customer WHERE Id_customer='$Id_customer' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql ");
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'customer.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>