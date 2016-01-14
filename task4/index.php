<!--Задача 4: 
Създайте HTML страница с PHP скрипт, вкойто потребителя трябва да въведете 10 
числа. След това ги сложете в array,сортирайте ги и ги изпишете сортирани.Намерете 
най-малкото и най-голямото число и ги изпишете.
-->
<?php
    $numberOne ='';
    $result ='';
    $username = "Username ";

    if(count($_POST)==1){

        $arrayWithNumbers = $_POST['number'];
        asort($arrayWithNumbers);
        $arrayToSort = implode(',',$arrayWithNumbers);
        $result = "$arrayToSort.'\r\n' Maximal number is ".max($arrayWithNumbers).". Minimal number is ".min($arrayWithNumbers).".";
    }
    
var_dump($arrayToSort);

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
            <div class="col-lg-offset-1 col-lg-8">

                <form class="form-horizontal" method="post" action="">

                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>

                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="number" class="form-control"  name="number[]" value="<?=htmlentities($numberOne)?>">
                    </div>

                    <div class="form-control">
                        <button class="btn-block btn-default">Add to Array</button>
                        <textarea class="form-control"><?=htmlentities($result)?>

                        </textarea>
                    </div>


                </form>
            </div>

        </div>

    </div>

</body>
</html>
