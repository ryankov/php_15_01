<!--Задача 5: 
Създайте HTML страница с PHP скрипт, в който изписва всички REQUEST
параметри (POST и GET ). Да изписва техните имена и стойности, както и да показва от
какъв тип са тези параметри (int, string, ...).
-->

<?=

var_dump = $_REQUEST;
    $result ='Request: ';
    $username = "Username: ";

    if(count($_POST) == 3){

        $result='';
        foreach($_REQUEST as $name => $request){

            $result .= 'Parameter name is '.$name.PHP_EOL;
            $result .= 'Type of parameter '.gettype ($request).PHP_EOL;
            $result .= 'Value of parameter '.$request.PHP_EOL;
            $result .= 'Request method is'.$_SERVER['REQUEST_METHOD'].PHP_EOL;

            $result .= '___________________'.PHP_EOL;

        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request for parameters</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-2">

                <form class="form" method="post" action="">
                    <div class="form-group">
                        <label for="username">Username </label>
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
                        <textarea class="form-control" rows="20"><?=htmlentities($result)?></textarea>
                    </div>
                </form>
            </div>

        </div>

    </div>
<?=var_dump($_REQUEST);?>
</body>

</html>
