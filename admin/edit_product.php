<?php
  include "get_product_by_id.php";
  // print_r($doll);
?>
<html>
  <header>

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
      <div class="card card_block">
        <div class="card-body">
          <h2>Edit Product</h2>
          <br>
          <form action="edit_product_function.php" method="post" enctype="multipart/form-data">
            <div class="row col-12">
              <input hidden class="form-control col-lg-8 col-md-8 col-sm-1" type="text" name="id_product" value="<?php echo $doll['Id_doll'];?>">
              <input hidden class="form-control col-lg-8 col-md-8 col-sm-1" type="text" name="old_image" value="<?php echo $doll['image'];?>">
              <label class="col-lg-3 col-md-3 col-sm-1">Name: </label>
              <input class="form-control col-lg-8 col-md-8 col-sm-1" type="text" name="name_product" value="<?php echo $doll['name'];?>">
            </div>
            <br>
            <div class="row col-12">
              <label class="col-lg-3 col-md-3 col-sm-1">Price: </label>
              <input class="form-control col-lg-8 col-md-8 col-sm-1" type="number" name="price" value="<?php echo $doll['price'];?>">
            </div>
            <br>
            <div class="row col-12">
              <label class="col-lg-3 col-md-3 col-sm-1">Stock: </label>
              <input class="form-control col-lg-8 col-md-8 col-sm-1" type="number" name="stock" value="<?php echo $doll['in_stock'];?>">
            </div>
            <br>
            <div class="row col-12">
              <label class="col-lg-3 col-md-3 col-sm-1">Picture: </label>
              <div class="custom-file col-lg-8 col-md-8 col-sm-1">
                <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*"><?php echo $doll['image'];?>
              </div>
            </div>
            <br>
            <div class="row col-12">
              <div class="col-lg-1 col-md-1 col-sm-1 botton_block">
                <button class="btn btn-primary" type="submit">Edit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<style>
  .card_block {
    margin-top: 10%;
    margin-left: 30%;
  }
  .botton_block {
    margin-left: 90%;
  }
</style>