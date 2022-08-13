
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controller</title>
    <link rel="stylesheet" href="style.css">

   
</head>
<body>
    <center>
        <h4> Robot controller </h4>
        <h7> control your robot from website and store data into DATABASE</h7>
        
        <legend>
            <br>
            <img src="https://cdn-icons-png.flaticon.com/512/1451/1451405.png" alt="alternatetext"  style="width:50px;height:50px;">
        </legend>
        <form action="db.php" method="post">
          <div id="container">
            <nav>
                <button class="button top"   id="up"     type="submit"></button> 
                <button class="button right" id="right"  type="submit"> </button> 
                <button class="button left"  id="left"   type="submit"></button> 
                <button class="button bottom"id="down"   type="submit"></button> 
                <button class="center-button"id="stop"   type="submit"></button>
                <button id="voice">click here</button>

              </nav>
              <br>
              
              <p>for voice control</p>
              
              </div>


        </form>
             
    </center>

</body>

</html>

<!-- ToDo
        1-add text or arrow inside buttons
        2-connect them with the php -->