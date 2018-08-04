<?php
    $message = array();
if (isset($_SESSION['login'])) {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/index.php');
} else {
    if ($_POST['do']=="login") {
        if ( empty($_POST['f']['username']) || empty($_POST['f']['password'])) {
            $message['error'] = 'Es wurden nicht alle Felder ausgefüllt.';
        } else {
        require_once('/usr/share/ows-server/sql.php'); 
            $mysqli = @new mysqli('localhost', $db_user, $db_passwd, 'OWS');
            if ($mysqli->connect_error) {
                $message['error'] = 'Datenbankverbindung fehlgeschlagen: ' . $mysqli->connect_error;
            } else {
                $query = sprintf(
                    "SELECT ID, username, passwd FROM user WHERE username = '%s'",
                    $mysqli->real_escape_string($_POST['f']['username'])
                );
                $result = $mysqli->query($query);
                if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
		    if (crypt($_POST['f']['password'], $row['passwd']) == $row['passwd']) {
                        session_start();
 
                        $_SESSION = array(
                            'login' => true,
                            'user'  => array(
                                'username'  => $row['username'],
                                'userid'  => $row['ID']
                            )
                        );
                        $message['error'] = 'Anmeldung erfolgreich, <a href="index.php">weiter zum Inhalt.';
                        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/user/index.php');
                    } else {
                        $message['error'] = 'Benutzername oder Passwort sind nicht gültig.';
                    }
                } else {
                    $message['error'] = 'Benutzername oder Passwort sind nicht gültig.';
                }
                $mysqli->close();
            }
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
                                 <input type="hidden" name="do" value="login">
                                <h1>Anmelden</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Geben Sie Ihren Benutzernamen ein: </label>
                                    <input id="username" name="f[username]" required="required" type="text" placeholder="z.B.: HansHansen74"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Geben Sie Ihr Passwort ein:</label>
                                    <input id="password" name="f[password]" required="required" type="password" placeholder="z.B.: X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
				</p>
                                <p class="login button"> 
                                    <input type="submit" value="Anmelden" /> 
				</p>
                                <p class="change_link">
				kostenlos Mitglied werden ?
				<a href="register.php" class="to_register"> Registrieren </a>
				</p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>