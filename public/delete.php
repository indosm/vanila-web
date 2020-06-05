<?php
	$title = "Delete page";
	require_once('head.php');
?>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<meta charset="utf-8">

<body>
  <!-- Nav -->
	<nav id="nav" style="text-align:center;">
		<a href="/index.php"><span>HOME</span></a>
		<a href="/board.php"><span>BOARD</span></a>
	</nav>
  <!-- Main -->

	<div id="board_area">
	  <?php
            require_once('BoardDBConnect.php');
                $num = $_GET['no'];
                $query = "select * from board where numBoard='".$num."'";
                $result = pg_query($conn,$query);
                $row = pg_fetch_row($result);
            pg_close($conn);
          ?>

	  <article id="home" class"panel">
		<header>
		<form action="/delete_ok.php?no=<?php echo $row[0];?>" method="POST">
			title	: <?php echo $row[1]; ?><br>
			author	: <?php echo $row[2]; ?><br>
			content	: <?php echo $row[3]; ?><br>
			password : <input type="text" name="password" placeholder="pw" minlength="4" maxlength="4" required><br>
			<button type="submit">DELETE</button>
			<button type="button" onclick="location.href='javascript:history.back();'">Back</button>
		</form>
		</header>
	</div>
</body>
</html>
