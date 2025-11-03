<?php
$robo_name = $_POST["robo_name"];
$color = $_POST["color"];
$size = $_POST["size"];
$x = $_POST["x"];
$y = $_POST["y"];
$angle = $_POST["angle"];
// echo $size . $x . $y . $angle;

if ($size == 'l') {
    $size_px = '300px';
} elseif ($size == 'm') {
    $size_px = '200px';
} elseif ($size == 's') {
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
    <figure style="width:<?= $size_px ?>;top:<?= $x ?>px;left:<?= $y ?>px;transform:rotate(<?= $angle ?>deg)">
        <figcaption><?php echo $robo_name; ?></figcaption>
        <img src="img/<?php echo $color; ?>.png" alt="">
    </figure>
    <a href="robot.html" class="back">戻る</a>
</body>

</html>