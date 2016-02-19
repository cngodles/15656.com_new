<?php
require_once('site_config.php');
$list = yumdata_array("SELECT * FROM `attractions` WHERE `type` = ? ORDER BY `name`", array('EAT'));
?>
<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>15656.com - New</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="icon" href="../favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/leechburg.base.css">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="siteframe">
    <div id="wrapper">
        <?php include('site_header.php'); ?>
        <main>
        	<section id="featured_header" style="background-image:url(../images/sample_bg_eat.jpg);">
                <div class="inner">
                    <div class="pad">
                        <h1>Find a Restaurant in Leechburg</h1>
                    </div>
                </div>
            </section>
            <section class="businesslist">
                <div class="inner">
                    <div class="pad">
                        <h2>Select a place below</h2>
                        <?php foreach($list as $place){ ?>
                            <a href="/<?= strtolower($place['type']) ?>/<?= str_replace(' ', '-', $place['menu']) ?>" class="item">
                                <div class="graphic" style="background-image:url(http://www.15656.com/media/images/site_library/<?= $place['icon'] ?>);"></div>
                                <?= $place['name'] ?>
                                <div class="clear0"></div>
                            </a>
                        <?php } ?>
                        <div class="clear0"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor urna, mollis a ullamcorper id, volutpat quis ante. 
                        Suspendisse potenti. Pellentesque elementum, tellus vitae lacinia convallis, odio augue elementum leo, nec pharetra dolor mi 
                        sed tortor. Praesent consectetur nisl eu dolor auctor non porta mauris feugiat. Cras suscipit blandit suscipit. In felis erat, 
                        vestibulum eget iaculis non, luctus non lectus. Nulla facilisi. Cras nec elit neque, sit amet aliquet diam. Curabitur iaculis 
                        ultrices dui non rhoncus. Suspendisse potenti. </p>
                    </div>
                </div>
            </section>
        </main>
        <?php include('site_footer.php'); ?>
    </div>
    <?php include('site_mobilemenu.php'); ?>
</div>
<div id="responder"></div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>if (!window.jQuery) { document.write('<script src="/js/jquery-1.12.0.min.js"><\/script>'); }</script>
<script type="text/javascript" src="js/leechburg.main.js"></script>
<script type="text/javascript" src="js/leechburg.events.js"></script>
</body>
</html>
