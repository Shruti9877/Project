<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"  enctype="multipart/form-data" style="margin-top: -450px; margin-bottom: 350px; margin-right: 120px;">
        <table border="1" align = "center">
        <tr>
            <td>Category</td>
            <td>
                <select name="category"  >
                  
                <?php
                    foreach($all_cat as $c)
                    {
                        $p = $fetch_p->cat_id;
                        if($p == $c->cat_id)
                        {    
                ?>
                    <option value="<?php echo $c->cat_id;?>" selected><?php echo $c->cat_name;?></option>
                <?php
                    }
                    else
                    {
                ?>
                        <option value="<?php echo $c->cat_id;?>"><?php echo $c->cat_name;?></option>
                <?php
                    }
                }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Product </td>
            <td><input type="text" name="pro_name" value="<?php echo $fetch_p->pro_name; ?>"></td>
        </tr>
        <tr>
            <td>Pro_Image</td>
            <td><input type="file" name="pimg" value=""><?php echo $fetch_p->pro_image; ?></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="pro_price" value="<?php echo $fetch_p->pro_price; ?>"></td>
        </tr>
        <tr>
        <td colspan = "2" align = "center">
            <input type="submit" name="update" value="Update">
        </td>
        </tr>
        </table>
    </form>
</body>
</html>