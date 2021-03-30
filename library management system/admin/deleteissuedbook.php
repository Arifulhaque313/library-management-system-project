<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "delete from issued_book where s_no = $_GET[ib]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Issued book successfully remove...");
	window.location.href = "manageissuedbook.php";
</script>