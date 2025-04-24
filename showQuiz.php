<?php
session_start();
require_once 'database/db_connect.php';
require_once "lib/lib.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusaFind - Вікторина</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/quiz.css">
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
    <div id="err" style="display: none" class="quizContent"><p>Помилка:данної вікторини не існує.</p></div>
    <ol id="quiz"></ol>
    <button id="submit" onclick="submitQuiz()">Перевірити відповіді</button>
    <p id="res"></p>
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
<script src="js/quiz.js"></script>
</body>

</html>