<?php
if(!empty($_SESSION['uid']))
{
$session_uid=$_SESSION['uid'];
include('userClass.php');
$userClass = new userClass();
}

if(empty($session_uid))
{
$url=BASE_URL.'contact.php';
header("Location: $url");
}

?>
