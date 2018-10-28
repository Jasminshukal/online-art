<?php
  include('head.php');
  include("conn.php");
  
  $result = mysqli_query($conn,"select * from yogas where Approve='yes' order by id DESC ");

?>
    <div style="padding-top: 10px;">
      
    </div>/
    <!-- best Pro Slider -->
    <section class=" wow bounceInUp animated">
      <div class="best-pro slider-items-products container">
        <div class="new_title">
          <h2>Painting </h2>
        </div>
        <div id="best-seller" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
          

          <?php

          $row = mysqli_fetch_row($result);
          
          while($row)
          {
          
        ?>
        <div class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info">
                    <a href="single.php?id=<?php echo $row[0]; ?>" title="Fresh Organic Mustard Leaves " class="product-image">
                    <img src="images/<?php echo $row[3];?>" style="height: 250px; width: 250px;" alt="Fresh Organic Mustard Leaves "></a>
                    <div class="new-label new-top-left">Hot</div>
                    <div class="sale-label sale-top-left">-15%</div>
                    <div class="item-box-hover">
                      <div class="box-inner">
                        <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                        <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  if(isset($_SESSION['username']))
                  { ?>
                  <a href="<?php echo "addtocart.php?id=$row[0]";?>">
                  <div class="add_cart">
                    <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                  </div>
                </a>
                  <?php }
                  ?>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves "> <?php echo $row[1]; ?>
                    </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                          </div>
                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price" ><span class="price">
                        $<?php echo $row[6]; ?>
                      </span> </span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php
            $row = mysqli_fetch_row($result);
          }
        ?>
       
          </div>
        </div>
      </div>
    </section>
  </div>
 
  <div class="container">
    <div class="row our-features-box">
      <ul>
        <li>
          <div class="feature-box">
            <div class="icon-truck"></div>
            <div class="content">FREE SHIPPING on order over $99</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-support"></div>
            <div class="content">Have a question?<br>
              +1 800 789 0000</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-money"></div>
            <div class="content">100% Money Back Guarantee</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-return"></div>
            <div class="content">30 days return Service</div>
          </div>
        </li>
        <li class="last">
          <div class="feature-box"> <a href="#"><i class="fa fa-apple"></i> download</a> <a href="#"><i class="fa fa-android"></i> download</a> </div>
        </li>
      </ul>
    </div>
  </div>
<?php
include('footer.php');  
