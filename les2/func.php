<?php 


    // Добавить нового пользователя 
    function addUser ($login , $email, $pass)  {
          $f = 'users.txt';
          $l = true;
            
          $lines = file($f);  // Получаем все содержимое файла в массив
        
        
        

        foreach ($lines as $line) {
        
        $data = explode(':', $line);  // Разбиваем строку на массив колонок
        
        if ($data[0] == $login){
             
            $l = false;
            break;
            
        }          
        
        
    }
    
    if ($l){
        $fileopen=fopen($f, "a+");
        $write= "".$login.":".$pass.":".$email."\r\n";
        fwrite($fileopen,$write);
        fclose($fileopen);
        
        
        echo ' Пользователь добавлен ';
    }else {
        echo 'Пользователь '.$login.'  уже зарегистрирован';
    }
        
        
        return $retval;
        
    }
    // Показать таблицу пользователей 
    
    function  showUsers (){
        
        $f = 'users.txt';
        $lines = file($f);
        
       
         foreach ($lines as $line) {
        
        $data = explode(':', $line);  // Разбиваем строку на массив колонок
        $log = $data[0];
        $pass = $data[1];
        $post = $data[2];
        
        echo '<tr><td>'.$log.'</td><td>'.$pass.'</td><td>'.$post.'</td></tr>'; 
        
    }

        return $retval;
    }
    
    
    function enterUser ($login, $psw ){
        
          $f = 'users.txt';
          $l = false;
          $lines = file($f);  // Получаем все содержимое файла в массив
          
               foreach ($lines as $line) {
        
        $data = explode(':', $line);  // Разбиваем строку на массив колонок
        
        if ($data[0] == $login){
            // Проверяем есть ли логин
            
            if ($data[1] == $psw){ // Проверяем правильность пароля 
                $l = true;
                break;
                
            }else{
                $l = 0;
            }
           
            
        }else {
            $l = false;
        }
                  
         
        
    }
      
      return $l;   
    }
    
    // Сколько пользователей зарегистрированно в данный момент 
    
    function countReg ($fileLink){
        
        
          $lines = file($fileLink);  // Получаем все содержимое файла в массив
          $c = count($lines);
          return $c;
    }
    
  
    
    
    
?>