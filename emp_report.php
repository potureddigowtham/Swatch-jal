<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Public Report</title>
<link href="css/citizenreport.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
    <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
	}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.a {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	

}
</style>
</head>
<body>

<!-- Main Container -->
<div class="container"> 
   <!-- Navigation -->
  <header> <a href="">
    <h4 class="logo">EMPLOYEE</h4>
    </a>
    <nav>
      <ul>
        <li><a href="intropage.php">HOME</a></li>
      </ul>
    </nav>
  </header>
  
  
<h3>&nbsp;&nbsp;&nbsp;Public_Issues</h3>

<div class="a">
  <form name=report method=post action="">
    <label for="fname">Name of Person</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

   

    <label for="message">Message</label>
  <textarea name="message" placeholder="Some text..."></textarea>     
  
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<?php
  if(isset($_POST['submit'])){
    $name=$_POST['firstname'];
    $msg=$_POST['message'];

    $conn=mysqli_connect("localhost","root","","water");
    if(!$conn){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="INSERT INTO emp_report values('$name','$msg')";
    if($result=mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>
        alert('Submitted successfully!');
          window.location.href='replies.php';
        </script>";
    } else {
      echo "<script type='text/javascript'>alert(' Failed!')</script>";
    }
mysqli_close($conn);
}
?>
</body>
</html>
