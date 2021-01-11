<html>
<link href="assets/main2.css" rel="stylesheet" />
<link href="assets/bootstrap.css" rel="stylesheet" />
<link href="assets/fontawesome.css" rel="stylesheet" />
<script src="assets/js/jquery.js"></script>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

</html>

<?php

include ("header.php");

?>

<?php
date_default_timezone_set("Africa/Tunis");


$date = date('m/d/Y h:i:s a', time());
echo $date;


?>
<br>
<br>
<br>
<br>
<center><div class="container-fluid jumbo">
 <h1 class="text-center"> Saturne Employee Attendance System</h1>
 <div class="mb-2">
 <h3 class="text-center ">A CMS for Complete Attendace System</h3>
 </div>
  <br>
  <br>
 <div class="container-fluid mx-auto">
 <div class="rows">
 
  <div class="col-sm-6 color_white col-sm-6-mod">
    <h3 class="text-center">Admin Dashboard</h3>
	<br>
     <a class="a_color" href="admin.php"><button type="button" class="btn btn-primary btn-lg">Admin Space</button></a>
  
  </div>
  <div class="col-sm-6 color_white col-sm-6-mod">
   <h3 class="text-center">User Dashboard</h3>
	<br>
    <a class="a_color" href="user.php"><button type="button" class="btn btn-primary btn-lg">User Space</button></a>
	 
  </div>
  
 </div>
 
 </div>
   
</div>

</center>

<?php

include ("footer.php"); 

?>