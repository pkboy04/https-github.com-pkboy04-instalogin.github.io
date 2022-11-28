<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome</title>
</head>
<body><br><br><br><br>


	<CENTER> WELCOME </CENTER>

   <!--  <?php 
    echo "<h1><center>Welcome " . $_SESSION['username'] . "</h1>"; 
    ?> -->

    <center><a href="logout.php">Logout</a></center>
</body>
</html>