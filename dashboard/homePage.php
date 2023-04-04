
<?php
require_once './db.php';
function insert_images1($title, $label, $url)
{
    $conn = connect_to_db();

    $insert_query = "INSERT INTO homeimage(title, label, url) VALUES('$title','$label','$url')";
    $response = mysqli_query($conn, $insert_query);
    if ($response === false) raise_exception("Failed to insert DB record...", 410);

    $conn->close();
    return true;
}

function get_images_details1()
{
    $conn = connect_to_db();

    $query = "SELECT * FROM homeimage";
    $mysqli_result = mysqli_query($conn, $query);
    $result = mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC);

    $conn->close();

    return $result;
}
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
  $title = $_POST["title"] ?? null;
  $label = $_POST["label"] ?? null;
  $target_dir = "../img/homepageImage/";

  $target_file = $target_dir . basename($_FILES["image"]["name"]);

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      try {
          $insert_imges = insert_images1($title, $label, str_replace("../", "", $target_file));
          if ($insert_imges === true) print_r(get_images_details1());
          else echo "Failed to insert images";
      } catch (\Throwable $th) {
          print_r($th->getMessage());
      }
  } else echo "Not uploaded!!!";
}
include'headeradmin.php' ?>
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
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="label" id="exampleInputEmail1" placeholder="Title">
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
                    $query = "SELECT * FROM homeimage";
                    $mysqli_result = mysqli_query($conn, $query);
                   
                   while($row = $mysqli_result->fetch_assoc()){
                    echo" <td>". $row["id"]."</td>
                    <td>". $row["title"]."</td>
                    <td><img src='../". $row["url"]."' width='200'/></td>
                    <td><span class='badge bg-danger'>Edit</span> | <span class='badge bg-danger'>Delete</span></td>
                  </tr>";
                   }?>
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
