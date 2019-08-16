<html>
<?php

session_start();
if(empty($_SESSION["user"])){
  header( "location:login.html" );
  exit(0);
}else {
require("../connection.php");
require("nav.php");
} 


require("../connection.php");

if($_GET["Id_customer"]==''){ 
echo "<script type='text/javascript'>"; 
echo "window.location = 'customer.php'; "; 
echo "</script>"; 
}
 
//รับค่าไอดีที่จะแก้ไข
$Id_customer = mysqli_real_escape_string($conn,$_GET['Id_customer']);
 
//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM customer WHERE Id_customer = '$Id_customer' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql");
$row = mysqli_fetch_array($result);
extract($row);
?>

<form action="update_customer.php" method="post" name="updateuser" id="updateuser">

<div class="card" id="up">
  <div class="card-body"><b>Edit Customer</b></i></legend>

 <table>
 <tr><td colspan="2" ><hr></td></tr>
 <tr>
 <td ><b>Id_customer : </b></td>
 <td><br><input type="text" class="form-control" name="Id_customer" size="10" readonly="readonly" maxlength="10" value="<?php echo $Id_customer; ?>"></td>
 </tr>
 <tr>
 <td ><b>firstname : </b></td>
 <td><br><input type="text" class="form-control" name="firstname" size="40"  maxlength="10" value="<?php echo $firstname; ?>"></td>
 </tr>
 <tr>
 <td ><b>lastname : </b></td>
 <td><br><input type="text" class="form-control" name="lastname" size="40" maxlength="30" value="<?php echo $lastname; ?>"></td>
 <br></tr>
 <tr>
 <td ><b>telephone : </b></td>
 <td><br><input type="text" class="form-control" name="tel" size="40" maxlength="30" value="<?php echo $tel; ?>"></td>
 </tr>
 <tr>
 <td ><b>address : </b></td>
 <td><br><input type="text" class="form-control" name="address" size="40" maxlength="7" value="<?php echo $address; ?>"></td>
 </tr>
 <tr>
 <td colspan="2">
 <hr>
 <button type="submit" class="btn btn-primary" value="Submit" name="Submit">Submit</button>
 </td>
 </tr>
 </table>
 </div>
</div>
	</div>
 </form>
	 </body>
</html>

			<style>
            #up{
				font-size: 30px;
				margin-top: 5%;
				margin-left: 30%;
				margin-right: 30%;
			}
			
            .cus{
            background-color: #E0FFFF !important;
            }
            .taxt{
              margin-left: 75%;
            }
            .dropdown-menu{
              background-color: #E0FFFF !important;
			}
			
            .tab{
              background-color: #DCDCDC !important;
            }
            
			</style>
