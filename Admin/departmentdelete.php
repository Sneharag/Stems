<?php
$con=new mysqli("localhost","root","",'admin_db');
if($con->connect_error)
{
    die("Connection failed");

}
$id=$_GET['id'];
$q="delete from department_tb where id=$id";
$res=mysqli_query($con,$q);
if($res==true)
{
    header('location:departmentadd.php');
}
?>