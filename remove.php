<?php
$con = mysqli_connect("localhost","root","mysql","pdo");
//delete Data
if(isset($_POST['del_ord']))
{
$id = $_POST['id'];
$deletedata = "DELETE FROM orders WHERE id=".$id;
$query = mysqli_query($con,$deletedata);
}
if(isset($_POST['del_prof']))
{
$id = $_POST['id'];
$deletedata = "DELETE FROM proffessional WHERE id=".$id;
$query = mysqli_query($con,$deletedata);
}
?>