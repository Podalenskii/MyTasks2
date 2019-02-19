<?php

$data = [
    "id"      => $_GET['id'],
    "title"   => $_POST['title'],
    "content" => $_POST['content']
];
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->getAllTasks();


header("Location: http://localhost/MyTasks/Tasks3/");exit;
