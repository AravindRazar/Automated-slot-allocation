<?php
 session_start();
 $id1 = $_SESSION['varname'];
	$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'avm');
	if (isset($_POST['diff']))
	{
	  $query = "UPDATE avms set differe=ltime-ctime where slot = '$id1'";
	  mysqli_query($db, $query);

	      $_SESSION['id'] = $id;
    $_SESSION['success'] = "SLOTFREE";
    header('location: printslot.php');
	}
?>