<?php include 'connectdb.php'?>
<!doctype html>
<html class="no-js" lang="">


<?php include 'header.php'?>
 <body>
          
        <!-- slider Area Start -->
		<div class="slider-area">
			<div class="bend niceties preview-1">
				<div id="ensign-nivoslider-3" class="slides">	
                <?php
                     $conn = connect_to_db();
                    $query = "SELECT * FROM images";
                    $mysqli_result = mysqli_query($conn, $query);
                   
                   while($row = $mysqli_result->fetch_assoc()){
                       ?>
					<img src="<?php echo $row["url"]; ?>" alt="" title="#slider-direction-1"/>
 				<!--<img src="img/slider/s-1-2.jpg" alt="" title="#slider-direction-2"/>-->
                    <?php
                   }
                    ?>
                </div>
				<!-- direction 1 -->
				<div id="slider-direction-1" class="t-cn slider-direction">
					<!-- layer 1 -->
					<div class="layer-1-1">
						<h3 class="title-1"><strong>SPANKING</strong><br />COLLECTION</h3>
					</div>
					<!-- layer 2 -->
					<div class="layer-1-2">
						<a href="contact-us.php" class="title-2">SHOP NOW</a>
					</div>
				</div>
				<!-- direction 2 -->
				<div id="slider-direction-2" class="slider-direction">
					<!-- layer 1 -->
					<div class="layer-1-1">
						<h3 class="title-1"><strong>SPANKING</strong><br />COLLECTION</h3>
					</div>
					<!-- layer 2 -->
					<div class="layer-1-2">
						<a href="contact-us.php" class="title-2">SHOP NOW</a>
					</div>
                </div>
                
			</div>
		</div>       
		<!-- slider Area End-->   
		<!--New Product Area Start--> 
		<div class="new-product-area">
		    <div class="container">
		        <div class="row">
                    <div class="col-md-12">
                        <div class="new-product-top">
                        <?php
                            $conn = connect_to_db();
                            $query = "SELECT * FROM homeimage";
                            $mysqli_result = mysqli_query($conn, $query);
                            $res = mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC);
                            for($i = 0; $i < count($res) && $i < 4; $i++){
                            $b = $res[$i];
                            ?>
                            <div class="col-50 padding-right">
                          
                                <div class="single-top-product">
                                    <img src="<?php echo $b["url"]; ?>" alt="">
                                    <div class="overlay-content">
                                        <a href="<?php echo $b["label"]; ?>"><h3><?php echo $b["title"]; ?></h3></a>
                                        <a href="<?php echo $b["label"]; ?>" class="btn-product">View</a>
                                    </div>
                                </div>
                          
                            </div>
                            <?php } ?>
                           
                        </div>
                    </div>
		        </div>
		        <div class="new-trend section-padding">
                    <div class="row">
                        <div class="section-title">
                            <h2>New Trend</h2>
                        </div>
                        <div class="new-trend-list indicator-style">
                        <?php
                                    $conn = connect_to_db();
                                    $query = "SELECT * FROM chain";
                                    $mysqli_result = mysqli_query($conn, $query);
                                    while($row = $mysqli_result->fetch_assoc()){
                                    ?>
                            <div class="col-md-4">
                                <div class="single-new-trend">
                                    <a href="catagorydetails-newprod.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><img src="<?php  echo $row['url'];?>" alt="<?php  echo $row['title'];?>" style="height:338px"></a>
                                    <div class="overlay-content">
                                       
                                        <a href="catagorydetails-newprod.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>" class="btn-small"><?php  echo $row['title'];?></a>
                                        <div class="product-action">
                                            <ul>
                                            <li>
                                                    <a href="catagorydetails-newprod.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><i class="flaticon-bag"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal<?php  echo $row['id'];?>"><i class="flaticon-view"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           <?php } ?>
                        </div>
                    </div>
		        </div>
		    </div>
		</div>    
		<!-- New Product Area End -->  
		<!-- New Product Area Start -->   
		<div class="new-collection-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		            <div class="new-collection-info">
		                <h2>New Collection !!</h2>
		                <p>Custom Design:We specialize in 22 karat gold jewellery repair and sale. Designing the perfect jewelry can be an intimidating task. Let us help you create a piece that is as individual as yourself. We have the years of experience creating unique custom engagement rings, wedding bands, and anniversary pieces to suit a style all your own</p>
		                <a href="contact-us.php" class="btn-default">Contact NOW</a>
		            </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- New Product Area End --> 
              
        <!--Featured Product Area End-->
        <!-- Blog Area Start -->
        <div class="blog-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>ALL Arrivals</h2>
                    </div>
                     <div class="blog-list indicator-style">
                     <?php
                                    $conn = connect_to_db();
                                    $query = "SELECT * FROM productupload";
                                    $mysqli_result = mysqli_query($conn, $query);
                                    while($row = $mysqli_result->fetch_assoc()){
                                    ?>
                         <div class="col-md-4">
                             <div class="single-blog">
                                <div class="blog-img">
                                    <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>"><img src="<?php  echo $row['image'];?>" alt="<?php  echo $row['name'];?>" style="height:347px;width:360px"></a>
                                </div>
                                 <div class="blog-content-info">
                                     <h3><?php  echo $row['name'];?> </h3>
                                     <p><?php  echo $row['label'];?></p>
                                     
                                     <div class="read-more pull-right">
                                         <a href="catagorydetails.php?updateid=<?php echo $row["id"]; ?>&cat=<?php echo $row["catagory"]; ?>">Read More</a>
                                     </div>
                                 </div>
                             </div>
                         </div>

                          <?php } ?>
                     </div>                   
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        <!--Testimonial Area Start-->
        
        <!--Testimonial Area End-->
      
        <!-- Brand Area End -->
    <?php include"footer.php" ?>
        <!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <?php
                                    $conn = connect_to_db();
                                    $query = "SELECT * FROM chain";
                                    $mysqli_result = mysqli_query($conn, $query);
                                    while($row = $mysqli_result->fetch_assoc()){
                                    ?>
            <div class="modal fade" id="productModal<?php  echo $row['id'];?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="<?php  echo $row['url'];?>">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h1><?php  echo $row['title'];?></h1>
                                    <div class="quick-add-to-cart">
                                        <a href="contact-us.php">
                                            <button class="single_add_to_cart_button" type="submit">Enquiry Now</button>
                                        </a>
                                    </div>
                                    <div class="quick-desc">
                                    <?php  echo $row['label'];?>
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook"  onclick="openShareLink('https://www.facebook.com/sharer/sharer.php?u=<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>&amp;t=<?php  echo $row['title'];?>')" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter"  onclick="openShareLink('https://twitter.com/intent/tweet?url=<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>&amp;text=<?php  echo $row['title'];?>')"  class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Telegram" onclick="openShareLink('https://t.me/share/url?url=<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>&amp;text=<?php  echo $row['title'];?>')" class="telegram social-icon"><i class="fa fa-telegram"></i></a></li>
                                                <li><a target="_blank" title="whatsapp" onclick="openShareLink('https://api.whatsapp.com//send?text=<?php  echo $row['title'];?>%20-%20<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>')" class="whatsapp social-icon"><i class="fa fa-whatsapp"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" onclick="openShareLink('https://www.linkedin.com/shareArticle?mini=true&url=<?php if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on')$url="https://";else $url="http://";$url.=$_SERVER['HTTP_HOST'];$url.=$_SERVER['REQUEST_URI'];echo $url; ?>')" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--End of Quickview Product-->			
		
    </body>
</html>
