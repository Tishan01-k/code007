<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>College</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/1.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > College Information</h3><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						A college management system enables colleges and higher education to manage enrollment, students, faculty, scheduling, grades of the institution.
					</p>
					<p> It makes automated reports on all aspects for data-driven decision-making.</p>
					
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>