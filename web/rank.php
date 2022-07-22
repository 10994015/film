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
            <div class="item ranktitle">
                <p class="p1">排名</p>
                <p class="p2">累積獎金</p>
                <p class="p3">會員帳號</p>
                <p class="p4">名字</p>
            </div>
            <div class="item no1">
                <p class="p1">1</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
            <div class="item">
                <p class="p1">2</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
            <div class="item">
                <p class="p1">3</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
            <div class="item">
                <p class="p1">4</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
            <div class="item">
                <p class="p1">5</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
            <div class="item">
                <p class="p1">6</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
            <div class="item">
                <p class="p1">7</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
            <div class="item">
                <p class="p1">8</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
            <div class="item">
                <p class="p1">9</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
            <div class="item">
                <p class="p1">10</p>
                <p class="p2">1500000</p>
                <p class="p3">sxe7654</p>
                <p class="p4">王O哲</p>
            </div>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>