<html>

<link href="assets/bootstrap.css" rel="stylesheet" />
<link href="assets/fontawesome.css" rel="stylesheet" />
  <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	<title> Saturne | Admin Space </title>

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
          	<h3><i class="fa fa-angle-right"></i> Manage Users</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All User Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>EID</th>
                                  <th class="hidden-phone">Name</th>
                                  <th> Gender</th>
                                  <th> Email </th>
                                  <th>Date of Birth </th>
                                  <th>Contact No</th>
								  <th> Department</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
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
	$cnt=1;
  
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
		<td><a href="deleteemployee.php?delete=<?php echo $post['id']; ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a></td>
    
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section>
  </section>


  

<?php } ?>



<?php include("footer.php") ?>