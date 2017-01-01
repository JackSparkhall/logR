<?php
 session_start();
    require 'header.php';
	require 'navbar.php';
?>
<br>
<h1>Create a profile</h1>
<br>
	<form action="createProcessor.php" method="POST">
	<fieldset>
	<div>
	    <label for="">Username</label>
	    <input type="text" name="username" placeholder="username" id="" /><br><br> 
	</div>
	<div>
	    <label for="">Password</label>
	    <input type="text" name="password" placeholder="********" id="" /><br><br> 
	</div>
	<div>
	    <label for="">Confirm Password</label>
	    <input type="text" name="passwordConf" placeholder="********" id="" /><br><br> 
	</div>
	<button type="submit" class="btn btn-success">Submit</button>
	</fieldset>
  </div>
  
 <?php
 require 'footer.php';
?>