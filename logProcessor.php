<?php
session_start();
require 'config.php';
$uName = $_POST['username'];
$pWord = $_POST['password'];
$uName = stripslashes($uName);
$pWord = stripslashes($pWord);

$sql = "SELECT * 
        FROM login 
		WHERE password='" . $pWord . "' AND username='" . $uName . "'";
		
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
    	echo '<br>' . "Username: " . $uName . '<br>' . "Password: " . $pWord . '<br>';
	    echo "Correct" . '<br>';
	    $_SESSION['login_user'] = $uName;
	    header('Location: success.php');};
}else{
	 header('Location: signIn.php');
	};
require 'footer.php';
?>