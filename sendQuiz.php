<?php
/**
 * В цьому файлі йде збереження даних вікторини в БД
 * Звертаємся до цього файлу через XMLHttpRequest з файлі quiz.js
 */
session_start();
require_once "../database/db_connect.php";
require_once "../lib/lib.php";

if (!isset($_SESSION['email'])) {
    die("Помилка:Користувач не авторизований !");
}

$user_id = getUserId($conn, $_SESSION['email']);

//Перевіряємо чи відпралений POST запит
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //отримуємо дані запиту
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'];
    $count_quest = $data['count_quest'];
    $result = $data['result'];
    $user = getUser($conn, $_SESSION['email']); // fetch data
    // Зберігаємо результат вікторини в БД
    $sql = "INSERT INTO user_answer (question_id, user_id, result, count_quest) 
                VALUES ('".$id."', '".$user_id."', '".$result."', '".$count_quest."')";

    if ($conn->query($sql) === TRUE) {
        echo "Дані вікторини успішно збережені !";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


?>