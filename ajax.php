<!DOCTYPE html> 
<html> 
	<head> 
		<title>Top ten tunes</title> 




</head>
<body>
<?php
 $category=$_POST['category'];


	 
	include "connect.php";
	  
	  $sql=mysql_query("SELECT * FROM lists where category='$category'");
	  

?>
<ol>
<?php
	  while($list=mysql_fetch_array($sql))
	  { 	
	  ?>  
	 <li><a href='<?php echo $list['youtube']?>'> <?php echo $list['song'] ?> </a> - <?php echo $list['info'] ?></li>
	 <?php 
	  }

?>
</ol>


</body>
</html>