<!--������ 3: 
�������� HTML �������� � PHP ������, � ����� ����������� ������ �� ������ ��������
� ������� Celsius C � �� ������ �� ������ ������� Fahrenheit F.
����������� ��������� C = ( 5 / 9 ) * (F -32). ���� ���� ����������� ��������, ���� 
�������� ����, �� ����� ����������� �� ��� �� ������ ���� �� ���������� �� C ��� F 
��� �� F ��� C.-->
<?php

    $operation = 'CtoF';
    $result = '--';
    $tempOne = 0;
    if(count($_POST) == 2){



        $tempOne = !is_numeric($_POST['tempOne']) && empty($_POST['tempOne']) ? '' : $_POST['tempOne'];
        $operation =  empty($_POST['operation']) ? '': $_POST['operation'];

        var_dump($tempOne,$operation,$result);

        switch($operation){
            case 'CtoF':
                $result = (5/9)*($tempOne-32);
                break;
            case 'FtoC':
                $result = 9/5*$tempOne+32;
                break;
            default:
                $result = 'Error message';
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temperature convertion calculator</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-8">

                <form class="form-horizontal" method="post" action="">
                    <div class="form-group col-xs-2">
                        <input class="form-control input-sm" type="number" name="tempOne" placeholder="Temperature one" value="<?= htmlentities($tempOne, ENT_QUOTES, 'UTF-8'); ?>">

                    </div>
                    <div class="form-group col-xs-2">
                        <select class="form-control input-sm " name="operation">
                            <option value="FtoC" <?= $operation == 'FtoC' ? 'selected': '' ?> >From C to F</option>
                            <option value="CtoF" <?= $operation == 'CtoF' ? 'selected': '' ?> >From F to C</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-1">
                        <button class="form-control input-sm">Convert</button>
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
