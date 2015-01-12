<html>
    <head>
      <title> Welcome to Website Builder </title>
<link rel="stylesheet" href="style.css" >
    </head>

<body>
<div id="header"> <h1 align="center"> <strong>Website Builder</strong> </h1> <h3 align="center">A Project by Sushrut Girdhari</h3> </div>


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
<?php 
include("includes/connect.php");
if(isset($_GET['id'])) {
$page_id=$_GET['id'];
	$select_query="select * from posts where post_id='$page_id'";
$run_query=mysql_query($select_query);
while($row=mysql_fetch_array($run_query)) {
	
	$post_id=$row['post_id'];
	$post_title=$row['post_title'];
	
	$post_date=$row['post_date'];
	
	$post_author=$row['post_author'];
	
	$post_image=$row['post_image'];
	
	$post_keywords=$row['post_keywords'];
	$post_content = $row['post_content'];
	





?>
<h2> <a href="pages.php?id=<?php echo $post_id; ?>" >
<?php echo $post_title; ?> </a> </h2>
<p align="left"> Published on: <strong> <?php echo $post_date ?> </strong> </p>
<p align="left"> Posted by: <strong> <?php echo $post_author ?> </strong> </p>
<center><img src="images/ <?php echo $post_image?> width="500" height="300" /> </center>
<p align="justify"> <?php echo $post_content; ?> 

<?php } } ?>

</div>

<div><? php include("includes/sidebar.php"); } ?></div>

<div id="sidebar"> Side Bar </div>


<div id="footer"> Footer </div>

</body>
</html>
	