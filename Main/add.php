<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['add'])){
		$name = $_POST['name'];
		$test1 = $_POST['test1']; 
		$test2 = $_POST['test2'];
		$test3 = $_POST['test3'];
		
		mysqli_query($conn, "INSERT INTO `student` VALUES('', '$name', '$test1', '$test2', '$test3')") or die(mysqli_error());
		header("location: index.php");
	}
?>