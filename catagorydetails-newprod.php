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
                $ret=mysqli_query($conn,"SELECT * FROM chain where id='$vid' ORDER BY ID LIMIT 3");
                while ($row=mysqli_fetch_array($ret)) {
                ?>
			<meta property="og:image" content="<?php  echo $row['url'];?>" />
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
        <div class="product-simple-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-7">
                        <div class="single-product-image-inner">
                            <!-- Tab panes -->
                            
                            <div class="tab-content">
                            <?php
                                $vid=$_GET['updateid'];
                                $conn = connect_to_db();
                                $ret=mysqli_query($conn,"SELECT * FROM chain where id='$vid' ORDER BY ID LIMIT 3");
                                while ($row=mysqli_fetch_array($ret)) {
                                ?>
                                <div role="tabpanel" class="tab-pane active" id="<?php  echo $row['id'];?>">
                                    <a class="venobox" href="<?php  echo $row['url'];?>" data-gall="gallery" title="">
                                        <img src="<?php  echo $row['url'];?>" alt="">
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                          
                            
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5">

                                <?php
                                $vid=$_GET['updateid'];
                                $conn = connect_to_db();
                                $ret=mysqli_query($conn,"SELECT * FROM chain where id='$vid' ORDER BY ID LIMIT 1");
                                while ($row=mysqli_fetch_array($ret)) {
                                ?>
                        <div class="single-product-details">
                            
                            <h2><?php  echo $row['title'];?></h2>
                            <h4>in stock</h4>
                            <p><?php  echo $row['label'];?></p>
                            <!-- <div class="single-product-price">
                                <h2>Category :<?php  echo $row['label'];?></h2>
                            </div> -->
                            <div class="product-attributes clearfix">
                               <span>
                                    <a class="cart-btn" href="contact-us.php">
                                        <i class="flaticon-bag"></i>
                                        <span>Enquiry Now</span>
                                    </a>
                               </span>
                            </div>
                            <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook"  onclick="openShareLink('https://www.facebook.com/sharer/sharer.php?u=<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>&amp;t=<?php  echo $row['name'];?>')" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter"  onclick="openShareLink('https://twitter.com/intent/tweet?url=<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>&amp;text=<?php  echo $row['name'];?>')"  class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Telegram" onclick="openShareLink('https://t.me/share/url?url=<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>&amp;text=<?php  echo $row['name'];?>')" class="telegram social-icon"><i class="fa fa-telegram"></i></a></li>
                                                <li><a target="_blank" title="whatsapp" onclick="openShareLink('https://api.whatsapp.com//send?text=<?php  echo $row['name'];?>%20-%20<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>')" class="whatsapp social-icon"><i class="fa fa-whatsapp"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" onclick="openShareLink('https://www.linkedin.com/shareArticle?mini=true&url=<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>')" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-4">
                    <div class="section-title">
                        <h2>Recent Product</h2>
                    </div>
                    <div class="featured-product-lists indicator-style" style="margin-top:35px">
                    <?php
                                $vid=$_GET['updateid'];
                                $cat=$_GET['cat'];
                                $conn = connect_to_db();
                                $ret=mysqli_query($conn,"SELECT * FROM productupload where catagory='$cat' ");
                                while ($row=mysqli_fetch_array($ret)) {
                                ?>
                        
                        <div class="col-md-12">
                            <div class="col-md-6 single-new-trends marginBottom20">
                                <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>"><img width="100%" style="height:120px;border: 1px solid #999;" src="<?php  echo $row['image'];?>" alt=""></a>
                                <div class="overlay-content"> <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>" class="btn-small">New</a></div>
                            </div>
                            <div class="col-md-6">
                                    <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>">
                                        <h4><?php  echo $row['name'];?></h4>
                                    </a>
                                </div>
                        </div>
                        <?php } ?>
                    </div>
                    </div>
                </div>
				             
            </div>
        </div>
        <!-- Product Simple Area End -->
        <!--Related Product Area Start-->
        <div class="featured-product-area section-padding-2">
            <div class="container">
              
            </div>        
        </div>         
        <!--Related Product Area End-->
        <!-- Brand Area Start -->
     
        <!-- Brand Area End -->
        <?php include"footer.php" ?>
    </body>

</html>