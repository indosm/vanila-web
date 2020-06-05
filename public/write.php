<?php
	$title = "Board page";
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
	  <h1>Free Board</h1>
		<article id="home" class"panel">
			<header>
			<form action="/write_ok.php" method="POST">
				title	: <input type="text" name="title" placeholder="title" style="width:300px;" maxlength="20" required><br>
				author	: <input type="text" name="author" placeholder="author" style="width:300px;" maxlength="20" required><br>
				content	: <textarea name="content" cols="40" rows="10" required placeholder="content"></textarea><br>
				password : <input type="text" name="password" placeholder="pw" minlength="4" maxlength="4" required><br>
				<button type="submit">submit</button>
				<button type="button" onclick="location.href='javascript:history.back();'">Back</button>
			</form>
			</header>
	</div>
</body>
</html>
