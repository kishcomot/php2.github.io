<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    

	<title>Регистрация пользователя</title>
</head>

<body>

<?php
    include_once('func.php');
    
    if (isset($_POST['login'])  && ($_POST['psw'])){
        
    $login = $_POST['login'];
    $psw = md5($_POST['psw']); 
    
    
    if (enterUser($login , $psw)){
        echo ' Вы успешно вошли !  ';
    }else {
        echo 'Неверный логин или пароль ! ';
    }
    }
    

    
    
        
    
    

 ?>

<form action="login.php" method="POST">
  <div class="container">
    <h1>Форма входа</h1>
    <p>форма Авторизации пользователей.</p>
    <hr />

    <label for="login"><b>Логин</b></label>
    <input id="login" type="text" placeholder="Введите логин" name="login" required >
    
    <label for="psw"><b>Пароль</b></label>
    <input id="psw" type="password" placeholder="Введите пароль" name="psw" required>


    <hr>

 
    <button type="submit" class="registerbtn">submit</button>
  </div>


</form>




















<style>
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>
</body>
</html>