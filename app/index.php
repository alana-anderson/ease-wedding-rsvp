<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js ie ie6 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9 lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title></title>
    <meta name="description" content="">
    <?php require("_/inc/head.php"); ?>
</head>
<body>
    <?php require('_/inc/header.php'); ?>
    <div id="">
      <form id="fullpage" action="_/inc/send_handler.php" method="post">
        <!-- Landing -->
        <?php require('_/inc/landing.php'); ?>
        <?php require('_/inc/photo.php'); ?>
        <?php require('_/inc/schedule.php'); ?>
        <?php require('_/inc/location.php'); ?>
        <?php require('_/inc/honeyfund.php'); ?>
        <?php require('_/inc/rsvp.php'); ?>
        <?php require('_/inc/additional_guests.php'); ?>

      </form>
    </div>
    <?php require('_/inc/footer.php'); ?>
    <!-- JAVASCRIPT -->
    <?php require('_/inc/analytics.php'); ?>
    <?php require('_/inc/tail.php'); ?>
    <?php require('_/inc/guests.php'); ?>
</body>
</html>
