<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" style="margin-top: -450px; margin-bottom: 350px; margin-right: 120px;">
    <table border="2" align="center">
        <tr>
            <td>Categories</td>
            <td><input type="text" name="cat_name" value="<?php echo $fetch_c->cat_name; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"  align="center">
                <input type="submit" name="update" value="update">
            </td>
        </tr>
    </table>
</form>
</body>
</html>