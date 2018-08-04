<?php
 
// ======= Konfiguration:
 
$mailTo = 'mail4lano@web.de';
$mailFrom = '"Kontakt" <info@ows-sz.de>';
$mailSubject    = 'Feedback';
$returnPage = 'http://server/Formular-verarbeitet.html';
$returnErrorPage = 'http://server/Fehler-aufgetreten.html';
$mailText = "";
 
// ======= Text der Mail aus den Formularfeldern erstellen:
 
// Wenn Daten mit method="post" versendet wurden:
if(isset($_POST)) { 
} // if
 
// ======= Mailversand
// Mail versenden und Versanderfolg merken
//$mailSent = @mail($mailTo, $mailSubject, $mailText, "From: ".$mailFrom);
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Ost- und Westsiedlung - Salzgitter-Bad" />
        <meta name="keywords" content="" />
        <meta name="author" content="ows" />
        <link rel="shortcut icon" href="/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="index.php">
                    <strong>&laquo; Ost- und Westsiedlung </strong>Startseite
                </a>
                <span class="right">
                    <a href="register.php">
                        <strong>Registrieren</strong>
                    </a>
                    <a href="login.php">
                        <strong>Login</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Ost-  und  Westsiedlung   <span>Salzgitter - Bad</span></h1>
		<span>Werden Sie Teil des <strong>OWS-Netzes</strong> und bieten auch Sie den Einwohnern <strong>kostenloses Internet<strong>.<br>
			<nav class="codrops-demos">
                                <a href="/index.php">Startseite</a>
                                <a href="/page/about.php">über Uns</a>
                                <a href="/page/router.php">Router</a>
                                <a href="/page/faq.php">FAQ</a>
                                <a href="/page/impressum.php">Impressum</a>
                                <a href="/page/kontakt.php" class="current-demo">Kontakt</a>
			</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                                <h1>Kontakt</h1> 
                                <p> </p>
                                <p> </p>
<form method="post" action="kontakt.php">
<p><label>Name:<br><input type="text" name="Name"></label></p>
<p><label>E-Mail:<br><input type="text" name="Mail"></label></p>
<p><label>Betreff:<br><input type="text" name="Betreff"></label></p>
<p><label>Nachricht:<br>
<textarea name="Nachricht" cols="50" rows="8"></textarea></label></p>
<input type="submit" value="OK">
</form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>