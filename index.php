<html>
    <head>
      <title> Welcome to Website Builder </title>
<link rel="stylesheet" href="style.css" >
    </head>

<body>
<div id="header"> <h1 align="center"> <strong>Website Builder </h1> <h3 align="center">A Project by Sushrut Girdhari </h3> </div>

<div id="navbar">
<ul id="ul">
   <li> <a href="#"> Home </a> </li>
   
<li> <a href="admin/index.php"> Admin Panel </a> </li>
<li> <a href="about.php"> About </a> </li>


</ul>
</div>
<div><? php include("includes/header.php"); ?></div>

<div><? php include("includes/navbar.php"); ?></div>


<div id="main_content"> 
<?php include("main_content.php"); ?> </div>


</div>

</body>
</html>
	