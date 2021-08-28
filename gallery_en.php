<!DOCTYPE html>
<html lang="en-UA">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108483747-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108483747-3');
</script>
<meta charset="utf-8">
<title>Photo gallery</title>
<meta name="description" content="">
<meta name="keywords" content="">
<!-- Mobile viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link rel="shortcut icon" href="images/uz1.png"  type="image/x-icon">
<!-- CSS-->
<!-- Google web fonts. You can get your own bundle at http://www.google.com/fonts. Don't forget to update the CSS accordingly!-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/rwk.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/mobile.css">
<!-- end CSS-->
</head>
<body>
<div id="container">
<?php
$punkt='gallery';
include "menu_en.php";
include "logo_en.php";
?>

<div id="lang">
<div id="button_ua">
  <a class="but_ua" href="gallery"></a>
  <div id="button_uk">
  <a class="but_uk" href="gallery_en"></a>
  <div id="button_ru">
  <a class="but_ru" href="gallery_ru"></a>
</div>
</div>
</div>
<?php
include "facebook_ua.php";
?>
</div>    
<div id="main">

<h1>Photo gallery</h1>

<div id="gallery1">
  <img src="images/gallery/adm.jpg" title="Адміністративний корпус" alt="" tabindex="0" />
  <img src="images/gallery/alt.jpg" title="Альтанка" alt="" tabindex="0" />
  <img src="images/gallery/eksp.jpg" title="Експериментальний цех" alt="" tabindex="0" />
  <img src="images/gallery/sinelnikovo.jpg" title="Синельниківське рефрижераторне відділення" alt="" tabindex="0" />
  <img src="images/gallery/kahovka.jpg" title="Каховське рефрижераторне відділення" alt="" tabindex="0" />
  <img src="images/gallery/ternopil.jpg" title="Тернопільське рефрижераторне відділення" alt="" tabindex="0" />
  <img src="images/gallery/proh.jpg" title="" alt="" tabindex="0" />
  <img src="images/gallery/ter.jpg" title="" alt="" tabindex="0" />
<div></div>
</div>	
<div id="gallery1">
  <img src="images/gallery/sostav.jpg" title="Складач поїздів" alt="" tabindex="0" />
  <img src="images/gallery/sostav2.jpg" title="Складач поїздів" alt="" tabindex="0" />
  <img src="images/gallery/shveyka.jpg" title="Швейна майстерня" alt="" tabindex="0" />
  <img src="images/gallery/prach.jpg" title="Пральня" alt="" tabindex="0" />
  <img src="images/gallery/akp.jpg" title="АКП" alt="АКП" tabindex="0" />
  <img src="images/gallery/vagon_new.jpg" title="" alt="" tabindex="0" />
  <!-- <img src="images/gallery/energomeh.jpg" title="" alt="" tabindex="0" /> -->
  <img src="images/gallery/vchrem.jpg" title="Вагоноремонтне відділення" alt="" tabindex="0" />
  <!-- <img src="images/gallery/st.jpg" title="" alt="" tabindex="0" /> -->
  <img src="images/gallery/garaz.jpg" title="" alt="" tabindex="0" />
  <div></div>
</div>
<!--
<div id="gallery1">
  <img src="images/gallery/room.jpg" title="" alt="" tabindex="0" />
  <img src="images/gallery/football.jpg" title="Футбольні змагання" alt="" tabindex="0" />
  <img src="images/gallery/volleyball.jpg" title="Змагання з волейболу" alt="" tabindex="0" />
  <img src="images/gallery/hit.jpg" title="Художня самодіяльність" alt="" tabindex="0" />
  <img src="images/gallery/stork.jpg" title="Лелека" alt="" tabindex="0" />
  <img src="images/gallery/room2.jpg" title="" alt="" tabindex="0" />
  <div></div>
</div>
-->

<p>&nbsp;</p>
</div><!-- end main -->
  <?php
include "r_bar_en.php";
include "footer_menu_en.php";
?>

</div><!-- end container -->
</body>
</html> 