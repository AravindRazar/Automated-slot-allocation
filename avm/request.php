<?php include('requests.php') ?>
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
                body {
                    background-image: url("https://cdn.pixabay.com/photo/2015/10/12/15/10/parking-garage-984253_960_720.jpg")
                }
        </style>
        
        <head>
            <center>
                <br><br>
            <p><font color="white"><font size="8">PARKING SLOT</p></font>
        </head>
        <body>
         <form method="post" action="requests.php">
                    <div class="input-group"><br><br>
                      <label>Vehicle id</label>
                      <input type="text" name="id" value="<?php echo $id; ?>">
                    </div>

<br><br>
                <button type="" class="btn" name="REQUEST">REQUEST</button>
        </form>
        </body>
</html>