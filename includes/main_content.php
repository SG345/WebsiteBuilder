
<div id="main_content">
<?php 
include("connect.php");
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
	


}


?>
<h2><?php echo $post_title; ?> </h2>



</div>