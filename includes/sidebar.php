
<div id="sidebar">


<div id = "searchbox">
	<form action="search.php" method="get" enctype="multipart/form-data">
	
	<input type="text" name="value" placeholder="Search this site">
	
	<input type="submit" name="Search" value="Search">
</div>
<div id="social"> <h2>Follow us </h2>
</div>

<div>
<?php
include("includes/connect.php");

$query="select * from posts order by 1 desc ";
$run=mysql_query($query);
while($row=mysql_fetch_array($run)) {
$post_id=$row['post_id'];
$title = $row ['post_title'];
$image=$row['post_image'];
}
?>
<h2>$title</h2>
</div>

 </div>