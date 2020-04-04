<?php
session_start();
$id = "";
$slot = "";
$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'avm');
if (isset($_POST['REQUEST']))
{
  // receive all input values from the form
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $slot = rand(1,20);

  $_SESSION['varname'] = $slot;

  if (empty($id)) { array_push($id, "id is required"); }

  $user_check_query = "SELECT * FROM avms WHERE id='$id' OR 'slot=$slot' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

	if (count($errors) == 0) {
  $query="UPDATE avms set id = '$id' where slot = '$slot'";
    mysqli_query($db, $query);

    $_SESSION['id'] = $id;
    $_SESSION['success'] = "your slot is booked";
    header('location: park.php');
	}
}
?>