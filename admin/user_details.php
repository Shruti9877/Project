<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="4" align="center" style="margin-top: -450px; margin-bottom: 350px; margin-right: 100px;" >
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Gender</th>
            <th>Language</th>
            <th>Country</th>
            <th>Action</th>
        </tr>
        <?php
        foreach($data as $d)
        {
        ?>
        <tr>
            <td><?php echo $d->r_id; ?></td>
            <td><?php echo $d->name; ?></td>
            <td><?php echo $d->email; ?></td>
            <td><?php echo $d->bio; ?></td>
            <td><?php echo $d->gender; ?></td>
            <td><?php echo $d->language; ?></td>
            <td><?php echo $d->cname; ?></td>
            <td><a href="delete?delid=<?php echo $d->r_id;?>">Delete</a> |
            <a href="edit?eid=<?php echo $d->r_id;?>">Edit|
        </a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>