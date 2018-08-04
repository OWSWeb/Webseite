<?php

$lang_array = array("de","en");
define('LANG_STANDARD', "de");

$language = (trim($_GET['lang']) != "") ? $_GET['lang'] : LANG_STANDARD;

if (in_array($language, $lang_array)) {
    require_once("language/" . $language . ".php");
} else  {
    require_once("language/" . LANG_STANDARD . ".php");
}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Ost- und Westsiedlung - Salzgitter-Bad</title>


        <meta name="author" content="Sven Mönnich - OWS" />

        <meta name="description" content="Ost- und Westsiedlung - Salzgitter-Bad" />
        <meta name="keywords" content="" />
        <meta name="revisit-after" content="2 days" />
        <meta name="robots" content="index,follow" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="rating" content="Safe for kids" />

        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="format-detection" content="telephone=no" />


        <link rel="author" type="text/plain" href="/humans.txt">
        <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/images/favicon.png">
        <link rel="icon" type="image/png" sizes="196x196" href="/images/favicon.png">
        <link rel="shortcut icon" href="/images/favicon.png">
        <link rel="alternate" type="application/rss+xml" href="/rss">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

        <meta name="geo.region" content="DE" />
        <meta name="geo.placename" content="Salzgitter" />
        <meta name="geo.position" content="52.059675;10.374275" />
        <meta name="ICBM" content="52.059675, 10.374275" />


    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ost- und Westsiedlung - Salzgitter-Bad">
    <meta property="og:locale" content="de">
    <meta property="og:url" content="https://www.ows-sz.de/">
    <meta property="og:image" content="https://www.ows-sz.de/img/firefox/template/page-image.af8027a425de.png">
    <meta property="og:title" content="Ost- und Westsiedlung - Salzgitter-Bad">
    <meta property="og:description" content="Ost- und Westsiedlung - Salzgitter-Bad">
    <meta property="fb:page_id" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@OstWestSiedlung">
    <meta name="twitter:domain" content="ows-sz.de">
    <meta name="twitter:app:name:googleplay" content="">
    <meta name="twitter:app:id:googleplay" content="">
    <meta name="twitter:app:name:iphone" content="">
    <meta name="twitter:app:id:iphone" content="">
    <meta name="twitter:app:name:ipad" content="">
    <meta name="twitter:app:id:ipad" content="">

    <link rel="canonical" hreflang="de" href="">
    <link rel="alternate" hreflang="x-default" href="">

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="/index.php">
                    <strong>&laquo; Ost- und Westsiedlung </strong><?php echo $lang['startseite'] ?>
                </a>
                <span class="right">
