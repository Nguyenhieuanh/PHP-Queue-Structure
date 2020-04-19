<?php
include_once "Classes/Queue.php";
$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
echo $queue->dequeue();
echo "<pre>";
echo $queue->dequeue();

echo "<pre>";
var_dump($queue->isEmpty());

$queue->enqueue(4);
$queue->enqueue(5);
echo $queue->dequeue();
echo "<pre>";
echo $queue->dequeue();
echo "<pre>";
echo $queue->dequeue();

echo "<pre>";
var_dump($queue->isEmpty());

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Cài đặt cấu trúc Queue</title>
</head>
<body>

</body>
</html>
