
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        .inputField{
            margin-bottom: 20px;
        }
        input{
            display: block;
        }
        small{
            color: red;
            font-style: none;
            font-weight: bold;
            display: block;
        }
    </style>
</head>
<body>
    <center>
		<h1 style text-decoration: underline>LOGIN USER</h1>
    		<form  method="POST" action="tabel.php">
        		<div class="inputField">
            		<label for="username">Username :</label>
            		<input type="text" name="username" required>
        		</div>
        		<div class="inputField">
            		<label for="password">Password :</label>
            		<input type="password" name="password" required>    
        		</div>
        	<?php if(isset($_GET["error"])) :?>
            	<small>Username atau Password Anda Salah!</small>
        	<?php endif?>
        <button type="submit" name="submit">Login</button>
        <button type="reset" name="reset">Reset</button>
    	</form>
	</center>
</body>
</html>