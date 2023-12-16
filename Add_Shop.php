<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">

<?php
include_once("connection.php");
if (isset($_POST["btnAdd"])) {
	$name = $_POST["txtName"];
	$mail = $_POST["txtMail"];
	$phone = $_POST["txtPhone"];
	$err = "";
	if ($name == "") {
		$err .= "<li>Enter Shop Name, please</li>";
	}
	if ($mail == "") {
		$err .= "<li>Enter Shop Mail, please</li>";
	}
	if ($phone == "") {
		$err .= "<li>Enter Shop Phone, please</li>";
	}
	if ($err != "") {
		echo "<li>$err</li>";
	} else {
		include_once("connection.php");
		$sq = "SELECT * FROM public.shop where shop_name = '$name'";
		$result = mysqli_query($conn, $sq);
		if (mysqli_num_rows($result) == 0) {
			mysqli_query($conn, "INSERT INTO shop (shop_name, mail, address) VALUES ('$name', '$mail','$phone')");
			echo '<meta http-equiv="refresh" content = "0; URL=?page=shop_management"/>';
		} else {
			echo "<li>Duplicate shop ID or Name</li>";
		}
	}
}
?>

<div class="container">
	<h2>Adding Shop</h2>
	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
		
		<div class="form-group">
			<label for="txtTen" class="col-sm-2 control-label">Shop Name(*): </label>
			<div class="col-sm-10">
				<input type="text" name="txtName" id="txtName" class="form-control" placeholder="Shop Name" value='<?php echo isset($_POST["txtName"]) ? ($_POST["txtName"]) : ""; ?>'>
			</div>
		</div>

		<div class="form-group">
			<label for="txtMoTa" class="col-sm-2 control-label">Shop Mail(*): </label>
			<div class="col-sm-10">
				<input type="text" name="txtMail" id="txtMail" class="form-control" placeholder="Shop Mail" value='<?php echo isset($_POST["txtMail"]) ? ($_POST["txtMail"]) : ""; ?>'>
			</div>
		</div>
		<div class="form-group">
			<label for="txtMoTa" class="col-sm-2 control-label">Shop Address(*): </label>
			<div class="col-sm-10">
				<input type="text" name="txtPhone" id="txtPhone" class="form-control" placeholder="Shop Address" value='<?php echo isset($_POST["txtPhone"]) ? ($_POST["txtPhone"]) : ""; ?>'>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="btn btn-primary" name="btnAdd" id="btnAdd" value="Add new" />
				<input type="button" class="btn btn-primary" name="btnIgnore" id="btnIgnore" value="Ignore" onclick="window.location='Shop_Management.php'" />

			</div>
		</div>
	</form>
</div>