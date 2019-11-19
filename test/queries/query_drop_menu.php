<?php 
$query_pub = 'SELECT
			  publisher.publisher_id as pub_id, 
			  publisher.name as pub_name
			  FROM publisher';			
					
$query_authors = '	SELECT 
					authors.author_id as id_auth,
					authors.name as author,
					authors.surname
					FROM authors';
					
$authors = $conn->query($query_authors);
$publisher = $conn->query($query_pub);		
?>