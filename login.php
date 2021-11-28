<?php
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","deboxglobal");
if($conn){
	echo"connect";
}else{
	echo"no connect";
}
$query="insert into student(username,password)values('$username','$password')";	
$data=mysqli_query($conn,$query);
if($data){
	echo"<script>
	alert('Registration Successfully')</script>";
}else{
echo"<script>
	alert('Registration Fail')</script>";	
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Login Page</title>
<style>
body{
	font-family:Calibri,Helvetica,sans-serif;
	background-color:pink;
}
button{
	background-color:blue;
	width:100%;
	color:orange;
	padding:15px;
	margin:10px 0px;
	border:none;
	cursor:pointer;
}
form{
	background-color:3px solid green;
}
input[type=text],input[type=password]{
	width:100%;
	margin:8px 0;
	padding:12px 20px;
	display:inline-block;
	border:2px solid green;
	box-sizing:border-box;
}
.container{
	padding:25px;
	background-color:lightblue;
}
button:hover{
	opacity:0.7;
}
.cancelbtn{
	width:auto;
	padding:10px 18px;
	margin:10px 5px;
}
</style>
</head>
<body>
<center><h1>Student Login Form</h1></center>
<form action="" method="POST">
<div class="container">
<label>Username:</label>
<input type="text" placeholder="Enter Username" name="username"required>
<label>Password:</label>
<input type="password" placeholder="Enter Password"name="password"required>
<label>Login Press:</label>
<button type="submit" value="LOGIN" name="submit">LOGIN</button>
<input type="checkbox" checked="checked">Remember me
<button type="button" class="cancelbtn">Cancel</button>
Forgot<a href="#">password</a>
</div>
</form>
</body>
</html>