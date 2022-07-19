 <!-- <br>
 <br>
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
            <tr>
                <td>Photo</td> 
                <td><input type="file" name="photo"></td>
            </tr>
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
                                <option value="<?php echo $c->cname;?>"><?php echo $c->cname;?></option>
                                <option value="<?php echo $c->cid;?>"><?php echo $c->cname;?></option>
                        <?php
                            }
                            ?>
                     </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="submit">
                <input type="reset" name="reset" value="reset">
                </td>
            </tr>
            
        </table>
    </form>
</body>

  -->
<br>
<br>
<body  style="background: #757F9A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #D7DDE8, #757F9A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #D7DDE8, #757F9A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
;">
    

  <form class="form-horizontal" method="POST" style="border: 2px;" >
<fieldset>

<!-- Form Name -->
<legend style="color:#000066;text-align:center;font-weight:bold;font-family: monospace">Register Yourself..!!</legend>

<!-- Text input-->
<div class="form-group">

  <label class="col-md-4 control-label" for="textinput" ><i class="fa fa-user" aria-hidden="true"></i>Name</label>  
  
  <div class="col-md-4">
  
  <input id="textinput" name="name" type="text" placeholder="Full Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">

  <label class="col-md-4 control-label" for="email"><i class="fa fa-envelope" aria-hidden="true" ></i>Email</label>
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="abc@gmail.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password"><i class="fa fa-lock" aria-hidden="true"></i>Password </label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="........." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea"><i class="fa fa-text-width" aria-hidden="true"></i>Bio</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="bio" placeholder="Add description"></textarea>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group"> 
  <label class="col-md-4 control-label" for="gender"><i class="fa fa-genderless" aria-hidden="true"></i>Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="female" >
      Female
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="male">
      Male
    </label> 
    <label class="radio-inline" for="gender-2">
      <input type="radio" name="gender" id="gender-2" value="other">
      Other
    </label>
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="language[]"><i class="fa fa-language" aria-hidden="true"></i>Language</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="language[]-0">
      <input type="checkbox" name="language[]" id="language[]-0" value="hindi">
      Hindi
    </label>
    <label class="checkbox-inline" for="language[]-1">
      <input type="checkbox" name="language[]" id="language[]-1" value="gujarati">
      Gujarati
    </label>
    <label class="checkbox-inline" for="language[]-2">
      <input type="checkbox" name="language[]" id="language[]-2" value="english">
      English
    </label>
    <label class="checkbox-inline" for="language[]-3">
      <input type="checkbox" name="language[]" id="language[]-3" value="other">
      Other
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="country"><i class="fa fa-globe" aria-hidden="true"></i>Country</label>
  <div class="col-md-4">
    <select id="country" name="country" class="form-control">
        <option value="Select">-Select Country-</option>
        <?php
                foreach($country as $c)
                { 
        ?>
                    
                    <option value="<?php echo $c->cid;?>"><?php echo $c->cname;?></option>
        <?php
                }
        ?>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
  <!-- <input type="submit" name="submit" value="submit" class="btn btn-primary"> -->
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

<!--ACCOUNT-->
<div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login" class="text-danger" style="font-weight:bold;">Login</a>
                </div>

</fieldset>
</form>
</body>
