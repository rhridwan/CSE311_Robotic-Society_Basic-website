	<?php

include_once("config.php");
	$bId = $_GET['bId'];
	$sql = "SELECT * from blog where BLOG_ID = '$bId'";
	$query_run = mysqli_query($conn,$sql);

      if (mysqli_num_rows($query_run) > 0) 
      {
 		$result= mysqli_fetch_array($query_run);

        $article = $result['ARTICLE'];
        $tittle = $result['TITTLE'];
        $date = $result['DATE'];
	}

	?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Blogs</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./blog_page.css">

</head>
<body>
	<main>
<div class="triangle"></div>
<div class="triangle-2"></div>
<div class="triangle-3"></div>
<div class="container">

<article>
	<h1>
		<?php
		echo $tittle;
		?>
	</h1>
	<br>
		<?php echo date('d', strtotime($date)).' '.date('F', strtotime($date)).' '.date('Y', strtotime($date)) ?>
	<br>
	<br>
	<p>
		
		<?php echo $article ; ?>

	</p>
</article>
	
</div>
</main>
</body>
</html>