<!--Задача 1: 
Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведе 2 числа и
да избере от лист каква операция иска да изпълни. След това изведете резултата от 
неговия избор и въведени стойности. Възможни операции нека да бъдат +, - , *, /. 
Направете всички възможни проверки за въведените стойности
-->
<?php

    $operation = '+';
    $result = 'Result';
    if(count($_POST) == 3){


        $numberOne = !is_numeric($_POST['numberOne']) && empty($_POST['numberOne']) ? '' : $_POST['numberOne'];
        $numberTwo = !is_numeric($_POST['numberOne'])&& empty($_POST['numberTwo']) ? '' : $_POST['numberTwo'];
        $operation =  empty($_POST['operation']) ? '': $_POST['operation'];

        switch($operation){
            case '+':
                $result = $numberOne + $numberTwo;
                break;
            case '-':
                $result = $numberOne - $numberTwo;
                break;
            case '*':
                $result = $numberOne * $numberTwo;
                break;
            case '/':
                $result = $numberOne / $numberTwo;
                break;
            default:
                $result = 'error message';
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-8">

                <form class="form-horizontal" method="post" action="">
                    <div class="form-group col-xs-2">
                        <input class="form-control input-sm" type="number" name="numberOne" placeholder="NumberOne" value="<?= htmlentities($numberOne, ENT_QUOTES, 'UTF-8'); ?>">

                    </div>
                    <div class="form-group col-xs-1">
                        <select class="form-control input-sm " name="operation">
                            <option value="+" <?= $operation == '+' ? 'selected': '' ?> >+</option>
                            <option value="-" <?= $operation == '-' ? 'selected': '' ?> >-</option>
                            <option value="*" <?= $operation == '*' ? 'selected': '' ?> >*</option>
                            <option value="/" <?= $operation == '/' ? 'selected': '' ?> >/</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-2">
                        <input class="form-control input-sm" type="number" name="numberTwo" placeholder="NumberTwo" value="<?= htmlentities($numberTwo, ENT_QUOTES, 'UTF-8'); ?>" >

                    </div>
                    <div class="form-group col-xs-1">
                        <button class="form-control input-sm">=</button>
                    </div>
                    <div class="form-group col-xs-2">
                        <input class="form-control input-sm" type="text"  value="<?= htmlentities($result, ENT_QUOTES, 'UTF-8'); ?>">
                    </div>



                </form>
            </div>

        </div>

    </div>

</body>
</html>
