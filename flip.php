<html>
<body>
 
<?php
$con = mysqli_connect("localhost","root","Chipper10!","flip");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 if(isset($_POST['instagram']))
 {
     $instagram = $_POST['instagram'];
     $paid = $_POST['paid'];
     $sold = $_POST['sold'];
     $profit = $_POST['profit'];
//mysql_select_db("flip", $con);
 
$sql="INSERT INTO flipdata (instagram, paid, sold, profit) VALUES ('$_POST[instagram]','$_POST[paid]','$_POST[sold]','$_POST[profit]')";
//mysqli_query($con, $sql);
if (!mysqli_query($con, $sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Records updated";
 
mysqli_close($con);
 }
 else {
     echo 'Sorry no data submitted';     
}
?>
</body>
</html>