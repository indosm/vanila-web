<?php
	$password = $_POST[password];
	require_once('BoardDBConnect.php');
	$num = $_GET['no'];
	$query = "select * from board where numBoard=".$num;
	$result = pg_query($conn,$query);
	$row = pg_fetch_row($result);

	if($row[5] === $password){
		$query = "delete from board where numBoard=".$num;
		$result = pg_query($conn,$query);
		if(!$result){
			echo '<script>alert("Error in Deleting Board");';
	                echo 'history.back();</script>';
                	exit;
        	}
        	else{
                	echo '<script>alert("Done");';
			echo 'location.href="/board.php";</script>';
			exit;
		}
	}
	else{
		echo '<script>alert("Password is Wrong");';
                echo 'history.back();</script>';
                exit;
	}
?>
