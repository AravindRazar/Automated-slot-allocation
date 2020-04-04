<?php
session_start();

$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'avm');
if (isset($_POST['printslots']))
{
echo "THE FREE SLOTS ARE";
$sql="SELECT * from avms where status = 0";
$result = $db->query($sql);
    if (!$result) 
  {
     trigger_error('Invalid query: ' . $conn->error);
  }
  if ($result->num_rows > 0) 
    {
    echo "<table><tr><th>id</th><th>slot</th><th>ctime</th><th>ltime</th><th>status</th><th>Difference</th>";
    // output data of each row
     while($row = $result->fetch_assoc()) 
        {
            echo "<tr><td>".$row["id"]."</td> <td>".$row["slot"]."</td> <td>".gmdate("H:i:s",($row["ctime"]))."</td> <td>".gmdate("H:i:s",$row["ltime"])."</td> <td>".$row["status"]."</td><td>".$row["differe"]."</td></tr>";
        }
                echo "</table>";
        } 
        else 
        {
            echo "0 results";
        }
        echo "            --          ";

  echo "The Payment Slots Are";
  $sql="SELECT * from avms where status = 1";
  $result = $db->query($sql);
      if (!$result) 
    {
       trigger_error('Invalid query: ' . $conn->error);
    }
    if ($result->num_rows > 0) 
      {
      echo "<table><tr><th>id</th><th>slot</th><th>ctime</th><th>ltime</th><th>status</th><th>Difference</th>";
      // output data of each row
       while($row = $result->fetch_assoc()) 
          {
            echo "<tr><td>".$row["id"]."</td> <td>".$row["slot"]."</td> <td>".gmdate("H:i:s",($row["ctime"]))."</td> <td>".gmdate("H:i:s",$row["ltime"])."</td> <td>".$row["status"]."</td><td>".$row["differe"]."</td></tr>";
          }
                echo "</table>";
        } 
        else 
        {
            echo "0 results";
        }
    }
?>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table tr:nth-child(even) {
  background-color: #eee;
}
table tr:nth-child(odd) {
 background-color: #fff;
}
table th {
  background-color: black;
  color: white;
}
</style></