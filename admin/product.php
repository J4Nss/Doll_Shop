<html>
  <header>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!-- for icon -->
  </header>
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
    <div class="row col-12">
      <h2 class="title">Doll Stock</h2>
      <div class="row col-12">
        <div class="col-lg-1 col-md-1 col-sm-1 add_block">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Add</button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Add Product</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="add_product.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="row col-12">
                    <label class="col-lg-3 col-md-3 col-sm-1">Name: </label>
                    <input class="form-control col-lg-8 col-md-8 col-sm-1" type="text" name="name_product">
                  </div>
                  <br>
                  <div class="row col-12">
                    <label class="col-lg-3 col-md-3 col-sm-1">Price: </label>
                    <input class="form-control col-lg-8 col-md-8 col-sm-1" type="number" name="price">
                  </div>
                  <br>
                  <div class="row col-12">
                    <label class="col-lg-3 col-md-3 col-sm-1">Stock: </label>
                    <input class="form-control col-lg-8 col-md-8 col-sm-1" type="number" name="stock">
                  </div>
                  <br>
                  <div class="row col-12">
                    <label class="col-lg-3 col-md-3 col-sm-1">Picture: </label>
                    <div class="custom-file col-lg-8 col-md-8 col-sm-1">
                      <!-- <input type="file" class="custom-file-input" id="customFile" name="fileToUpload" accept="image/*"> -->
                      <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
                      <!-- <label class="custom-file-label" for="customFile">Choose file..</label> -->
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button class="btn btn-primary" type="submit">Add</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row col-11 table_block">
        <table class="table table-striped">
          <thead class="head_row">
            <tr>
              <th scope="col">ID product</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Stock</th>
              <th scope="col">Manage</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require "../connection.php";
              $sql = "SELECT * FROM doll;";
              $query = mysqli_query($conn, $sql);
              $dolls = mysqli_fetch_all($query, MYSQLI_ASSOC);
              for($i=0; $i<sizeof($dolls); $i++) {
                echo "<tr>
                  <td>".$dolls[$i]["Id_doll"]."</td>
                  <td>".$dolls[$i]["name"]."</td>
                  <td>".$dolls[$i]["price"]."</td>
                  <td>".$dolls[$i]["in_stock"]."</td>
                  <td>
                    <a  href='edit_product.php?id_doll=".$dolls[$i]["Id_doll"]."'><i class='material-icons'>create</i></a>
                    <a  href='delete_product_by_id.php?id_doll=".$dolls[$i]["Id_doll"]."' onclick=\"return confirm('Are you sure to delete this product?')\"><i class='material-icons'>delete</i></a>
                  </td>
                </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
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
  .title {
    margin-left: 5%;
    margin-top: 2%;
    color: #407373;
  }
  .add_block {
    margin-left: 90%;
  }
  .table_block {
    margin-left: 5%;
    margin-top: 2%;
  }
  .head_row {
    background-color: #7de3e3;
    color: #407373;
  }
</style>