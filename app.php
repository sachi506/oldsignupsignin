<?php 
 session_start();
?>

 <html>
 <head>
 <title>Home page</title>
 </head>
 <body>
 <a href="logout.php"><button>Logout</button></a>
 <h1>Welcome <?php echo $_SESSION['Fname']?>
 
 </h1>
 </body>
 </html>