<html>
<head>
<title> Add New Product  </title>
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
        <h1> <center>ADDING TO PRODUCT INVENTORY </center></h1>
		        <a href="logout.php"  class="no-underline"><h3>LogOut</h3></a>
				</header>


<form action="#" method="POST">
<center>


<br><input type="text" name="fullname" placeholder="Full Name" required><br><br>
<input type="email" name="email" placeholder="Email" required><br><br>
<input type="text" name="place" placeholder="Place" required><br><br>
<input type="text" name="pname" placeholder="Product Name " required><br><br>
<label for="category">Category:</label>
<select id="category" name="category"><br><br>
    <option value="electronics">Electronics</option>
    <option value="clothing">Clothing</option>
    <option value="home">Home</option>
    <option value="books">Books</option>
</select><br><br>
<label for="description"> Product Description:</label><br><br>

<textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
<input type="number" name="price" placeholder="Price " required><br><br>
<input type="number" name="quantity" placeholder="No.of.Items " required><br><br>



<input type="submit" name="submit" value="Register">
</center>


</form>
</body>
</html>

<?php
include 'connect2.php';

 if(isset($_POST['submit'])){

	$user = array(
	'name' => $_POST['fullname'],
	'email' => $_POST['email'],
	'place' => $_POST['place'],
	'pname' => $_POST['pname'],
	'category' => $_POST['category'],
	
	'description' => $_POST['description'],
	'price' => $_POST['price'],
	'quantity' => $_POST['quantity']
	);
	$collection->insertOne($user);
 
	echo "!!Data inserted";
 }
 
	//header("Location:view.php");

?>