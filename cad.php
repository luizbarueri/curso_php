<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Form</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
          
            $nome = $_GET['nome'] ?? "Nome inválido";
            $sobrenome = $_GET['sobrenome'] ?? "Sobrenome inválido";
          
            echo var_dump($_REQUEST['nome'] , $_REQUEST['sobrenome']);
           
           
        ?>
    </main>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

</body>
</html>
