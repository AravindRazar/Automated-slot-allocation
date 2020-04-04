<?php
session_start();
$id1 = $_SESSION['varname'];
$st = "";
$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'avm');
if (isset($_POST['park']))
{

  // receive all input values from the form
  $st = time();
  $_SESSION['varname'] = $id1;
	if (count($errors) == 0) {
  $query = "UPDATE avms set status = 1,ctime = '$st' where slot = '$id1'";
    mysqli_query($db, $query);

    $_SESSION['id'] = $id;
    $_SESSION['success'] = "PARKED";
    header('location: leave.php');
	}
}
?>