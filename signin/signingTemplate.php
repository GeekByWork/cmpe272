<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <link href="../assets/css/animate-custom.css" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/modernizr.custom.js"></script>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
<div id="navbar-main">
    <div class="navbar navbar-fixed-top" style="background-color: #efefef;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-pencil" style="font-size:30px; color:#3498db;"></span>
                </button>
                <a class="navbar-brand hidden-xs hidden-sm" href="./"><span class="icon icon-pencil" style="font-size:18px; color:#3498db;"></span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../">Home</a></li>
                    <li><a href=<?php echo $link1; ?>><?php echo $link1Text; ?></a></li>
                    <li><a href=<?php echo $link2; ?>><?php echo $link2Text; ?></a></li>
            </div>
        </div>
    </div>
</div>

<div id="headerwrap" style="background:white" id="home" name="home">
    <?php echo $content ?>
</div>
</body>
<script>
    function signUp(){
        document.location = document.location+"signup.php";
    }
</script>