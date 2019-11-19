<?php
ob_start();
session_start();
include_once('actions/db_connection.php');
require_once 'queries/query_login.php';
include_once('head_component.php');

if ($_GET['id']) {


   $id = $_GET['id'];

   $sql = "SELECT 
   				media.media_id,
   				media.genre,
				media.title,
				media.type,
				media.img,
				media.short_description as des_short,
				authors.name as author,
				authors.surname,
				publisher.name as publisher,
				media.publish_date as dat,
				media.isbn,
				media.availability

   		   FROM media 
		   INNER JOIN publisher ON publisher_id = FK_publisher
		   INNER JOIN authors ON author_id = FK_author 
           WHERE media_id = {$id}" ;

   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

   $conn->close();
}



echo '
		<div id="individual " class="">
		 	<div class="text-center ">
		 		<img id="img_ind" width="400px" src="'.$data['img'].'">
		 	</div>
		 	<div class="text-center ">
		 		<h2>'.$data['title'].'</h2>
		 	</div>
		 	<div class="text-center " id="text-text">
		 		<p>'.$data['des_short'].'</p>
		 	</div>
		 	<div id="add_info" class="d-flex justify-content-around mt-5">
		 		<div>
		 			<p>Writen by: </p><p class="mb-5"><strong>'.$data['author'].' '.$data['surname'].'</strong></p>
		 		</div>
		 		<div>
		 			<p>Published by: </p><p class="mb-5"><strong> '.$data['publisher'].'</strong>, '.$data['dat'].'</p>
		 		</div>
		 		<div>
		 			<p class="">ISBN: '.$data['isbn'].'</p>
		 			<p class="mb-5">Availability: <strong> '.$data['availability'].'</strong></p>
		 		</div>	
		 	</div>
		 		<div class="d-flex justify-content-around mt-5">
		 			<div>
				 		<form action="advise.php" method="POST" >

				 			<input type="hidden" name="id_del" value="'.$data['media_id'].' ">
				 			<input type="submit" id="canc" name="" value="Delete" class="btn btn-danger">

				 		</form>
				 	</div>
				 	<div>
				 		<form action="edit.php" method="POST" >

				 			<input type="hidden" name="id_ed" value="'.$data['media_id'].'">
				 			<input type="submit" value="Edit" class="btn btn-dark">

				 		</form>
				 	</div>
		 		</div>
		 </div>

	</div> ';




 ?>


<?php include_once('footer_component.php'); ?>

<?php ob_end_flush(); ?>