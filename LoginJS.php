<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery-3.2.0.min.js"/></script>
<script src="js/jquery.dataTables.min.js"/></script>
<script src="js/dataTables.bootstrap.min.js"/></script>
<script>
	function process()
    {
        us = document.getElementById("txtUsername");
		pass = document.getElementById("txtPass");

        if(us.value == "")
        {
            alert("Username can't be empty");
            f.txtUsername.focus();
            return false;
        }
        if(us.value.length > 30)
        {
            alert("Username is maximum 30 characters");
            f.txtPassword2.focus();
            return false;
        }
        if(pass.value == "")
        {
            alert("Password can't be empty");
            f.txtPhone.focus();
            return false;
        }
        if(pass.value.length < 6)
        {
            alert("Password is minimum 6 characters");
            f.txtEmail.focus();
            return false;
        }
		return true;
    }
</script>
<h1>Login</h1>
<form id="form1" name="form1" method="GET" action="Loginprocess.php" onsubmit="return process()">
<div class="row">
    <div class="form-group">				    
        <label for="txtUsername" class="col-sm-2 control-label">Username(*):  </label>
		<div class="col-sm-10">
		      <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" value=""/>
		</div>
    </div>  
    <div class="form-group">
		<label for="txtPass" class="col-sm-2 control-label">Password(*):  </label>			
		<div class="col-sm-10">
		      	<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value=""/>
		</div>
	</div> 
	<div class="form-group"> 
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
        	<input type="submit" name="btnLogin"  class="btn btn-primary" id="btnLogin" value="Login"/>
            <input type="submit" name="btnCancel"  class="btn btn-primary" id="btnLogin" value="Cancel"/>
		</div>  
	</div>
 </div>
    
</form>
   