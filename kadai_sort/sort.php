<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 昇順・降順の切り替えが可能なソート関数
        function sort_2way(array $data, string $order) {
            // ソート方向によって処理を切り替え
            if ($order === 'asc') {
                sort($data);  // 昇順ソート（キーの紐付けなし）
            } elseif ($order === 'desc') {
                rsort($data); // 降順ソート（キーの紐付けなし）
            } else {
                echo "ソート順が正しくありません。'asc' または 'desc' を指定してください。<br>";
                return;
            }

            // 結果を1行ずつ表示
            foreach ($data as $value) {
                echo $value . "<br>";
            }
        }

        // テスト用の配列
        $sample_array = [8, 3, 5, 1, 9];

        // 関数の呼び出し（'asc' または 'desc' を指定）
        sort_2way($sample_array, 'asc');
        echo "<hr>";
        sort_2way($sample_array, 'desc');
        ?>
    </p>
</body>

</html>