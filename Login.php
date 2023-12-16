<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery-3.2.0.min.js" />
</script>
<script src="js/jquery.dataTables.min.js" />
</script>
<script src="js/dataTables.bootstrap.min.js" />
</script>
<?php


if (isset($_POST['btnLogin'])) {
	$us = $_POST['txtUsername'];
	$pa = $_POST['txtPass'];

	$err = "";
	if ($us == "") {
		$err .= "Enter Username, please<br/>";
	}
	if ($pa == "") {
		$err .= "Enter Password, please<br/>";
	}

	if ($err != "") {
		echo $err;
	} else {
		include_once("connection.php");
		$pass = md5($pa);
		$res = mysqli_query($conn, "SELECT * FROM customer WHERE username = '$us' AND password = '$pass'") or die(mysqli_error($conn));
		$row = mysqli_fetch_array($res);
		if (mysqli_num_rows($res) == 1) {
			$_SESSION["us"] = $us;
			$_SESSION["admin"] = $row["role"];
			echo '<meta http-equiv="refresh" content = "0; URL=index.php"/>';
		} else {
			echo "You loged in fail";
		}
	}
}
?>
<h1 align='center'>Login</h1>
<form id="form1" name="form1" method="POST" action="">
	<div class="row">
		<div class="form-group">
			<label for="txtUsername" class="col-sm-2 control-label" align='right'>Username(*): </label>
			<div class="col-sm-10">
				<input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" value="<?php if (isset($_POST['txtUsername'])) echo $_POST['txtUsername'] ?>" />
			</div>
		</div>
		<div class="form-group">
			<label for="txtPass" class="col-sm-2 control-label" align='right'>Password(*): </label>
			<div class="col-sm-10">
				<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value="" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="btnLogin" class="btn btn-primary" id="btnLogin" value="Login" />
				<input type="submit" name="btnCancel" class="btn btn-primary" id="btnLogin" value="Cancel" />
			</div>
		</div>
	</div>

</form>