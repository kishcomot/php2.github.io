<!--
Задание 2
Создать функцию, которая принимает в качестве параметра
целочисленное значение month в интервале от 1 до 12. Это значение интерпретируется как номер месяца текущего года. При
вызове функция должна вывести на странице в виде таблицы
календарь одного месяца текущего года, соответствующего переданному значению month.
Формат календаря продумать самостоятельно. Предусмотреть
реакцию функции на неправильные значения month. Для оформления использовать CSS, выделять цветом выходные дни и т.п.
-->



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Задание 2</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>

<h1>Задание 2  Calendar</h1>
<p>
      
       <p> Укажите целочисленное значение month в интервале от 1 до 12:</p>
       <p><label for="m">Номер месяца без 0</label></p>
       <p><input id="m" type="number" size="2" name="num" min="1" max="12" value="1"/></p>
       <p><input id="mb" type="button" value="Применить" /></p>
</p>
<?php include_once ('f.php'); ?>
<script>
    var months_name = ['Январь ', 'Февраль ', 'Март ','Апрель ', 'Май ', 'Июнь ','Июль ', 'Август ', 'Сентябрь ','Октябрь ', 'Ноябрь ', 'Декабрь '];

    $('#mb').click(function(){
        var M = $('#m').val();
        
        
         jQuery.ajax({
                type: "POST",
                url:"do2.php",
                data: {M:M},
                
                success: function (html) {
                    $('.days').html('');
                    $('.days').html(html);
                    
                    $('.months_name').html(months_name[M - 1])
                    
                    
                    
                   }
                    
               
                          
                             
                
            });
        
    });
    
    
</script>
<div class="month">      
  <ul>

    <li>
      <span class="months_name"></span> <br />
      <span style="font-size:18px">2020</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Пн </li>
  <li>Вт</li>
  <li>Ср</li>
  <li>Чт</li>
  <li>Пт </li>
  <li>Сб </li>
  <li>Вс </li>
</ul>

<ul class="days">  

</ul>

</body>
</html>

