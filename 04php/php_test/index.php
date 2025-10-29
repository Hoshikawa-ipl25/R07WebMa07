<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎の文法</title>
</head>

<body>
    <div>
        <?php
        echo "こんにちは <br>";
        echo 'Hello! World!<br>';
        echo "PHPだよー<br>";
        ?>

        <?php
        $name = "山田";
        echo "こんにちは、 $name さん<br>"; // 結果：こんにちは、山田 さん
        echo 'こんにちは、 $name さん<br>'; // 結果：こんにちは、$name さん
        echo "あなたが、{$name}さんですか<br>"; /*  あなたが山田さんですか */
        ?>

        <?php

        echo "サッカーのW杯は2026年開催です";
        echo "開催国はカナダ、アメリカ、メキシコ共同開催です<br>\n";

        // もしくは 

        echo 'バスケットボールのW杯は2027年開催です' . "\n";
        echo '開催国はカタールです<br>' . "\n";
        // \n は、ソースコード状での改行
        // ブラウザの表示上で改行したいときは<br>タグでOK

        ?>

        <!-- 省略式 php echoタグの書き方 -->
        <?= "<p>echoタグを使って表示している$name さん</p>" ?>

        <!-- phpでは、文字列は . でつなげる -->
        <?php
        echo 'リンゴは' . '赤いです。' . '<br>';
        ?>

        <!-- <<<のあとに指定した記号が文字列の終わりと指定できる -->
        <?php
        echo <<<END
	Welcome
	to
	PHP
	END;
        ?>
        <hr> <!-- 区切り線のタグ<hr>（最近あまり使われていないかも） -->

        <h2>変数・配列 操作表示チェック</h2>
        <p>

            <!-- 変数は上書きできます（下に書いた方が優先されていくことに） -->
            <?php
            $number = 17;
            echo $number; // 17 と出力される

            $name = '大谷';
            echo $name; // 大谷 と出力される
            ?>
        </p>
        <p>
            <!-- 変数は上書きできます（下に書いた方が優先されていくことに） -->
            <?php
            $name = '山本';
            $name = '佐々木';

            echo $name . "<br>"; // 佐々木 と表示される
            ?>

        </p>

        <p>
            <?php
            $num = 55;
            echo '今年はホームランを' . $num . '本打ちました';
            ?>
        </p>

        <p>
            <?php
            //$player = array('羽生', '宇野', '高橋'); // classic version
            $players = ['羽生', '宇野', '高橋']; // new version (PHP5.4ver and more)
            echo $players[0]; // 羽生を出力
            echo $players[2]; // 高橋を出力
            ?>
        </p>
        <p>
            <?php
            $players[0] = '羽生';
            $players[1] = '宇野';
            $players[2] = '高橋';
            echo $players[1]; // 宇野を出力
            ?>
        </p>
        <hr>
        <p>
            <?php
            // 連想配列 配列を、番号順の箱ではなく、名前を付けた箱にしていくイメージ
            $lunch_menu = [
                'appetizer' => 'コブサラダ',
                // appetizerのところが「キー値」、コブサラダのところが「値（バリュー）」
                'main' => 'キノコのパスタ',
                'drink' => 'ミルクティー',
            ];
            echo "最初の注文：" . $lunch_menu['appetizer'] . "<br>";

            $lunch_menu['appetizer'] = 'コーンスープ'; //　上書きも可能
            echo "注文しなおし：" . $lunch_menu['appetizer'] . "<br>"; // コーンスープをご用意いたします

            ?>
        </p>
    </div>
</body>

</html>