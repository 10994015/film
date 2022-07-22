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
    <title>最新消息</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include_once('../shared/header.php'); ?>
    <div id="post">
        <div class="pagePost">
            <span>22/07/22</span>
            <img src="../images/000.png">
            <h2>標題標題標題標題標題標題</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit dolores delectus minima ab nesciunt velit quas praesentium, numquam, ad dolorem, tenetur omnis unde optio quo officiis obcaecati sunt. Ut, facilis.
            Nisi vel non inventore? Minima architecto cum maxime pariatur cupiditate illo eum labore laborum incidunt neque, officiis, dolor deleniti temporibus. Minima culpa eius voluptas. Aperiam rerum laborum id illum qui?
            Sunt perspiciatis, ullam consectetur laboriosam odio eius voluptatum odit minus ab minima sequi exercitationem alias eum temporibus iusto sit tempora distinctio obcaecati labore impedit quam sint cumque corrupti. Porro, voluptatum?
            Enim dignissimos fugit eligendi aut ullam. Non asperiores voluptates nemo. Adipisci, dolores sint. Laudantium, doloribus accusamus ut modi ullam delectus soluta nostrum, pariatur animi assumenda, alias incidunt! Nisi, vitae nesciunt.
            Quod, tenetur. Culpa unde debitis velit maiores. Obcaecati excepturi delectus qui modi? Esse eveniet reprehenderit nostrum fugit, repudiandae adipisci in dicta sit ab suscipit, vitae officia at ex quae magnam!</p>
            <a href="./news.php">回前頁</a>
        </div>
    </div>
    <?php include_once('../shared/footer.php'); ?>
</body>
</html>