<!DOCTYPE html>
<html>
<head>
	<title>SWATCH JAL</title>
	<style type="text/css">
	.b
	{
		padding: 15px 32px;
		text-align: center;
		font-size: 10px;
		font-size: 17px;
		border-radius:40px/24px;
	}

	button
	{
		padding: 15px 32px;
		text-align: center;
		font-size: 10px;
		font-size: 17px;
		margin-left:30%;
	   -moz-box-shadow: 9px -9px 0px 0px #9fb4f2;
	   -webkit-box-shadow: 9px -9px 0px 0px #9fb4f2;
	    box-shadow: 9px -9px 0px 0px #9fb4f2;
	    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
	background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
	background-color:#7892c2;
	-moz-border-radius:13px;
	-webkit-border-radius:13px;
	border-radius:13px;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:9px 25px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}
button:active 
{
	position:relative;
	top:1px;
}

	
	#s
	{
		font-weight: bold;
	 	margin-left:0%;
		float: bottom;
		text-align: center;
		color:black;
		font-style: serif;
		font-size: 30px;
	}
	#el
	{
		float: left;
		font-size: 20px;	
		color: black;
		font-weight: bold;
		margin-left:15%;
		margin-top:8%
	}

	#pl
	{
		float: right;	
		color: black;
		font-weight: bold;
		font-size: 20px;
		margin-top: 8%;
		margin-right:15%;
	}
	
	
	
	#ph
	{
		float: right;	
		color: black;
		font-weight: bold;
		font-size: 20px;
		margin-top: 2%;
		margin-right:15%;
	}
	#eh
	{
		float: left;
		font-size: 20px;	
		color: black;
		font-weight: bold;
		margin-top:2%
		margin-left:15%;
		
	}
	
	h1
	{
		text-align: center;
		color:black;
		font-size: 70px;
		margin-top: 5%;
	}
		
	#t3
	{
		font-weight: bold;
		font-size: 25px;
		margin-left:45%;
		
	}
	#v2
	{
	position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
  background-size: cover;
  transition: 1s opacity;
	}
	a {
     text-decoration: none ;
  }
a:hover
  {
    color:white;
    text-decoration:none;
    cursor:pointer;
   }
   
	</style>
</head>
<body>


<video  id=v2  playsinline autoplay muted loop>
<source src="m1.webm" type="video/webm">
<source src="m1.mp4" type="video/mp4">
</video>


<h1>SWATCH JAL</h1>
<br><br>

<div id=s>
<p>NEW USERS? Feel free to REGISTER</p>
<p>Any water related issues in your locality can be solved</p>
<p>No need to worry people</p>
<p>You have to just post the problem in the site</p>
</div>


<div id=pl>
<p><b><span style="font-size:30px">PUBLIC LOGIN</span></b></p><nbr>
<button><a href="loginp.php">LOGIN</a></button>
<br><br><br>
</div>


<div id=el>
<p><b><span style="font-size:30px">EMPLOYE LOGIN</span></b></p><nbr>
<button><a href="logine.php">LOGIN</a></button>
<br><br><br>
</div>
<br>

<div id=ph>
<p><b><span style="font-size:30px">PUBLIC REPORT</span></b></p><nbr>
<button><a href="public_issues.php">ISSUES</a></button>
<br><br><br>
</div>


<div id=eh>
<p><b><span style="font-size:30px">RESPONCE TO REPORTS</span></b></p><nbr>
<button><a href="replies.php">RESPONCE</a></button>
<br><br><br>
</div>
<br>

</body>
</html>