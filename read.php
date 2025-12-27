<?php
$data = [];
if (file_exists("data/data.csv") && ($handle = fopen("data/data.csv", "r")) !== FALSE) {
    while (($line = fgetcsv($handle)) !== FALSE) {
        $data[] = $line;
    }
    fclose($handle);
}
$latest = !empty($data) ? end($data) : ["-", "No Data"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display - Indicator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>現在のStatus</h2>
    <div style="font-size: 3rem; margin: 20px; monospace;">
        <?= htmlspecialchars($latest[1]) ?>
    </div>
    
    <h3>履歴</h3>
    <table>
        <tr><th>Time</th><th>Status</th></tr>
        <?php
        $rev_data = array_reverse($data);
        foreach (array_slice($rev_data, 0, 10) as $row): // 直近10件のみ表示 ?>
            <tr>
                <td><?= htmlspecialchars($row[0]) ?></td>
                <td><?= htmlspecialchars($row[1]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php" class="nav-link">← 入力画面に戻る</a>
</body>
</html>