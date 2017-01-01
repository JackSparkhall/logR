<?php
session_start();
require 'header.php';
require 'navbar.php';
if (isset($_SESSION['login_user'])){
	$uName = $_SESSION['login_user'];
	echo "<br><br><h1>Hi " . $uName . "</h1>";
}else{
	echo "<br><br><h1>You are currently not logged in</h1>";
	echo "<h1>Please enter a username and password</h1>";
};

	if (isset($_SERVER['HTTP_REFERER'])){
	    if (($_SERVER['HTTP_REFERER'] == 'logProcessor.php')){
	        echo '<h3>' . 'INCORRECT LOGIN INFORMATION' . '</h3>';
	}};
?>

<br>
<form action="logProcessor.php" method="POST">
<fieldset>
<div>
    <label for="">Username</label>
    <input type="text" name="username" placeholder="username" id="" /><br><br> 
</div>
<div>
    <label for="">Password</label>
    <input type="text" name="password" placeholder="********" id="" /><br><br> 
</div>
<button type="submit" class="btn btn-success">Submit</button>
</fieldset>
</form>
<br>
<h3>Don't have a profile? Create one down here</h3>
<br>
<form action="profileCreate.php" method="POST">
	<fieldset>
<button type="submit" class="btn btn-success">Create a Profile</button>
	</fieldset>
	</form>
  
  
 <?php
 require 'footer.php'
 ?>