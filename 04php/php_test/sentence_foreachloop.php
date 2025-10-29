<!-- 配列の中身がある限り繰り返し処理をしてくれるforeach文について -->

<?php
// 配列
$machines = [
    ['name' => 'ファミリーコンピューター', 'brand' => '任天堂', 'year' => 1983],
    ['name' => 'メガドライブ', 'brand' => 'セガ', 'year' => 1988],
    ['name' => 'ネオジオ', 'brand' => 'SNK', 'year' => 1990],
]; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPのforeachの書き方いろいろ</title>
</head>

<body>

    <h1>繰り返し処理テスト</h1>

    <ul>
        <?php foreach ($machines as $machine): ?>
            <!-- <li>ファミリーコンピュータ- 任天堂（1983）</li> -->
            <li> <?= $machine['name'] . " - {$machine['brand']} " . "({$machine['year']})<br>"; ?> </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>