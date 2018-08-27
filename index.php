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

    <div class='container' style='border:1px solid #d8d8d8'>
	        <h1>Please Register First</h1>
        <form id="rform" name="registerform" method='post' action='login.php'>
            <input type='text' name='user' class='form-control' placeholder='Name'><br>
            <input type='email' name='email' class='form-control' placeholder='Email'><br>
            <select name='gender' class='form-control' placeholder="Select Gender">
                <option value='Male'>Male</option>
                <option value='Female'>Female</option>
            </select><br>
            <input type="date" name='dateofbirth' class='form-control'><br>
            <input type="password" name="pass" class='form-control' placeholder='Password'><br>
            <input type="password" name="verifiedpass" class='form-control' placeholder='Enter Your Password Again'><br>
            <input type='submit' name='login' class='btn btn-default'><br><br>
        </form>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>