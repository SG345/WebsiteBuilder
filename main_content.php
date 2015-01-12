
<div id="main_content">
<?php 
include("includes/connect.php");
$select_posts="select *from posts";
$run_posts=mysql_query($select_posts);
while($row=mysql_fetch_array($run_posts)) {
	
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

<p align="right"> <a href="pages.php?id=<?php echo $post_id; ?>"> Read more </a> </p>

<?php } ?>

</div>