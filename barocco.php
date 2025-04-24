<?php
    session_start();
    require_once 'database/db_connect.php';
    require_once "lib/lib.php";
    //Массив композиторів вказаної епохи
    $composers = getComposerByEpoh($conn,'barocco');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusaFind - Епоха барокко</title>
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
        <h1>Барокко</h1>
        <h3>«Перлина неправильної (чудернацької) форми»</h3>
        <div>
            <a href="#history">ІСТОРІЯ →</a>
            <a href="#genre">ЖАНРИ →</a>
            <a href="#comp">КОМПОЗИТОРИ →</a>
        </div>
    </div>
    <div class="history" id="history">
        <div class="historyContent">
            <h2>Історія Барокко  - "час, коли музика стала мовою почуттів, емоцій та віри".</h2>
            <p>Порівняно з літературою та образотворчими мистецтвами, музика, до XVII століття, розвивалася начебто повільніше, без
                яскравих зльотів і відомих усіма шедеврів.</p>
            <p>Це відбувалося тому, що професійна музика в Європі тривалий час була прерогативою церкви, і мала знаходитися в рамках
                канонів і традиції, подолати які було дуже складно.</p>
            <p>Важливі зміни у всіх культурних сферах, зокрема й у музиці, відбулися епоху Відродження.</p>
            <p>Проте лише в XVII - початку XVIII століть, стався, буквально, переворот, завершив формування музики, як мистецтва
                світського, покликаного, передусім, надавати емоційний вплив на слухача.</p>
            <p>Це був час розквіту художнього стилю, названого Бароко, що перекладається як «дивний, химерний». Він відрізняється
                підвищеною емоційністю, складністю мови та декоративною пишністю.</p>
            <p>Головним музичним інструментом бароко став орган у духовній та камерній світській музиці. Також широкого поширення
                набули клавесин, щипкові та смичкові струнні (віоли, баркова гітара, барочна скрипка, віолончель, контрабас), а
                також
                дерев'яні духові інструменти: різні флейти, кларнет, гобой, фагот. В епоху бароко функції такого поширеного
                щипкового
                струнного інструменту, як лютня, були значною мірою зведені в акомпанемент бассо континуо (басовий голос
                багатоголосного
                музичного твору з цифрами, на основі яких виконавець будує акомпанемент, часто імпровізуючи) інструментами. В епоху
                бароко формуються перші оркестри та з'являється оркестрова музика .</p>
                
    </div>   
 <div class="images">
                    <img class="hisimg" src="img/baroquearchi.jpg" alt="">
                    <img class="hisimg" src="img/baroqueteam.jpg" alt="">
                </div>
    </div>
    <div class="instruments">
        <h2>Інструменти</h2>
        <p>Щоб послухати як звучать інструменти клікніть по зображенням</p></div>
        <div class="instrimg1">
        <a href="https://www.youtube.com/watch?v=dBoGdJ54oWI" target="_blank"><img class="instrimg" style="width: 350px; height: 250px;" src="img/instruments/organ.jpg" alt="Organ"></a>
        <a href="https://www.youtube.com/watch?v=KQiBIb_klT8" target="_blank"> <img class="instrimg" src="img/instruments/klavesin.png" alt="Harpsichord"></a>
        <a href="https://www.youtube.com/watch?v=2DaRhiCKGMk" target="_blank"><img class="instrimg" style="height: 150px;" src="img/instruments/viola.png" alt="skripka"></a>
    </div>

        <div class="instruments">
        <p class="text">Головним музичним інструментом бароко став орган у духовній та камерній світській музиці. Також широкого поширення набули клавесин, щипкові та смичкові струнні (віоли, баркова гітара, барочна скрипка, віолончель, контрабас), а також дерев'яні духові інструменти: різні флейти, кларнет, гобой, фагот. В епоху бароко функції такого поширеного щипкового струнного інструменту, як лютня, були значною мірою зведені в акомпанемент бассо континуо (басовий голос багатоголосного музичного твору з цифрами, на основі яких виконавець будує акомпанемент, часто імпровізуючи) інструментами. В епоху бароко формуються перші оркестри та з'являється оркестрова музика. </p>   
     </div>

        <div class="instrimg1">
            <a href="https://www.youtube.com/watch?v=uT3SBzmDxGk" target="_blank"><img class="instrimg" src="img/instruments/barochna_skripka.png" alt="violonchel"></a>
            <a href="https://www.youtube.com/watch?v=ZLjprbeWMxQ" target="_blank"><img class="instrimg" src="img/instruments/barocha_lutnia.png" alt="lutnia"></a>
                <a href="https://www.youtube.com/watch?v=9eONG-gOYXw" target="_blank"> <img class="instrimg" style="margin-left: 50px;" src="img/instruments/goboy.png" alt="Flute"></a>
                    <a href="https://www.youtube.com/watch?v=pX9A5bib1FQ" target="_blank"><img class="instrimg" style="width: 250px; height: 300px; margin-left: 50px;" src="img/instruments/fagot.jpg" alt="fagot"></a>
                </div>

                <div class="sep"></div>

    <div class="genre" id = "genre">
        <h2>Жанри Барокко</h2>
      <h2>Фуга:<br></h2>

             <p class="text"> Фуга – це форма, де тема повторюється у різних голосах, переплітаючись та розвиваючись. Тема повторюється та перетинається між різними інструментами. Прикладом може бути ​Fugue in G-minor BWV 578. (Думаємо, що ви, як і ми, спершу прочитали в назві відому марку автомобілів BMW)</p> <img src="img/smiles2.png" alt="">
