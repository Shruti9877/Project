<?php
if(isset($_COOKIE['uname']))
{
    $u = $_COOKIE['uname'];
}
else
{
    $u = '';
}
if(isset($_COOKIE['password']))
{
    $p = $_COOKIE['password'];
}
else
{
    $p = '';
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <br>
        <table border="4" align="center">
            <caption>Login Yourself!</caption>
            <tr>
                <td>Email </td>
                <td>
                    <input type="email" name="email" value="<?php echo $u;?>"  placeholder="abc@gmail.com">
                </td>
            </tr>
            <tr>
                <td>Password.</td>
                <td><input type="password" name="password" value="<?php echo $p;?>"></td>
            </tr>
            <tr>
                
                <td colspan="2"><input type="checkbox" name="remember"> Remember Me</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="submit">
                
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html> -->
<br>
<br>

<body  style="background: #757F9A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #D7DDE8, #757F9A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #D7DDE8, #757F9A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

;">
    

  <form class="form-horizontal" method="POST" style="border: 2px;">
<fieldset>

<!-- Form Name -->
<legend style="color:#003366;text-align:center;font-weight:bold;font-family: monospace">Login Yourself..!!</legend>

<!-- Text input-->
<!-- <div class="form-group">

  <label class="col-md-4 control-label" for="textinput" > Name</label>  
  
  <div class="col-md-4">
  
  <input id="textinput" name="name" type="text" placeholder="Full Name" class="form-control input-md" required="">
    
  </div>
</div> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email"><i class="fa fa-envelope" aria-hidden="true" ></i>Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="abc@gmail.com" class="form-control input-md" required="" value="<?php echo $u;?>">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password"><i class="fa fa-lock" aria-hidden="true"></i>Password </label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="........." class="form-control input-md" required="" value="<?php echo $p;?>">
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group" align="left" >
  <label class="col-md-4 control-label" for="remember" style="align:left;"></label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="remember-0" style="font-weight:bold;">
      <input type="checkbox" name="remember" id="remember-0" value="1" >
      Remember Me
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group" align="center" >
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
  <!-- <input type="submit" name="submit" value="submit" class="btn btn-primary"> -->
    <button id="submit" name="login" class="btn btn-primary" value="submit">Login</button>
  </div>
</div>

</fieldset>
</form>
</body>
