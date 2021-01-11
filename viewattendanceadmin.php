 <html>
<link href="assets/main.css" rel="stylesheet" />
<link href="assets/bootstrap.css" rel="stylesheet" />
<link href="assets/fontawesome.css" rel="stylesheet" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style-responsive.css" rel="stylesheet">
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

//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
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
          	 <h1 class="h1_index text-center">Attendance can be seen below.</h1>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4 class="text-center">Employee can find there EID here and can use EID to view there attendance</h4>
	                  	  			<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>EID</th>
        <th>Name</th>
		<th>Date</th>
		<th>Present/Abscent</th>
      </tr>
    </thead>
    <tbody>
		
		<?php 
	      date_default_timezone_set('Africa/Tunis');
	       $date = date("Y-m-d");
           $Today = date("d-m-Y", strtotime($date));
          ?>
 <?php 
//select database

$sql="SELECT * FROM `attendance_taken` WHERE date='$Today' ORDER BY id ASC";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   
      <tr>
        <td><?php echo $post['eid']; ?></td>
        <td><?php echo $post['name']; ?></td>
		<td><?php echo $post['date']; ?></td>
		<td><?php echo $post['attendance']; ?></td>
	   </tr>
              
      
<?php } ?>    

     </tbody>
    </table>
	</div>
                              <tbody>

 


		

   

<?php include("footer.php"); ?>

 <?php } ?>

