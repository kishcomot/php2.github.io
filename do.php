<?php

    //Получить значения 
    
    $R = $_POST['R'];
    $G = $_POST['G'];
    $B = $_POST['B'];
  
    if (isset ($R) && $R >= 0 && $R <= 255 && isset ($G) && $G >= 0 && $G <= 255 && isset ($B) && $B >= 0 && $B <= 255){
      echo json_encode(array('R' => $R, 'G' => $G, 'B' => $B, 'error' => 'no'));  
    }else{
      //echo json_encode(array('R' => '0', 'G' => '0', 'B' => '0','error_text' => 'Что то пошло не так проверьте введенные значения ', 'error' => 'yes')); 
      echo json_encode(array('R' => 255, 'G' => 0, 'B' => 0, 'error' => 'yes'));  
    }
    
    
  
    
?>