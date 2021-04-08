<?php
	require('functions.php');
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	
    $book_name = "";
    $author="";
    $book_no="";
    $student_name="";

    $query="select issued_book.book_name,issued_book.book_author,issued_book.book_no, users.name from issued_book left join
    users on issued_book.user_id = users.id";
    
	

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

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
 


 <div class="row pt-4">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
                   
					<th>Book Name:</th>
                    <th>Author:</th>
                    <th>Book No:</th>
                    <th>Student Name:</th>
                    
					
					
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
                        
						$book_name = $row['book_name'];
                        $book_author = $row['book_author'];
                        $book_no = $row['book_no'];
                        $student_name = $row['name'];

						
						
				?>
						<tr>
                           
							<td><?php echo $book_name;?></td>
                            <td><?php echo $book_author;?></td>
                            <td><?php echo $book_no;?></td>
                            <td><?php echo $student_name;?></td>

							
							
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>







</div>

</div>
 
</body>
</html>