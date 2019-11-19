<?php
ob_start();
session_start();
require_once 'actions/db_connection.php';
require_once 'queries/query_drop_menu.php';
require_once 'queries/query_login.php';
if(!$_POST or isset($_POST['default'])){
		$where = '';

	}elseif(isset($_POST['genre'])){
		$where .= 'where "'.$_POST['genre'].'" = media.genre';

	}elseif(isset($_POST['autore'])){
		$where .= 'where '.$_POST['author_select'].' = authors.author_id';
			
	}elseif(isset($_POST['firma'])){
		$where .= 'where '.$_POST['publisher_select'].' = publisher.publisher_id';
			
	}elseif(isset($_POST['type_sort'])){
		$where .= 'where "'.$_POST['type'].'" = media.type';
			
	}else{$where = '';}




include_once 'queries/query_media_where.php';
require_once 'head_component.php';


// if session is not set this will redirect to login page

// select logged-in users details

?>


 
       


	
<div class="row" id="row">
	
	<div class="col-lg-8">

	
				
<?php

		$find = $conn->query($query);


		if($find->num_rows > 0){

			echo '<div class="">';
			while ($row = $find->fetch_assoc()) {
	
				echo '
					<a href="individual.php?id='.$row['media_id'].'">
					<div class="media">
						<img width="200px" class="listimg p-3" src="'.$row['img'].'" class="mr-3" >
						<div class="p-3 media-body">
							<h5 class="mt-0">'.$row['title'].'</h5>
					
							<span>Written by: <strong>'.$row['author'].' '.$row['surname'].'</strong></span>
							<p>Published by: <strong> '.$row['publisher'].'</strong>, '.$row['dat'].'</p>
							<span>ISBN: '.$row['isbn'].'</span>
							<p>Availability: <strong> '.$row['availability'].'</strong></p>
						</div>
					</div>
					</a>
					<hr>';
			}
			echo "</div>";
		}else{
			echo "no media";
		}

?> 
</div>

<div class="col-lg-4">
	<div id="rpannel">
				
	<h3 class="text-center">Sort</h3>
	<hr>

	<div>
		<form class="d-flex justify-content-end" action="index.php" method="POST" accept-charset="utf-8">
			<select name="genre" >
				  <option  value="" disabled selected>Select Genre</option>
				  <option value="horror">horror</option>
				  <option value="romance">romance</option>
				  <option value="adventure">adventure</option>
				  <option value="drama">drama</option>
				  <option value="rock">rock</option>
				  <option value="sport">sport</option>
			</select>
			<input class="w-50 btn-dark" type="submit" name="sort" value="Genre">
		</form>	
	</div>
	<hr>

	<div>
		<form class="d-flex justify-content-end" action="index.php" method="POST" accept-charset="utf-8">
			<select name="type" >
				  <option  value="" disabled selected>Select Type</option>
				  <option value="cd">cd</option>
				  <option value="book">book</option>
				  <option value="dvd">dvd</option>
			</select>
			<input class="w-50 btn-dark" type="submit" name="type_sort" value="Type">
		</form>	
	</div>
	<hr>

	<div>
		<form class="d-flex justify-content-end" action="index.php" method="POST" accept-charset="utf-8">
			<select name="author_select">';
				<option  value="" disabled selected>Select Author</option>
				<?php
				if($authors->num_rows > 0){
					while ($auth = $authors->fetch_assoc()) {
	 				echo '<option value="'.$auth['id_auth'].'">'.$auth['author'].' '.$auth['surname'].'</option>';} 
	 				}
	 			?>
			</select>
			<input class="w-50  btn-dark" type="submit" name="autore" value="author">
		</form>	
	</div>
	<hr>

	<div>
		<form class="d-flex justify-content-end" action="index.php" method="POST" accept-charset="utf-8">
			<select name="publisher_select">';
				<option  value="" disabled selected>Select Publisher</option>
				<?php
				if($publisher->num_rows > 0){
					while ($row_publish = $publisher->fetch_assoc()) {
	 				echo '<option value="'.$row_publish['pub_id'].'">'.$row_publish['pub_name'].'</option>';} 
	 				}
	 				$conn->close();
	 			?>
			</select>
			<input class="w-50  btn-dark" type="submit" name="firma" value="publisher">
		</form>	
	</div>
	<hr>

	<div>
		<form class="d-flex justify-content-end" action="index.php" method="POST" accept-charset="utf-8">
			<input class="w-100 btn-dark" type="submit" name="default" value="View All">
		</form>
	</div>
	<hr>




	
			</div>	
		</div>
	</div>	
	
	</div> 

<?php require_once 'footer_component.php';?>	

<?php ob_end_flush(); ?>
