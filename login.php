<?php  
session_start();//session starts here  
  
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
