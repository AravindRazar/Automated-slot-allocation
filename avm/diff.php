<?php 
include('leaves.php') 
?>
<!DOCTYPE html>
<html>
    <style>
        button {
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
          }
          head {
                width: 30%;
                margin: 50px auto 0px;
                color: rgba(54, 22, 235, 0.205);
                background: #5F9EA0;
                text-align: center;
                border: 1px solid #B0C4DE;
                border-bottom: none;
                border-radius: 10px 10px 0px 0px;
                padding: 20px;
                }
        </style>
        <body>
         <form method="post" action="diffs.php">
                <button type="" class="btn" name="diff">CALCDIFF</button>
        </form>
        <p>"   "</p>
        <form method="post" action="diffc.php">
                <button type="" class="btn" name="diffce">CALCBILL</button>
        </form>
        </body>
</html>