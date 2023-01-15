<?php
// 入力内容の準備
    // 入力時間取得(php.iniで標準時刻をデフォルトのベルリン時間から日本時間に変更)
    // date_default_timezone_set('Asia/Tokyo');
    $date = date("Y/m/d H:i:s");

    // フォームから送信されたデータを変数に代入
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $favoriteFood = $_POST["favoriteFood"];

    // データをまとめる
    $data = $name ." ". $mail ." ". $phone ." ". $favoriteFood;


// ファイル読み込み
    // a:追加書き込み用のみでのopen、ファイルが無ければ作成
    $file = fopen('./data/data.txt','a');

// ファイルに書き込み
    fwrite($file, $data."\n");

// ファイルを閉じる
    fclose($file);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書き込み画面</title>
</head>
<body>
<header>

</header>
<main>
    <h1>書き込み完了！</h1>
    <?php 
        // 以下、XSS関数を作成
        function xss ($value){
        return htmlspecialchars($value, ENT_QUOTES);
    } ?>
    <table>
        <tr><th>氏名</th><td><?= xss($name); ?></td></tr>
        <tr><th>E-mail</th><td><?= xss($mail); ?></td></tr>
        <tr><th>電話番号</th><td><?= xss($phone); ?></td></tr>
        <tr><th>好きな食べ物</th><td><?= xss($favoriteFood); ?></td></tr>
    </table>


</main>
<footer>
    <a href="index.php">戻る</a>
</footer>
</body>
</html>