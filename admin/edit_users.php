<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" style="margin-top: -450px; margin-bottom: 350px; margin-right: 20px;">
        <br>
        <table border="2" align="center">
            
            <tr>
                <td>Name </td>
                <td>
                    <input type="text" name="name" value="<?php echo $fetch_user->name;?>">
                </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>
                    <input type="email" name="email" value="<?php echo $fetch_user->email;?>">
                </td>
            </tr>
            <tr>
                <td>Password.</td>
                <td><input type="password" name="password" value="<?php echo $fetch_user->password;?>"></td>
            </tr>
            <tr>
                <td>Bio</td>
                <td><textarea name="bio" ><?php echo $fetch_user->bio;?></textarea></td>
            </tr>
            <!--<tr>
                <td>Photo</td>
                <td><input type="file" name="photo"></td>
            </tr>-->
            <tr>
                <td>Gender  </td>
                <td><input type="radio" name="gender" value="female" 
                <?php
                    $g = $fetch_user->gender;
                    if($g == 'female')
                    {
                        echo "checked='checked'";
                    }
                ?>
                >Female
                <input type="radio" name="gender" value="male"
                <?php
                    $g = $fetch_user->gender;
                    if($g == 'male')
                    {
                        echo "checked='checked'";
                    }
                ?>
                >Male
                <input type="radio" name="gender" value="other"
                <?php
                    $g = $fetch_user->gender;
                    if($g == 'other')
                    {
                        echo "checked='checked'";
                    }
                ?>
                >Other
                </td>
            </tr>
            <tr>
                <td>Language  </td>
                <td><input type="checkbox" name="language[]" value="Hindi"
                <?php
                    $l = $fetch_user->language;
                    $ll= explode(",",$l);
                    if(in_array("Hindi",$ll))
                    {
                        echo "checked='checked'";
                    }
                ?>
                >Hindi
                <input type="checkbox" name="language[]" value="Gujarati"
                <?php
                    $l = $fetch_user->language;
                    $ll= explode(",",$l);
                    if(in_array("Gujarati",$ll))
                    {
                        echo "checked='checked'";
                    }
                ?>
                >Gujarati
                <input type="checkbox" name="language[]" value="English"
                <?php
                    $l = $fetch_user->language;
                    $ll= explode(",",$l);
                    if(in_array("English",$ll))
                    {
                        echo "checked='checked'";
                    }
                ?>
                >English
                <input type="checkbox" name="language[]" value="Other"
                <?php
                    $l = $fetch_user->language;
                    $ll= explode(",",$l);
                    if(in_array("Other",$ll))
                    {
                        echo "checked='checked'";
                    }
                ?>
                >Other
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select name="country">
                        <option value="Select">Select</option>
                        <?php
                            foreach($country as $c)
                            {
                                $cc = $fetch_user->country;
                                if($cc == $c->cid)
                                {
                        ?>
                                <option value="<?php echo $c->cid;?>" selected><?php echo $c->cname;?></option>
                        <?php
                            }
                            else
                            {
                        ?>        
                            <option value="<?php echo $c->cid;?>"><?php echo $c->cname;?></option>
                            <?php
                            }
                        }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="update" value="update">
                
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>