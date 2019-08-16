<html>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <body>
   

    <?php session_start();
  if(empty($_SESSION["user"])){
    header( "location:login.html" );
    exit(0);
  }else {
  require("../connection.php");
  require("nav.php");
  } 
  ?>


<br>
<div id="c">
 <b>Customer Management</b>
</div>

<?php
require("../connection.php");
$query = "SELECT * FROM customer ORDER BY Id_customer asc" or die("Error:"); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($conn, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<div class='row col-11'>";

echo "<table class='table table-striped tab'>";
//หัวข้อตาราง
echo"<thead>
    <tr>
      <th scope='col'>firstname</th>
      <th scope='col'>lastname</th>
      <th scope='col'>edit</th>
      <th scope='col'>delete</th>
    </tr>
  </thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tbody><tr>";
  echo "<td>" .$row["firstname"] .  "</td> ";  
  echo "<td>" .$row["lastname"] .  "</td> ";
  //แก้ไขข้อมูล
  // echo "<td><a href='customer.php?Id_customer=$row[0]'>
 echo "<td><a href='edit_customer.php?Id_customer=$row[0]'><i class='material-icons'>border_color</i></a></td> ";

  //ลบข้อมูล
  echo "<td><a href='delete_customer.php?Id_customer=$row[0]' onclick=\"return confirm('Are you sure to delete')\">
  <i class='material-icons'>delete</i>
</a></td> ";
  echo "</tr></tbody> </div>";
}
echo "</table>";

?>
    </body>
</html>






            <style>
            .cus{
            background-color: #E0FFFF !important;
            }
            .taxt{
              margin-left: 75%;
            }
            .dropdown-menu{
              background-color: #E0FFFF !important;
            }
            #c{
              margin-left: 5%;
              font-size: 30px;
            }
            .tab{
              margin-left: 5%;
              background-color: #DCDCDC !important;
            }
            </style>
