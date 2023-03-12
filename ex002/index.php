<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?PHP
       // PARA MUDAR A HORA DE SERVIDOR PARA SEU LOCAL
        date_default_timezone_set("Africa/Bissau");
        print "Hoje é dia " . date("D/M/Y");
        print "e a hora é " . date("G:i:s"); //G= Hora I= Menuto S = segundo
    
    ?>
</body>
</html>