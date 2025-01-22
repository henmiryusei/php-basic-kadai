<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];

        function sort_2way(&$array, $order) {
          if ($order === true) {
            sort($array);
        } elseif ($order === false) {
            rsort($array);
        }
        }

        sort_2way($nums, true);
        echo '昇順にソートします<br>';
        foreach ($nums as $key => $value) {
          echo "{$value}<br>";
        }

        sort_2way($nums, false);
        echo '降順にソートします<br>';
        foreach ($nums as $key => $value) {
          echo "{$value}<br>";
        }
        ?>
    </p>
</body>

</html>