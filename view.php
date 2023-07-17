<?php
include 'connect2.php';
$result=$collection->find();
?>
<html>
<head>
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
					<a href="homepage2.php"  class="no-underline"> Previous Page  </a>

    </header>
	<center>
	<table border="2" width="60%" bgcolor="yellow">
	<br><br>

<tr>
<th> Name </th>
<th> Email </th>
<th> Place </th>
<th> Product Name </th>
<th> Category </th>
<th> Description </th>
<th> Price </th>
<th> Quantity </th>
</tr>
<?php
foreach($result as $res){
	
?>
<tr>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['email'];?></td>
<td><?php echo $res['place'];?></td>
<td><?php echo $res['pname'];?></td>
<td><?php echo $res['category'];?></td>
<td><?php echo $res['description'];?></td>
<td><?php echo $res['price'];?></td>
<td><?php echo $res['quantity'];?></td>
</tr>
<?php
}
?>


</table>
</center>
</body>
</html>