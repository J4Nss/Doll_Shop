<html>
  <header>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </header>
  <body>
  <?php session_start(); ?>
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
              <?php echo $_SESSION["user"]; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="logout.php">logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <h2 class="title">Doll Stock</h2>
    <div class="row col-12">
      <div class="col-lg-3 col-md-3 col-sm-1 add_block">
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
              <div class="modal-body">
                <div class="row col-12">
                  <label class="col-lg-3 col-md-3 col-sm-1">Name: </label>
                  <input class="form-control col-lg-8 col-md-8 col-sm-1" type="text" name="name_product">
                </div>
                <br>
                <div class="row col-12">
                  <label class="col-lg-3 col-md-3 col-sm-1">Price: </label>
                  <input class="form-control col-lg-8 col-md-8 col-sm-1" type="number">
                </div>
                <br>
                <div class="row col-12">
                  <label class="col-lg-3 col-md-3 col-sm-1">Stock: </label>
                  <input class="form-control col-lg-8 col-md-8 col-sm-1" type="number">
                </div>
                <br>
                <div class="row col-12">
                  <label class="col-lg-3 col-md-3 col-sm-1">Picture: </label>
                  <div class="custom-file col-lg-8 col-md-8 col-sm-1">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file..</label>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
              </div>
            </div>
          </div>
        </div>
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
  }
  .add_block {
    margin-left: 90%;
  }
</style>