
<?php


include 'connect2.php';



if (isset($_GET['id'])) {
   $res = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
}


if(isset($_POST['update'])){


   $collection->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
       ['$set' => ['name' => $_POST['fullname'], 'email' => $_POST['email'],'place'=> $_POST['place'],'pname'=>$_POST['pname'],
	   'category'=>$_POST['category'],'description'=>$_POST['description'],'price'=>$_POST['price'],'quantity'=>$_POST['quantity']]]
   );
	echo "!!Data Updated";


   header("Location: view.php");
}


?>

<html>
<head>
<title> Update Inventory </title>
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
        <h1><center> UPDATE PRODUCT INVENTORY </center></h1>
        <a href="logout.php"  class="no-underline"><h3>LogOut</h3></a>
        <a href="edit1.php"  class="no-underline"><h3>Back</h3></a>
    </header>
<form  method="POST">
<center>


<input type="text" name="fullname"   value="<?php echo $res->name;?>"><br><br>
<input type="email" name="email"    value="<?php echo $res->email;?>"><br><br>
<input type="text" name="place"   value="<?php echo $res->place;?>"><br><br>
<input type="text" name="pname"   value="<?php echo $res->pname;?>"><br><br>
<input type="text" name="category"   value="<?php echo $res->category;?>"><br><br>
<input type="text" name="description"   value="<?php echo $res->description;?>"><br><br>
<input type="text" name="quantity"   value="<?php echo $res->quantity;?>"><br><br>
<input type="text" name="price"   value="<?php echo $res->price;?>"><br><br>

<input type="submit" name="update" value="Update">
</center>


</form>
</body>
</html>