<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    $value = 100;
    $arr = ['aaa', 'bbb'];

    try {
        echo 'こんにちは！<br>';
        echo '変数 value の値表示：$value<br>';
        echo "変数 value の値表示：$value<br>";
        echo "配列 arr の値表示：$arr[0]<br>";
        echo '文字の' + '連結';

    } catch (Exception $ex) {
        echo '-----<br>';
        echo "{$ex->getFile()}: (Line: {$ex->getLine()}) {$ex->getMessage()}<br>";
        echo '-----<br>';
    
    } catch (Error $er) {
        echo '-----<br>';
        echo "{$er->getFile()}: (Line: {$er->getLine()}) {$er->getMessage()}<br>";
        echo '-----<br>';
    }
    ?>
</body>

</html>
