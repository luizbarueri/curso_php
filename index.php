<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario FORM</title>
</head>
<body>
    <p>
        <h2><a href="./tipos.php">Tipos</a><a href="#">Sobre</a></h2>
    </p>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="idsobrenome">
            <input type="submit" value="Enviar">
            <link rel="stylesheet" href="style.css">
        </form>
    </section>
</body>
</html>