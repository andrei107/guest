<?php

include_once "connect.php";
include_once "post.php";

$database = new DatabaseConnection();
$db = $database->getConnection();

$post = new Post($db);

$post->name = $_POST['name'];
$post->message = $_POST['message'];

if (!empty($post->name) && !empty($post->message) && $post->createNewPost()) {
    http_response_code(200);
    echo json_encode(array("message" => "Запись добавлена"));
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Ошибка создания"));
}