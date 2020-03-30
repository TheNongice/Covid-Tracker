<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---- Bulma ---->
	<link rel="stylesheet" href="/css/bulma.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Style -->
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<title>Navbar</title>
	<style>
		.covid-hero {
  			color: white;
  			background-image: url("../img/corona-wall.jpg");
  			background-position: center;
  			background-repeat: no-repeat;
		}

		.eng {
			font-family: 'Noto Sans', sans-serif;
		}

		.th {
			font-family: 'Kanit', sans-serif;
		}
	</style>
</head>
<body>
		<div class="columns">
  			<div class="column">
  				<div class="box has-background-grey th">
  					<h4 class="title is-4 has-text-white">ผู้ติดเชื้อทั้งหมด</h4>
  					<h5 class="subtitle is-5 has-text-white">
  					 <?php echo(1388); ?> ราย</h5>
  				</div>
  			</div>
  			<div class="column">
  				<div class="box has-background-danger has-text-white th">
  					<h4 class="title is-4 has-text-white">เสียชีวิต</h4>
  					<h5 class="subtitle is-5 has-text-white">
  						<?php echo(7); ?> ราย</h5>
  				</div>
  			</div>
  			<div class="column">
  				<div class="box has-background-success th">
  					<h4 class="title is-4 has-text-white">ผู้รักษาหาย</h4>
  					<h5 class="subtitle is-5 has-text-white">
  						<?php echo(111); ?> ราย</h5>
  				</div>
  			</div>
		</div>
</body>
</html>