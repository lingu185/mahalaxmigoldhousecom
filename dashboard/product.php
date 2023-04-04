
<?php
include'headeradmin.php';
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
  $name = $_POST["name"] ?? null;
  $catagory = $_POST["catagory"] ?? null;
  $label = $_POST["label"] ?? null;
  $offer = $_POST["offer"] ?? null;
  $target_dir = "../img/product/";

  $target_file = $target_dir . basename($_FILES["image"]["name"]);

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      try {
          $insert_imges = insert_product($name, $catagory, $label, $offer, str_replace("../", "", $target_file));
          if ($insert_imges === true) print_r(get_product_details());
          else echo "Failed to insert images";
      } catch (\Throwable $th) {
          print_r($th->getMessage());
      }
  } else echo "Not uploaded!!!";
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="catagory">Product Category</label>
                    <select class="form-control"  name="catagory">
                      <option value="bangles">Bangles</option>
                      <option  value="chains">Chains</option>
                      <option value="earrings">Earrings</option>
                      <option value="harram">Haaram</option>
                      <option value="necklaces">Necklaces</option>
                      <option value="gold-bars">Gold Bars</option>
                      <option value="rings">Rings</option>
                      <option value="gold-plating">Gold Plating</option>
                      <option value="mens-handchains">Handchains Mens</option>
                      <option value="mens-rings">Rings Mens</option>
                      <option value="mens-chains">Chains Mens</option>
                      <option value="child-handchains">Handchains Childrens</option>
                      <option value="child-rings">Rings Childrens</option>
                      <option value="child-chains">Chains Childrens</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product label </label>
                    <input type="text" class="form-control" name="label" id="exampleInputEmail1" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Offer </label>
                    <input type="text" class="form-control" name="offer" id="exampleInputEmail1" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input"  name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                       
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <input name="submit" type="submit" />
              </form>
            </div>
            <!-- /.card -->

 <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php
                     $conn = connect_to_db();
                    $query = "SELECT * FROM productupload";
                    $mysqli_result = mysqli_query($conn, $query);
                   
                   while($row = $mysqli_result->fetch_assoc()){
                    echo" <td>". $row["id"]."</td>
                    <td>". $row["name"]."</td>
                    <td><img src='../". $row["image"]."' width='200'/></td>
                    <td><span class='badge bg-danger'>Edit</span> | <span class='badge bg-danger'>Delete</span></td>
                  </tr>";
                   }
                     
                    ?>
                  </tbody>
                </table>
              </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
