<table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Details</th>
            <th>Location</th>
            <th>Image</th>
            <th colspan="2">Action</th>

        </tr>
        <?php
            include 'connect.php';
            $select = "SELECT * FROM product";
            $query = mysqli_query($connect, $select);
            while($data = mysqli_fetch_array($query)){
        ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['price'] ?></td>
                <td><?php echo $data['quantity'] ?></td>
                <td><?php echo $data['details'] ?></td>
                <td><?php echo $data['location'] ?></td>
                <td>
                    <img src="image/<?php echo $data['image']?>" alt="">
                    </td>
                    <td><?php echo $data['price']*$data['quantity'] ?></td>
                <td>
                  <a href="php/update.php?id=<?php echo $data['id'] ?>">edit</a>
                <td>
                <a href="php/delete.php?productId=<?php echo $data['id'] ?>">
                            delete
                        </a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>