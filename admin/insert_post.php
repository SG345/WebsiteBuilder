<html>
	<head>
		<title>Admin Panel </title>
	
	<link rel="stylesheet" href="admin_style.css" />
	</head>
	
<body>
<div id="header"> <a href="index.php"> <h1>Welcome to the Admin Panel</h1> </a> </div>
<div id="sidebar"> 
<h2><a href="view_posts.php"> View Posts</a></h2>

<h2><a href="insert_post.php"> Insert New Post</a></h2>

 </div>
 <div id="welcome">
 <h1>Hello, Administrator </h1>
 <p>This is the Admin Panel where you can manage website files and content </p>

</body>

</html>
<form method="post" action="insert_post.php" enctype="multipart/form-data">

<table width="600" align="center" border="10" >

	<tr>
		<td align="center" bgcolor = "yellow" colspan="6"><h1>Insert a New Page here: </h1> <td>
	</tr>
	
	<tr>
		<td align="right">Post Title: </td>
		<td><input type="text" name="title"> </td>
	</tr>
	
	
	<tr>
		<td align="right">Post Author: </td>
		<td><input type="text" name="author"> </td>
	</tr>
	
	
	<tr>
		<td align="right">Post Keywords: </td>
		<td><input type="text" name="keywords"> </td>
	</tr>
	
	
	<tr>
		<td align="right">Post Image: </td>
		<td><input type="file" name="image"> </td>
	</tr>
	
	<tr>
		<td align="right">Post Content: </td>
		<td><textarea name="content" cols="20" rows="20" ></textarea>  </td>
	</tr>
	
	
	<tr>
	<td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now" >  </td>
	</tr>
	
	
	
</table>


</form>
</body>
</html>
<?php
include ("includes/connect.php");
if(isset($_POST['submit'])) {
	 $post_title=$_POST['title'];
	
	 $post_date=date('d-m-y');
	
	 $post_author=$_POST['author'];
	
	 $post_keywords=$_POST['keywords'];
	
	 $post_content=$_POST['content'];
	
	 $post_image=$_FILES['image']['name'];
	 $image_tmp=$_FILES['image']['tmp_name'];
	 
	 if($post_title=='' or $post_keywords=='' or $post_content=='' or $post_author=='')
	 echo "<script> alert('Please do not leave any field empty') </script> ";
	 
	 else {
	 move_uploaded_file($image_tmp, "../images/$post_image");
		$insert_query="insert into posts(post_title, post_date, post_author, post_image, post_keywords, post_content ) 
		values ( '$post_title', '$post_date',  '$post_author', '$post_image',  '$post_keywords', '$post_content' ) ";
	 mysql_query($insert_query);
	 if(mysql_query($insert_query)) {
	 echo "<center><h1> Post published successfully!</h1></center>";
	 
	 }
	 }
	 exit();
	}
	?>
	