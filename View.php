<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<?php
include_once("connection.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sq = "SELECT * FROM product WHERE pro_id ='$id'";
    $res = mysqli_query($conn, $sq);
    $row = mysqli_fetch_array($res)

?>
    <div class="container" style="padding-bottom: 100px;">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-6 py-5">
                <div class="white-box text-center">
                    <img src="product-imgs/<?php echo $row['pro_img'] ?>" width="320" height="500" style="border-radius: 15px;">
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-6 text-center">
                <h1 class="box-title mt-5 class=" mb-3 id="home"><span> TOY DESCRIPTION</span> </h1>
                <div class="white-box text-center">
                    <h3>Name: &nbsp;<?php echo $row['pro_name'] ?></h3>
                    <h3>Price:&nbsp;<?php echo $row['price'] ?></h3>
                </div>
                <div class="white-box text-center">
                    <h4><?php echo $row['description'] ?></h4>
                </div>
                <div class="pt-5">
                    <h2 class="mb-0"><a href="index.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h2>
                </div>

            <?php
        }
            ?>
            </div>
        </div>
    </div>