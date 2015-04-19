<?php  
session_start();//session starts here  
  
?>  
  
  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link href="styles/login.css" rel="stylesheet" type="text/css">
    <title>Login</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
  
<body>
<form method="post">
<div class="div" id="div">
<label for="textfield"></label>
<input type="text" name="username" id="textfield" placeholder="Username">
<label for="textfield2"></label>
<input type="password" name="pass" id="textfield" placeholder="Password">
<button type="submit" name="login" value="login" class="btn">Login</button>
<br>
<a id="link-signup" href="forgotPassword.html">Forgot password?</a>
</form>
</body>
  
</html>  
  
<?php  
  
$username="root";$password="rootforyou";$database="kanda_test";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die("Unable to connect to database<br>");

if(isset($_POST['login']))  
{  
    $user_username=$_POST['username'];  
    $user_pass=$_POST['pass'];  
    $check_user="select * from users WHERE user_username='$user_username' AND user_pass1='$user_pass'";  
    $run=mysql_query($check_user);  
    if(mysql_num_rows($run)>0)  
    {  
        echo "<script>window.open('home.html','_self')</script>";  
  
        $_SESSION['username']=$user_username;//here session is used and value of $user_email store in $_SESSION.  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  
