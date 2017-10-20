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
    
    //Малюєм меню
    function drawMenu($menu = [], $vertical = true) {
        
        if ($vertical == true) {
          foreach ($menu as $value) {
            echo "<li>";
            echo "<a href=$value[href]> $value[link]</a>";
            echo "</li>";
          }

        }else{
          foreach ($menu as $value) {
          echo "<a href=$value[href]> $value[link]</a>";
          }
        }

        
    }
?>

<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?= $welcome ?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
      <blockquote>
        <?php 
        //echo "Сегодне: $dsy, $mon, $year";
        $hour = (int) strftime('%H');
        $welcome = '';

        if ($hour>0 && $hour<6) {
          echo $welcome = 'Доброї ночі';
        }elseif ($hour>=6 && $hour<12) {
          echo $welcome = 'Доброго ранку';
        }elseif ($hour>=12 && $hour<18) {
          echo $welcome = 'Добрий день';
        }elseif ($hour>=18 && $hour<23) {
          echo $welcome = 'Добрий вечір';
        }else {
          echo $welcome = 'Доброї ночі';
        }
        ?>
      </blockquote>
    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются однотипные задания и единая система оценки.
    </p>
    <p>
      Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого государственного экзамена. Срок действия данного документа истекает 31 декабря года, следующего за годом его выдачи, поэтому у абитуриентов есть возможность поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет.
    </p>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->

    
    <ul>

      <?php

      drawMenu($leftMenu);



      // foreach ($leftMenu as $value) {
      //   echo "<li>";
      //   echo "<a href=$value[href]> $value[link]</a>";
      //   echo "</li>";
        
      // }
      ?>

      <!-- <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li> -->
    </ul>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
    drawMenu($leftMenu, false);
    ?>
    <hr> 
    &copy; Супер Мега Веб-мастер, 2000 &ndash;
    <?=$year?> 
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>