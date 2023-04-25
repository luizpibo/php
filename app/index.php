<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
</head>

<body>
    <?php
    ##Variáveis pré-definidas - https://www.php.net/manual/pt_BR/reserved.variables.php
    #Informação do servidor e ambiente de execução $_SERVER - https://www.php.net/manual/pt_BR/reserved.variables.server.php
    $user = $_SERVER['HTTP_USER_AGENT'];
    echo ($user . "</br>");
    # Endereço IP do servidor
    $addr = $_SERVER['SERVER_ADDR'];
    echo ($addr . "</br>");
    # Nome host do servidor onde o script atual é executado.
    $server_name = $_SERVER['SERVER_NAME'];
    echo ($server_name . "</br>");

    # Data Types - https://www.w3schools.com/php/php_datatypes.asp
    # função que mostra o tipo de dado e o valor de uma variável - var_dump();
    $x = 8000;
    echo var_dump($x);
    echo " * ";
    $y = 2.5;
    echo var_dump($y);
    echo " = ";
    echo var_dump($x * $y);

    echo "<br>";

    $numbers = [1, 2, 3, 4.4, 5, 6.6];
    echo var_dump($numbers);

    #Classes
    class Calculator
    {
        public array $numbers;
        public function __construct(array $numbers)
        {
            $this->numbers = $numbers;
        }

        public function multiplication(int $index1, int $index2)
        {
            if ($index1 == 0 || $index2 == 0) {
                return 0;
            } else {
                return $this->numbers[$index1] * $this->numbers[$index2];
            }
        }
    }

    echo "<br>";
    echo "<br>";
    $calculadora = new Calculator($numbers);
    echo $calculadora->multiplication(3, 5);
    echo "<br><br>forms .... <br>";
    ?>

    <form action="action.php" method="post">
        <p>Your name: <input type="text" name="name" /></p>
        <p>Your age: <input type="text" name="age" /></p>
        <p><input type="submit" /></p>
    </form>
    <?php

    ?>
</body>

</html>