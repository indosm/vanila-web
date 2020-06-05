<?php
	$title = "View page";
	require_once('head.php');
?>
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<meta charset="utf-8">

<body>
  <!-- Nav -->
	<nav id="nav" style="text-align:center">
		<a href="/index.php"><span>HOME</span></a>
		<a href="/board.php"><span>BOARD</span></a>
	</nav>
  <!-- Main -->
	<div id="board_read">
	  <?php
	    require_once('BoardDBConnect.php');
                $num = $_GET['no'];
		$query = "select * from board where numBoard='".$num."'";
		$result = pg_query($conn,$query);
		$row = pg_fetch_row($result);
	    pg_close($conn);		    
	  ?>
	  <h2><?php echo $row[1]; ?></h2>
	    <div id="user_info">
		<?php echo $row[2]; ?> &nbsp;&nbsp; <?php echo $row[4]; ?>
	    </div>
	  <hr>
	    <div id="board_content">
		<?php echo $row[3]; ?>
	    </div>

	<div id="board_modify" style="float:right;">
	  <tr>
		<button type="button" onclick="location.href='javascript:history.back();'">Back</button>
		<button type="button" onclick="location.href='modify.php?no=<?php echo $row[0];?>'">Edit</button>
		<button type="button" onclick="location.href='delete.php?no=<?php echo $row[0];?>'">Del</button>
	  </tr>
	</div>
</div>
</body>
