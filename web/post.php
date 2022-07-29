<?php 
require_once('../config/conn.php');
session_start();
if(isset($_GET['id']) && $_GET['id'] != ""){
    try{
        $sql_str = "SELECT * FROM news WHERE id = :id";
        $stmt = $conn -> prepare($sql_str);
        $id = $_GET['id'];
        $stmt -> bindParam(':id',$id);
        $stmt -> execute();
        $total = $stmt -> rowCount();
        if($total>=1){
            $row_RS = $stmt -> fetch(PDO::FETCH_ASSOC);
        }
    }
    catch(PDOException $e){
        die('Error!:'.$e->getMessage());
      }
}
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>最新消息</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include_once('../shared/header.php'); ?>
    <div id="post">
        <div class="pagePost">
            <span><?php echo $row_RS['date']; ?></span>
            <?php if($row_RS['type']==1){echo ' <img src="../images/A.png">'; }elseif($row_RS['type']==2){echo ' <img src="../images/B.png">';}else{echo  ' <img src="../images/C.png">';} ?>
            <h2><?php echo $row_RS['title']; ?></h2>
            <p><?php echo nl2br($row_RS['content']); ?></p>
            <a href="./news.php">回前頁</a>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>