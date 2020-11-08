<!--
Задание 1
Написать PHP скрипт, создающий на странице три текстовых
поля. В эти поля пользователь должен заносить значения R, G
и B цветовых компонент (в интервале 0-255). На странице также
должна присутствовать кнопка Accept и тег span с каким-либо
текстом внутри.
После нажатия на кнопку Accept, надо создать цвет на основе
введенных пользователем значений R, G и B. Этим цветом залить
фон тега span, а текст залить дополнительным цветом.

-->



<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Задание 1</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
 </head>
 <body>
  <form>
       <p> Укажите значения R, G и B цветовых компонент (в интервале 0-255):</p>
       <p><label for="R">значение R</label></p>
       <p><input id="R" type="number" size="3" name="num" min="0" max="255" value="0"/></p>
       
       <p><label for="G">значение G</label></p>
       <p><input id="G" type="number" size="3" name="num" min="0" max="255" value="0"/></p>
       
       <p><label for="B">значение B</label></p>
       <p><input id="B" type="number" size="3" name="num" min="0" max="255" value="0"/></p>
       
       <p><input id="Accept" type="button" value="Accept" /></p>
  </form>
 </body>
</html>


<span id="color"> Вы, пока, не выбрали цвет   </span>
<span id="msg"></span>

<script>
            //  Отследить нажате на кноаку Accept
            $('#Accept').click(function(){
                
            // Получить введенные пользователем  значения input     
                
                        var R = $('#R').val()
                        var B = $('#B').val()
                        var G = $('#G').val()
            
            // Отправить значения используя технологию Ajax  - > do.php  
         
     jQuery.ajax({
                type: "POST",
                url:"do.php",
                data: {R:R, B:B, G:G},
                
                success: function (data) {
                    var jsonData = JSON.parse(data);  
                    
                    
                    
                    if(jsonData.error == 'no' ){
                             console.log(data)
                    
                    var cR = jsonData.R;
                    var cG = jsonData.G;
                    var cB = jsonData.B;
                    
                   
                    // Создать цвет текста отличнм и контрастирующим цвету фона  
                    var TC_1 = 0;
                    var TC_2 = 0;
                    var TC_3 = 0;
                    
                    if (cR < 150){
                        var TC_1 = 255; 
                    }
                    if (cG < 150){
                        var TC_2 = 255; 
                    }
                    if (cG < 150){
                        var TC_3 = 255; 
                    
                    }
                    
                     var Trgb = 'rgb('+ TC_1 + ',' + TC_2 + ',' + TC_3+')'; 
                     $('#color').css({'color':Trgb});
                     
                    
                   
                   // Создать и залить цвет фона на основе введенных данных 
                   var rbg = 'rgb('+ cR + ',' + cG + ',' + cB+')';
                   $('#color').css({'background-color': rbg});
                   $('#color').html('Ваш цвет: <br />'+cR+ ' ' + cG + ' ' + cB); 
                   $('#msg').html('')   
                    
                    }else {
                        
                        console.log('NOOOOOO');
                        $('#color').css({'background-color': 'red'});
                        $('#color').html('ERROR'); 
                        $('#msg').html('Проверьте введенные значения');
                    }
                    
               
                          
                             
                }
            });
            
            });
            
 

</script>


<style>
/*
    style for work 1 
*/
#color{
    display: block;
    width: 320px;
    height: 100px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    padding-top: 16px;
    padding-bottom: 16px;
    border: 1px dashed green;
}
</style>