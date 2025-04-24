<?php
session_start();
include 'database/db_connect.php';

// Перевіряємо, якщо користувач авторизований то відправляємо на профілю
if (isset($_SESSION['email'])) {
    header("Location: profile.php");
    exit();
}


$message = "";
$err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute
    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    //якщо існує такий email в БД
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_password);
        $stmt->fetch();

        if (md5($password) === $db_password) {
            $message = "Ви усішно авторизовані";
            //зберігаємо сесію
            $_SESSION['email'] = $email;
            header("Location: profile.php");
            exit();
        } else {
            $err = "Не вірно ведений пароль";
        }
    } else {
        $err = "Такий Email адрес не зареєстрований";
    }

    //закриаємо запит і з'єднання з БД
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusaFind - Авторизація</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/notes.css">
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
<main>
    <h1>Авторизація</h1>
    <?php
    //Виводимо помилки якщо є
    if(!empty($err)){
        echo "<p>".$err."</p>";
    }
    ?>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Відправити</button>
    </form>
    <p style="margin-top:80px;">
        Не маєте аккаунту ? <a style="color:blue;" href="register.php">Реєстрація</a>
    </p>

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
