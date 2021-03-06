<?php
include('head.php');
$conn=mysqli_connect("localhost","root","","yoga");
 
 $uid=$_SESSION['username_id'];
 $quary= "SELECT p.image,p.name,p.price,c.id FROM yogas as p INNER JOIN cart as c on c.product_id = p.id WHERE c.user_id = 27";
 $result = mysqli_query($conn,$quary);
 
 
?>
         
  
<!-- BEGIN Main Container -->  
          
       <div class="main-container col1-layout wow bounceInUp animated">     
              
	       <div class="main">                     
                            <div class="cart wow bounceInUp animated">
    
            <div class="table-responsive shopping-cart-tbl  container">
    <form action="" method="post">
        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
        <fieldset>
            <table id="shopping-cart-table" class="data-table cart-table table-striped">
                <colgroup><col width="1">
                <col>
                <col width="1">
                                        <col width="1">
                                        <col width="1">
                            <col width="1">
                                        <col width="1">

                            </colgroup><thead>
                    <tr class="first last">
                        <th rowspan="1">Image&nbsp;</th>
                        <th rowspan="1"><span class="nobr">Product Name</span></th>
                                                <th class="a-center" colspan="1"><span class="nobr">Unit Price</span></th>
                        <th class="a-center" colspan="1">Subtotal</th>
                        <th rowspan="1" class="a-center">&nbsp;</th>
                    </tr>
                                    </thead>
                <tbody>
                                    
 <?php
    if($result->num_rows > 0)
 { 
  while($row = $result->fetch_assoc()) 
  { ?>
<tr class="first last odd">
  <td class="image hidden-table">

    <a href="product-detail.html" class="product-image">
      <img src="images/<?php echo $row["image"];?> " width="75"></a></td>
  <td>
    <h2 class="product-name">
      <a href="product-detail.html"><?php echo $row["name"];?> </a>
    </h2>
  </td>
  <td class="a-right hidden-table">
    <span class="cart-price">
      <span class="price">$<?php echo $row["price"]; ?></span>                
    </span>
  </td>
  
  
  
  <td class="a-right movewishlist">
    <span class="cart-price">
      <span class="price">$129.00</span>                            
    </span>
  </td>
  <td class="a-center last">
    <a href="#" title="Remove item" class="button remove-item">
      <span>
        <span>
        Remove item
        </span>
      </span>
    </a>
  </td>
  </tr> 
  <?php
  }
 }
else 
{
  echo "0 results";
}?>

  
                      </tbody>
            </table>
            
        </fieldset>
    </form>
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
  <!-- For version 1,2,3,4,6 -->
  
  <footer>
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
      <div class="newsletter-row">
        <div class="container">
          <div class="row"> 
            
            <!-- Footer Newsletter -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col1">
              <div class="newsletter-wrap">
                <h5>Newsletter</h5>
                <h4>Get discount 30% off</h4>
                <form action="#" method="post" id="newsletter-validate-detail1">
                  <div id="container_form_news">
                    <div id="container_form_news2">
                      <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address">
                      <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
                    </div>
                    <!--container_form_news2--> 
                  </div>
                  <!--container_form_news-->
                </form>
              </div>
              <!--newsletter-wrap--> 
            </div>
          </div>
        </div>
        <!--footer-column-last--> 
      </div>
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="footer-column">
                <h4>Shopping Guide</h4>
                <ul class="links">
                  <li><a href="blog.html" title="How to buy">Blog</a></li>
                  <li><a href="faq.html" title="FAQs">FAQs</a></li>
                  <li><a href="#" title="Payment">Payment</a></li>
                  <li><a href="#" title="Shipment">Shipment</a></li>
                  <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                  <li><a href="#" title="Return policy">Return policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer-column">
                <h4>Style Advisor</h4>
                <ul class="links">
                  <li><a href="login.html" title="Your Account">Your Account</a></li>
                  <li><a href="#" title="Information">Information</a></li>
                  <li><a href="#" title="Addresses">Addresses</a></li>
                  <li><a href="#" title="Addresses">Discount</a></li>
                  <li><a href="#" title="Orders History">Orders History</a></li>
                  <li><a href="#" title="Order Tracking">Order Tracking</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer-column">
                <h4>Information</h4>
                <ul class="links">
                  <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                  <li><a href="#" title="Search Terms">Search Terms</a></li>
                  <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                  <li><a href="about_us.html" title="About Us">About Us</a></li>
                  <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                  <li><a href="#" title="Suppliers">Suppliers</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer-column">
                <h4>Contact Us</h4>
                <div class="contacts-info">
                  <address>
                  <i class="add-icon"></i>ThemesGround, 789 Main rd,<br>
                  Anytown, CA 12345 USA<br>
                  </address>
                  <div class="phone-footer"><i class="phone-icon"></i>+ 888 456-7890</div>
                  <div class="email-footer"><i class="email-icon"></i><a href="mailto:abc@example.com">Qualis@themesground.com</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!--container--> 
    </div>
    <!--footer-inner--><div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 coppyright"> © 2018 ThemesGround. All Rights Reserved. </div>
          <div class="col-xs-12 col-sm-4">
            <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
    <!--footer-bottom-->
    <!-- BEGIN SIMPLE FOOTER -->
  </footer>
  <!-- End For version 1,2,3,4,6 -->
  
