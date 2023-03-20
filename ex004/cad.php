<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Resultado de PHP</h1>
    <header>

    </header>
    <main>
        <?php 
            //var_dump($_POST);
            $n = $_POST["nome"] ?? "Sem Nome";
            $s = $_POST["sobrenome"] ?? "Sem Sobrenome";

            echo "É um prazer em te conhecer, <strong> $n $s </strong>"


        ?>
    </main>
    <a href="javascript.history.go(-1)" id="cor">voltar para a pagina anterior</a>
</body>
</html>