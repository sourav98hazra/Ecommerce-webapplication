 <?php
 
    require 'includes/common.php';
   
    if(isset($_SESSION['email']))
          header('location: products.php');
    
    ?>
<html>
  <head>
    <title>LOGIN TO YOUR ACCOUNT</title>
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

<div class="container">
    <div class="panel panel-primary " style="border-radius: 0px;">
      <div class="panel-heading" style="border-radius: 0px;">
        <h2>Login Below:</h2>
      </div>
      <div class="panel-body">
        <p class="text-warning">Login to make a purchase</p>
        <form action="login_submit.php" method="post">
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" class="form-control" placeholder="EMAIL" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          </div>
            <a href="login.php"></a>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="pwd" class="form-control" placeholder="Password" pattern=".{6,}">
          </div>
          <div class="form-group">
              <input class="btn btn-primary" type="submit" value="submit">
          </div>
        </form>
      </div>
        <?php if(isset($_GET['alert'])){?>
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><?php echo $_GET['alert']; ?></strong> 
</div>
        <?php }else{ echo '';} ?>
      <div class="panel-footer">
          <a href="signup.php" class="label label-info">Don't have an account?Register</a>
        </div>
    </div>
  </div>
   
		<?php
                include 'includes/footer.php';
                ?>
  </body>''