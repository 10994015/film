<?php 
require_once('../config/conn.php');
session_start();
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>最新訊息</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include_once('../shared/header.php'); ?>
    <div id="news">
        <div class="newsList">
            <?php for($n=0;$n<=10;$n++){?>
            <div class="newsItem">
                <img src="../images/000.png">
                <div class="content">
                    <span class="day">22/07/23</span>
                    <h3>標題標題標題標題標題標題標題標題標題標題標題標題</h3>
                    <p>內文嫩文內文內文嫩文內文內文嫩文內文內文嫩文內文內文嫩文內文內文嫩文內文內文嫩文內文內文嫩文內文內文嫩文內文內文嫩文內文內文嫩文內文內文嫩文內文</p>
                    <a href="./post.php">閱讀文章-＞</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>