<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>eCommerce</title>
</head>
<body>
    <?php
    include('connect.php');
    $storeid=$_GET['id'];
    $select="SELECT * FROM product WHERE id= $storeid";
    $query=mysqli_query($connect,$select);
    while($row=mysqli_fetch_array($query)){
?>
    <form action="php/insert.php" method="POST">
         <label >Product Name</label>
         <input type="text" name="name" value="<?php echo $row['name']?>">
         <label >Product Price</label>
         <input type="text" name="price" value="<?php echo $row['price']?>">
         <label >Product Quantity</label>
         <input type="text" name="quantity" value="<?php echo $row['quantity']?>">
         <label >Product Description</label>
         <textarea name="details" cols="30" rows="10"><?php echo $row['details']?></textarea>
         <!-- <input type="text" name="quantity" placeholder="100"> -->
         <label >Product location</label>
         <select name="location" id="location">
             <option value="Gasabo">Gasabo</option>
             <option value="Kicukiro">Kicukiro</option>
             <option value="Nyarugenge">Nyarugenge</option>
            </select>
        <label>Product Image</label>
        <img src="../image/<?php echo $row['image']?>">
        <input type="file" name="image">
        <input type="submit" name="addProduct" value="add Product">
    </form>
    <?php
    }
    ?>
    <?php
    include 'connect.php';
    if(isset($_POST['addProduct'])){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        $details=$_POST['details'];
        $location=$_POST['location'];
        $image=$_POST['image'];
        
        if($query){
            echo"<script>alert('$name successfully added to stock') ,location.replace('../index.php')</script>";
        }
        else{
            echo"<script>alert('failed to removed from stock') ,location.replace('../index.php')</script>";
        }
    }
       
    ?>
</body>
</html>  