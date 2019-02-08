<?php if ($edit == 1): ?>

	<div class = "edit">
			   <div class = "img">
				<a href = "../index.php"><img src = "../logo.png" width = "160rem"></a>
			   </div>
		<form action = "" method = "POST">
			<div class = "epart">
				<div class = "ename"><p>First Name :</p></div>
				<div class = "evalue"><input type = "text" name = "fname"></div>
			</div>

			<div class = "epart">
				<div class = "ename"><p>Last Name :</p></div>
				<div class = "evalue"><input type = "text" name = "lname"></div>
			</div>

			<div class = "epart">
				<div class = "ename"><p>Age :</p></div>
				<div class = "evalue"><input type = "text" name = "age"></div>
			</div>

			<div class = "epart">
				<div class = "ename"><p>Favorite Food :</p></div>
				<div class = "evalue"><input type = "text" name = "food"></div>
			</div>

			<div class = "epart">
				<div class = "ename"><p>About :</p></div>
				<div class = "evalue"><input type = "text" name = "des"></div>
			</div>

			<div class = "save">
				<button type = "submit" name = "save">Save</button>
			</div>
		</form>
	</div>

<?php endif ?>

<?php

if (isset($_POST['save']))
{
	$newfname	=	$_POST['fname'];
	$newlname	=	$_POST['lname'];
	$newage		=	$_POST['age'];
	$newfood	=	$_POST['food'];
	$newdes		=	$_POST['des'];
	$id		=	$_USER['ID'];

	if (!$newfname)
		$newfname	=	$_USER['Fname'];
	if (!$newlname)
		$newlname	=	$_USER['Lname'];
	if ($newage == 0)
		$newage		=	$_USER['Age'];
	if (!$newfood)
		$newfood	=	$_USER['Food'];
	if (!$newdes)
		$newdes		=	$_USER['Des'];

	mysqli_query($con, "UPDATE users SET Fname='$newfname', Lname='$newlname', Age='$newage', Food='$newfood', Des='$newdes' WHERE ID='$id'");
	header("Location: ./connected.php");
}

?>
