<?php
    $message = array();
if (isset($_SESSION['login'])) {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/index.php');
} else {

    if ($_POST['do']=="register") {
        if (empty($_POST['f']['usernamesignup']) || empty($_POST['f']['passwordsignup']) || empty($_POST['f']['passwordsignup_confirm'])) {
            $message['error'] = 'Es wurden nicht alle Felder ausgefüllt.';
        } else if ($_POST['f']['passwordsignup'] != $_POST['f']['passwordsignup_confirm']) {
            $message['error'] = 'Die eingegebenen Passwörter stimmen nicht überein.';
        } else {
            unset($_POST['f']['passwordsignup_confirm']);
            $salt = ''; 
            for ($i = 0; $i < 22; $i++) { 
                $salt .= substr('./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', mt_rand(0, 63), 1); 
            }
            $_POST['f']['passwordsignup'] = crypt($_POST['f']['passwordsignup'], '$2a$10$' . $salt);
            require_once('/usr/share/ows-server/sql.php'); 
            $mysqli = @new mysqli('localhost', $db_user, $db_passwd, 'OWS');
            if ($mysqli->connect_error) {
                $message['error'] = 'Datenbankverbindung fehlgeschlagen: ' . $mysqli->connect_error;
            }
            $query = sprintf(
                "INSERT INTO user (username, passwd) SELECT * FROM (SELECT '%s', '%s') as new_user
                WHERE NOT EXISTS ( SELECT username FROM user WHERE username = '%s' ) LIMIT 1;",
                $mysqli->real_escape_string($_POST['f']['usernamesignup']),
                $mysqli->real_escape_string($_POST['f']['passwordsignup']),
                $mysqli->real_escape_string($_POST['f']['usernamesignup'])
            );
            $mysqli->query($query);
            if ($mysqli->affected_rows == 1) {
                $message['error'] = 'Neuer Benutzer (' . htmlspecialchars($_POST['f']['usernamesignup']) . ') wurde angelegt, Sie können sich jetzt Anmelden</a>.';
            } else {
                $message['error'] = 'Der Benutzername ist bereits vergeben.';
            }
            $mysqli->close();
        }
        } else {
        $message['error'] = 'Geben Sie Ihre Zugangsdaten ein um sich anzumelden.<br />' .
            'Wenn Sie noch kein Konto haben, können Sie sich kostenloas ein Konto erstellen.';
    }
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
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="/">
                    <strong>&laquo; Ost- und Westsiedlung </strong>Startseite
                </a>
                <span class="right">
                    <a href="hilfe.php">
                        <strong>Hilfe</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Ost-  und  Westsiedlung   <span>Salzgitter - Bad</span></h1>
				<nav class="codrops-demos">
					<?php echo $message['error']; ?>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" autocomplete="on" method="POST"> 
                                <input type="hidden" name="do" value="register">
                                <h1> Registrieren </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Wählen Sie einen Benutzernamen: </label>
                                    <input id="usernamesignup" name="f[usernamesignup]" required="required" type="text" placeholder="z.B. HansHansen74" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Wählen Sie ein Passwort: </label>
                                    <input id="passwordsignup" name="f[passwordsignup]" required="required" type="password" placeholder="z.B. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Bitte wiederholen Sie Ihr Passwort </label>
                                    <input id="passwordsignup_confirm" name="f[passwordsignup_confirm]" required="required" type="password" placeholder="z.B. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
					<input type="submit" value="Registrieren"/> 
				</p>
                                <p class="change_link">  
				Schon Mitglied ?
				<a href="login.php" class="to_register"> Anmelden </a>
				</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>