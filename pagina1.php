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
        //Declaração de variavel
        $verao  = "12-23";
        $outono = "03-20";
        $inverno = "06-21";
        $primavera = "09-23";

        $data_atual = date("m-d");

        if($outono < $data_atual && $data_atual <= $inverno)
                echo "outono";
        else if($inverno < $data_atual && $data_atual <= $primavera)
                echo "inverno";
        else if($primavera < $data_atual && $data_atual <= $verao)
                echo "primavera";
        else
                echo "verao";      
    
         
    ?>
</body>
</html>