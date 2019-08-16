<html>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <body>

<?php
// require("../connection.php");
?>
           

<nav class="navbar navbar-expand-lg navbar-light bg-light cus">
<a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse taxt" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="./product.php">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./customer.php">Customer</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          username
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


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
 echo "<td><a href='edit_customer.php?Id_customer=$row[0]'><span class='glyphicon glyphicon-pencil'></span></a></td> ";

  //ลบข้อมูล
  echo "<td><a href='delete_customer.php?Id_customer=$row[0]' onclick=\"return confirm('Are you sure to delete')\">
 <span class='glyphicon glyphicon-trash'></span>
</a></td> ";
  echo "</tr></tbody>";
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
              background-color: #DCDCDC !important;
            }
            </style>
