<?php include 'connectdb.php'?>
<!doctype html>
<html class="no-js" lang="">

<head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Mahaluxmi Gold House </title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
                                $vid=$_GET['updateid'];
                                $conn = connect_to_db();
                                $ret=mysqli_query($conn,"SELECT * FROM productupload where catagory='$vid' ORDER BY ID LIMIT 3");
                                while ($row=mysqli_fetch_array($ret)) {
                                ?>
                                <meta property="og:image" content="<?php  echo $row['image'];?>" />
                              <?php } ?>  
		
                                <?php include 'header-og-image.php'?>
        <!--Header Area End-->
        <!--Header Area End-->
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area2 section-padding-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>PRODUCT DETAILS</h2>
					</div>
				</div>
			</div>
		</div>
        <!-- Breadcrumbs Area End -->
        <!-- Product Simple Area Start -->
        <div class="product-simple-area section-padding-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="single-product-image-inner">
                            <!-- Tab panes -->
                            
                            <div class="tab-content">
                            <?php
                                $vid=$_GET['updateid'];
                                $conn = connect_to_db();
                                $ret=mysqli_query($conn,"SELECT * FROM productupload where catagory='$vid' ORDER BY ID LIMIT 3");
                                while ($row=mysqli_fetch_array($ret)) {
                                ?>
                                <div role="tabpanel" class="tab-pane active" id="<?php  echo $row['id'];?>">
                                    <a class="venobox" href="<?php  echo $row['image'];?>" data-gall="gallery" title="">
                                        <img src="<?php  echo $row['image'];?>" alt="">
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                          
                            
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-5 col-sm-5">
                                <?php
                                $vid=$_GET['updateid'];
                                $conn = connect_to_db();
                                $ret=mysqli_query($conn,"SELECT * FROM productupload where catagory='$vid' ORDER BY ID LIMIT 1");
                                while ($row=mysqli_fetch_array($ret)) {
                                ?>
                        <div class="single-product-details">
                            
                            <h2><?php  echo $row['name'];?></h2>
                            <h4>in stock</h4>
                            <p><?php  echo $row['label'];?></p>
                            <?php if (strlen($row['catagory']) > 0) { ?>
                            <div class="single-product-price">
                            <h2>Category : <?php  echo $row['catagory'];?></h2>
                            </div>
                            <?php } ?>
                            <div class="product-attributes clearfix">
                               
                               <span>
                                    <a class="cart-btn" href="contact-us.php">
                                        <i class="flaticon-bag"></i>
                                        <span>Buy Now</span>
                                    </a>
                               </span>
                            </div>
                            <?php if (strlen($row['offer']) > 0) { ?>
                            <div class="single-product-categories">
                               <label>Offer:</label>
                                <span><?php  echo $row['offer'];?></span>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
				             
            </div>
        </div>
        <!-- Product Simple Area End -->
        <!--Related Product Area Start-->
        <div class="featured-product-area section-padding-2">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>Related  products</h2>
                    </div>
                    <div class="featured-product-list indicator-style">
                    <?php
                                $vid=$_GET['updateid'];
                                $conn = connect_to_db();
                                $ret=mysqli_query($conn,"SELECT * FROM productupload where catagory='$vid'");
                                while ($row=mysqli_fetch_array($ret)) {
                                ?>
                        
                        <div class="col-md-3">
                            <div class="single-new-trend">
                                <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><img width="100%" style="height:254px" src="<?php  echo $row['image'];?>" alt=""></a>
                                <div class="overlay-content">
                                   
                                    <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">
                                        <h4><?php  echo $row['name'];?></h4>
                                    </a>
                                   
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>        
        </div>         
        <!--Related Product Area End-->
        <!-- Brand Area Start -->
     
        <!-- Brand Area End -->
        <?php include"footer.php" ?>
    </body>

</html>