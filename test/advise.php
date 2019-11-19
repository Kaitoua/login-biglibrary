<?php 
ob_start();
session_start();
require_once 'actions/db_connection.php';
require_once 'queries/query_login.php';
require_once 'head_component.php';


if($_POST['id_del']){

	echo '   <h1 class="text-center mb-5"> Are you sure you want to delete it?  </h1>  
	<div class="d-flex justify-content-around">	
		<form action="actions/delete.php" method="POST" accept-charset="utf-8">
			<input type="hidden" name="delete" value="'.$_POST['id_del'].'">
			<input type="submit" class="btn btn-danger" value="DELETE">
		</form>

		<form action="individual.php?id='.$_POST['id_del'].'" method="POST" accept-charset="utf-8">
		<input type="submit" name="delete" value="Cancel"  class="btn btn-dark">
		</form>
	</div>
	';


}else{header('Location: index.php');}
$conn->close();
require_once 'footer_component.php';
?>


<?php ob_end_flush(); ?>