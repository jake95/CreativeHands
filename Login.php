<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <?php
    // Initialize variables and set to empty strings
$userName=$passWord="";
$userNameErr=$passWordErr="";

// Validate input and sanitize
if ($_SERVER['REQUEST_METHOD']== "POST") {
   if (empty($_POST["userName"])) {
      $userNameErr = "Username is required";//issue1 style expression
   }
   else {
      $userName = test_input($_POST["userName"]);
   }
   if (empty($_POST["password"])) {
      $passWordErr = "Password is required";
   }
   else {
      $passWord = test_input($_POST["password"]);
   }
}
?>

<?php
$host="localhost"; // Host name 
$username="creative"; // Mysql username 
$password="creativehands00"; // Mysql password 
$db_name="creative"; // Database name 
$tbl_name="creative_2"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select Database");

// Get values from form 
$userName=$_POST['username'];
$passWord=$_POST['password'];

// Insert data into mysql 
$sql="INSERT INTO creative_2(username, password)VALUES('$userName','$passWord')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='.php'></a>";//issue 1: hash tag
}

else {
echo "ERROR";//issue style expression
}
 
// close connection 
mysql_close();
?>
</body>
</html>