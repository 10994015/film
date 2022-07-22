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
    <title>新手教學</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include_once("../shared/header.php"); ?>
    <div id="newbie">
        <img src="../images/newbie.png">
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>