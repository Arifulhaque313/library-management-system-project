<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$book_no = "";
	$book_name = "";
	$author_id = "";
	$cat_id = "";
	$book_price = "";
	$query = "select * from books where book_no = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$book_name = $row['book name'];
		$book_no = $row['book_no'];
		$author_id = $row['author_id'];
		$cat_id = $row['cat_id'];
		$book_price = $row['book_price'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library management system</title>
   
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-4.4.1-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    
    
</head>
<body>  

<div class="adminDashboardBody">


<div class="full-wrape ">


<!--Nav bar-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-info">
   <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Library Management System</a>
        </div>


    <!--Here we are creating dashboard navbar Menu-->
    <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
	
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
             <div class="dropdown-menu">
                    <a class="dropdown-item" href="viewprofile.php"> View Profile</a>
                    <a class="dropdown-item" href="editprofile.php"> Edit Profile</a>
                    <a class="dropdown-item" href="changepassword.php"> Change Password</a>
            </div>
            </li>

			<li class="nav-item"> 
			<a class="nav-link" href="adminlogout.php">Logout</a>
			 </li>
            

        </ul>   

   </div>
 </nav>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" 
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admindashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
				<div class="dropdown-menu">
					<a href="addbook.php" class="dropdown-item">Add New Book</a>
					<a href="managebook.php" class="dropdown-item">Manage Books</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
				<div class="dropdown-menu">
					<a href="addcat.php" class="dropdown-item">Add New Category</a>
					<a href="managecat.php" class="dropdown-item">Manage Category</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
				<div class="dropdown-menu">
					<a href="addauthor.php" class="dropdown-item">Add New Author</a>
					<a href="manageauthor.php" class="dropdown-item">Manage Authors</a>
				</div>
			</li>
			<li class="nav-item">
				<a href="issuebook.php" class="nav-link">Issue Book</a>
			</li>
			<li class="nav-item">
				<a href="manageissuedbook.php" class="nav-link">Manage Issued Book</a>
			</li>
		</ul>
	</div>

</nav>

	<br><br>
	<div class="row" style="padding:50px">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="color:white">
			<form action="" method="post">
				<div class="form-group">
					<label>Book No:</label>
					<input type="text" name="book_no" value="<?php echo $book_no;?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Book Name:</label>
					<input type="text" name="book_name" value="<?php echo $book_name;?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Author ID:</label>
					<input type="text" name="author_id" value="<?php echo $author_id;?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Category ID:</label>
					<input type="text" name="cat_id" value="<?php echo $cat_id;?>" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Book Price:</label>
					<input type="text" name="book_price" value="<?php echo $book_price;?>" class="form-control" required="">
				</div>
				<button class="btn btn-primary" name="update">Update Book</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['update'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "update books set book name = '$_POST[book_name]',author_id=$_POST[author_id],cat_id=$_POST[cat_id],book_price = $_POST[book_price] where book_no = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		
	}
?>