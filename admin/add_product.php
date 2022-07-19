<form method="POST" enctype="multipart/form-data" style="margin-top: -450px; margin-bottom: 350px; margin-right: 120px;">
    <table border="1" align = "center" >
        <tr>
            <td>Category</td>
            <td>
                <select name="category" id="">
                    <option value="-Select-"></option>
                <?php
                    foreach($all_cat as $c)
                    {
                ?>
                    <option value="<?php echo $c->cat_id;?>"><?php echo $c->cat_name;?></option>
                <?php
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Product </td>
            <td><input type="text" name="pro_name"></td>
        </tr>
        <tr>
            <td>Pro_Image</td>
            <td><input type="file" name="pimg"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="pro_price"></td>
        </tr>
        <tr>
        <td colspan = "2" align = "center">
            <input type="submit" name="submit" value="Add">
        </td>
        </tr>
    </table>
</form>