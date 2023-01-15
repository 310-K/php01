<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/read.css">
    <title>ファイルのデータを表示</title>
</head>
<body>
<header>
    <h1>アンケート集計結果</h1>
</header>
<main>

<table>
    <tr><th>日時</th><th>氏名</th><th>メールアドレス</th><th>電話番号</th><th>好きな食べ物</th><th>生まれ年</th></tr>
<?php
    // ファイルを変数に格納
    $filename = './data/data.txt';

    // fopenでファイルを開く(r:読み込みモードで開く)
    $fp = fopen($filename, 'r');

    // whileで行末までループ処理
    while (!feof($fp)){

        // fgetsでファイルを読み込み、変数に格納
        $txt = fgets($fp);

        // 空行排除のif文
        if($txt != ""){

            // JSON形式のデータを元の配列に戻す
            $info = json_decode($txt, true);
?>

    <tr>
        <?php 
        // 項目データ毎にセル作成
        foreach ($info as $value){?>
        <td><?= $value ?></td>
        <?php } ?>
    </tr>

<?php
        }
    };

    // ファイルを閉じる
    fclose($fp);
?>
</table>


</main>
<footer>
    <a href="index.php">戻る</a>
</footer>



</body>
</html>