<?php
 session_start();
 $id1 = $_SESSION['varname'];
 $temp="";
        $billp="";

	$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'avm');
	if (isset($_POST['diffce']))
	{
		$sql="SELECT * from avms where slot = '$id1'";
		$result = $db->query($sql);
		if ($result->num_rows > 0) 
      {
       while($row = $result->fetch_assoc()) 
          {
            $temp=$row['differe'];
          }
        } 
       var_dump(is_int($temp));
       $billp=var_dump(is_int($billp));
	   if($temp<3600)
	   {
	   	$billp=100;
	   	echo "The Bill is 100 rs
	   	";
	   }
	    elseif($temp>3600 and $temp<7200)
	   {
	   	$billp=200;
	   	echo "The Bill is 200 rs
	   	";
	   }
	    else
	   {
	   	$billp=300;
	   	echo "The Bill is 300 rs
	   	";
	   }
	   echo "BILL:";
	   echo $billp;
	}
?>

<!DOCTYPE html>
<html>
<head>
<body>
         <form method="post" action="payment.php">
                <button type="" class="btn" name="payment">Payment</button>
        </form>
    </body>
</head>
</html>