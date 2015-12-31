<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Âm nhạc của tôi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <style type="text/css">
    canvas#canvas4 {
        position: relative;
        top: 20px;
    }
    </style>
    <link rel="shortcut icon" href="<?php echo Configure::read("IMG_URL_BACKEND"); ?>/minus.png">
    <?php 
    echo $this->Html->css(array('backend/style.default','backend/morris','backend/select2'));
    echo $this->Html->script(array('both/jquery-1.11.1.min'));
    ?>
</head>
<body>
    <?php 
    echo $this->element('backend/header'); 
    ?>
    <section>
        <div class="mainwrapper">
        <?php
        echo $this->element('backend/leftnav'); 
        echo $this->fetch('content');
        ?>
        </div>
    </section>
</div>
    <?php 
    echo $this->Html->script(array('backend/jquery-migrate-1.2.1.min','both/bootstrap.min','backend/modernizr.min','backend/pace.min','backend/retina.min','backend/jquery.cookies','backend/flot/jquery.flot.resize.min','backend/jquery.sparkline.min','backend/morris.min','backend/raphael-2.1.0.min','backend/bootstrap-wizard.min','backend/select2.min','backend/flot/jquery.flot.min','backend/flot/jquery.flot.spline.min','backend/custom','backend/dashboard'));
    ?>
</body>
</html>