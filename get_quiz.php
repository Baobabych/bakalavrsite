<?php
/**
 * Файл для отримання даних по вказаній вікторині
 * Дані які будуть отримані, отримуємо через JS quiz.js, так би мовити AJAX
 */

require_once "../database/db_connect.php";

if(!isset($_GET['id'])){
    header('Content-Type: application/json');
}
// Витяг даних вікторини
$sql = "SELECT q.id AS question_id, q.type, q.question, 
        a.id AS answer_id, a.text AS answer_text, a.correct 
        FROM questions q 
        LEFT JOIN answers a ON q.id = a.question_id
        WHERE q.quiz_name = {$_GET['id']}";
$result = $conn->query($sql);

//формуємо массив даних вікторини
$quiz = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $question_id = $row['question_id'];
        if (!isset($quiz[$question_id])) {
            if($row['type'] != 'text') {
                $quiz[$question_id] = [
                    'id' => $question_id,
                    'type' => $row['type'],
                    'question' => $row['question'],
                    'answers' => []
                ];
            }else{
                $quiz[$question_id] = [
                    'id' => $question_id,
                    'type' => $row['type'],
                    'question' => $row['question'],
                    'correct' => $row['correct']
                ];
            }
        }
        if($row['type'] != 'text') {
            //формуємо масив відповідей
            $quiz[$question_id]['answers'][] = [
                'text' => $row['answer_text'],
                'correct' => $row['correct']
            ];
        }
    }
}

// Перетворення у JSON
header('Content-Type: application/json');
echo json_encode(array_values($quiz));

$conn->close();