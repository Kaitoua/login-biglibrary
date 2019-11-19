<?php 
require_once 'db_connection.php';

if($_POST){

	$title =  trim($_POST['title']);
	$img =  trim($_POST['img']);
	$isbn =  trim($_POST['isbn']);
	$desc_s =  trim($_POST['desc_s']);
	$date =  $_POST['date'];
	$type =  $_POST['type'];
	$publisher =  $_POST['publisher'];
	$genre =  $_POST['genre'];
	$author =  $_POST['author'];

	$title = strip_tags($title);
	$title = htmlspecialchars($title);
	$img = strip_tags($img);
	$img = htmlspecialchars($img);
	$isbn = strip_tags($isbn);
	$isbn = htmlspecialchars($isbn);
	$desc_s = strip_tags($desc_s);
	$desc_s = htmlspecialchars($desc_s);

}

/*echo $title.'-'.$author.'-'.$publisher;*/

$query = "INSERT INTO `media`(`title`, `img`, `isbn`, `short_description`, `publish_date`, `type`, `genre`, `FK_publisher`, `FK_author`)
	VALUES  ('$title', '$img', $isbn, '$desc_s', '$date', '$type', '$genre', $publisher,$author)";

if($conn->query($query) === true){
			 header('location:../index.php');
		}else{

			echo '<a href="../index.php">..Sorry try again</a>';
		}

		$conn->close();
 ?>