<?php
	$conn = pg_connect("host=project-postgres dbname=db user=test password=test"); // host : docker container name <fixed_value>
	if(!$conn){
		die("Connection Error");
	}
?>	

