<?php
$connection = mysqli_connect("localhost",'root','','clickData');

if(isset($_GET['up']))
{
	echo "up button was clicked";
	$mysql = "INSERT INTO `clicks`(clicks) VALUES('up')";
	$connection->query($mysql);
} else if(isset($_GET['down']))
{
	echo "down button was clicked";
	$mysql = "INSERT INTO clicks(clicks) VALUES('down')";
	$connection->query($mysql);
} else if(isset($_GET['right']))
{
	echo "Right button was clicked";
	$mysql = "INSERT INTO clicks(clicks) VALUES('right')";
	$connection->query($mysql);
}else if(isset($_GET['left']))
{
	echo "Left button was clicked";
	$mysql = "INSERT INTO clicks(clicks) VALUES('left')";
	$connection->query($mysql);
}else if(isset($_GET['stop']))
{
	echo "Stopped";
	$mysql = "INSERT INTO clicks(clicks) VALUES('stop')";
	$connection->query($mysql);
}
?>

  </html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controller</title>
    <link rel="stylesheet" href="style.css">
    <script type='text/php' src="db.php"></script>

   
</head>
<body>
    <center>
        <h4> Robot controller </h4>
        <h7> control your robot from website and store data into DATABASE</h7>
        
        <legend>
            <br>
            <img src="https://cdn-icons-png.flaticon.com/512/1451/1451405.png" alt="alternatetext"  style="width:50px;height:50px;">
        </legend>
        <form action="index.php" method="get">
          <div id="container">
            <nav>
                <button  name="up" class="button top"      id="up"     type="submit"></button> 
                <button  name="right" class="button right" id="right"  type="submit"> </button> 
                <button  name="left" class="button left"   id="left"   type="submit"></button> 
                <button  name="down" class="button bottom" id="down"   type="submit"></button> 
                <button  name="stop" class="center-button" id="stop"   type="submit"></button>
              </nav>
              <br>
              <p>for voice control</p>
              <button id="voice">click here</button>
              </div>


        </form>
    </center>

</body>

</html>


