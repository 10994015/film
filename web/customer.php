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
    <title>客戶服務</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include_once('../shared/header.php'); ?>
    <div id="customer">
        <h2>聯繫客服驗證帳號</h2>
        <img src="../images/0024.png">
        <p>LINE ID: oep18541</p>
        <img src="../images/qrcode01.png" class="q1">
        <img src="../images/qrcode01.png" class="q2">
        <img src="../images/qrcode02.png" class="q3">
        <img src="../images/qrcode02.png" class="q4">
        <img src="../images/qrcode03.png" class="q5">
        <img src="../images/qrcode03.png" class="q6">
        <img src="../images/qrcode03.png" class="q7">
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>