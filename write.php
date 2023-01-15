<?php
// 入力内容の準備
    // 入力時間取得(php.iniで標準時刻をデフォルトのベルリン時間から日本時間に変更)
    date_default_timezone_set('Asia/Tokyo');
    $date = date("Y/m/d H:i:s");

    // フォームから送信されたデータを変数に代入
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $favoriteFood = $_POST["favoriteFood"];
    $birthYear = $_POST["birthYear"];

    // データをまとめる
        // 配列にデータを格納
        $info = [
            '日時' => $date,
            '氏名' => $name,
            'メールアドレス' => $mail,
            '電話番号' => $phone,
            '好きな食べ物' => $favoriteFood,
            '生まれ年' => $birthYear."年"
        ];
        // データをJSON形式に変換
        $data =  json_encode($info, JSON_UNESCAPED_UNICODE);

// ファイル読み込み
    // a:追加書き込み用のみでのopen、ファイルが無ければ作成
    $file = fopen('./data/data.txt','a');

// ファイルに書き込み
    fwrite($file, $data."\n");

// ファイルを閉じる
    fclose($file);

// read.phpにリダイレクト
    header("Location: read.php");
    exit();

?>
