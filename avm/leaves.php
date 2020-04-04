<?php
session_start();
$id1 = $_SESSION['varname'];
$et = "";

$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'avm');
if (isset($_POST['leave']))
{

  // receive all input values from the form
  $et = time();
$_SESSION['varname'] = $id1;

	if (count($errors) == 0) {
  $query = "UPDATE avms set status = 0 ,ltime = '$et' where slot = '$id1'";
    mysqli_query($db, $query);


    $_SESSION['id'] = $id;
    $_SESSION['success'] = "SLOTFREE";
    header('location: diff.php');
	}
}
?>