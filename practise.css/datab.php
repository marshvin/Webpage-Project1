<?php
$servername="localhost";
$username="root";
$password="";
$database_name="websitedb";
$conn= mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection failed:".mysql_connect_error());  
}
if(isset($_POST['save']))
{
    $Name=$_POST['Name'];
    $ID_NO=$_POST['ID_NO'];
    $Email=$_POST['Email'];
    $Branch=$_POST['Branch'];

    $sql_query="INSERT_INTO customer_detail(Name,ID_NO,Email,Branch)
    VALUES($Name,$ID_NO,$Email,$Branch)";

    if (mysqli_query($conn,$sql_query))

{
    
}


}