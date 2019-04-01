 <?php
    require 'includes/common.php';
     if(isset($_SESSION['email']))
          header('location: products.php');
    ?>
<html>
  <head>
    <title>NEW ACCOUNT?REGISTER FAST!</title>
    <link rel="stylesheet" href="webframeworks\bootstrap\css\bootstrap.css" type="text/css" />

    <script src="webframeworks\bootstrap\js\jquery-3.3.1.min.js" type="text/javascript"/>
    </script>

    <script src="webframeworks\bootstrap\js\bootstrap.js" type="text/javascript"/>
   </script>
   
   <link rel="stylesheet" type="text/css" href="index.css">
  </head>
  <body>
                <?php
                include 'includes/header.php';
                ?>







    <div class="panel container">
      <div class="panel-heading">
        <h1>SIGN UP</h1>
      </div>
      <div class="panel-body">
        <!--<p class="text-warning">Login to make a purchase</p>-->
          <form action="signup_script.php" method="post">
          <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name" size="1" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="password" name="pwd" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
            <input type="number" name="contact" class="form-control" placeholder="Contact" required>
          </div>
          <div class="form-group">
            <input type="text" name="city" class="form-control" placeholder="City" required>
          </div>
          <div class="form-group">
            <input type="address" name="address" class="form-control" placeholder="Address" required>
          </div> 
              <input class="btn btn-primary" type="Submit" value="submit"/>
              <br><br>
              
        </form>
      </div>
    </div>

   
		<?php
                include 'includes/footer.php';
                ?>
  </body>
  </html>