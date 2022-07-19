<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" style="margin-top: -450px; margin-bottom: 450px; ">
    <table border = "1" align = "center">
        <th>Product_Id</th>
        <th>Category_Id</th>
        <th>Product</th>
        <th>Image</th>
        <th>Price</th>
        <th>Action</th>
        <?php
        foreach($data as $d)
        {
        ?>
        <tr>
            <td><?php echo $d->pro_id; ?></td>
            <td><?php echo $d->cat_id; ?></td>
            <td><?php echo $d->pro_name;?></td>
            <td><?php echo $d->pro_image; ?></td>
            <td><?php echo $d->pro_price; ?></td>
            <td><a href="delete_product?delid=<?php echo $d->pro_id;?>">Delete</a> |
            <a href="edit_product?eid=<?php echo $d->pro_id;?>">Edit|
        </a></td>
        </tr>
        <?php
        }
        ?> 
    </table>
</form>
</body>
</html>
