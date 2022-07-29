<?php 
require_once('../config/conn.php');
session_start();

$sql_str = "SELECT * FROM news ORDER BY id DESC";
$RS_mb = $conn -> query($sql_str);
$total_RS_mb = $RS_mb -> rowCount();
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
    <div id="newsPage">
        <div class="newsList">
            <?php foreach($RS_mb as $item){?>
            <div class="newsItem">
                <?php if($item['type']==1){echo ' <img src="../images/A.png">'; }elseif($item['type']==2){echo ' <img src="../images/B.png">';}else{echo  ' <img src="../images/C.png">';} ?>
                <div class="content">
                    <span class="day"><?php echo $item['date']; ?></span>
                    <h3><?php echo $item['title']; ?></h3>
                    <p><?php echo $item['content']; ?></p>
                    <a href="./post.php?id=<?php echo $item['id']; ?>">閱讀文章>>></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>