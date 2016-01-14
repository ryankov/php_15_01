<!--Задача 2: 
Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведе username
и 2 пароли. Проверете дали двете пароли съвпадат и след това ги криптирайте. 
Изпишете след това username и криптираната парола. Направете всички възможни 
проверки за въведените стойности.
-->
<?php

    $result ='Output hash';
    $username = "Username ";
    if(count($_POST) == 3){





        $username = empty($_POST['userName']) ? '' : trim(htmlspecialchars($_POST['userName']));
        $passWord = empty($_POST['passFirstTime']) ? '' :trim(htmlspecialchars($_POST['passFirstTime']));
        $passWordConfirmed =  empty($_POST['passConfirm']) ? '': trim(htmlspecialchars($_POST['passConfirm']));

        if($passWord == $passWordConfirmed && strlen($passWord)>=5){
            $result =  password_hash($passWord,PASSWORD_DEFAULT);
        }else{
            $result = 'password validation error';
        }



    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-2">

                <form class="form" method="post" action="">
                    <div class="form-group">
                        <label for="username">Username: </label>
                        <input type="text" class="form-control" id="username" name="userName" value="<?=htmlentities($username)?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password: </label>
                        <input type="password" class="form-control" id="pwd" name="passFirstTime">
                    </div>
                    <div class="form-group">
                        <label for="pwd2">Password repeat: </label>
                        <input type="password" class="form-control" id="pwd2" name="passConform">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-block">Submit</button>
                    </div>
                    <div class="form-group ">
                        <textarea class="form-control"><?=htmlentities($result)?></textarea>
                    </div>
                </form>
            </div>

        </div>

    </div>

</body>
</html>
