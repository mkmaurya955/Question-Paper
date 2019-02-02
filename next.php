<?php
	include('registerdb.php');
	include("nextques.php");

	
//session_start();
$tot=$noq=$title="";
if(isset($_POST['submit'])){

$tot=$_POST["total"];
$noq=$_POST["noq"];
$title=$_POST["title"];
}

$_SESSION["noq"] = $noq;
$_SESSION["title"] = $title;


$sql = "CREATE TABLE $title ( 'id' INT PRIMARY KEY, 'question' VARCHAR(100) NOT NULL, 'marks' int NOT NULL) ENGINE = INNODB ";

if (mysqli_query($conn, $sql)) {
    echo "Question Paper created successfully";
} else {
    echo "Error creating paper: " . $conn->error;
}

 
?>