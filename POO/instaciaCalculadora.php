   <?php
    include_once 'Calculadora.php';
    $calcular = new Calculadora(10, 20);
    $calcular->somaNumeros();
    $calcular->subtracaoNumeros();
    $calcular->divisaoNumeros();
    $calcular->multiplicacaoNumeros();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h3>Calculadora</h3>
        <form>
           <input type="number" name="numero1" placeholder="Digite o 1º Número"/>
           <br> <br>
           <input type="number" name="numero" placeholder="Digite o 2º Número"/>
           <br> <br>
           <input type="submit" value="+" name=""/>
           <input type="submit" value="-" name=""/>
           <input type="submit" value="/" name=""/>
           <input type="submit" value="x" name=""/>
      </form>

    </body>
    </html>
