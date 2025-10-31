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
        // 苗字の方のリクエストパラメータが（中身は空っぽでも）在るかをissetでチェック
        if (isset($_REQUEST["second_name"])) {
            //echo 'ようこそ、' . $_REQUEST["user"] . 'さん。';
            echo 'ようこそ、' . htmlspecialchars($_REQUEST["second_name"])  . htmlspecialchars($_REQUEST["first_name"])  . 'さん。';
        } else {
            echo '<p>入力フォームから名前を入力してください。</p>';
            echo '<a href="name_input02.html">入力フォームへ戻る</a>';
        }
        ?>
    </div>
</body>

</html>