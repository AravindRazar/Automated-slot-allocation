<?php

$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'avm');
if (isset($_POST['freeslot']))
{
	if (count($errors) == 0) {
  $query = "UPDATE avms set id = NULL where status=0";
    mysqli_query($db, $query);
    $query = "UPDATE avms set ctime = NULL where status=0";
    mysqli_query($db, $query);
    $query = "UPDATE avms set ltime = NULL where status=0";
    mysqli_query($db, $query);
    $query = "UPDATE avms set differe = 0 where status=0";
    mysqli_query($db, $query);

    $_SESSION['id'] = $id;
    $_SESSION['success'] = "FREE";
    header('location: printslot.php');
	}
}
?>