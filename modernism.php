<?php
session_start();
require_once 'database/db_connect.php';
require_once "lib/lib.php";
//Массив композиторів вказаної епохи
$composers = getComposerByEpoh($conn,'modernism');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusaFind - Епоха модернізму</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/epochs.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carattere:400|Alegreya+SC:400,400i,500,500i,700,700i,800,800i,900,900i|Pattaya:400">
    <link
    rel="stylesheet"
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"
  />
  <link rel="stylesheet" href="../res/fontawesome/css/all.css" />
  <link rel="stylesheet" href="css/player.css" />
</head>
<body>
<header>
    <div>
        <img src="img/key.png" alt="">
        <a class="logotxt" href="index.php">Musa Find</a>
    </div>
    <nav>
        <?php include "partials/menu_item.php";?>
    </nav>
</header>
<main>
    <div class="title">
        <h1>Модернізм</h1>
        <h3>«У пошуках гармонії та краси»</h3>
        <div>
            <a href="#history">ІСТОРІЯ →</a>
            <a href="#genre">ЖАНРИ →</a>
            <a href="#comp">КОМПОЗИТОРИ →</a>
        </div>
    </div>
    <div class="history" id="history">
        <div class="historyContent">
            <h2>Історія Модернізму</h2>
            <p>Модернізм у музиці — це естетична позиція, що лежить в основі періоду змін та розвитку музичної мови, яка наприкінці XX століття, в період різноманітних реакцій на виклик та переосмислення старих категорій музики, нововведень, призвели до нових способів організації і наближення до гармонійних, мелодійних, звукових та ритмічних аспектів музики.

                Музикознавець Карл Дальхаус характеризує модернізм як “Очевидний момент історичного розриву. "Прорив" Малера, Стросса та Дебюссі передбачає глибоку історичну трансформацію…”. Еро Тарасті визначає музичний модернізм безпосередньо з точки зору “розчинення традиційної тональності та трансформації самих основ тональної мови, пошуку нових моделей в атоналізмі, політоналізмі чи інших формах зміненої тональності”, що відбулося на рубежі століття.</p>
                
    </div>   
 <div class="images">
                    <img class="hisimg" src="img/moderart.jpg" alt="">
                    <img class="hisimg" src="img/trommmteam.jpg" alt="">
                </div>
    </div>
    <div class="instruments">
        <h2>Інструменти</h2>
        <p>Щоб послухати як звучать інструменти клікніть по зображенням</p></div>
        <div class="instrimg1">
            <a href="https://youtu.be/Hf6yDgca82k" target="_blank"><img class="instrimg" style="width: 350px; height: 250px;" src="img\classic_media\fortepiano.jpg" alt="fortepiano"></a>
            <a href="https://youtu.be/xe4CGplmdW0" target="_blank"> <img class="instrimg" src="img\classic_media\trombone.jpg" alt="trombon"></a>
        <a href="https://www.youtube.com/watch?v=2DaRhiCKGMk" target="_blank"><img class="instrimg" style="height: 150px;" src="img/instruments/viola.png" alt="skripka"></a>
    </div>

        <div class="instruments">
        <p class="text">Щодо інструментів, то вони залежать від конкретного жанру та композитора. Наприклад, в джазі, який є частиною модернізму, використовуються такі інструменти, як саксофон, тромбон, труба, контрабас, барабани та фортепіано.</p>   
     </div>
     
        <div class="instrimg1">
            <a href="https://www.youtube.com/embed/bb61Fy7oDJ4" target="_blank"><img class="instrimg" style="width: 250px; height: 300px; margin-left: 20px;" src="img\arabana.jpg" alt="baraban"></a>
            <a href="https://youtu.be/vhaezjuK428" target="_blank"><img class="instrimg" src="img\contrabas.jpg" style="width: 300px; height: 330px;" alt="kontrabas"></a>
                <a href="https://youtu.be/IcBmBzybxS4" target="_blank"> <img class="instrimg" style="margin-left: 50px; width: 350px; height: 330px;" src="img\axophone.jpg" alt="Saksofon"></a>
                    <a href="https://www.youtube.com/watch?v=pX9A5bib1FQ" target="_blank"><img class="instrimg" style="width: 250px; height: 300px; margin-left: 20px;" src="img/instruments/fagot.jpg" alt="fagot"></a>
                </div>

                <div class="sep"></div>

    <div class="genre" id = "genre">
        <h2>Жанри Класицизму</h2>
      <h2>Експресіонізм:<br></h2>

             <p class="text"> Цей жанр часто використовує стандартний симфонічний оркестр, але з великим акцентом на диссонанс і атонічність. Інструменти, такі як фортепіано, скрипка, віолончель та духові інструменти, є поширеними</p>
<br>
<div class="video">
    <iframe width="853" height="480" src="https://www.youtube.com/embed/Chc8HnaQQqM" title="А. Шенберг. &quot;Місячний п&#39;єро&quot;, Харків, 01.03.2017 - A. Schönberg. „Pierrot Lunaire“, Charkiw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<h2>Абстракціонізм:<br></h2>

       <p class="text"> Цей жанр відкриває широкі можливості для використання різноманітних інструментів. Він може включати все, від традиційних оркестрових інструментів до електронних інструментів та звуків, створених не музичними об’єктами</p>
    


<h2>Футуризм:<br></h2>

       <p class="text"> Футуристи часто експериментували з новими звуками і технологіями. Інструменти, такі як інтуонарумори, створені Луїджі Руссоло, були спеціально розроблені для виробництва нових типів шумів.</p>


<h2>Ораторія:<br></h2>

       <p class="text">Ораторія – це хоровий твір, зазвичай релігійного змісту, розповідь про релігійну історію з музикою. Найвідоміша, можливо, "Messiah" Генделя. А саме хорова частина. Особливо якщо ви бачили фільм "Тупий і ще тупіший" 1994року</p>
       

<h2>Джаз: <br></h2>

       <p class="text">Джаз, який є частиною модернізму, використовує такі інструменти, як саксофон, тромбон, труба, контрабас, барабани та фортепіано</p>
      
    </div>

<div class="sep"></div>

    <div class="comp" id="comp">
        <h2>Композитори</h2>
        <?php if(!empty($composers)): ?>
            <?php foreach ($composers as $composer): ?>
                <div class="compContent">
                    <img src="<?php echo $composer['photo']; ?>" alt="">
                    <div>
                        <b><?php echo $composer['name'];?></b>
                        <p class="text">
                            <a class="link" style="color: blue" href="composer.php?id=<?php echo $composer['id']; ?>">Читати</a>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</main>
<footer>
    <div class="head">
        <img src="img/key.png" alt="">
        <h2>Musa Find</h2>
    </div>
    <h3>Питання? Баги? Рекомендації?</h3>
    <h3>Зв’яжись з нами!</h3>
    <div class="social">
        <img src="img/facebook.png" alt="">
        <img src="img/twitter.png" alt="">
        <img src="img/instagram.png" alt="">
    </div>
    <div class="contacts">
        <div class="contactsLine">
            <img src="img/number.png" alt="">
            <p>+380957030305</p>
        </div>
        <div class="contactsGroup">
            <h4>Баги і пропозиції</h4>
            <div class="contactsLine">
                <img src="img/mail.png" alt="">
                <p>musa.find@gmail.com</p>
            </div>
        </div>
        <div class="contactsGroup">
            <h4>Співпраця</h4>
            <div class="contactsLine">
                <img src="img/mail.png" alt="">
                <p>team_musa.find@gmail.com</p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="js/extText.js"></script>
</html>