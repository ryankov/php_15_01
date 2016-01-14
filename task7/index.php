<!--Задача 7:
Създайте HTML страница с PHP скрипт, в който изписва информация за
browser-a, с който е отворен този скрипт. Нека след това да се изпише
информация за сървъра и за host-a. Коя системна променлива ще 
използвате, за да извлечете тези информация?
-->
<?php

$result ='Output hash';
$firstName = "";
$lastName = "";
$date = "";
	if(count($_POST) == 3){
	
	
	    $firstName = empty($_POST['firstName']) ? '' : trim(htmlspecialchars($_POST['firstName']));
	    $lastName = empty($_POST['lastName']) ? '' :trim(htmlspecialchars($_POST['lastName']));
	    $date =  empty($_POST['birthday']) ? '': trim(htmlspecialchars($_POST['birthday']));
	
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Regster</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-2">

            <form class="form" method="post" action="">
                <div class="form-group">
                    <textarea rows="5" class="form-control">
                        <?=htmlentities($_SERVER['HTTP_USER_AGENT'])?>


                    </textarea>
                    <?php
                    $indicesServer = array('PHP_SELF',
                        'argv',
                        'argc',
                        'GATEWAY_INTERFACE',
                        'SERVER_ADDR',
                        'SERVER_NAME',
                        'SERVER_SOFTWARE',
                        'SERVER_PROTOCOL',
                        'REQUEST_METHOD',
                        'REQUEST_TIME',
                        'REQUEST_TIME_FLOAT',
                        'QUERY_STRING',
                        'DOCUMENT_ROOT',
                        'HTTP_ACCEPT',
                        'HTTP_ACCEPT_CHARSET',
                        'HTTP_ACCEPT_ENCODING',
                        'HTTP_ACCEPT_LANGUAGE',
                        'HTTP_CONNECTION',
                        'HTTP_HOST',
                        'HTTP_REFERER',
                        'HTTP_USER_AGENT',
                        'HTTPS',
                        'REMOTE_ADDR',
                        'REMOTE_HOST',
                        'REMOTE_PORT',
                        'REMOTE_USER',
                        'REDIRECT_REMOTE_USER',
                        'SCRIPT_FILENAME',
                        'SERVER_ADMIN',
                        'SERVER_PORT',
                        'SERVER_SIGNATURE',
                        'PATH_TRANSLATED',
                        'SCRIPT_NAME',
                        'REQUEST_URI',
                        'PHP_AUTH_DIGEST',
                        'PHP_AUTH_USER',
                        'PHP_AUTH_PW',
                        'AUTH_TYPE',
                        'PATH_INFO',
                        'ORIG_PATH_INFO') ;

                    echo '<table cellpadding="10">' ;
                    foreach ($indicesServer as $arg) {
                        if (isset($_SERVER[$arg])) {
                            echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
                        }
                        else {
                            echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
                        }
                    }
                    echo '</table>' ;
                   ?>
                </div>
            </form>
        </div>

    </div>

</div>

</body>
</html>
