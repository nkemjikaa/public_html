<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test View</title>
    <style>
        h1 {
            color:red;
            margin-left: 5px;
        }
        h2 {
            color:blue;
            margin: 5px;
        }
        p {
            color:green;
            margin-left: 5px;
        }
        .imgBox {
            padding: 0.25rem;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            width: 300px;
        }

        .box{
            border: 1px solid rgba(0, 0, 0, 1.0);
            padding: 5px;
            float: left;
            margin: 5px;
            height: 280px;
        }
    </style>

</head>
<body>
    <h1>Mini Gallery </h1>
    <p>Here's a mini gallery showcasing my models </p>
    <div class="box">
        <h2><?php echo $model_1 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_1?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_2 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_2 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_3 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_3 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_4 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_4 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_5 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_5 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_6 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_6 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_7 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_7 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_8 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_8 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_9 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_9 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_10 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_10 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_11 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_11 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_12 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_12 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_13 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_13 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_14 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_14 ?>.png'>
    </div>
    <div class="box">
        <h2><?php echo $model_15 ?></h2>
        <img class="imgBox" src='assets/gallery/<?php echo $image3D_15 ?>.png'>
    </div>

</body>
</html>