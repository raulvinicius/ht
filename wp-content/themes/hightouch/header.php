<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo ( $post->post_name != '' ) ? get_the_title() . " | " : ""; ?>[hi]</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-responsive.css">
        <script src="<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <header>
            <div id="header" class="container-fluid navbar-fixed-top">
                <div class="row-fluid">

                    <div id="bg-logo" class="span12">
                        <a id="logo" href="<?php bloginfo('url') ?>">
                            <h1>[hi]</h1>
                            <h2>Desafie-se</h2>
                        </a>
                    </div>

                </div>
                <div id="ico-open-menu" data-trigger="menu">
                    <a href="#">
                        <img src="<?php bloginfo( 'template_url' ) ?>/img/hi-ico-open-menu.png">
                    </a>
                </div>
                <div class="row-fluid">

                    <div id="menu" class="span12 menu">
                        <nav class="animado-04-in-out">
                            <ul>
                                <li class="link animado-02-in-out"><a href="<?php bloginfo('url') ?>/hi">[hi]</a>
                                </li><li class="link animado-02-in-out"><a href="<?php bloginfo('url') ?>/cases">Cases</a>
                                </li><li class="space link dropdown animado-02-in-out">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Soluções</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="animado-02-in-out" href="<?php bloginfo('url') ?>/solucoes/hi-comemoracao">[hi] Comemoração</a>
                                        </li>
                                        <li>
                                            <a class="animado-02-in-out" href="<?php bloginfo('url') ?>/solucoes/hi-corporativo">[hi] Corporativo</a>
                                        </li>
                                        <li>
                                            <a class="animado-02-in-out" href="<?php bloginfo('url') ?>/hi-school">[hi] School</a>
                                        </li>
                                    </ul>
                                </li><li class="link animado-02-in-out"><a href="<?php bloginfo('url') ?>/contato">Contato</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </header>