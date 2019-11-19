<?php
	$query = '
			SELECT 
				media.media_id,
				media.title,
				media.type,
				media.img,
				authors.name as author,
				authors.surname,
				publisher.name as publisher,
				media.publish_date as dat,
				media.isbn,
				media.availability

				FROM media 
				INNER JOIN publisher ON publisher_id = FK_publisher
				INNER JOIN authors ON author_id = FK_author 
				
				';
?>