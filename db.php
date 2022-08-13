<?php

$conn = mysqli_connect("localhost",'root','','buttonclicks');
if (!$conn){ echo "connection failed"; }

else if (isset($_POST['up'])) {
  echo "<h1>F</h1>";
  $sql = "INSERT INTO clicks('up')VALUES('up')";
  mysqli_query($conn, $sql);
} if (isset($_POST['down'])) {
  echo "<h1>B</h1>";
  $sql = "INSERT INTO clicks('down')VALUES('down')";
  mysqli_query($conn, $sql);
}  if (isset($_POST['left'])) {
  echo "<h1> L  </h1>";
  $sql = "INSERT INTO clicks('left')VALUES('left')";
  mysqli_query($conn, $sql);
} if (isset($_POST['right'])) {
  echo "<h1>R </h1>";
  $sql = "INSERT INTO clicks('right')VALUES('right')";
  mysqli_query($conn, $sql);
} if (isset($_POST[$stop])) {
  echo "<h1>S</h1>";
  $sql = "INSERT INTO clicks('stop')VALUES('stop')";
mysqli_query($conn, $sql);
}if(isset($_POST['voice'])){
$sql = "INSERT INTO clicks('voice')VALUES('voice')";

}
?>

  <!DOCTYPE html>
  <html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruserlt</title>
</head>


  <body>
      <form action="index.php" method="post">
        <fieldset>
        <h3>YOU ARE IN PHP FILE NOW</h3>
          <button class= "Back" name="Back" id="Back">Back</button>
          </fieldset>
      </form>
  </body>

  </html>