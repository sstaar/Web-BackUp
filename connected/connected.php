<?php include ('test.php') ?>
<!DOCTYPE html>
<html>
   <head>
	   <title>Roger</title>
	   <link rel = "stylesheet" type = "text/css" href = "con.css?<?php echo time(); ?>" >
   </head>
   
   <body>
	   <div class = "test">
		   <div class = "login">
			   <div class = "img">
				<a href = "../index.php"><img src = "../logo.png" width = "200rem"></a>
			   </div>
	
			   <div class = "info">
				<div class = "part">
					<div class = "pname"><p>First Name :</p></div>
					<div class = "pvalue"><p><?php echo $_USER['Fname']; ?></p></div>
				</div>

				<div class = "part">
					<div class = "pname"><p>Last Name :</p></div>
					<div class = "pvalue"><p><?php echo $_USER['Lname']; ?></p></div>
				</div>

				<div class = "part">
					<div class = "pname"><p>User Name :</p></div>
					<div class = "pvalue"><p><?php echo $_USER['Uname']; ?></p></div>
				</div>

				<div class = "part">
					<div class = "pname"><p>Email :</p></div>
					<div class = "pvalue"><p><?php echo $_USER['Email']; ?></p></div>
				</div>

				<div class = "part">
					<div class = "pname"><p>Age :</p></div>
					<div class = "pvalue"><p><?php echo $_USER['Age']; ?></p></div>
				</div>

				<div class = "part">
					<div class = "pname"><p>Favorite Food :</p></div>
					<div class = "pvalue"><p><?php echo $_USER['Food']; ?></p></div>
				</div>

				<div class = "part">
					<div class = "pname"><p>About :</p></div>
					<div class = "pvalue"><p><?php echo $_USER['Des']; ?></p></div>
				</div>

				<div class = editb>
					<form action = "" method = "POST"><button type = "submit" name = "edit" >Edit</button></form>
					<?php if (isset($_POST['edit']))$edit = 1; ?>
				</div>
			   </div>
		   </div>
		</div>

		<?php include ('edit.php');?>
   </body>
</html>
