<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 昇順または降順で配列をソートして表示する関数
        function sort_2way(array $data, bool $order) {
            // 昇順 (TRUE) か降順 (FALSE) かで処理を分ける
            if ($order) {
                sort($data); // 昇順ソート（キーと値の紐づけなし）
            } else {
                rsort($data); // 降順ソート（キーと値の紐づけなし）
            }

            // 結果を1行ずつ表示
            foreach ($data as $value) {
                echo $value . "<br>";
            }
        }

        // テスト用の配列
        $sample_array = [10, 3, 7, 1, 9];

        // 関数の呼び出し（昇順: TRUE）
        echo "昇順ソート:<br>";
        sort_2way($sample_array, TRUE);

        echo "<hr>";

        // 関数の呼び出し（降順: FALSE）
        echo "降順ソート:<br>";
        sort_2way($sample_array, FALSE);
        ?>
    </p>
</body>

</html>