<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートと表示を行う関数
        function sort_and_display(array $data) {
            // 配列に要素があるかチェック
            if (count($data) > 0) {
                // 値でソート（キーとの紐づけを維持しない）
                sort($data);

                // 1行ずつ出力
                foreach ($data as $value) {
                    echo $value . "<br>";
                }
            } else {
                // 配列が空の場合のメッセージ
                echo "配列が空です。<br>";
            }
        }

        // テスト用の配列
        $sample_array = [5, 2, 9, 1, 7];

        // 関数を実行
        sort_and_display($sample_array);
        ?>
    </p>
</body>

</html>