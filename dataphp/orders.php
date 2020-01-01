<!doctype html>
<html>
<head>
<link href='delstyle.css' rel='stylesheet' type='text/css'>
<script src='jquery-3.0.0.js' type='text/javascript'></script>
<script src='script.js' type='text/javascript'></script>
</head>
<?php
$con = mysqli_connect("localhost","root","mysql","pdo");

if( isset( $_POST['showallorders'] ) )
{
//$selectdata = "SELECT *FROM users WHERE username='$name'";
$selectdata = "SELECT *FROM orders";
$query = mysqli_query($con,$selectdata);


echo "<table border='1'>
<th>ID</th>
<th>Order ID</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Service</th>
<th>Street</th>
<th>Town/City</th>
<th>State</th>
<th>Pincode</th>
<th>Operation</th>";

while($row = mysqli_fetch_array($query))
{
  $id=$row['id'];
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['orderid']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['service']."</td>";
  echo "<td>".$row['street']."</td>";
  echo "<td>".$row['town']."</td>";
  echo "<td>".$row['state']."</td>";
  echo "<td>".$row['pincode']."</td>";
  echo "<td align='center'><input type='submit' value='DELETE' name='del_ord' class='delete' id='del_<?php echo $id; ?>' /></td>";
  echo "</tr>";
}
  echo "</table><br>";
}


if( isset( $_POST['proff_reg'] ) )
{
//$selectdata = "SELECT *FROM users WHERE username='$name'";
$selectdata = "SELECT *FROM proffessional";
$query = mysqli_query($con,$selectdata);

echo "<table border='1'>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Date of Birth</th>
<th>SKills</th>
<th>Experience</th>
<th>Address</th>
<th>Operation</th>";

while($row = mysqli_fetch_array($query))
{
  $id=$row['id'];
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['dob']."</td>";
  echo "<td>".$row['skills']."</td>";
  echo "<td>".$row['experience']."</td>";
  echo "<td>".$row['address']."</td>";
  echo "<td align='center'><input type='submit' value='DELETE' name='del_prof' class='delete' id='del_<?php echo $id; ?>' /></td>";
  echo "</tr>";
}
  echo "</table></br>";
}

if( isset( $_POST['supp_reg'] ) )
{
//$selectdata = "SELECT *FROM users WHERE username='$name'";
$selectdata = "SELECT *FROM supplier";
$query = mysqli_query($con,$selectdata);

echo "<table border='1'>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Date of Birth</th>
<th>Type</th>
<th>Products</th>
<th>Address</th>";

while($row = mysqli_fetch_array($query))
{
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['dob']."</td>";
  echo "<td>".$row['type']."</td>";
  echo "<td>".$row['products']."</td>";
  echo "<td>".$row['address']."</td>";
  echo "</tr>";
}
  echo "</table><br>";
}




if( isset( $_POST['part_reg'] ) )
{
//$selectdata = "SELECT *FROM users WHERE username='$name'";
$selectdata = "SELECT *FROM partner";
$query = mysqli_query($con,$selectdata);

echo "<table border='1'>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Date of Birth</th>
<th>Description</th>
<th>Address</th>";

while($row = mysqli_fetch_array($query))
{
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['dob']."</td>";
  echo "<td>".$row['description']."</td>";
  echo "<td>".$row['address']."</td>";
  echo "</tr>";
}
  echo "</table><br>";
}



if( isset( $_POST['inves_reg'] ) )
{
//$selectdata = "SELECT *FROM users WHERE username='$name'";
$selectdata = "SELECT *FROM investor";
$query = mysqli_query($con,$selectdata);

echo "<table border='1'>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Date of Birth</th>
<th>Address</th>";

while($row = mysqli_fetch_array($query))
{
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['dob']."</td>";
  echo "<td>".$row['address']."</td>";
  echo "</tr>";
}
  echo "</table><br>";
}

if( isset( $_POST['inbox_reg'] ) )
{
//$selectdata = "SELECT *FROM users WHERE username='$name'";
$selectdata = "SELECT *FROM inbox";
$query = mysqli_query($con,$selectdata);

echo "<table border='1'>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Subject</th>
<th>Message</th>";

while($row = mysqli_fetch_array($query))
{
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['subject']."</td>";
  echo "<td>".$row['message']."</td>";
  echo "</tr>";
}
  echo "</table><br>";
}

?>