<a>
<select id="searchLanguage" name="language" onchange="location = 'index.php?lang=' + this.options[this.selectedIndex].value;">
<option value="ar" lang="ar">العربية</option><!-- Al-ʿArabīyah -->
<option value="az" lang="az">Azərbaycanca</option>
<option value="bg" lang="bg">Български</option><!-- Bǎlgarski -->
<option value="nan" lang="nan">Bân-lâm-gú / Hō-ló-oē</option>
<option value="be" lang="be">Беларуская (Акадэмічная)</option><!-- Belaruskaya (Akademichnaya) -->
<option value="ca" lang="ca">Català</option>
<option value="cs" lang="cs">Čeština</option>
<option value="da" lang="da">Dansk</option>
<option value="de" lang="de">Deutsch</option>
<option value="et" lang="et">Eesti</option>
<option value="el" lang="el">Ελληνικά</option><!-- Ellīniká -->
<option value="en" lang="en">English</option><!-- English -->
<option value="es" lang="es">Español</option>
<option value="eo" lang="eo">Esperanto</option>
<option value="eu" lang="eu">Euskara</option>
<option value="fa" lang="fa">فارسی</option><!-- Fārsi -->
<option value="fr" lang="fr">Français</option>
<option value="gl" lang="gl">Galego</option>
<option value="ko" lang="ko">한국어</option><!-- Hangugeo -->
<option value="hy" lang="hy">Հայերեն</option><!-- Hayeren -->
<option value="hi" lang="hi">हिन्दी</option><!-- Hindī -->
<option value="hr" lang="hr">Hrvatski</option>
<option value="id" lang="id">Bahasa Indonesia</option>
<option value="it" lang="it">Italiano</option>
<option value="he" lang="he">עברית</option><!-- ʿIvrit -->
<option value="ka" lang="ka">ქართული</option><!-- Kartuli -->
<option value="la" lang="la">Latina</option>
<option value="lt" lang="lt">Lietuvių</option>
<option value="hu" lang="hu">Magyar</option>
<option value="ms" lang="ms">Bahasa Melayu</option>
<option value="min" lang="min">Bahaso Minangkabau</option>
<option value="nl" lang="nl">Nederlands</option>
<option value="ja" lang="ja">日本語</option><!-- Nihongo -->
<option value="no" lang="nb">Norsk (Bokmål)</option>
<option value="nn" lang="nn">Norsk (Nynorsk)</option>
<option value="ce" lang="ce">Нохчийн</option><!-- Noxçiyn -->
<option value="uz" lang="uz">Oʻzbekcha / Ўзбекча</option>
<option value="pl" lang="pl">Polski</option>
<option value="pt" lang="pt">Português</option>
<option value="kk" lang="kk">Қазақша / Qazaqşa / قازاقشا</option>
<option value="ro" lang="ro">Română</option>
<option value="ru" lang="ru">Русский</option><!-- Russkiy -->
<option value="cy" lang="cy">Cymraeg</option><!-- Saesneg -->
<option value="simple" lang="en">Simple English</option>
<option value="ceb" lang="ceb">Sinugboanong Binisaya</option>
<option value="sk" lang="sk">Slovenčina</option>
<option value="sl" lang="sl">Slovenščina</option>
<option value="sr" lang="sr">Српски / Srpski</option>
<option value="sh" lang="sh">Srpskohrvatski / Српскохрватски</option>
<option value="fi" lang="fi">Suomi</option>
<option value="sv" lang="sv">Svenska</option>
<option value="ta" lang="ta">தமிழ்</option><!-- Tamiḻ -->
<option value="th" lang="th">ภาษาไทย</option><!-- Phasa Thai -->
<option value="tr" lang="tr">Türkçe</option><!-- Turkce -->
<option value="uk" lang="uk">Українська</option><!-- Ukrayins’ka -->
<option value="ur" lang="ur">اردو</option><!-- Urdu -->
<option value="vi" lang="vi">Tiếng Việt</option>
<option value="vo" lang="vo">Volapük</option>
<option value="war" lang="war">Winaray</option>
<option value="zh" lang="zh">中文</option><!-- Zhōngwén -->
</select>
</a>


                    <a href="page/register.php">
                        <strong><?php echo $lang['registrieren'] ?></strong>
                    </a>
                    <a href="page/login.php">
                        <strong><?php echo $lang['login'] ?></strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Ost-  und  Westsiedlung   <span>Salzgitter - Bad</span></h1>
		<span><?php echo $lang['text1'] ?></span>
			<nav class="codrops-demos">
				<a href="index.php" class="current-demo"><?php echo $lang['startseite'] ?></a>
				<a href="page/about.php"><?php echo $lang['about'] ?></a>
				<a href="page/router.php"><?php echo $lang['router'] ?></a>
				<a href="page/faq.php"><?php echo $lang['faq'] ?></a>
				<a href="page/impressum.php"><?php echo $lang['impressum'] ?></a>
				<a href="page/kontakt.php"><?php echo $lang['kontakt'] ?></a>
			</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <h1><?php echo $lang['willkommen'] ?></h1> 
                        <p> </p>
                        <p><?php echo $lang['text2'] ?></p>
                    </div>
                </div>  
            </section>
            <footer id="footer">
            </footer>
        </div>
    </body>
</html>