<?php

    $connection=mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $query = "insert into users values(null,'$_POST[name]','$_POST[email]',
    '$_POST[password]',$_POST[mobile],'$_POST[address]')";

    $query_run=mysqli_query($connection,$query);


?>

<script type="text/javascript">
    alert("registration successfully ")
    window.location.href="index.php";
</script>