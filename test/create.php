<?php
ob_start();
session_start();
require_once 'actions/db_connection.php';

require_once 'queries/query_drop_menu.php';	



require_once 'queries/query_login.php';

require_once 'head_component.php';



								
?>  




	<form action="actions/add.php" method="POST" accept-charset="utf-8" class="mb-5">
		<h2 class="text-center">Add a new Media</h2>
	<div class="row d-flex justify-content-around create">
					
		<div class="col-lg-4 w-100">
			   
		
				<div>
					<label for="title">Title</label>
				</div>
				<div>
					<input type="text" name="title" required>
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
					<input type="text" name="isbn" required>
				</div>
				<div>
					<label for="desc_s">Short description</label>
				</div>
				<div>
					<input type="text" name="desc_s" required>
				</div>
				<div>
					<label for="date">Publish Date</label>
				</div>
				<div>
					<input type="date" name="date" required>
				</div>
				
		</div>
	

		<div class="col-lg-4">
				

				<div>
					<label for="type">Type</label>
				</div>
				<select name="type" class="mb-4">
					  <option value="book">Book</option>
					  <option value="cd">cd</option>
					  <option value="dvd">Dvd</option>
				</select>
				<div>
				<label for="genre">Genre</label>
				</div>
				<select name="genre" class="mb-4">
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
				<select name="author" class="mb-4">
				<?php
				if($authors->num_rows > 0){
					while ($auth_row = $authors->fetch_assoc()) {
	 				echo '<option value="'.$auth_row['id_auth'].'">'.$auth_row['author'].' '.$auth_row['surname'].'</option>';} 
	 				}
	 			?>
				</select>
				<div>
					<label for="publisher">Publisher</label>
				</div>
				<div>
				<select name="publisher">
				<?php
				if($publisher->num_rows > 0){
					while ($firma_row = $publisher->fetch_assoc()) {
	 				echo '<option value="'.$firma_row['pub_id'].'">'.$firma_row['pub_name'].'</option>';} 
	 				}
	 			?>
	 			</select>	
				</div>
				<div class="mt-5">
				<input type="submit" class="btn btn-dark" name="submit" value="submit">
				</div>
			</div>
		</div>
	</form>

</div>

<?php
$conn->close();
require 'footer_component.php';
?>

<?php ob_end_flush(); ?>

