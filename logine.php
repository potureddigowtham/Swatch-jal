<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee Login</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
    <style>
.div2{
position:absolute;width:100%;left:0;top:0px;background-color:Black;z-index:0;color:white;
}
.div3{
	position: absolute;
	width: 500px;
	left: 400px;
	top: 150px;
	border: 4px solid skyblue;
	border-radius: 2px;
	background-color: white;
	padding: 10px;
	color: black;
	box-sizing: border-box;
	font-size: 20px;
	font-family: areial;
	height: 320px;
}
input{
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 17px;
}

input[type=submit] {
    width: 90%;
    background-color: skyblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=reset] {
    width: 40%;
    background-color: skyblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
    </style>
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header> <a href="">
    <h4 class="logo">Employee</h4>
    </a>
    <nav>
      <ul>
        <li><a href="intropage.html">HOME</a></li>
      </ul>
    </nav>
  </header>
  </div>
<div class="div3"><center>
  <form name=signin method=post action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <table align="center">
  <tr><td>
UserID: </td> &nbsp
<td><input type="text" name="name" value="" required placeholder="Name"></td></tr>
<tr>
<td>Password:</td>  &nbsp
<td><input type="password" id="password" name="pass" value="" required placeholder="Password"></td></tr>
<tr><td><input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> </td><td> Show password</td></tr>
<tr><td><input type="submit" name="submit" value="Login"></td>
<td><input type="reset" name="reset" value="Reset"></td></tr>
</table>
  </form>
  <div style="text-decoration: none;">
  
    <a href="#" id="fp" >Forgot Password?</a>
</div>
</center>
</div>
<?php
session_start();
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $conn=mysqli_connect("localhost","root","","water");
    if(!$conn){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="SELECT password from emp_login where user_id='$name'";
	
    if($result=mysqli_query($conn,$sql)){
    $row=mysqli_fetch_row($result);

    $flag=0;
    if(strcmp($pass,$row[0])=="true"){
      $flag=1;
	$_SESSION["username"]=$name;
	}
if(isset($_SESSION["username"])) {
header('Location: emp_report.php');
}
    }
     else {
       $flag=2;
      echo "<script type='text/javascript'>alert(' Invalid Username or password!')</script>";
    }
mysqli_close($conn);
}
?>
  
</body>
</html>
