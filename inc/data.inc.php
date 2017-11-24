<?php
    //Установка локали и даты
    setlocale(LC_ALL, "ukaraine");
    $day = strftime('%d');
    $mon = strftime('%B');
    $year = strftime('%Y');

    
    //Ініціалізація масиву
    $leftMenu = [
        ['link'=>'Домой', 'href'=>'index.php'],
        ['link'=>'О нас', 'href'=>'about.php'],
        ['link'=>'Контакты', 'href'=>'contact.php'],
        ['link'=>'Таблица умножения', 'href'=>'table.php'],
        ['link'=>'Калькулятор', 'href'=>'calc.php']
    ];  
    
    
?>