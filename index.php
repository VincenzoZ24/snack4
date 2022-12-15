<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr_number = [];
    while(count($arr_number) < 15){
        $numeri = rand(1,100);
        if(!in_array($numeri, $arrnumber)){
            $arr_number[] = $numeri;
            
        }
       
    };
    var_dump($arr_number);
    ?>
</body>
</html>