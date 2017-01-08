

<?php 

$link = mysqli_connect('localhost', 'root','Chipper10!', 'flip'); 

if (!$link) 

{ 

  $output = 'Unable to connect to the database server.'; 

 // include 'db.php'; 

  exit(); 

} 

 

if (!mysqli_set_charset($link, 'utf8')) 

{ 

  $output = 'Unable to set database connection encoding.'; 

  //include 'db.php'; 

  exit(); 

} 

 

if (!mysqli_select_db($link, 'flip')) 

{ 

  $output = 'Unable to locate the joke database.'; 

  include 'db.php'; 

  exit(); 

} 

 

$output = 'Database connection established.'; 

//include 'db.php'; 

