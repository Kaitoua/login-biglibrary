<?php
require_once 'db_connection.php';

	if($_POST) {
		
		$id = $_POST['id'];
	   	$title = trim($_POST['title']);
	   	$img = $_POST['img'];
	   	$isbn = trim($_POST[ 'isbn']);
		$des_short = trim($_POST[ 'desc_s']);
		$dat = $_POST[ 'date'];
		$type = $_POST[ 'type'];
		$genre = $_POST[ 'genre'];
		$author = $_POST[ 'author'];
		$publisher = $_POST[ 'publisher'];
		$availability = $_POST[ 'avilablility'];

		$title = strip_tags($title);
		$title = htmlspecialchars($title);
		$isbn = strip_tags($isbn);
		$isbn = htmlspecialchars($isbn);
		$des_short = strip_tags($des_short);
		$des_short = htmlspecialchars($des_short);




   $sql = "UPDATE media SET
   			title = '$title', 
   			img = '$img',
   			isbn = $isbn,
   			short_description = '$des_short', 
   			publish_date = '$dat',
   			type = '$type',
   			genre = '$genre',
   			availability = '$availability', 
   			FK_publisher = $publisher,
   			FK_author = $author
    		WHERE media_id ={$id}" ;

   if($conn->query($sql) == TRUE) {

		header('Location: ../index.php');
}else{echo 'error' . mysqli_error($conn);}
   
}
$conn->close();
?> 