<?php
	$conn = pg_connect("host=project-postgres dbname=db user=test password=test");
	if(!$conn){
		die("Connection Error");
	}
?>	

