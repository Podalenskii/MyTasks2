<?php
//$_POST
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->getAllTasks();

header("Location: http://localhost/MyTasks/Tasks3/");exit;


