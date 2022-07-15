<?php
session_start();
include_once('../config/conn.php');

if(isset($_GET['mailok']) && $_GET['mailok']==1){
    try{

        if(isset($_GET['mem_usercode']) && $_GET['mem_usercode']!=""){
            $mem_mail = $_GET['mem_mail'];
            $upuser = $_GET['mem_usercode'];
            $username = $_GET['username'];
            $sql_str ="UPDATE member SET level  =2         
            WHERE mail =:mem_mail";
            $create_table = "CREATE TABLE IF NOT EXISTS `$upuser` (id int(5) auto_increment, down varchar(100), primary key (id))";
            $create_user = "INSERT INTO `$upuser` (down) VALUES (:username)";
            
            $stmt = $conn ->prepare($sql_str);
            $stmt2 = $conn ->prepare($create_table);
            $stmt3 = $conn ->prepare($create_user);

            $stmt -> bindParam(':mem_mail' ,$mem_mail);
            // $stmt3 -> bindParam(':mem_mail3' ,$mem_mail);
            $stmt3 -> bindParam(':username' ,$username);

            $stmt ->execute();
            $stmt2 ->execute();
            $stmt3 ->execute();
    
        }else{
            $mem_mail = $_GET['mem_mail'];
            $sql_str ="UPDATE member SET level  =2         
                       WHERE mail =:mem_mail";
             $stmt = $conn ->prepare($sql_str);
             
             $stmt -> bindParam(':mem_mail' ,$mem_mail);
             $stmt ->execute();
        }
        //   header('Location:./login.php');
    }
    catch(PDOException $e){
      die('Error!!:'.$e->getMessage());
    }
  }

  if(isset($_GET['msg']) && $_GET['msg']==1){
      echo "<script>alert('登入失敗!')</script>";
  }
?>


<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include_once('../shared/header.php'); ?>
    <div id="login">
        <form action="../function/member_check.php" method="POST">
            
            <p>登入您的XXXX帳號</p>
            <input type="text" name="username" class="mem_mail" placeholder="請輸入帳號...." required/>
            <input type="password" name="pwd" class="mem_pwd" placeholder="請輸入密碼...." required/>
            <div class="link">
                <a href="./register.php" class="registerlink">會員申請</a>
                <a href="./forget.php" id="forgettext">忘記密碼?</a>
            </div>
            
            <input type="submit" class="submit-btn" value="登入" />
            <?php if(isset($_GET['msg']) && $_GET['msg']=="1"){ ?>
                <div class="error">帳號或密碼錯誤!</div>
            <?php } ?>
        </form>
    </div>
    <?php include_once('../shared/footer.php');?>
</body>
</html>