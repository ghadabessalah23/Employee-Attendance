 <html>
<link href="assets/main.css" rel="stylesheet" />
<link href="assets/bootstrap.css" rel="stylesheet" />
<link href="assets/fontawesome.css" rel="stylesheet" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<title> Saturne | Attendance </title>
</html> 
<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>



     <?php 
	      date_default_timezone_set('Africa/Tunis');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
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
          	<h1 class="text-center" >Attendance Panel</h1>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	 
	                  	  	  <hr>
                              <!-- Checking if attendance is taken for today -->
         <?php 
	          $con = mysqli_connect('localhost','root','','attendance');
              $result = mysqli_query($con,"SELECT `date` FROM `attendance_taken` WHERE date = '$ThisDate'");
			  $row = mysqli_fetch_array($result);
			  $total = $row[0];
			  $today = strval($total);
              if ($total == $ThisDate){
				  ?> 
  				  <h3 class="text-center">Attandace for Today (<?php echo $ThisDate;  ?>) has been taken.</h3>
				  <h4 class="text-center">View Today's attendance <a href="viewattendanceadmin.php">here</a>.</h4>
				   <br>
				  <h3 class="text-center">If you want to take attendance or update then 
				  
				  <form action="deleteattendancetoday.php" method="post">
				    <input type="submit" name="delete" value="delete"> previous attendace of today and retake</h3>
				  </form>
				  <?php
				 // echo $total;
			 }
			  else{

            ?>
			<div class="col-sm-12">
              <h4 class="text-center">Attandace Can Be Taken Only One time For a Date </h4>  
               <br>   
               <h3 class="text-center">Today is : <?php echo $ThisDate;  ?></h3>
  
            </div>
			
			
			<?php 
	          $con = mysqli_connect('localhost','root','','attendance');
              $result = mysqli_query($con,"select count(1) FROM employee_details");
              $row = mysqli_fetch_array($result);

              $total = $row[0];

             ?>
			 
			 
<div class="fluid-container">

<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">EID</th>
        <th scope="col">Name</th>
        <th scope="col" class="present_color">Present</th>
        <th scope="col">Absent</th>
      </tr>
    </thead>
    <tbody>
	
	<form action="insertattendance.php" method="post">
	
	
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
  
   <form action="insertattendance.php" method="post">
   
   <input type="hidden" value="<?php echo $total;?>" name="numbers" />
   <input type="hidden" value="<?php echo $post['id'];?>" name="eid[]" />
   <input type="hidden" value="<?php echo $post['name'];?>" name="name[]" />
      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
        <td><label><input type="checkbox" name="attendance[]" value="Present">Present</label></td>
        <td><label><input type="checkbox" name="attendance[]" value="Abscent">Abscent</label></td>
      </tr>

<!-- function for today's date -->	  
   <?php     
     date_default_timezone_set('Africa/Tunis');
	           $date = date("Y-m-d");
               $ThisDate = date("d-m-Y", strtotime($date));
     ?>
	 
	 <input type="hidden" value="<?php echo $ThisDate;?>" name="date[]" />
      
   
      
<?php } ?>    <!-- while ended here -->

    
 
     </tbody>
    </table>
   <div class="form-group">
     <center><button type="submit"  class="btn btn-success btn-lg" name="submit" value="submit">submit</button></center>
  </div>
 </form> 
  </div>
		  <?php } ?> <!-- else Ended here -->

                              <tbody>
	  
	  
	  




   



 <?php } ?> <!-- session Ended here -->
<?php include ("footer.php"); ?>

