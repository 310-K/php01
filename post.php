<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-2.1.3.min.js"></script>
    <title>ファイルにPOST送信</title>
</head>
<body>
<header>
    <h1>入力画面</h1>
</header>
<main>
<form action="write.php" method="post">

    <table id="submitForm">
        <tr><th>氏名</th><td><input type="text" name="name" required></td></tr>
        <tr><th>E-mail</th><td><input type="text" name="mail" required></td></tr>
        <tr><th>電話番号</th><td><input type="tel" name="phone"></td></tr>
        <tr><th>好きな食べ物</th>
            <td>
                <select name="favoriteFood" id="">
                    <option value="寿司">寿司</option>
                    <option value="焼肉">焼肉</option>
                    <option value="その他">その他</option>
                </select>
                <!-- <input type="text" name="favoriteFood"> -->
            </td>
            </tr>
            <?php
                $number = "";
                // 現在の西暦年を取得
                $nowYear = date("Y");
                for($i = 1900; $i <= $nowYear; $i++){
                    $number .= '<option value="'.$i.'">'.$i.'</option>';
                };
            ?>
        <tr><th>生まれ年</th><td><select name="birthYear" id="birthYear"><?= $number?></select></td></tr>
        
            <?php
                // $lunchBox = 
                //     '<select name="lunchBox">
                //         <option value="のりから弁当">のりから弁当</option>
                //         <option value="焼肉弁当">焼肉弁当</option>
                //         <option value="上海やきそば">上海やきそば</option>
                //     </select>';
                // $orderForm = "";
                // $orderNumber = $_POST["HowMany"];
                // for($i = 1; $i <= $orderNumber; $i++){
                //     $orderForm .= '<tr><th>お弁当</th><td>'.$lunchBox.'</td></tr>'; 
                // };
                // echo $orderForm;
            ?>
        
    </table>
    <input type="submit" value="送信">

</form>

</main>
<footer>
    <a href="index.php">戻る</a>
</footer>

<script type="text/javascript">
    // let orderForm = "";
    // for(i = 1; i <= $("#HowMany").val; i++){
    //     orderForm +=
    //     `<select name="lunchBox${i}">
    //         <option value="のりから弁当">のりから弁当</option>
    //         <option value="焼肉弁当">焼肉弁当</option>
    //         <option value="上海やきそば">上海やきそば</option>
    //     </select>`;
    // }
    // $("#submitForm").append(orderForm);
</script>


</body>
</html>


