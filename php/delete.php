<?php
    include 'connect.php';

    if(isset($_GET['productId'])){
        $storeId = $_GET['productId'];
        $delete = "DELETE FROM product WHERE id = $storeId";
        $query= mysqli_query($connect, $delete);
        
        if($query){
            echo"<script>alert('successfully removed from stock') ,location.replace('../index.php')</script>";
        }
        else{
            echo"<script>alert('failed to removed from stock') ,location.replace('../index.php')</script>";
        }
    }
?>