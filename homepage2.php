<html>
<head>
<title> USER PAGE </title>
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
        <h1><center>PRODUCT INVENTORY </center></h1>
        <a href="logout.php"  class="no-underline"><h3>LogOut</h3></a>
    </header>
    <div class="container">
        <!-- Rest of your page content goes here -->
       <a href="insert.php" class="no-underline"> <h1>Add New Product </h1></a><br><br>
		<a href="view.php"  class="no-underline"> <h1> View All  Products </h1> </a><br><br>
		<a href="edit1.php"class="no-underline"> <h1> Update Your  Product details</h1> </a><br><br>
		<a href="delete1.php"class="no-underline"> <h1> Delete Your Products from Inventory</h1> </a><br><br>
		
    </div>





</body>
</html>