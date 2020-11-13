<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #ffc107;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col"><h1 class="text-monospace">Delete</h1></div>
						</div>
							<?php
								$conn = mysqli_init();
								mysqli_real_connect($conn, 'suphafang.mysql.database.azure.com', 'suphafang@suphafang', 'Fang2545', 'ITFLab', 3306);
								if (mysqli_connect_errno($conn))
								{
								    die('Failed to connect to MySQL: '.mysqli_connect_error());
								}
								$del = mysqli_query($conn, 'DELETE * FROM guestbook WHERE ID = '.$_GET['ID'].'');
								if $del == True {
									echo '<h2>DELETE SUCCESS</h2>';
								}
								else {
									echo '<h2>DELETE UNSUCCESSFUL</h2>';
								}
								mysqli_close($conn);
							?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
