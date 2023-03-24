<?php 
    $exa_decimal = 0x1A;
    echo "<p1>exadecimal: <b>0x1A</b> = $exa_decimal </p1><br>";
    class Carro {
        private string $marca = "FORD";
    }
    $c = new Carro;
    echo var_dump($c);
    echo "<br>";
    $nome = "Luiz Amaro \u{1F596}";
    echo "Nome: $nome <br>";
    echo var_dump($nome);
    
    $emoji = "\u{1F590}";
    for ($i=0; $i < 10; $i++)
        echo $emoji;
      
    
?>