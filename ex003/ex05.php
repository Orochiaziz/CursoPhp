<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Aziz</title>
    <style>
      
        body{
            background-color: blue;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
           
        }
    </style>
</head>
<body>
    <h1>Fazendo teste de PHP com o HTML</h1>
    <?php 
    
        $nome = "Adul Aziz";
        $idade = 18;

        echo "O seu nome é $nome e <br> a sua idade é $idade <br>";
        echo "estamos no ano ".date("Y") ;
        date_default_timezone_set("Africa/bissau");
        echo " <br> na hora de ".date("G:i:s");
    
    ?>
</body>
</html>