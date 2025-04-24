<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusaFind - Головна сторінка</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carattere:400|Alegreya+SC:400,400i,500,500i,700,700i,800,800i,900,900i|Pattaya:400">
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
        <div class="headBack">
            <div>
                <h1>Musa Find</h1>
            </div>
            <br>
            <p>Збірник біографії композиторів простими словами.</p>
            <br>
            <form action="era.php">
                <button>ЗНАЙДИ СВОЮ МУЗУ</button>
            </form>     
        </div>
        <div class="content">
            <div class="mainText">
                <h2>Ти - обраний!</h2>
                <p>
                    Класична музика - це не просто набір звуків, а ціла історія, яка розповідається мовою емоцій і
                    змушує здригнутися
                    найпотаємніші струни душі. Кожна композиція - це окремий світ, який ви можете відвідати, якщо
                    зосередитесь і дозволите
                    їй проникнути у ваше серце.
                    <br>
                    Ви - обрана людина, яка має можливість пережити неймовірні пригоди. Ви можете перевтілитися у героя
                    епохи Відродження,
                    романтичного поета, відважного революціонера, або навіть космічного мандрівника.
                    <br>
                    А ще, ви, навіть, не підозрюєте, яка величезна кількість класичних композицій супроводжує нас в
                    повсякденному житті.
                    <br>
                    Яка мелодія звучала в культовій грі Resident Evil6? Композиції якого автора супроводжують персонажів
                    в мультфільмі
                    "Король Лев"? Звідки родом відома на весь світ пісня «Carol of the Bells»? Це все і багато іншого ви
                    дізнаєтесь за
                    допомогою нашого сайту!
                    <br>
                    Класична музика - це подарунок для тих, хто любить життя і хоче зробити його більш цікавим і
                    насиченим. Якщо ви готові
                    до цього виклику, то запрошуємо вас поринути в світ класичної музики разом з нами!
                </p>
                <blockquote>
                    "Музика - це відкриття більш високе, ніж мудрість і філософія" - Людвіг ван Бетховен.
                </blockquote>
            </div>
            <div class="sep"></div>
            <div class="steps">
                <h2>4 кроки, які допоможуть тобі стати знавцем класичної музики:</h2>
                <div class="stepsCon">
                    <div class="i1"></div>
                    <div class="t">
                        <h4>Крок 1</h4>
                        <p>Вибери епоху класичної музики , до якої хочеш перенестися.</p>
                    </div>
                    <div class="i2"></div>
                    <div class="t">
                        <h4>Крок 2</h4>
                        <p>Вибери композитора, який тебе цікавить.</p>
                    </div>
                    <div class="t">
                        <h4>Крок 3</h4>
                        <p>Прочитай біографію і цікаві факти, послухай твори.</p>
                    </div>
                    <div class="i3"></div>
                    <div class="t">
                        <h4>Крок 4</h4>
                        <p>Пройди вікторину по розділам біографії чи творам композитора.</p>
                    </div>
                    <div class="i4"></div>
                </div>
            </div>
            <div class="bonus">
                <button onclick="window.location.href = '#note'" class="present">
                    <img src="img/present.png" alt="">
                </button>
                <div id="note" class="note">          
                    <div class="noteMain"> 
                        <button onclick="window.location.href = '#closeNote'" class="closeNote">
                            <img src="img/x.png" alt="">
                        </button> 
                        <div class="noteCon">
                            <div class="noteHead">
                                <img src="img/stars1.png" alt="">
                                <h2>НОТИ</h2>
                                <img src="img/stars2.png" alt="">
                            </div>
                            <h6>
                                Сподобалась мелодія? Від нас ноти, з тебе інструмент і ставай другим Моцартом!
                                </br>
                                </br>
                                Де знайти? В кінці біографії комозитора ти можеш знайти список з посиланням на скачування нот всіх його творів. Або
                                у вкладці навігації "Ноти" можеш забити в пошуку потрібну композицію.
                            </h6>
                            <form action="notes.php">
                                <button>
                                    <img class="noteImg" src="img/pairNotes.png" alt="">
                                    <h3>ХОЧУ НОТИ!</h3>
                                </button>
                            </form>
                            </br>
                            <img src="img/stars3.png" alt="">
                        </div>
                    </div>
                </div>
                <img class="arrow" src="img/arrow.png" alt="">
                <p>натисни на мене!</p>
            </div>
            <div class="chip">
                <h2>В чому наша фішка?</h2>
                <div class="chips">
                    <div class="ch">
                        <div class="back"><img src="img/feather.png" alt=""></div>
                        <h5>З нами легко!</h5>
                        <p>
                            Довгі, сірі, занудні тексти, зубріння біографії - це все НЕ про нас!
                            <br>
                            Проживай кожну біографію композитора як свою, паралельно слухаючи його композиції на кожен
                            період життя, зустрічай
                            цитати, цікаві факти, меми, відео з виконанням композицій .
                        </p>
                    </div>
                    <div class="ch">
                        <div class="back"><img src="img/note.png" alt=""></div>
                        <h5>Ноти</h5>
                        <p>
                            На нашому сайті ви зможете не тільки прослухати композиції і подивитися на їх виконання
                            відомими піаністами, а ще знайти
                            ноти і відео-уроки як грати ту чи іншу мелодію на різних інструментах.
                        </p>
                    </div>
                    <div class="ch">
                        <div class="back"><img src="img/question.png" alt=""></div>
                        <h5>Що?Де?Коли?</h5>
                        <p>
                            Ви можете пройти вікторину, яка допоможе вам перевірити і закріпити свої знання. Вікторина
                            складається з різних типів
                            питань, таких як впізнати композитора за фото, назвати твір за фрагментом.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="head">
            <img src="img/key.png" alt="">
            <h2>Musa Find</h2>
        </div>
        <h3>Сайт створено для Музичної школи №3 ім.Бориса Гмирі в місті Полтава</h3>
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
</html>