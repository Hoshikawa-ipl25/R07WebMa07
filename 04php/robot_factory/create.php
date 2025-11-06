<?php
$robo_name = $_POST["robo_name"];
$robo_color = $_POST["robo_color"];
$robo_size = $_POST["robo_size"];
$robo_x = $_POST["robo_x"];
$robo_y = $_POST["robo_y"];
$robo_angle = $_POST["robo_angle"];
// echo $robo_size . $robo_x . $robo_y . $robo_angle;

if ($robo_size == 'l') {
    $size_px = '300px';
} elseif ($robo_size == 'm') {
    $size_px = '200px';
} elseif ($robo_size == 's') {
    $size_px = '100px';
} else {
    $size_px = '40px';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ロボット登場！ - ロボットファクトリー -</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg">
    <!-- <p>ロボット登場画面</p> -->
    <figure style="width:<?= $size_px ?>;top:<?= $robo_x ?>px;left:<?= $robo_y ?>px;transform:rotate(<?= $robo_angle ?>deg)">
        <figcaption><?php echo $robo_name; ?></figcaption>
        <img src="img/<?php echo $robo_color; ?>.png" alt="">
    </figure>
    <a href="robot.html" class="back">戻る</a>
</body>

</html>