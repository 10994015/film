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
    <link rel="stylesheet" href="./styles/earn.css">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header id="header">
        <a href="./"><img src="./images/logo.png"></a>
        <ul id="nav">
            <a href="./web/information.php">官網資訊</a>
            <a href="./web/newbie.php">新手教學</a>
            <a href="./web/news.php">最新消息</a>
            <a href="./web/register.php">會員申請</a>
            <a href="./#task">任務專區</a>
            <a href="./web/rank.php">排行榜</a>
            <a href="./web/customer.php">客服服務</a>
            <?php if(isset($_SESSION['name'])){ ?>
            <a href="./web/logout.php" id="logout">登出</a>
            <p style="color:#fff">餘額:<?php echo $_SESSION['money'];?></p>
            <?php }else{ ?>
            <a href="./web/login.php">登入</a>
            <?php } ?>
        </ul>
        <i class="fas fa-bars" id="menu"></i>
    </header>
    <?php if(isset($_SESSION['name'])){ ?>
    <input type="hidden" id="userTure" value="1">
    <?php }else{?>
    <input type="hidden" id="userTure" value="0">
    <?php } ?>
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
            <img src="./images/filmbg.png" class="bg">
            <img src="./images/VFD1.png" class="img1">
            <img src="./images/VFD2.png" class="img2">
            <img src="./images/VFD3.png" class="img3">
            <img src="./images/VFD4.png" class="img4">
            <div class="txt">
                <p>PTC/看影片/活躍度/每日任務</p>
                <h3>影視優</h3>
            </div>
                <a href="javascript:;">官網總攬<span class="line1"></span><span class="line2"></span></a></div>
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
            <!-- 任務modeul     -->
            <input type="checkbox" id="taskchkbox">
            <input type="hidden" value="<?php echo $_SESSION['money']; ?>" id="moneyNum">
            <div id="taskModule">
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知<i class="fas fa-times orderClose"></i></div>
                    <div class="taskbox">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                        <img src="./images/close.png" class="task">
                    </div>
                    <a href="javascript:;" id="taskBtn" class="disable">抽取</a>
                </div>
            </div>
            <div class="giftbox" id="gifbox">
                <img src="./images/open.png" id="opengift" class="opengift">
            </div>
            <div id="cardMoudel" class="cardModule">
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知<i class="fas fa-times orderClose"></i></div>
                    <h4>恭喜您抽到此接單任務</h4>
                    <img src="./images/2323.png" alt="" id="card">
                    <img src="./images/card/008.png" alt="" id="cardContent">
                    <div class="boxbottom"><a href="javascript:;" id="cardBtn">確認</a></div>
                </div>
            </div>
            <div id="orderModule" class="orderModule">
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知 <i class="fas fa-times orderClose"></i></div>
                    <h4>是否轉入點數賺取並前往任務網站<br/>點數將轉入指定網址<br/>(操作時間:5~10分鐘)</h4>
           
                    <form action="./function/send.php" method="post" class="boxbottom">
                        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
                        <input type="hidden" name="mail" value="<?php echo $_SESSION['mail']; ?>">
                        <input type="submit" value="是" id="orderBtn" name="submit"><a href="javascript:;" class="orderClose">否</a>
                    </form>
                </div>
            </div>
            <div class="urlModule" id="urlModule">
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知 <i class="fas fa-times orderClose"></i> </div>
                    任務網站:<a href="https://bit.ly/35PsoRB ">https://bit.ly/35PsoRB </a>
                </div>
            </div>
            <div class="storeModule" id="storeModule" >
                <div class="back"></div>
                <div class="box">
                    <div class="boxheader">通知 <i class="fas fa-times orderClose"></i> </div>
                    <h4>您的餘額為0，請先儲值!</h4>
                    <div class="boxbottom"><a href="javascript:;" class="orderClose" id="storeBtn">確認</a></div>
                </div>
            </div>
            <div id="otherModule" class="otherModule">
                <div class="back"></div>
                <div class="box">
                <div class="boxheader">通知 <i class="fas fa-times orderClose"></i> </div>
                <h4>請先至 "主線任務" 抽取任務</h4>
                <div class="boxbottom orderClose"><a href="javascript:;" id="otherBtn"">確認</a></div>
                </div>
            </div>
            <!-- 任務END-->
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
                <img src="./images/maintaskBtn.png" id="mainBtn" class="maintaskImg2">
            </div>
            <div class="taskContent" id="taskContent2">
                <img src="./images/day.png" class="maintaskImg">
                <img src="./images/daybtn.png" class="maintaskImg2 orderTaskBtn">
            </div>
            <div class="taskContent" id="taskContent3">
                <img src="./images/倒數四小時.png">
                <img src="./images/問號任務箱.png" class="maintaskImg">
                <img src="./images/maintaskBtn.png" class="maintaskImg2 orderTaskBtn">
            </div>
            <div class="taskContent" id="taskContent4">
                <img src="./images/y1.jpg" class="maintaskImg-y">
                <img src="./images/y2.jpg" class="maintaskImg-y">
                <img src="./images/y3.jpg" class="maintaskImg-y">
            </div>
            <div class="taskContent" id="taskContent5">
                <img src="./images/pig.png" class="maintaskImg">
                <img src="./images/進度條.png">
            </div>
            <div class="taskContent" id="taskContent6">
                <img src="./images/F.png">
                <img src="./images/按我接取按鈕.png" class="maintaskImg2 orderTaskBtn">
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
    <script src="./js/earn.js"></script>
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