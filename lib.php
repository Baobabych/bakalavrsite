<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//отримуємо список комозиторів по потрібній епосі:barocco, modernism, classicism
function getComposerByEpoh($conn, $epohName){
    $result = $conn->query("SELECT * FROM composers WHERE `epoch` = '{$epohName}'");
    return $result->fetch_all(MYSQLI_ASSOC);
}

//Шукаємо комозитора по ID
function getComposer($conn, $id){
    $result = $conn->query("SELECT * FROM composers WHERE id = '{$id}'")->fetch_assoc();
    return $result;
}

//Список всіх вікторин
function getAllQuiz($conn)
{
    $result = $conn->query("SELECT MIN(id) AS id, quiz_name FROM `questions` GROUP BY quiz_name");
    return $result->fetch_all(MYSQLI_ASSOC); //повертаємо асоціативний массив
}

// Отримуємо дані про користвача
function getUser($conn, $email){
    $stmt = $conn->prepare("SELECT id,username,email,created_at FROM users WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    return $result->fetch_assoc(); // fetch data
}

//Отримання ID користувача
function getUserId($conn, $email){
    // Отримуємо ID користувача
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute(); $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id);
        $stmt->fetch();
        return $id;
    }

    return false;
}

//Отримуємо результати всіх вікторин які пройшов користувач
function getUserQuiz($conn, $id)
{
    $result = $conn->query("SELECT * FROM user_answer WHERE user_id = '{$id}' ORDER BY id desc");
    return $result->fetch_all(MYSQLI_ASSOC);
}

?>