<?php
	$title = "Board page";
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

	<div id="board_area">
	  <h1> Free Board</h1>
	  <hr>
	  <table style="text-align:center;">
	    <tr>
		<th width="70">num</th>
		<th width="300">title</th>
		<th width="120">author</th>
		<th width="200">data</th>
	    </tr>
	
	    <?php
		require_once('BoardDBConnect.php');
		if(empty($_POST['filter'])){
			$filter = '';
		}
		else{
			$filter = "where title like '%".$_POST['filter']."%'";
		}
		$query = "select * from board ".$filter." order by numBoard desc";
		$result = pg_query($conn,$query);
			while($row = pg_fetch_row($result)){
			echo "<tr>";
			echo "<td width='70'>$row[0]</td>";
			echo "<td wdith='300'><a href='/view.php?no=$row[0]'>$row[1]</a></td>";
			echo "<td width='120'>$row[2]</td>";
			echo "<td width='200'>$row[4]</td>";
		}
		pg_close($conn);
	    ?>
	  </table>
	  <form action="/board.php" method="POST">
		<input type="text" name="filter" placeholder="title" style="width:300px;" maxlength="20" required>
                <button type="submit">search</button>
          </form>
		<a href="/write.php"><button>Write</button></a>
	</div>
</body>
</html>
