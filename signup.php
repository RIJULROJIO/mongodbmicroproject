<html>
<head>
    <title>Sign Up</title>
    <style>
        header {
            background-color: #333;
            padding: 20px;
            color: #fff;
        }
		h1 {
            margin: 0;
        }
		body {
            font-family: Arial, sans-serif;
            background-color: #88b04b;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: yellow;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
		.no-underline {
        text-decoration: none;
    }
    </style>
</head>
<body>
<header>
        <h1>  SignUp To PRODUCT INVENTORY </h1>
    </header>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="#" method="post"    >
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="submit">Sign Up</button><br><br>
			<a href="homepage.php"  class="no-underline"> Back to Home Page </a>
        </form>
    </div>
</body>
</html>
<?php
include 'accountconnect.php';

 if(isset($_POST['submit'])){

	$user = array(
	'name' => $_POST['username'],
	'email' => $_POST['email'],
	'password' => $_POST['password']
	);
	$collection->insertOne($user);
 
	echo "!!Account Created ";
 }
 
	//header("Location:signup.php");

?>