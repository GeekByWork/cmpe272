<?php
$title = "Artzz - Art at Best";
$content = "Artzz Gallery";
$paintingsData = array();
$paintings = ['Painting1', 'Painting2', 'Painting3', 'Painting4', 'Painting5', 'Painting6', 'Painting7', 'Painting8', 'Painting9'];
$gallery = ['Painting1'=>'gallery1', 'Painting2'=>'gallery2', 'Painting3'=>'gallery3', 'Painting4'=>'gallery4', 'Painting5'=>'gallery5', 'Painting6'=>'gallery6', 'Painting7'=>'gallery7', 'Painting8'=>'gallery8', 'Painting9'=>'gallery9'];
$recent = [];
$recentVisible = $mostVisitedVisible = "none";
foreach ($paintings as $painting)
{
    if(isset($_COOKIE[$painting])) {
        if($_COOKIE[$painting]==0)
            continue;
        $paintingsData[$painting] = $_COOKIE[$painting];
    }
}

if(count($paintingsData)>0)
    $mostVisitedVisible = "block";

if(isset($_COOKIE['recentlyVisited']))
{
    $recent = json_decode(stripslashes($_COOKIE['recentlyVisited']), true);
    $recentVisible = "block";
}

arsort($paintingsData);
/*
foreach ($paintingsData as $x => $x_value) {
    echo("<script>console.log('$x')</script>");
    echo("<script>console.log('$x_value')</script>");
}
*/
?>

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
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</head>

<body>

<div class="header-wrap" name="home">
    <header class="clearfix">
        <p ><?php echo $content; ?></p>
    </header>
</div>

<div class="container">

    <div style="text-align: center" class="row">
        <div class="col-md-6">
            <div style="width: 500px;display: <?php echo $mostVisitedVisible; ?>;" id="mostVisitedCarousel" class="carousel slide" data-ride="carousel">
                <div style="text-align: center;">Most Visited</div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $f = $i = 0;
                    foreach ($paintingsData as $x => $x_value)
                    {
                        if($x_value==0)
                            continue;
                        if($f==0) {
                            echo '<li data-target="#mostVisitedCarousel" data-slide-to="'.$i.'" class="active"></li>';
                            $f = 1;
                        }else
                            echo '<li data-target="#mostVisitedCarousel" data-slide-to="'.$i.'"></li>';
                        $i++;
                    }
                    ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $f = 0;
                    foreach ($paintingsData as $x => $x_value)
                    {
                        if($x_value==0)
                            continue;
                        if($f==0)
                        {
                            echo '<div class="item active">
                    <img width="200;" height="180" style="opacity:0.7;margin-left: auto;margin-right: auto;" src="../assets/img/' . $gallery[$x] . '.jpg">
                    </div>';
                            $f = 1;
                        }
                        else {
                            echo '<div class="item">
                    <img width="200;" height="180" style="opacity:0.7;margin-left: auto;margin-right: auto;" src="../assets/img/' . $gallery[$x] . '.jpg">
                    </div>';
                        }
                    }
                    ?>
                </div>

                <!-- Left and right controls -->
                <a style="background: #e6e6e6" class="left carousel-control" href="#mostVisitedCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a style="background: #e6e6e6" class="right carousel-control" href="#mostVisitedCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div style="width: 500px;display: <?php echo $recentVisible;?>;" id="#recentlyVisitedCarousel" class="carousel slide" data-ride="carousel">
                <div style="text-align: center;">Recently Visited</div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $f = $i = 0;
                    foreach ($recent as $x)
                    {
                        if($f==0) {
                            echo '<li data-target="#recentlyVisitedCarousel" data-slide-to="'.$i.'" class="active"></li>';
                            $f = 1;
                        }else
                            echo '<li data-target="#recentlyVisitedCarousel" data-slide-to="'.$i.'"></li>';
                        $i++;
                    }
                    ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $f = 0;
                    foreach ($recent as $x)
                    {
                        if($f==0)
                        {
                            echo '<div class="item active">
                            <img width="200;" height="180" style="opacity:0.7;margin-left: auto;margin-right: auto;" src="../assets/img/' . $gallery[$x] . '.jpg">
                            </div>';
                            $f = 1;
                        }
                        else {
                            echo '<div class="item">
                            <img width="200;" height="180" style="opacity:0.7;margin-left: auto;margin-right: auto;" src="../assets/img/' . $gallery[$x] . '.jpg">
                            </div>';
                        }
                    }
                    ?>
                </div>

                <!-- Left and right controls -->
                <a style="background: #e6e6e6" class="left carousel-control" href="#recentlyVisitedCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a style="background: #e6e6e6" class="right carousel-control" href="#recentlyVisitedCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div id="greywrap">
        <div class="row">
            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting1&img=gallery1">
                    <h3>Painting 1</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery1.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting2&img=gallery2">
                    <h3>Painting 2</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery2.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting3&img=gallery3">
                <h3>Painting 3</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery3.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting4&img=gallery4">
                <h3>Painting 4</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery4.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting5&img=gallery5">
                <h3>Painting 5</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery5.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting6&img=gallery6">
                    <h3>Painting 6</h3>
                    <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery6.jpg" alt="">
                    <p>It's not only a painting, it's a story.</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting7&img=gallery7">
                    <h3>Painting 7</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery7.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting8&img=gallery8">
                    <h3>Painting 8</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery8.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>

            <div class="col-lg-4 callout">
                <a href="./FullSizeView.php?name=Painting9&img=gallery9">
                <h3>Painting 9</h3>
                <img width="200" height="170" style="margin-left: auto;margin-right: auto;" src="../assets/img/gallery9.jpg" alt="">
                <p>It's not only a painting, it's a story.</p>
                    </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
