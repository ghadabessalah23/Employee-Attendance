 <html>
<link href="assets/main.css" rel="stylesheet" />
<link href="assets/bootstrap.css" rel="stylesheet" />
<link href="assets/fontawesome.css" rel="stylesheet" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style-responsive.css" rel="stylesheet">
<title> Saturne | Add Admin </title>

</html>
<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>
<section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
			<div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="index.php">Home</a></li>
            	</ul>
            </div>
        </header>
		<aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="assets/img/admin.png" class="img-circle" width="60"></a></p>
              	 
              	  	
                  <li class="mt">
                      <a href="attendancepanel.php">
                          <i class="fa fa-file"></i>
                          <span>Take Attendance</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="viewattendanceadmin.php" >
                          <i class="fa fa-users"></i>
                          <span>Today's attendance</span>
                      </a>
                   
                  </li>
            
				  <li class="sub-menu">
                      <a href="viewadmin.php?view_admin=view_admin" >
                          <i class="fa fa-users"></i>
                          <span>View Admin Details</span>
                      </a>
                   
                  </li>
				      <li class="sub-menu">
                      <a href="employee.php?view_employee=view_employee" >
                          <i class="fa fa-users"></i>
                          <span>View Employee Details</span>
                      </a>
                   
                  </li>
				
				  <li class="sub-menu">
                      <a href="insertadmin.php" >
                          <i class="fa fa-users"></i>
                          <span>Add New Admin</span>
                      </a>
                   
                  </li>
				  <li class="sub-menu">
                      <a href="employee.php?insert_employee=insert_employee" >
                          <i class="fa fa-users"></i>
                          <span>Add New Employee</span>
                      </a>
                   
                  </li>
				  <li class="sub-menu">
                      <a href="viewattendanceadminfull.php" >
                          <i class="fa fa-users"></i>
                          <span>complete attendance</span>
                      </a>
                   
                  </li>
                 
              </ul>
          </div>
      </aside>
		 <section id="main-content">
          <section class="wrapper">
          	<h1 class="text-center" >Add New Admin Here</h1>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h1 class="text-center">Enter details of new Admin.</h1>
	                  	  	  <hr>
							  <form  action="" method="POST">

 <div class="form-group">
   <label for="formGroupExampleInput">Name:</label>
   <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="name">
 </div><!-- -->
 
 <div class="form-group">
   <label for="formGroupExampleInput">Email:</label>
   <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="email">
 </div><!-- -->

 <div class="form-group">
   <label for="formGroupExampleInput2">Username:</label>
   <input type="text" name="username" class="form-control" id="formGroupExampleInput2" placeholder="username">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Password:</label>
   <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="password">
 </div>

 
 
 
  <div class="form-group">
    <button type="submit" name="submit" value="submit" class="btn btn-success btn-lg"> <center>submit</center></button>
  </div> 

   </form>
   

</div>

<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

  
  
   $name =  $_POST["name"];
   $email =  $_POST["email"];
   $username =  $_POST["username"];
   $password  = $_POST['password'];
 



  $sql = "INSERT INTO `admin`(`name`, `email`, `username`, `password`) VALUES ('$name','$email','$username','$password')";

  
   

  //$sql = "INSERT INTO `employee` (`name`, `email`, `DOB`, `contact_no`) VALUES ('$name','$email','$DOB','$Contact_No')";


   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('new admin added Successfully.')){window.location = "admin.php";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "admin.php?view_employee=view_employee";
          if(!alert("Can not add new admin. Some error occured")){window.location = "admin.php";}
   
     </script>
   <?php
   }	 

  
  }

?>

<?php } ?>
                              
                              <tbody>








   
     




<?php include ("footer.php") ?>

