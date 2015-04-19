<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create a new Account</title>
<link href="styles/createAccount.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/open-sans:n3:default.js" type="text/javascript"></script>
<h1>Create a new account</h1>
</head>

<body>
<form method="post">
<div class="div1" id="div1">
<label for="textfield"></label>
<input type="text" name="fname" id="textfield" placeholder="First Name"><br>
<label for="textfield2"></label>
<input type="text" name="lname" id="textfield" placeholder="Last Name"><br>
<label for="textfield3"></label>
<input type="text" name="username" id="textfield" placeholder="Username"><br>
<label for="textfield4"></label>
<input type="password" name="pass1" id="textfield" placeholder="Password"><br>
<label for="textfield5"></label>
<input type="password" name="pass2" id="textfield" placeholder="Re-enter Password"><br>
<label for="textfield6"></label>
<input type="text" name="email" id="textfield" placeholder="Current Email Address"><br>
<label for="textfield7"></label>
<input type="text" name="phone" id="textfield" placeholder="Phone Number"><br>
<label for="textfield8"></label>
<input type="text" name="question" id="textfield" placeholder="Security Question"><br>
<label for="textfield9"></label>
<input type="text" name="answer" id="textfield" placeholder="Security Answer"><br>
<button type="submit" class="btn" name="register" value="register">Create Account</button>
<br>
</div>
</form>
</body>
</html>
  
<?php  
  
$username="root";$password="rootforyou";$database="kanda_test";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die("Unable to connect to database<br>");
if(isset($_POST['register']))  
{  
    $user_fname=$_POST['fname'];//here getting result from the post array after submitting the form.  
	$user_lname=$_POST['lname'];//here getting result from the post array after submitting the form.  
	$user_username=$_POST['username'];//same  
    $user_pass1=$_POST['pass1'];//same  
    $user_email=$_POST['email'];//same  
    $user_phone=$_POST['phone'];//same  
	$user_question=$_POST['question'];//here getting result from the post array after submitting the form.  
    $user_answer=$_POST['answer'];//same  
  if($user_fname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the first name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_lname=='')  
    {  
        echo"<script>alert('Please enter the last name')</script>";  
exit();  
    }  
  
    if($user_username=='')  
    {  
        echo"<script>alert('Please enter the username')</script>";  
    exit();  
    }  
	
	if($user_pass1=='')  
    {  
        echo"<script>alert('Please enter a password')</script>";  
    exit();  
    }  
	
	if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  
	
	if($user_phone=='')  
    {  
        echo"<script>alert('Please enter the phone')</script>";  
    exit();  
    }  
	
	if($user_question=='')  
    {  
        echo"<script>alert('Please enter a valid question')</script>";  
    exit();  
    }  
	
	if($user_answer=='')  
    {  
        echo"<script>alert('Please enter a valid answer')</script>";  
    exit();  
    }  
	
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysql_query($check_email_query);  
  
    if(mysql_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }
//insert the user into the database.  
    $insert_user="INSERT INTO users VALUES ('$user_fname','$user_lname','$user_username','$user_pass1','$user_email','$user_phone','$user_question','$user_answer')";  
mysql_query($insert_user);
mysql_close();
echo"<script>window.open('home.html','_self')</script>";
} 
  
?> 
