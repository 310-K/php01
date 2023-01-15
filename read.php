

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ファイルのデータを表示</title>
</head>
<body>
<header>
    <h1>データ表示画面</h1>
</header>
<main>

<?php
    // ファイルを変数に格納
    $filename = './data/data.txt';

    // fopenでファイルを開く(r:読み込みモードで開く)
    $fp = fopen($filename, 'r');

    // whileで行末までループ処理
    while (!feof($fp)){

        // fgetsでファイルを読み込み、変数に格納
        $txt = fgets($fp);

        // ファイルを読み込んだ変数を出力
        echo $txt.'<br>';
    }

    // ファイルを閉じる
    fclose($fp);

?>

</main>
<footer>
    <a href="index.php">戻る</a>
</footer>
</body>
</html>