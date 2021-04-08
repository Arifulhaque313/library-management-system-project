<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "delete from categorys where cat_id = $_GET[cid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("category Deleted...");
	window.location.href = "managecat.php";
</script>