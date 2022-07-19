<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center" style="margin-top: -450px; margin-bottom: 350px;" >
        <tr>
            <th> .Id. </th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <?php
        foreach($data as $d)
        {
        ?>
        <tr>
            <td><?php echo $d->cat_id; ?></td>
            <td><?php echo $d->cat_name; ?></td>
            
            <td><a href="delete_category?delid=<?php echo $d->cat_id;?>">Delete</a> |
            <a href="edit_category?eid=<?php echo $d->cat_id;?>">Edit|
        </a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>