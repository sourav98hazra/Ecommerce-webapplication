<?php 
include 'includes/common.php'; ?>
<html>
  <head>
    <title>CONFIRM YOU ORDER!</title>
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
function putdetails()
{
    if(isset($_SESSION['email']))
    {
    $user_id=$_SESSION['email'];
$conn= mysqli_connect("localhost","root","","store")or die(mysqli_errno($conn));
$query="select items.id,items.name,items.price from items inner join users_items where users_id='$user_id' and items.id=item_id and status!='Confirmed';";
$result= mysqli_query($conn, $query)or die(mysql_error());
if(mysqli_num_rows($result)<=0)
{
    echo '<td>CART</td>';
   echo '<td>IS</td>';
   echo '<td>EMPTY</td>';
}
$count=1;
 $sum=0;
while($row= mysqli_fetch_array($result))
{$iid=$row[0];
$iname=$row[1];
$iprice=$row[2];
    echo '<tr>';
   echo '<td>#id'.md5($iid)."-".$count++.'</td>';
   echo '<td>'.$iname.'</td>';
   echo '<td>'.$iprice.'</td>';
   echo " <td><a href='cart_remove.php?id={$row['id']}' class='remove_item_link btn btn-danger'> Remove</a></td>";
   echo '</tr>';
   
    $sum+=$iprice;
}
$_SESSION['t']=$sum;
}
else
{
    header('location:main.php');
}
}


?>
      
<div class="container">
<div class="table-responsive">
  <table class="table table-primary" >
    <tr>
      <th>Item Number</th>
      <th>Item Name</th>
      <th>Price</th>
      <th></th>
    </tr>
  
    <?php putdetails(); ?>
   
  <tr class="active">
    <td></td>
    <td>Total</td>
    <td>RS.<?php echo $_SESSION['t']; ?></td>
    <td><a href="success.php" class="btn btn-primary ">Confirm Order</a></td>
  </tr>

  </table>
  </div>
</div>

  <?php include 'includes/footer.php'; ?>
  
  </body>
  </html>