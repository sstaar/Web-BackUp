<?php
	SESSION_START();
	$user_Name	=	"";
	$user_Password	=	"";

	if (isset($_POST['login']))
	{
		$errors		=	array();
		$user_Name	=	$_POST['username'];
		$user_Password	=	$_POST['password'];
		$con		=	mysqli_connect("localhost", "root", "123456", "Users");

		ini_set("display_errors", "On");
		//phpinfo();
		function check()
		{
			$result		=	mysqli_query($GLOBALS['con'], "select * from users");

			while ($user = mysqli_fetch_object($result))
				if ($user->Uname == $GLOBALS['user_Name'])
				{
					if ($user->Password == $GLOBALS['user_Password'])
					{
						mysqli_free_result($result);
						return (1);
					}
					else
					{
						mysqli_free_result($result);
						return (-1);
					}
				}
			mysqli_free_result($result);
			return (0);
		}
		if (empty($user_Name))
			array_push($errors, "Please enter a Username.");
		if (empty($user_Password))
			array_push($errors, "Please enter a Password.");
		if (check() == -1)
			array_push($errors, "Password is incorrect.");
		if (check() == 0 && !empty($user_Name) && !empty($user_Password))
			array_push($errors, "User does not exist.");
		if (check() == 1)
		{
			$_SESSION['User'] = $user_Name;
			header("Location: connected/connected.php");
		}
	}
?>
