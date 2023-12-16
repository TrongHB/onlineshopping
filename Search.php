<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <h2 class="section-title">ALL PRODUCTS</h2>
            <?php
            if (isset($_GET['cate_id'])) {
                $id = $_GET['cate_id'];
                $result = mysqli_query($conn, "SELECT * FROM product WHERE Cat_ID = '$id'");
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
            }
            ?>

            <?php
            if (isset($_GET['sup_id'])) {
                $id = $_GET['sup_id'];
                $result = mysqli_query($conn, "SELECT * FROM product WHERE Sup_ID = '$id'");
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
            }
            ?>
        </div>
    </div>
</div>