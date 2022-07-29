<?php 
require_once("../config/conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>排行榜</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include_once('../shared/header.php'); ?>
    <div id="rank">
        <div class="rankbox">
            <div class="top">
                <div class="item">
                    <img src="../images/no1.png" alt="">
                    <div class="content">
                        <h2 style="color:#F9DE83">1ST</h2>
                        <p>zxc559995</p>
                        <p>王曉明</p>
                        <p>$1500000</p>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/no2.png" alt="">
                    <div class="content">
                        <h2 style="color:#E8E9ED">2ST</h2>
                        <p>zxc559995</p>
                        <p>陳景宣</p>
                        <p>$1500000</p>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/no3.png" alt="">
                    <div class="content">
                        <h2 style="color:#B4967C">3ST</h2>
                        <p>zxc559995</p>
                        <p>黃昭和</p>
                        <p>$1500000</p>
                    </div>
                </div>

            </div>
            <div class="rankTable">
                <div class="title">
                    <p>排名</p>
                    <p>累積獎金</p>
                    <p>會員帳號</p>
                    <p>名字</p>
                </div>
                <div class="item">
                    <h3>4</h3>
                    <div class="infor">
                        <p>955455</p>
                        <p>asdd15886</p>
                        <p>陳聰明</p>
                    </div>
                </div>
                <div class="item">
                    <h3>5</h3>
                    <div class="infor">
                        <p>884535</p>
                        <p>tt8897</p>
                        <p>黃順安</p>
                    </div>
                </div>
                <div class="item">
                    <h3>6</h3>
                    <div class="infor">
                        <p>822354</p>
                        <p>r002568778</p>
                        <p>簡里安</p>
                    </div>
                </div>
                <div class="item">
                    <h3>7</h3>
                    <div class="infor">
                        <p>801220</p>
                        <p>yyyyyp333</p>
                        <p>陳恩</p>
                    </div>
                </div>
                <div class="item">
                    <h3>8</h3>
                    <div class="infor">
                        <p>766887</p>
                        <p>qaz2582582</p>
                        <p>彭玉暄</p>
                    </div>
                </div>
                <div class="item">
                    <h3>9</h3>
                    <div class="infor">
                        <p>699874</p>
                        <p>mm3939889</p>
                        <p>吳承恩</p>
                    </div>
                </div>
                <div class="item">
                    <h3>10</h3>
                    <div class="infor">
                        <p>612220</p>
                        <p>h098889555</p>
                        <p>皮世名</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>