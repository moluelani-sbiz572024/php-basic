<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    function double(int $num) {
      return $num * 2;
    }

    echo double(100);
    ?>
</body>

</html>
