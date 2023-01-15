<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ファイルにPOST送信</title>
</head>
<body>
<header>
    <h1>データ入力画面</h1>
</header>
<main>
<form action="write.php" method="post">
    <table>
        <tr><th>氏名</th><td><input type="text" name="name" required></td></tr>
        <tr><th>E-mail</th><td><input type="text" name="mail" required></td></tr>
        <tr><th>電話番号</th><td><input type="text" name="phone"></td></tr>
        <tr><th>好きな食べ物</th><td><input type="text" name="favoriteFood"></td></tr>
    </table>
    <input type="submit" value="送信">

</form>


</main>
<footer>
    <a href="index.php">戻る</a>
</footer>
</body>
</html>


