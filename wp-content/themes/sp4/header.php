<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>



  <head>

    <title><?php bloginfo('title'); ?></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css" media="screen" />
    <link href="<?php bloginfo('template_url'); ?>/css/styleee.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/navi_line.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/buttons.css" rel="stylesheet" type="text/css" />
    <link rel="canonical" href="http://sp4bilgoraj.pl" />

    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-41579487-1', 'sp4bilgoraj.pl');
          ga('send', 'pageview');

    </script>
     
    <!--[if IE]>
    <link href="<?php bloginfo('template_url'); ?>/css/ie_only.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <?php wp_head(); ?>
    </head>
    
    <body>
    <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div id="facebookbutton"><div class="fb-like" data-href="http://sp4bilgoraj.pl" data-layout="box_count" data-action="like" data-show-faces="false" data-share="true"></div></div>
<!-- <div id="googlebutton"><script type="text/javascript" src="http://sp4bilgoraj.pl"></script>
<g:plusone></g:plusone></div> -->
    <div class="bar">
        <div id="bar_wrapper">
            <div id="name_bar">Szkoła Podstawowa nr 4 w Biłgoraju</div>
            <div id="date_bar"><?
              $dni=array('niedziela','poniedziałek','wtorek','środa','czwartek','piątek','sobota'); //tworzymy tablicę z nazwami dnia tygodnia
              $miesiace=array('grudnia','stycznia','lutego','marca','kwietnia','maja','czerwca','lipca','sierpnia','września','października','listopada'); //tworzymy tablicę z nazwami miesięcy
              $dzien=date('d');  //wczytujemy aktualny dzień w postaci dwucyfrowej
              $dn=$dni[date('w')];  //przypisujemy do zmiennej element kryjący się pod numerem takim samym jak numer dzisiejszego dnia (w)
              $mc=$miesiace[date('n')];  //przypisujemy do zmiennej element kryjący się pod numerem takim samym jak numer teraźniejszego miesiąca (n)
              $rok=date('Y');  //wczytujemy aktualny rok w postaci czterocyfrowej
              echo 'Dzisiaj jest '.$dn.', '.$dzien.' '.$mc.' '.$rok.' roku.'; //Wyświetlamy datę
            ?></div>
         </div>
    </div>
    <div class="wrap">
      <div class="head_box">
        <a href="http://www.sp4bilgoraj.pl"><div id="picture_box"></div></a>
        
        <div id="slider"><div id="wrapper">
          <?php if( function_exists('cyclone_slider') ) cyclone_slider('206'); ?>
        </div>
      </div>
      </div>
      <hr />
      <div class="navi_line"><div class="rectangle3"><a href="http://www.sp4bilgoraj.pl"><h2 style="font-size:18px;">Strona Główna</h2></a><div id="trojkat3"></div><div style="font-size:18px;  position:relative; top:-60%; margin-left:0px; padding-left:0px;"><h2 style="font-size:18px;"><?php the_title(); ?></h2></div></div>
    <div class="triangle-l3"></div>
    <div class="triangle-r3"></div>
    </div>
