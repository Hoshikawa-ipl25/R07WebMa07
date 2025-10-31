<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[出力結果]入力フォーム - PHP Sample Programs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php
        if (isset($_REQUEST["user"])) {
            //echo 'ようこそ、' . $_REQUEST["user"] . 'さん。';
            echo 'ようこそ、' . htmlspecialchars($_REQUEST["user"])  . 'さん。';
        } else {
        ?>
            <p>入力フォームから何か入力してください</p>
            <a href="name_input.html">入力フォームへ戻る</a>
        <?php
        }
        ?>
    </div>
</body>

</html>