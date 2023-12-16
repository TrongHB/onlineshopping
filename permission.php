<?php
if (isset($_SESSION['us']) == false) {
	header('Location: Login.php');
}else {
	if (isset($_SESSION['admin']) == true) {
		$permission = $_SESSION['admin'];
		if ($permission == '0') {
			echo "<script>You are not authorized to access this page</script>";
			echo '<meta http-equiv="refresh" content = "0; URL=index.php"/>';
			exit();
		}
	}
}
?>