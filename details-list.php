<?php include 'connectdb.php'?>
<!doctype html>
<html class="no-js" lang="">
    
		
<?php include 'header.php'?>
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