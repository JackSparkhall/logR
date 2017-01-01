<?php
require 'config.php';
if (isset($_POST['username']) || isset($_POST['password']) || isset($_POST['passwordConf']) || ($_POST['password'] == $_POST['passwordConf'])){
    $uName = $_POST['username'];
    $pWord = $_POST['password'];
}else{
	header('Location: profileCreate.php');
};

$sql = "INSERT INTO login (username,password)
        VALUES ('" . $uName . "','" . $pWord . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: signIn.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>