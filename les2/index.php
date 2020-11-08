<?php include_once('func.php');?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	

	<title>Урок 2 </title>
</head>

<body> 
<h3> В данный момент зарегистрированно <?php echo countReg('users.txt'); ?></h3>
<ul class="menu-main">
  <li><a href="addUser.php">Add</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href=" showUsers.php">Show</a></li>
  
  
</ul>


</body>
</html>