<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link href="styles/adminLogin.css" rel="stylesheet" type="text/css">
    <title>Admin Login</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
<body>
<div class="div" id="div">
<label for="textfield"></label>
<input type="text" name="email" id="textfield" placeholder="Username">
<label for="textfield2"></label>
<input type="text" name="pass" id="textfield" placeholder="Password">
<button type="button" class="btn">Login</button>
<br>
<a id="link-signup" href="forgotPassword.html">Forgot password?</a>
</body>
  
</html>  
  
<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/24/2014 
 * Time: 3:26 AM 
 */  
include("database/db_conection.php");  
  
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
{  
    $admin_name=$_POST['email'];  
    $admin_pass=$_POST['pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('viewUsers.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>  