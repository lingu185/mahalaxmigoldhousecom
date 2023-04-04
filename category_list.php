<?php include 'connectdb.php'?>
<!doctype html>
<html class="no-js" lang="">
    
		
<?php include 'header.php'?>
        <!--Header Area End-->
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Catagories List</h2>
					</div>
				</div>
			</div>
		</div>
        <!-- Breadcrumbs Area End -->
        <!-- Shop Page Area Start -->
        <div class="shop-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="shop-widget">
                            <aside class="widget widget-categories">
                                <h2 class="sidebar-title">CATEGORY</h2>
                                <ul class="sidebar-menu">
									<li><a href="details.php?updateid=harram">Harram</a></li>
									<li><a href="details.php?updateid=necklaces">Necklace </a></li>
								    <li><a href="details.php?updateid=bangles">Bangles </a></li>
									<li><a href="details.php?updateid=earrings">Earrings</a></li>
									<li><a href="details.php?updateid=nosestud">Nosestud</a></li>
									<li><a href="details.php?updateid=rings">Rings </a></li>
									<li><a href="details.php?updateid=chains">Chains </a></li>
								</ul>
                            </aside>
                            
                            <aside class="widget widget-image">
                               <a href="category_list.php">
                                   <img src="img/slider/22-10-2020-1603369682.jpg" alt="">
                               </a>
                                <!-- <div class="widget-content" style="color:#fff">
                                    <h2>Our Exclusive Sale <br> Off</h2>
                                    <a href="category_list.php">Contact Now <i class="fa fa-angle-right"></i> </a>
                                </div> -->
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="shop-right-area">
                            <div class="tab-content">
				                <div class="row tab-pane fade in active" id="home">
                                   <div class="shop-single-product-area">
                                   <?php
                                    $conn = connect_to_db();
                                    $query = "SELECT * FROM productupload";
                                    $mysqli_result = mysqli_query($conn, $query);
                                    while($row = $mysqli_result->fetch_assoc()){
                                    ?>
                                     <?php if (strlen($row['image']) > 0) { ?>
                                       <div class="col-md-4 col-sm-6">
                                           <div class="single-product">
                                               <a href="details-list.php?updateid=<?php echo $row["catagory"]; ?>">
                                                   <img src="<?php echo $row["image"]; ?>" alt="" width="100%" style="height:253px;">
                                               </a>
                                               <?php if (strlen($row['offer']) > 0) { ?>
                                               <div class="single-product-overlay sale">
                                                   <h3><?php echo $row["offer"]; ?></h3>
                                               </div>
                                               <?php } ?>
                                               <div class="single-product-content">
                                                  <div class="left-content pull-left">
                                                      <a href="details-list.php?updateid=<?php echo $row["catagory"]; ?>"><h2><?php echo $row["name"]; ?></h2></a>
                                                                                                     
                                                  </div>
                                                  <div class="right-content pull-right">
                                                      <a href="details-list.php?updateid=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a>
                                                  </div>
                                               </div>
                                           </div>
                                       </div>
                                       <?php } ?>
                                       <?php } ?>
                                   </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Page Area End -->
        
        <!-- Brand Area End -->
        <?php include"footer.php" ?>
    </body>

</html>