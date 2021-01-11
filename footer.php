<footer>
  <div class="container">
      <div class="footer-box">
	  <?php 
	        date_default_timezone_set('Africa/Tunis');
	           $date = date("Y-m-d");
               $newDate = date("d-m-Y", strtotime($date));
      ?>			   
               
        <p>Copyright &copy; <?php echo date("Y"); ?> Saturne Informatique</p>
		</div>
  </div>
</footer>
</body>
</html>
