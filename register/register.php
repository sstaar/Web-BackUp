<?php include ('check_reg.php') ?>
<!DOCTYPE html>
<html>
   <head>
	   <title>Roger</title>
	   <link rel = "stylesheet" type = "text/css" href = "reg.css?<?php echo time(); ?>" >
   </head>
   
   <body>
	   <div class = "test">
		   <div class = "avatar">
		   </div>

		   <div class = "login">
			   <div class = "img">
				   <a href = "../index.php"><img src = "../logo.png" width = "200rem"></a>
			   </div>

			   <?php include ('errors.php') ?>

			   <form action = "" method = "POST">
				  <div class = "username">
					   <div class = "name">
						   <p>Email</p>
					   </div>

					   <div class = "field">
					   	   <input type = "email" placeholder = "Email" name = "email" size = "30" required>
					   </div>
				  </div>

			   	  <div class = "username">
					   <div class = "name">
						   <p>Username</p>
					   </div>

					   <div class = "field">
					   	   <input type = "text" placeholder = "Username" name = "username" size = "30" required>
					   </div>
				  </div>

			 	  <div class = "username">
					   <div class = "name">
					   	   <p>Password</p>
					   </div>

					   <div class = "field">
				 	  	   <input type = "password" placeholder = "Password" name = "password" size = "30" required>
					   </div>
				  </div>

				  <div class = "username">
					   <div class = "name">
					   	   <p>Password confirmation</p>
					   </div>

					   <div class = "field">
				 	  	   <input type = "password" placeholder = "Repeat password" name = "password2" size = "30" required>
					   </div>
			  	  </div>

			 	  <div class = "button">
					   <button type = "submit" name = "register" >Register</button>
			 	  </div>
			   </form>
			   </div>
		   </div>
	   </div>
   </body>
</html>
