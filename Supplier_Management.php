<?php
if (isset($_SESSION['us']) == false) {
    echo "<script>alert('You need to login before accessing this page')</script>";
    echo '<meta http-equiv="refresh" content = "0; URL=?page=login"/>';
} else {
    if (isset($_SESSION['admin']) == true) {
        $permission = $_SESSION['admin'];
        if ($permission == false) {
            echo "<script>alert('You are not authorized to access this page')</script>";
            echo '<meta http-equiv="refresh" content = "0; URL=index.php"/>';
        } else {
?>
            <!-- Bootstrap -->
            <link rel="stylesheet" type="text/css" href="style.css" />
            <meta charset="utf-8" />
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <script>
                function deleteConfirm() {
                    if (confirm("Are you sure to delete!")) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>
            <?php
            include_once("connection.php");
            if (isset($_GET["function"]) == "del") {
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    mysqli_query($conn, "DELETE FROM supplier WHERE sup_id = '$id'");
                    echo '<meta http-equiv="refresh" content = "0; URL=?page=sup_management"/>';
                }
            }
            ?>
            <form name="frm" method="post" action="">
                <h1>Product Supplier</h1>
                <p>
                    <img src="images/add.png" alt="Add new" width="16" height="16" border="0" /> <a href="?page=add_supplier"> Add</a>
                </p>
                <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><strong>Supplier ID</strong></th>
                            <th><strong>Supplier Name</strong></th>
                            <th><strong>Supplier Mail</strong></th>
                            <th><strong>Supplier Phone</strong></th>
                            <th><strong>Delete</strong></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $No = 1;
                        $result = mysqli_query($conn, "SELECT * FROM supplier");
                        while ($row = mysqli_fetch_array($result)) {

                        ?>
                            <tr>
                                <td><?php echo $row["sup_id"]; ?></td>
                                <td><?php echo $row["sup_name"]; ?></td>
                                <td><?php echo $row["sup_mail"]; ?></td>
                                <td><?php echo $row["sup_phone"]; ?></td>
                                <td style='text-align:center'>
                                    <a href="?page=supplier_management&&function=del&&id=<?php echo $row["sup_id"] ?>" onclick="return deleteConfirm()">
                                        <img src='images/delete.png' border='0' />
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $No++;
                        }
                        ?>
                    </tbody>
                </table>


                <!--Nut them moi nut xoa tat ca->
        <div class="row" style="background-color:#FFF"><!--Nut chuc nang-->
                <div class="col-md-12">

                </div>
                </div>
                <!--Nut chuc nang-->
            </form>
<?php
        }
    }
}
?>