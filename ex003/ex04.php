<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tistes de sequencia</title>
    <style>
        body{
            background-color: blue;
            color: white;
            font-family: Arial, Helvetica, sans-serif;

        }
        php{
            font-size: 2em;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Escape de sequencia</h1>
    <?php 
        
        $nome = "Adul";
        $snome = "Aziz";
        $mante = "Djalo";
        print "$nome \"$snome\" $mante ";
        print "<br>Estamos no ano " .date("Y"); 
        echo " e na data de " .date("d/m/Y");
        date_default_timezone_set("Africa/bissau");
        echo "estamos na hora de " .date("G:i:s");

       // echo <<< teste
        //   print como voce esta e eu sou seu maior fan
      //teste;

    ?>
</body>
</html>