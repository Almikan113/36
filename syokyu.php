<?php
$title = '次の問題に答えよ';
 
$answer = $question[0];

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36HR謎解き</title>
</head>
<body>
    <h2><?php echo $title ?></h2>
    <form method="POST" action="answer.php">
    <input type="text" name="question" size="40">
    <input type="hidden" name="answer" value="<?php echo $answer ?>">
    <input type="submit" value="回答する">
    </form>
</body>
</html>