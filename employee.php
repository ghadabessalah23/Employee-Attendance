 <html>
<link href="assets/main.css" rel="stylesheet" />
<link href="assets/bootstrap.css" rel="stylesheet" />
<link href="assets/fontawesome.css" rel="stylesheet" />
 <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	<title> Saturne | Employee Details </title>

</html> 
  
<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>





<?php

if(isset($_GET['insert_employee'])) {

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
          	<h1><i class="h1_index text-center"></i><center> Employee Board</center></h1>
				<div class="row">
				 <div class="container-fluid" style="background-color:lavenderblush";>


		   
</div>		   
   <div class="col-sm-10" style="background-color:lavenderblush;">
     <h1>Enter Details of new employee</h1>

<form  action="insertemployee.php" method="POST">

 <div class="form-group">
   <label for="formGroupExampleInput">Name:</label>
   <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="name">
 </div><!-- -->
 <div class="form-group">
   <label for="formGroupExampleInput">Gender:</label>
   <div class="radio">
      <label><input type="radio" name="gender" value="male" checked>Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="female">Female</label>
    </div>
    
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Email:</label>
   <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="employee@example.com">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Date of Birth:</label>
   <input type="date" name="dateofbirth" class="form-control" id="formGroupExampleInput2">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Contact No:</label>
   <input type="text" name="contact" class="form-control" id="formGroupExampleInput2" placeholder="Contact Number">
 </div> 

  <div class="form-group">
   <label for="formGroupExampleInput">Department:</label>
   <div class="radio">
      <label><input type="radio" name="department" value="Adminstration" checked>Adminstration</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="department" value="Technecian">Technician </label>
    </div>
	<div class="radio">
      <label><input type="radio" name="department" value="worker">Worker</label>
    </div>
    
 </div>
 
 
 
  <div class="form-group">
    <button type="submit" name="submit"  class="btn btn-success btn-lg"value="submit"><center>submit</button>
  </div> 

   </form>
                  
	                  
              
                              <tbody>   

   


<?php } ?>

<!-- employee details -->

<?php


if(isset($_GET['view_employee'])) {

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
          	<h1 class="h1_index text-center">Employee Board</h1>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h1 class="h1_index text-center">Employee Details</h1>
							  <form action="new.php" method="post">
							  <button class="btn-success btn-lg" type="submit" >Generate Pdf</button>
	                  	  	  <hr>
                            
		<table class="table table-striped">
   <thead class="thead-dark">
      <tr>
        <th scope="col">EID</th>
        <th scope="col">Name</th>
        <th scope="col">Gender</th>
		<th scope="col">Email</th>
		<th scope="col">Date of Birth</th>
		<th scope="col">Contact No</th>
		<th scope="col">Department</th>
		<th scope="col">Edit</th>
		<th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
	</form>	

<?php


//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
//select database


$sql="SELECT * FROM `employee_details` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
        <td><?php echo $post['gender']; ?></td>
		<td><?php echo $post['email']; ?></td>
		<td><?php echo $post['DOB']; ?></td>
		<td><?php echo $post['contact_no']; ?></td>
		<td><?php echo $post['department']; ?></td>
		<td><a href="editemployee.php?edit=<?php echo $post['id']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td>
		<td><a href="deleteemployee.php?delete=<?php echo $post['id']; ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a></td></a></td>
      </tr>
    
   
  
      
        
     
 
    
      
           
      
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php } ?>    

<!-- details end -->

                              <tbody>


		
		
<?php } ?>





