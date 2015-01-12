<html>
    <head>
      <title> Welcome to Website Builder </title>
<link rel="stylesheet" href="style.css" >
    </head>

<body>
<div id="header"> <h1 align="center"> <strong>Website Builder</strong> </h1> <h3 align="center">A Project by Sushrut Girdhari </h3> </div>

<div id="navbar">
<ul id="ul">
   <li> <a href="index.php"> Home </a> </li>
   
<li> <a href="admin/index.php"> Admin Panel </a> </li>
<li> <a href="#"> About </a> </li>


</ul>
</div>
<div><? php include("includes/header.php"); ?></div>

<div><? php include("includes/navbar.php"); ?></div>


<div id="main_content"> 
<h1>About</h1>
<p>Frequently updating a static website takes a lot of time as the same code has to be written again and again for creating separate pages
for each post. I have tried to solve this problem in our mini-project. We simply maintain a database of all the posts and create a separate page for each post and add the links to those pages on the home page.
We have made an Admin Panel from where content can be deleted or added by the user. </p>



 </div>


</div>

</body>
</html>
	