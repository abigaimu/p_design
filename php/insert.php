<?php
include 'connect.php';
if(isset($_POST['addProduct'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $details=$_POST['details'];
    $location=$_POST['location'];
    $image=$_POST['image'];

    if($name == ""){
        echo"<script>alert('Fill product name') ,location.replace('../index.php')</script>";
    }
    else if($price == ""){
        echo"<script>alert('Fill product Price') ,location.replace('../index.php')</script>";
    }
    else if($quantity == ""){
        echo"<script>alert('Fill product Quantity') ,location.replace('../index.php')</script>";
    }
    else if($details == ""){
        echo"<script>alert('Fill product Deatils') ,location.replace('../index.php')</script>";
    }
    else if($price == ""){
        echo"<script>alert('Fill product Price') ,location.replace('../index.php')</script>";
    }
    else{
        $insert = "INSERT INTO product VALUES(NULL,'$name','$price','$quantity','$details','$location','$image')";
        $query = mysqli_query($connect, $insert);
        
        if($query){
            echo"<script>alert('$name successfully added to stock') ,location.replace('../index.php')</script>";
        }
    }
}
