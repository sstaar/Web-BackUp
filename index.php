<?php include ('after.php') ?>
<!DOCTYPE html>
<html>
   <head>
	   <title>Roger</title>
	   <link rel = "stylesheet" href = "main.css?<?php echo time(); ?>" >
   </head>
   
   <body>
	   <div class = "test">
		   <div class = "avatar">
		   </div>

		   <div class = "login">
			   <div class = "img">
				   <a href = ""><img src = "logo.png" width = "200rem"></a>
			   </div>
			
			   <?php include ('logs.php') ?>

			   <form action = "" method = "POST">
			   	<div class = "username">
					   <div class = "name">
						   <p>Username</p>
					   </div>

					   <div class = "field">
					   	   <input type = "text" placeholder = "Enter your username" name = "username" size = "30">
					   </div>
				   </div>

			 	  <div class = "username">
					   <div class = "name">
					   	   <p>Password</p>
					   </div>

					   <div class = "field">
				 	  	   <input type = "password" placeholder = "Enter your password" name = "password" size = "30">
					   </div>
			  	 </div>

			 	  <div class = "button">
					   <button type = "submit" name = "login">Log In</button>
			 	  </div>
			   </form>
			   <div class = "fc">
				   <div class = "reg">
					   <a href = "#">Forgot password</a>
				   </div>

				   <div class = "reg">
					   <a href = "./register/register.php">Create new account</a>
				   </div>
			   </div>
		   </div>
	   </div>
   </body>
</html>
