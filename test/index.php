<?php
 session_start();

 include("connection.php");
 include("function.php");

$user_data = check_login($con);




?>

<!DOCTYPE html>
<html>
<head>
     <title>My website</title>
</head>
<body>

   <a href="logout.php">Log out</a>
      <h1>NOTICE! NOTICE! NOTICE! 
          HERE COMES THE BEST CHEF IN THE UNIVERSE. YEEEEEH</h1>

      </h1>

      <br>
      Hello <?php echo $user_data['user_name']; ?> HOW CAN I HELP YOU?
</body>
</html>



