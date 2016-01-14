<!--
task. 6 Създайте HTML страница с PHP скрипт, в който потребителя трябва да 
въведе име, фамилия и да избере дата на раждане (ден, месец, 
година). Ако потребителя не е въвел някое поле, нека въведената от 
него стойност да се запази във формата. 
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
            <div class="col-lg-offset-5 col-lg-2">

                <form class="form" method="post" action="">
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="<?=htmlentities($firstName)?>">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="<?=htmlentities($lastName)?>">
                    </div>
                    <div class="form-group">
                        <label for="birthdayDate">Birthday date</label>
                        <input type="date" class="form-control" id="birthdayDate" name="birthday" value="<?=htmlentities($username)?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-block">Submit</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

</body>
</html>