</div>
<!--page-->
<!-- Mobile Menu-->
<div id="mobile-menu">
  <ul>
  <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">
           
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
             <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
          </div>
        </form>
      </div>
    </li>
    <li>
      <div class="home"><a href="#">Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a></li>
        <li> <a href="list.html">List</a></li>
        <li> <a href="product-detail.html">Product Detail</a></li>
        <li> <a href="shopping-cart.html">Shopping Cart</a></li>
        <li><a href="checkout.html">Checkout</a>
          <ul>
            <li><a href="checkout-method.html">Checkout Method</a></li>
            <li><a href="checkout-billing-info.html">Checkout Billing Info</a></li>
          </ul>
        </li>
        <li> <a href="wishlist.html">Wishlist</a></li>
        <li> <a href="dashboard.html">Dashboard</a></li>
        <li> <a href="multiple-addresses.html">Multiple Addresses</a></li>
        <li> <a href="about-us.html">About us</a></li>
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a></li>
          </ul>
        </li>
        <li><a href="contact-us.html">Contact us</a></li>
        <li><a href="404error.html">404 Error Page</a></li>
      </ul>
    </li>
    <li><a href="grid.html">Fruits‎</a>
      <ul>
        <li><a href="grid.html">Tropical Fruits‎</a>
          <ul>
            <li> <a href="grid.html">Coconuts</a> </li>
            <li> <a href="grid.html">Dragonfruits</a> </li>
            <li> <a href="grid.html"><span>Pomegranates</a> </li>
            <li> <a href="grid.html"><span>Passionfruit</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Citrus Fruits‎</a>
          <ul>
            <li> <a href="grid.html">Fresh Oranges</a> </li>
            <li> <a href="grid.html">Grapefruits</a> </li>
            <li> <a href="grid.html">Organic Limes</a> </li>
            <li> <a href="grid.html">Yellow Lemons</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Stone Fruits</a>
          <ul>
            <li> <a href="grid.html">Sweet Apricots</a> </li>
            <li> <a href="grid.html">Nectarines</a> </li>
            <li> <a href="grid.html">Doughnut Peachs</a> </li>
            <li> <a href="grid.html">Italian Fruits</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Large Fruits</a>
          <ul>
            <li> <a href="grid.html">Pineapples</a> </li>
            <li> <a href="grid.html">Organic Papayas</a> </li>
            <li> <a href="grid.html">Fresh Melons</a> </li>
            <li> <a href="grid.html">Grapefruits</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Seasonal Fruits</a>
          <ul>
            <li> <a href="grid.html">Black Jamuns</a> </li>
            <li> <a href="grid.html">Fresh Mangos</a> </li>
            <li> <a href="grid.html">Organic Litchis</a> </li>
            <li> <a href="grid.html">Longans</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Berries & Cherries</a>
          <ul>
            <li> <a href="grid.html">Strawberries</a> </li>
            <li> <a href="grid.html">Raspberries</a> </li>
            <li> <a href="grid.html">Blackberries</a> </li>
            <li> <a href="grid.html">Cherries</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Salads‎</a>
      <ul>
        <li> <a href="grid.html">Veg Salads</a>
          <ul>
            <li> <a href="grid.html">Tomatoes</a> </li>
            <li> <a href="grid.html">Cucumbers</a> </li>
            <li> <a href="grid.html">Peppers & Capsicums</a> </li>
            <li> <a href="grid.html">Avocados</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Dressings Salads</a>
          <ul>
            <li> <a href="grid.html">Hellmann's</a> </li>
            <li> <a href="grid.html">Giuseppe Giusti</a> </li>
            <li> <a href="grid.html">Unitednature</a> </li>
            <li> <a href="grid.html">Walden Farms</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Fruits Salads</a>
          <ul>
            <li> <a href="grid.html">Pineapples</a> </li>
            <li> <a href="grid.html">Red Apple</a> </li>
            <li> <a href="grid.html">Strawberries</a> </li>
            <li> <a href="grid.html">Row Mangos</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Bagged Salads</a>
          <ul>
            <li> <a href="grid.html">Italian Baby Spinach</a> </li>
            <li> <a href="grid.html">Australia Green Kale</a> </li>
            <li> <a href="grid.html">Sustenir Fresh Toscano</a> </li>
            <li> <a href="grid.html">Oro Rocket Salad</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Lettuce Salads</a>
          <ul>
            <li> <a href="grid.html">Butterhead</a> </li>
            <li> <a href="grid.html">Red Coral</a> </li>
            <li> <a href="grid.html">Rolla Rosa Lettuce</a> </li>
            <li> <a href="grid.html">Summercrisp</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Bread Salads</a>
          <ul>
            <li> <a href="grid.html">Green Goddess</a> </li>
            <li> <a href="grid.html">Grilled Broccoli</a> </li>
            <li> <a href="grid.html">Panzanella</a> </li>
            <li> <a href="grid.html">Green Tomato</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Vegetables</a>
      <ul>
        <li> <a href="grid.html">Leafy Vegetables</a>
          <ul>
            <li> <a href="grid.html">Sprouts</a> </li>
            <li> <a href="grid.html">Lettuce</a> </li>
            <li> <a href="grid.html">Banana Leaves</a> </li>
            <li> <a href="grid.html">Microgreens</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Mushrooms</a>
          <ul>
            <li> <a href="grid.html">Shimeji Mushroom</a> </li>
            <li> <a href="grid.html">Portobello Mushroom</a> </li>
            <li> <a href="grid.html">Oyster Mushroom</a> </li>
            <li> <a href="grid.html">Shiitake Mushroom</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Baby Vegetables</a>
          <ul>
            <li> <a href="grid.html">Cabbage</a> </li>
            <li> <a href="grid.html">Capsicums</a> </li>
            <li> <a href="grid.html">Pak Choi</a> </li>
            <li> <a href="grid.html">Spinach</a> </li>
          </ul>
        </li>
        
        <li> <a href="grid.html">Salad Vegetables</a>
          <ul>
            <li> <a href="grid.html">Cucumbers</a> </li>
            <li> <a href="grid.html">Avocados</a> </li>
            <li> <a href="grid.html">Mustard Leaves</a> </li>
            <li> <a href="grid.html">Tomatoes</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Asian Vegetables</a>
          <ul>
            <li> <a href="grid.html">Spring Onion</a> </li>
            <li> <a href="grid.html">Lady Fingers</a> </li>
            <li> <a href="grid.html">Watercress</a> </li>
            <li> <a href="grid.html">Curry Leaves</a> </li>
          </ul>
        </li>
         <li> <a href="grid.html">Beans Vegetables</a>
          <ul>
            <li> <a href="grid.html">French Beans</a> </li>
            <li> <a href="grid.html">Sweet Corn</a> </li>
            <li> <a href="grid.html">Fine Green Beans</a> </li>
            <li> <a href="grid.html">Petai Beans</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Juices‎</a></li>
     <li><a href="grid.html">Meats‎</a></li>
       <li><a href="#">Custom‎</a></li>
    <li><a href="contact-us.html">Contact Us</a></li>
  </ul>
  <div class="top-links">
    <ul class="links">
      <li><a title="My Account" href="login.html">My Account</a> </li>
      <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
      <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
      <li><a title="Blog" href="blog.html">Blog</a> </li>
      <li class="last"><a title="Login" href="login.html">Login</a> </li>
    </ul>
  </div>
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>


</body></html>