<?php
 session_start();
require 'header.php';
require 'navbar.php';
require 'config.php';
if (isset($_SESSION['login_user'])){
    $checker = $_SESSION['login_user'];
    $sql = "SELECT * 
            FROM login 
	    	WHERE username='" . $checker . "'";
	$result = $conn->query($sql);
        if ($result->num_rows > 0) {
	        echo '<br>' . '<br>' . 'There are no secrets contained here soz';};
			}else{
               echo' <div class="jumbotron">
                     <h1>You are not logged in. Too bad. This information is hella secret</h1>
	                 <br><br><br>
	                 <h2>Perhaps you should try signing in<h2>
                     </div>';
    };
$conn->close();
require 'footer.php';
?>
 