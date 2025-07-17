<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    ini_set('display_errors', 1);
    $user_name = '侍 太郎';
    echo "私の名前は、{$user_name} です。";
    echo '<br>';
    $user_name = '侍 花子';
    echo '私の名前は、{$user_name} です。';
    ?>
</body>

</html>
