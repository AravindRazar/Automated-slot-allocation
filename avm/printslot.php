<?php 
include('printslots.php') 
?>
<?php 
include('freeslots.php') 
?>
<?php 
include('cfreeslots.php') 
?>
<!DOCTYPE html>
<html>
<head>
<body>
         <form method="post" action="printslots.php">
                <button type="" class="btn" name="printslots">PRINTSLOT</button>
        </form>
        <form method="post" action="freeslots.php">
                <button type="" class="btn" name="freeslot">FREEUPSLOTS</button>
        </form>
        <form method="post" action="cfreeslots.php">
                <button type="" class="btn" name="cfreeslot">CFREEUPSLOTS</button>
        </form>
       </body>
</html>