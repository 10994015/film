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
        <div id="news">
            <h2>INSYO</h2>
            <span>最新消息</span>
           
            <div class="newsList">
                <a href="javascript:;" class="newsItem">
                    <img src="./images/000.png">
                    <p>幹您娘幹您娘幹您娘幹您娘幹您娘幹您娘幹您娘幹您娘</p>
                </a>
                <a href="javascript:;" class="newsItem">
                    <img src="./images/000.png">
                    <p>幹您娘幹您娘幹您娘幹您娘幹您娘幹您娘幹您娘幹您娘</p>
                </a>
                <a href="javascript:;" class="newsItem">
                    <img src="./images/000.png">
                    <p>幹您娘幹您娘幹您娘幹您娘幹您娘幹您娘幹您娘幹您娘</p>
                </a>
            </div>
            <p>INSYO</p>
        </div>
        <div id="offweb">
            <img src="./images/t.jpg" alt="">
            <a href="javascript:;">官網總攬<span class="line1"></span><span class="line2"></span></a>
        </div>
        <div id="film">
            <div class="left">
                <img src="./images/film.png">
                <h3>時間由我掌控</h3>
                <p>在串流影音平台上，觀看您有興趣和喜愛的影片。<br>您可以在任務中抽取相對應的類型，並挑選觀看的影片。在主要任務、限時任務、指定任務以及累計任務中挑選您要執行的任務吧。</p>
            </div>
            <div class="right">
                <img src="./images/class.png">
            </div>
        </div>
        <div id="task">
            <div class="btnList">
                <img src="./images/btn1.png" id="taskBtn1">
                <img src="./images/btn2.png" id="taskBtn2">
                <img src="./images/btn3.png" id="taskBtn3">
                <img src="./images/btn4.png" id="taskBtn4">
                <img src="./images/btn5.png" id="taskBtn5">
                <img src="./images/btn6.png" id="taskBtn6">
            </div>
            <div class="taskContent" id="taskContent1">
                <img src="./images/maintask.png" class="maintaskImg">
                <img src="./images/maintaskBtn.png" id="maintaskBtn" class="maintaskImg2">
            </div>
            <div class="taskContent" id="taskContent2">
                <img src="./images/day.png" class="maintaskImg">
                <img src="./images/daybtn.png" class="maintaskImg2">
            </div>
            <div class="taskContent" id="taskContent3">
                <img src="./images/倒數四小時.png">
                <img src="./images/問號任務箱.png" class="maintaskImg">
                <img src="./images/maintaskBtn.png" class="maintaskImg2">
            </div>
            <div class="taskContent" id="taskContent4">
                <img src="./images/問號任務箱.png" class="maintaskImg">
            </div>
            <div class="taskContent" id="taskContent5">
                <img src="./images/pig.png" class="maintaskImg">
                <img src="./images/進度條.png">
            </div>
            <div class="taskContent" id="taskContent6">
                <img src="./images/F.png">
                <img src="./images/按我接取按鈕.png" class="maintaskImg2">
            </div>
            <div class="textBox">
                <img src="./images/textbox.png">
                <p id="taskText">主線任務為隨機抽取，請點選抽獎箱，抽取您的專屬個人任務</p>
            </div>
        </div>
    </div>

    <?php include_once('./shared/footer.php'); ?>
    <script src="./js/header.js"></script>
    <script src="./js/task.js"></script>
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