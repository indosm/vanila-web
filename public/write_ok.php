<?php
	$title = $_POST[title];
	$author = $_POST[author];
	$content = $_POST[content];
	$password = $_POST[password];
	require_once('BoardDBConnect.php');
        $query = "select * from board order by numBoard desc";
	$result = pg_query($conn,$query);
	$row = pg_fetch_row($result);
	if(!$row){
		$num=1;
	}
	else{
		$num=$row[0]+1;
	}
	$query = "insert into board values(".$num.", '".$title."', '".$author."', '".$content."', '".date("Y-m-d H:i")."', '".$password."')";
	$result = pg_query($conn,$query);

	if(!$result) {
		echo '<script>alert("Error in Writing New Board");';
		echo 'history.back();</script>';
		exit;
	}
	else{
		echo '<script>alert("Done");';
		echo 'location.href="/board.php";</script>';
	}
?>
