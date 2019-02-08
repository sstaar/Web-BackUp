<?php
	$user_Name	=	"";
	$user_Pass	=	"";
	$user_Mail	=	"";
	$succes		=	0;

	if (isset($_POST['register']))
	{
		ini_set("display_errors", "On");
		$user_Name	=	$_POST['username'];
		$user_Pass	=	$_POST['password'];
		$user_Passcon	=	$_POST['password2'];
		$user_Mail	=	$_POST['email'];
		$con		=	mysqli_connect("localhost", "root", "123456", "Users");
		$errors		=	array();

		function	check()
		{
			$res	=	mysqli_query($GLOBALS['con'], "select * from users");

			while ($user = mysqli_fetch_object($res))
				if ($user->Uname == $GLOBALS['user_Name'] || $user->Email == $GLOBALS['user_Mail'])
				{
					mysqli_free_result($res);
					return (1);
				}
			mysqli_free_result($res);
			return (0);
		}
		
		if (check() == 1)
			array_push($errors, "Email or Username already used.");
		if (empty($user_Name))
			array_push($errors, "Please enter a Username.");
		if (empty($user_Mail))
			array_push($errors, "Please enter an Email.");
		if (empty($user_Pass))
			array_push($errors, "Please Enter a Password.");
		if ($user_Pass != $user_Passcon)
			array_push($errors, "Passwords do not March.");

		if (count($errors) == 0)
		{
			mysqli_query($con, "insert into users (Uname, Email, Password) values ('$user_Name', '$user_Mail', '$user_Pass')");
			echo "Account created successfuly";
			$succes	=	1;
			//header('Location: ../index.php');
		}
	}
?>
