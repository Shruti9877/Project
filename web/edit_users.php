<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <br>
        <table border="2" align="center">
            <caption>Register Yourself!</caption>
            <tr>
                <td>Name </td>
                <td>
                    <input type="text" name="name" placeholder="abc">
                </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>
                    <input type="email" name="email" id="" placeholder="abc@gmail.com">
                </td>
            </tr>
            <tr>
                <td>Password.</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Bio</td>
                <td><textarea name="bio" placeholder="Add description"></textarea></td>
            </tr>
            <!--<tr>
                <td>Photo</td>
                <td><input type="file" name="photo"></td>
            </tr>-->
            <tr>
                <td>Gender  </td>
                <td><input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                </td>
            </tr>
            <tr>
                <td>Language  </td>
                <td><input type="checkbox" name="language[]" value="Hindi">Hindi
                    <input type="checkbox" name="language[]" value="Gujarati">Gujarati
                    <input type="checkbox" name="language[]" value="English">English
                    <input type="checkbox" name="language[]" value="Other">Other
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
                        ?>
                                <!-- <option value="<?php echo $c->cname;?>"><?php echo $c->cname;?></option> -->
                                <option value="<?php echo $c->cid;?>"><?php echo $c->cname;?></option>
                        <?php
                            }
                            ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="submit">
                
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>
<br>