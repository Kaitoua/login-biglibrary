<?php 
require_once 'db_connection.php';

if($_POST['delete']){


	$id = $_POST['delete'];


	$queryD = "DELETE FROM media WHERE media_id = {$id}";

	if($conn->query($queryD) === true){

			 header('location:../home.php');

		}else{

			echo '<a href="../index.php">..Sorry try again</a>';
		}

		}else{header('Location: ../home.php');}

$conn->close();		
?>
		