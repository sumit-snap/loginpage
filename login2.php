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
		
		$login = "data.txt";
		$contents = file_get_contents($login);
		$loginInfo = explode(":", $contents);
		$user = $loginInfo[1];
    	$pass = $loginInfo[9];
		
		
		$username=$_POST['loginuser'];
		$password=$_POST['loginpass'];

		if($username==$user && $password==$pass)
		{
		echo "Welcome Admin";
		}
		else{
			echo "Access Denied";
		}
			
		
		?>
	<div class='container' style='border:1px solid #d8d8d8'>
	<h1>Please Login to Continue</h1>
    <form id="rform" name="loginform" method='post' action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type='text' name='loginuser' class='form-control' placeholder='Username'><br>
        <input type="password" name="loginpass" class='form-control' placeholder='Password'><br>
        <input type='submit' name="login" value="login" class='btn btn-default'><br><br>
    </form>
	</div>
	<script src="yo.js"></script>
</body>
</html>