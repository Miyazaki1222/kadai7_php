<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input - Indicator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Indicator Input</h2>
    <form action="write.php" method="post" class="btn-container">
        <button type="submit" name="status" value="Ball" class="btn-ball">BALL</button>
        <button type="submit" name="status" value="Strike" class="btn-strike">STRIKE</button>
        <button type="submit" name="status" value="Out" class="btn-out">OUT</button>
        <button type="submit" name="status" value="Clear" class="btn-clear">GAME CLEAR</button>
    </form>
    
    <a href="read.php" class="nav-link">履歴表示（モニタ画面）へ</a>
</body>
</html>