<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once 'database/db_connect.php';
require_once 'lib/lib.php';
// Перевіряємо, якщо користувач не авторизований то відправляємо на сторінку авторизаціїі
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

$user = getUser($conn, $_SESSION['email']); // fetch data
$quizes = getUserQuiz($conn, $user['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusaFind - Профіль</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/profile.css">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
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
<main style="width: 70%">
    <h1 class="title">Мій профіль</h1>
    <table class="table">
        <tr>
            <td><strong>Ім'я:</strong></td>
            <td><?php echo $user['username']; ?></td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td><?php echo $user['email']; ?></td>
        </tr>
        <tr>
            <td><strong>Дата реєстрації:</strong></td>
            <td><?php echo $user['created_at']; ?></td>
        </tr>
    </table>
    <h2 class="title">Мої вікторини</h2>
    <?php if(count($quizes) > 0): ?>
    <table class="table">
        <tr>
            <td><strong>Назва</strong></td>
            <td><strong>Кількість питань</strong></td>
            <td><strong>Вірних відповідей</strong></td>
            <td><strong>Дата</strong></td>
        </tr>
        <?php foreach ($quizes as $quize): ?>
        <tbody>
        <tr>
            <td><a href="showQuiz.php?id=<?php echo $quize['question_id']; ?>">Вікторина - <?php echo $quize['question_id']; ?></td>
            <td><?php echo $quize['count_quest'] ?></td>
            <td><?php echo $quize['result'] ?></td>
            <td><?php echo $quize['created_at'] ?></td>
        </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
        <p>У Вас ще немає пройдених вікторин</p>
    <?php endif; ?>
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
<script src="js/search.js"></script>
</html>
