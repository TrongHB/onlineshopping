<?php
$host="u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="qqxu6lhgtq2d2g9c";
$password="o5vljl4ci7mk4kia";
$database="eiqnngb1ak61y1v0";
$conn= mysqli_connect($host,$username,$password,$database);
mysqli_query($conn,"SET NAMES 'utf8'");
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
// { echo "Success to connect to MySQL"; }
?>

