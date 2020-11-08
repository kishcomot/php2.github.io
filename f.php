<?php
     function month($month)
{
    // Текущий год 
    $y = date(Y);
    
    // Веденное значение должно быть целым числом и  находиться в диапазоне от 1 до 12 
    if (is_int($month) && $month > 0 && $month <= 12){
        #echo date("t", mktime(0, 0, 0, $month, 1, $y));
        
        
        
        $ii = 1;
        $ss = date("w", mktime(0, 0, 0, $month, 1, $y)) - 1; 
        
        if($ss == -1) {$ss = 6;}
        while ($ii<=$ss) {
        
       
        
        
            
        $string .= "<li></li>";
        $ii++;
        
        
        
    }
    
        
        
        $dd = date("t", mktime(0, 0, 0, $month, 1, $y));
        $i = 1;
        while ($i<=$dd) {
        
        $day_of = date("w", mktime(0, 0, 0, $month, $i, $y)) - 1;
        
        if($day_of == -1){
            $string .= "<li class='activeSu'>".$i."</li>"; 
            
        }elseif($day_of == 5){
            $string .=  "<li class='activeSa'>".$i."</li>";    
        }else{
            $string .=  "<li>".$i."</li>";
        }
            
        
        $i++;
        
        
        
    }
    
            
    }else{
        echo 'Укажите коректное значение месяца';
    }
    
    
    
   // echo ''
    return $string;
    
    
}

?>