<br>
<br>
              <audio id="player" src="img/bar_mus_vid/Fugue-in-G-Minor-BWV-578.mp3"></audio>
    <div class="player">
      <div class="control">
        <i class="fas fa-play" id="playbtn"></i>
      </div>
      <div class="info">
        Fugue in G-minor BWV 578 - Bach
        <div class="bar" id="progress-bar">
          <div id="progress"></div>
        </div>
      </div>

      <div id="current">0:00</div>
    </div>

    <script src="js/player.js"></script>
    

    <p class="text">Відома ​шведський хеві-метал гурт Sabaton використовує початок цього твору в пісні “The Red Baron” з їхнього альбому "The Great War".</p>

<div class="video">
    <iframe width="100%" height="480" src="https://www.youtube.com/embed/1snEYPg8TXs" title="SABATON - The Red Baron (Official Lyric Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<h2>Концерт:<br></h2>

       <p class="text"> Концерт – це жанр, де сольний інструмент (наприклад, скрипка або клавішні) взаємодіє з оркестром. Відомий концерт – "Чотири пори року" Антоніо Вівальді.Пропонуємо переглянути мультик про черепашку, впевнені, що у багатьох прокинеться відчуття ностальгії.</p>

<div class="video">
    <video controls width="860" height="480px" src="img/bar_mus_vid/turtles.mp4"></video>
</div>

<p class="text">Також цю композицію використала всім відома фірма "SAMSUNG" у рекламі свого смартфону. Компанія Samsung використовувала «Грозу» Вівальді можливо ще й тому, що це популярний рінгтон. Ефектна сучасна обробка додає ще більше динаміки та потужності неперевершеному шедевру.:</p>

<div class="video">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/fEcounNuYLw?list=TLGGCcTpYeZEEBUxNTAxMjAyNA" title="Новая реклама Samsung Galaxy S4 - Russia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

<h2>Сюїта:<br></h2>

       <p class="text">Сюїта епохи бароко - це музична форма, яка складається з кількох контрастних частин. Барокова сюїта зазвичай складається з чотирьох частин - алеманди, куранти, сарабанди і джиги. Прикладом є "Wassermusik" Генделя. За визнанням самого Генделя, свою "Музику на воді" він написав не лише для королівської знаті, а й для народу, який заповнив береги Темзи під час королівської прогулянки. Вийшов дуже цікавий оркестровий твір за участю "гучних інструментів": труб, валторн, гобоїв та флейт (адже "Музика на воді" призначалася для виконання на відкритому повітрі), причому у такому поєднанні вони застосовувалися вперше. В окремих місцях відбувається ніби перекличка між мідною духовою групою (трубами та валторнами) та всім оркестром, а іноді труби та валторни самі створюють ефект діалогу.</p>

<div class="video">
    <iframe width="935" height="526" src="https://www.youtube.com/embed/EVAB2z1RPu4" title="G.F. Händel: Water Music - Akademie für alte Musik Berlin - Live concert HD" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<br>

<h2>Ораторія:<br></h2>

       <p class="text">Ораторія – це хоровий твір, зазвичай релігійного змісту, розповідь про релігійну історію з музикою. Найвідоміша, можливо, "Messiah" Генделя. А саме хорова частина. Особливо якщо ви бачили фільм "Тупий і ще тупіший" 1994року</p>
       <div class="video">
        <video controls width="860" height="480px" src="img\bar_mus_vid\stupid.mp4"></video>
    </div>

<h2>Соната:<br></h2>

       <p class="text">Соната – це музичний твір для одного або декількох інструментів, часто з клавіром. Прикладом є "Sonata in D Major" скрипка і клавір П'єтро Локателлі.</p>
       
       <div class="video">
       <iframe width="853" height="480" src="https://www.youtube.com/embed/QORw2tfe_l4" title="P.Locatelli Sonata for cello and piano D major, Minzycello" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
       </div>

       <h2>Прелюдія та фуга:<br></h2>

       <p class="text">Прелюдія – це короткий музичний шматок, який слугує вступом до іншої композиції. Фуга, як ми вже згадували, – це тема, яка повторюється та розвивається у різних голосах. Прикладом може бути "Well-Tempered Clavier" Баха.</p>
       <div class="video">
       <iframe width="853" height="480" src="https://www.youtube.com/embed/xCqWH9bKzQE?list=PLecKPCyj4yRMudcX-F3oM2SVD6nxFMaK1" title="Bach - WTC I Prelude and fugue no. 1 in C major BWV 846 - Henstra | Netherlands Bach Society" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

</div>

<div class="sep"></div>

    <div class="comp" id="comp">
        <h2>Композитори</h2>
        <?php if(!empty($composers)): ?>
        <?php foreach ($composers as $composer): ?>
        <div class="compContent">
            <img src="<?php echo $composer['photo']; ?>" alt="">
            <div>
                <b><?php echo $composer['name']; ?></b>
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