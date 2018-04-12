<!DOCTYPE html>
<html>
<head>
	<title>Stage  </title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div>
		<div class="header">
	        <h4 class="home">Home</h4>
	        <p class="T-text">The time is: </p>
	         <p class="time"> <?php $dt = new DateTime();
			echo $dt->format('H:i:a'); ?> </p>
		</div>
		<div class="img">
		<p class="text">BRINGING THE <br/> UNIVERSE <br/>  TO YOU <br/> COMING SOON </p>
		</div>
	</div>
</body>
</html>