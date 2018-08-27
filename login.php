<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
		<?php

		$user=$_POST['user'];
		$mail=$_POST['email'];
		$gender=$_POST['gender'];
		$dob=$_POST['dateofbirth'];
		$pass=$_POST['pass'];
		$verifiedpass=$_POST['verifiedpass'];
		
		
		
		$handle=fopen("data.txt" , "a");
		fwrite($handle,"Username:$user:");
		fwrite($handle,"Email:$mail:");
		fwrite($handle,"Gender:$gender:");
		fwrite($handle,"DateofBirth:$dob:");
		if($pass==$verifiedpass)
		{
			fwrite($handle,"Password:$pass");
		}
		fclose($handle);
		
		
		?>
	<div class='container' style='border:1px solid #d8d8d8'>
	<h1>Please Login to Continue</h1>
    <form id="rform" name="loginform" method='post' action="login2.php">
        <input type='text' name='loginuser' class='form-control' placeholder='Username'><br>
        <input type="password" name="loginpass" class='form-control' placeholder='Password'><br>
        <input type='submit' name="login" value="login" class='btn btn-default'><br><br>
    </form>
	</div>
	<script src="yo.js"></script>
</body>
</html>