<?php 
require_once('./config/conn.php');
session_start();

?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>影視優</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header id="header">
        <a href="./"><img src="./images/logo.png"></a>
        <ul id="nav">
            <a href="javascript:;">官網資訊</a>
            <a href="javascript:;">新手教學</a>
            <a href="javascript:;">最新消息</a>
            <a href="./web/register.php">會員申請</a>
            <a href="javascript:;">任務專區</a>
            <a href="javascript:;">排行榜</a>
            <a href="javascript:;">客服服務</a>
            <?php if(isset($_SESSION['name'])){ ?>
            <a href="./web/logout.php" id="logout">登出</a>
            <?php }else{ ?>
            <a href="./web/login.php">登入</a>
            <?php } ?>
        </ul>
        <i class="fas fa-bars" id="menu"></i>
    </header>
    <div id="index">
        <div id="banner">
            <video width="640" height="480" id="video" muted playsinline loop="loop" autoplay="autoplay">
                <source src="./images/banner.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
            </video>
            <!-- <img src="./images/banner.gif" class="bannerImg"> -->
            <a href="./web/register.php"><p>馬上加入</p><span class="line1"></span><span class="line2"></span></a>
        </div>
    </div>

    <?php include_once('./shared/footer.php'); ?>
    <script src="./js/header.js"></script>
    <script>
    const video = document.getElementById('video');
    window.onload = ()=>{
        video.play();
    }
    setTimeout(()=>{
        video.play();
    },10);
    </script>
</body>
</html>