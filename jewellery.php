<?php include 'connectdb.php'?>
<!doctype html>
<html class="no-js" lang="">
   <?php include 'header.php'?>
   <body>
      <div class='container'>
         <div class="row">
            <div class="col-md-12">
               <div class="p-details-tab-content section-padding-2">
                  <div class="p-details-tab">
                     <ul class="p-details-nav-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">Bangles</a></li>
                        <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Chains</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Earrings</a></li>
                        <li role="presentation"><a href="#harram" aria-controls="harram" role="tab" data-toggle="tab">Haaram</a></li>
                        <li role="presentation"><a href="#necklaces" aria-controls="necklaces" role="tab" data-toggle="tab">Necklaces</a></li>
                        <li role="presentation"><a href="#goldBars" aria-controls="goldBars" role="tab" data-toggle="tab">Gold Bars</a></li>
                        <li role="presentation"><a href="#rings" aria-controls="rings" role="tab" data-toggle="tab">Rings</a></li>
                        <li role="presentation"><a href="#goldPlating" aria-controls="goldPlating" role="tab" data-toggle="tab">Gold Plating</a></li>
                     </ul>
                  </div>
                  <div class="clearfix"></div>
                  <div class="tab-content review">
                     <div role="tabpanel" class="tab-pane active" id="more-info">
                        <?php
                           $conn = connect_to_db();
                           $query = "SELECT * FROM productupload where catagory='bangles'";
                           $mysqli_result = mysqli_query($conn, $query);
                           while($row = $mysqli_result->fetch_assoc()){
                           ?>
                        <div class="col-md-4 col-sm-6">
                           <div class="single-product">
                              <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                              <img src="<?php echo $row["image"]; ?>" alt="" style="height:338px"></a> <?php if (strlen($row['offer']) > 0) { ?>
                              <div class="single-product-overlay sale">
                                 <h3> <?php echo $row["offer"]; ?></h3>
                              </div>
                              <?php } ?>
                              <div class="single-product-content">
                                 <div class="left-content pull-left">
                                 <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                                       <h2> <?php echo $row["name"]; ?></h2>
                                    </a>
                                 </div>
                                 <div class="right-content pull-right"><a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                           ?>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="data">
                        <?php
                           $conn = connect_to_db();
                           $query = "SELECT * FROM productupload where catagory='chains'";
                           $mysqli_result = mysqli_query($conn, $query);
                           while($row = $mysqli_result->fetch_assoc()){
                           ?>
                        <div class="col-md-4 col-sm-6">
                           <div class="single-product">
                           <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                           <img src="<?php echo $row["image"]; ?>" alt="" style="height:338px"></a> <?php if (strlen($row['offer']) > 0) { ?>
                              <div class="single-product-overlay sale">
                                 <h3> <?php echo $row["offer"]; ?></h3>
                              </div>
                              <?php } ?>
                              <div class="single-product-content">
                                 <div class="left-content pull-left">
                                 <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                                       <h2> <?php echo $row["name"]; ?></h2>
                                    </a>
                                 </div>
                                 <div class="right-content pull-right"><<a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                           ?>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="reviews">
                        <?php
                           $conn = connect_to_db();
                           $query = "SELECT * FROM productupload where catagory='earrings'";
                           $mysqli_result = mysqli_query($conn, $query);
                           while($row = $mysqli_result->fetch_assoc()){
                           ?>
                        <div class="col-md-4 col-sm-6">
                           <div class="single-product">
                           <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><img src="
                                 <?php echo $row["image"]; ?>" alt="" style="height:338px"></a> <?php if (strlen($row['offer']) > 0) { ?>
                              <div class="single-product-overlay sale">
                                 <h3> <?php echo $row["offer"]; ?></h3>
                              </div>
                              <?php } ?>
                              <div class="single-product-content">
                                 <div class="left-content pull-left">
                                 <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                                       <h2> <?php echo $row["name"]; ?></h2>
                                    </a>
                                 </div>
                                 <div class="right-content pull-right"><a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                           ?>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="harram">
                        <?php
                           $conn = connect_to_db();
                           $query = "SELECT * FROM productupload where catagory='harram'";
                           $mysqli_result = mysqli_query($conn, $query);
                           while($row = $mysqli_result->fetch_assoc()){
                           ?>
                        <div class="col-md-4 col-sm-6">
                           <div class="single-product">
                           <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><img src="
                                 <?php echo $row["image"]; ?>" alt="" style="height:338px"></a> <?php if (strlen($row['offer']) > 0) { ?>
                              <div class="single-product-overlay sale">
                                 <h3> <?php echo $row["offer"]; ?></h3>
                              </div>
                              <?php } ?>
                              <div class="single-product-content">
                                 <div class="left-content pull-left">
                                 <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                                       <h2> <?php echo $row["name"]; ?></h2>
                                    </a>
                                 </div>
                                 <div class="right-content pull-right"><a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                           ?>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="necklaces">
                        <?php
                           $conn = connect_to_db();
                           $query = "SELECT * FROM productupload where catagory='necklaces'";
                           $mysqli_result = mysqli_query($conn, $query);
                           while($row = $mysqli_result->fetch_assoc()){
                           ?>
                        <div class="col-md-4 col-sm-6">
                           <div class="single-product">
                           <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><img src="
                                 <?php echo $row["image"]; ?>" alt="" style="height:338px"></a> <?php if (strlen($row['offer']) > 0) { ?>
                              <div class="single-product-overlay sale">
                                 <h3> <?php echo $row["offer"]; ?></h3>
                              </div>
                              <?php } ?>
                              <div class="single-product-content">
                                 <div class="left-content pull-left">
                                 <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                                       <h2> <?php echo $row["name"]; ?></h2>
                                    </a>
                                 </div>
                                 <div class="right-content pull-right"><a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                           ?>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="goldBars">
                        <?php
                           $conn = connect_to_db();
                           $query = "SELECT * FROM productupload where catagory='gold-bars'";
                           $mysqli_result = mysqli_query($conn, $query);
                           while($row = $mysqli_result->fetch_assoc()){
                           ?>
                        <div class="col-md-4 col-sm-6">
                           <div class="single-product">
                           <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><img src="
                                 <?php echo $row["image"]; ?>" alt="" style="height:338px"></a> <?php if (strlen($row['offer']) > 0) { ?>
                              <div class="single-product-overlay sale">
                                 <h3> <?php echo $row["offer"]; ?></h3>
                              </div>
                              <?php } ?>
                              <div class="single-product-content">
                                 <div class="left-content pull-left">
                                 <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                                       <h2> <?php echo $row["name"]; ?></h2>
                                    </a>
                                 </div>
                                 <div class="right-content pull-right"><a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                           ?>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="rings">
                        <?php
                           $conn = connect_to_db();
                           $query = "SELECT * FROM productupload where catagory='rings' OR catagory='mens-rings'";
                           $mysqli_result = mysqli_query($conn, $query);
                           while($row = $mysqli_result->fetch_assoc()){
                           ?>
                        <div class="col-md-4 col-sm-6">
                           <div class="single-product">
                           <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><img src="
                                 <?php echo $row["image"]; ?>" alt="" style="height:338px"></a> <?php if (strlen($row['offer']) > 0) { ?>
                              <div class="single-product-overlay sale">
                                 <h3> <?php echo $row["offer"]; ?></h3>
                              </div>
                              <?php } ?>
                              <div class="single-product-content">
                                 <div class="left-content pull-left">
                                 <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                                       <h2> <?php echo $row["name"]; ?></h2>
                                    </a>
                                 </div>
                                 <div class="right-content pull-right"><a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                           ?>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="goldPlating">
                        <?php
                           $conn = connect_to_db();
                           $query = "SELECT * FROM productupload where catagory='gold-plating'";
                           $mysqli_result = mysqli_query($conn, $query);
                           while($row = $mysqli_result->fetch_assoc()){
                           ?>
                        <div class="col-md-4 col-sm-6">
                           <div class="single-product">
                           <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><img src="
                                 <?php echo $row["image"]; ?>" alt="" style="height:338px"></a> <?php if (strlen($row['offer']) > 0) { ?>
                              <div class="single-product-overlay sale">
                                 <h3> <?php echo $row["offer"]; ?></h3>
                              </div>
                              <?php } ?>
                              <div class="single-product-content">
                                 <div class="left-content pull-left">
                                 <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                                       <h2> <?php echo $row["name"]; ?></h2>
                                    </a>
                                 </div>
                                 <div class="right-content pull-right"><a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a></div>
                              </div>
                           </div>
                        </div>
                        <?php
                           }
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include"footer.php" ?>
   </body>
</html>