<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 oldie" lang="en"> <![endif]--> 
<!--[if IE 7 ]>    <html class="no-js ie7 oldie" lang="en"> <![endif]--> 
<!--[if IE 8 ]>    <html class="no-js ie8 oldie" lang="en"> <![endif]--> 
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]--> 
<!--[if (gte IE 10)|!(IE)]><!--> 
<html class="no-js" lang="en"> <!--<![endif]--> 
    <head>
        <title>PANASONIC FAN PAGES</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="description" content="Deskripsi" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Facebook Share -->

        <meta property="og:title" content="Title share di Facebook"/>
        <meta property="og:description" content="Deskripsi share di Facebook" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo fb_url('participant');?>" />
        <meta property="og:image" content="<?php echo base_url() ?>assets/img/thanks_pict.jpg" />	

        <link href="<?php echo base_url() ?>assets/img/favicon.ico" rel="icon" type="image/x-icon" />
        
        <!--link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/fonts.css" /-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css" />

        <!--[if IE]>
          <script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
          <script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/selectivizr.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>	

    </head>

    <body>
        <div id="fb-root"></div>
        <script src="https://connect.facebook.net/en_US/all.js"></script>
        <script>
            FB.init({
                appId: '704159596309446',
                status: false, // check login status
                cookie: true, // enable cookies to allow the server to access the session
                xfbml: true // parse XFBML
            });
        </script>
        <div id="wrapper">
            <div class="container">
                <nav class="navbar navbar-default navbar-static-top clearfix" role="navigation">
                    <div class="navbar navbar-header pull-right">
                        <a href="#<?php echo fb_url('home/show_home') ?>"><img class="navbar-brand"  src="<?php echo base_url() ?>assets/img/logo.png" alt=""/></a>
                    </div>
                    <ul class="nav navbar-nav pull-right">
                        <li <?=(uri_string()==''||uri_string()=='home/registration'||uri_string()=='home/terms') ? 'class="active"' :''; ?>>
                            <a href="#<?php echo fb_url('home/show_home') ?>">HOME</a>
                        </li>
                        <li <?=(uri_string()=='home/mechanism') ? 'class="active"' :''; ?>><a href="#<?php echo fb_url('home/mechanism') ?>">MECHANISM</a></li>
                        <li <?=(uri_string()=='home/participant') ? 'class="active"' :''; ?>><a href="#<?php echo fb_url('participant') ?>">MY DREAM TEAM</a></li>
                    </ul>
                </nav>
