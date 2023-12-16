  <?php
    include_once("connection.php");
    ?>
  <div class="slider-area">
      <!-- Slider -->
      <div class="block-slider block-slider4">
          <ul class="" id="bxslider-home4">
              <li>
                  <img src="img/logo2.jpg" alt="Slide">
              </li> 
          </ul>
      </div>
      <!-- ./Slider -->
  </div> <!-- End slider area -->

  <!--Gioi thieu cac chuc nang-->

  <div class="promo-area">
      <div class="zigzag-bottom"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-6">
                  <div class="single-promo promo1">
                      <i class="fa fa-refresh"></i>
                      <p>Exchange, return every 30 days</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="single-promo promo2">
                      <i class="fa fa-truck"></i>
                      <p>Free ship</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="single-promo promo3">
                      <i class="fa fa-lock"></i>
                      <p>Payment security</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="single-promo promo4">
                      <i class="fa fa-gift"></i>
                      <p>New Product</p>
                  </div>
              </div>
          </div>
      </div>
  </div> <!-- End promo area -->

  <div class="product-widget-area">
      <div class="zigzag-bottom"></div>
      <div class="container">
          <div class="row">
              <h2 class="section-title">ALL PRODUCTS</h2>
              <?php
                $result = mysqli_query($conn, "SELECT * FROM product");

                if (!$result) {
                    die('Invalid query: ' . mysqli_error($conn));
                }


                while ($row = mysqli_fetch_array($result)) {

                ?>
                  <div class="col-md-4">
                      <div class="single-product-widget">
                          <div class="single-wid-product">
                              <a href="?page=view&&id=<?php echo $row['Product_ID']; ?>"><img src="images1/product-imgs/<?php echo $row['Pro_image'] ?>" alt="" class="product-thumb"></a>
                              <h2><a href="?page=view&&id=<?php echo $row['Product_ID']; ?>"><?php echo  $row['Product_Name'] ?></a></h2>
                              <div class="product-wid-rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                              </div>
                              <div class="product-wid-price">
                                  <ins><?php echo  $row['Price'] ?></ins>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php
                }
                ?>
          </div>
      </div>
  </div>