<?php
ob_start();
session_start();
include_once('actions/db_connection.php');
require_once 'queries/query_login.php';

require_once 'head_component.php';

require_once 'queries/query_drop_menu.php';

if($_POST['id_ed'] ){

	$id = $_POST['id_ed'];

	$queryEdit = "SELECT 
					media.media_id,
					media.genre,
					media.title,
					media.type,
					media.img,
					media.short_description as des_short,
					authors.name as author,
					authors.surname,
					authors.author_id,
					publisher.name as publisher,
					media.publish_date as dat,
					publisher.publisher_id,
					media.isbn,
					media.availability

		   		   FROM media 
				   INNER JOIN publisher ON publisher_id = FK_publisher
				   INNER JOIN authors ON author_id = FK_author 
		           WHERE media_id = {$id}";

		           $place_holder = $conn->query($queryEdit);
		           $ph = $place_holder->fetch_assoc();
		
	}

	
?>  




	<form action="actions/mod.php" method="POST" accept-charset="utf-8" class="mb-5">

		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<h2 class="text-center">Edit</h2>

		<div class="row d-flex justify-content-around create">
					
			<div class="col-lg-4 w-100">
			   
		
				<div>
					<label for="title">Title</label>
				</div>
				<div>
					<input type="text" name="title" value="<?php echo $ph['title'];?>"  required>
				</div>
				<div>
					<label for="img">Image</label>
				</div>
				<select name="img" class="mb-4">
					  <option value="img/book1.png">Book img</option>
					  <option value="img/mu.png">Cd img</option>
					  <option value="img/dv.png">Dvd img</option>
				</select>
				<div>
					<label for="isbn">ISBN</label>
				</div>
				<div>
					<input type="text" name="isbn"  value="<?php echo $ph['isbn'];?>" required>
				</div>
				<div>
					<label for="desc_s">Short description</label>
				</div>
				<div>
					<input type="text" name="desc_s"  value="<?php echo $ph['des_short'];?>" required>
				</div>
				<div>
					<label for="date">Publish Date</label>
				</div>
				<div>
					<input type="date" name="date"  value="<?php echo $ph['dat'];?>" required>
				</div>
				<div>
				<label for="avilablility">Availability</label>
				</div>
				<select name="avilablility" class="mb-4" required>					
					  <option value="Available">Available</option>
					  <option value="Reserved">Reserved</option>
				</select>
				
		</div>
	

		<div class="col-lg-4">
				
				
				<div>
					<label for="type">Type</label>
				</div>
				<select name="type" class="mb-4" required>
					  <option  value="" class="ph_select"  disabled selected ><?php echo $ph['type'];?></option>
					  <option value="book">Book</option>
					  <option value="cd">Cd</option>
					  <option value="dvd">Dvd</option>
				</select>
				<div>
				<label for="genre">Genre</label>
				</div>
				<select name="genre" class="mb-4" required>
					  <option  value="" class="ph_select"  disabled selected><?php echo  $ph['genre'];?></option>
					  <option value="horror">horror</option>
					  <option value="romance">romance</option>
					  <option value="adventure">adventure</option>
					  <option value="drama">drama</option>
					  <option value="rock">rock</option>
					  <option value="sport">sport</option>
				</select>
				<div>
					<label for="author">Author</label>
				</div>
				<select name="author" class="mb-4" required>
						<option  value="" class="ph_select"  disabled selected>
							<?php echo $ph['author'].' '.$ph['surname'];?>
						</option>
						<?php
						if($authors->num_rows > 0){
							while ($riga = $authors->fetch_assoc()) {
			 				echo '<option value="'.$riga['id_auth'].'">'.$riga['author'].' '.$riga['surname'].'</option>';} 
			 				}
			 			?>
				</select>
				<div>
					<label for="publisher">Publisher</label>
				</div>
				<div>
				<select name="publisher" required>
					<option  value="" class="ph_select"  disabled selected>
					<?php echo $ph['publisher'];?>
					</option>
					<?php
					if($publisher->num_rows > 0){
						while ($p_riga = $publisher->fetch_assoc()) {
		 				echo '<option value="'.$p_riga['pub_id'].'">'.$p_riga['pub_name'].'</option>';} 
		 				}
$conn->close();
		 			?>
	 			</select>	
				</div>
				
				<div class="mt-5">
				<input type="submit" class="btn btn-dark" name="submit" value="SAVE">
				</div>
			</div>
		</div>
	</form>



<?php

require 'footer_component.php';
?>

<?php ob_end_flush(); ?>