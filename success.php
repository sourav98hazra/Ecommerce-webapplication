 <?php
    require 'includes/common.php';
    ?>
<?php


if(isset($_SESSION['email']))
{
    $user=$_SESSION['email']; 

$conn= mysqli_connect("localhost","root","","store")or die(mysqli_error($conn));
$query="UPDATE users_items SET status='Confirmed' WHERE users_items.users_id='$user';";
if(mysqli_query($conn, $query))
{
    $str='Your order is confirmed. Thank you for shopping
with us.<a href="products.php"> Click here </a>to purchase any other item.';
    $msg="this is confirmed!";
 
    
}
 else {
    $str='Order Could not be placed <a href="products.php">Go Back</a> and Try again! ';
}

}
else
{
    header('location:main.php');  
}
?>
<html>
  <head>
    <title>ORDER PLACED SUCCESSFULLY!</title>
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
<blockquote>
<?php echo $str; ?>
</blockquote>
</div>


    
		<?php
                include 'includes/footer.php';
                ?>
  </body>
  </html>


