<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 07</title>
</head>
<body>
    <?php
        $vetorNum = [11, 42, 128, 69, 1, -20, 61, 2, 1, 176,
                    -61, 94, 40, 101, [121, -70, -6], 12, 
                    [-88, 23], 0, 18, -1, 6, [-55, 3]];

                    $vetCli = [
                        'cpf' => '53592109073',
                        'nome' => 'Ana',
                        'anoNasc' => '1988-05-23',
                        'qtdCartoes' => 2,
                        'saldo' => 1825.55,
                        'status' => true
                    ];

                    echo "<h1> Lista com array </h1><br>";

                    echo "<ol>";
                    foreach ($vetCli as $i => $valor)
                    {
                        //if (is_array($vetCli[$i]))
                        //{
                            echo "<li>". $i . " = ". $valor ."</li> <br>";
                        //}
                    }
                    echo "</ol>";

                    $i = 0;
        echo "<h1>USANDO FOR</h1> <br>";

        for ($i = 0; $i < count($vetorNum); $i++)
        {
            if (is_array($vetorNum[$i]))
            {
                foreach ($vetorNum[$i] as $j => $valor) 
                {
                    echo "Posição: $i";
                    echo "$j -----> valor: $valor<br>";
                }
            }
            else 
            {
                echo "Posição: $i - valor: $vetorNum[$i]<br>";
            }
        }
        echo "<br><h1>USANDO WHILE</h1><br>";
        $i = 0;
        while ($i < count($vetorNum))
        {
            if (is_array($vetorNum[$i]))
            {
                $j = 0;
                while ($j < count($vetorNum[$i]))
                {
                    echo "Posição: $i-$j ---> valor: " . $vetorNum[$i][$j] . "<br>";
                    $j++;
                }
            }
            else
            {
                echo "Posição: $i - valor: $vetorNum[$i]<br>";
            }
            $i++;
        }
        echo "<br><h1>USANDO FOREACH</h1><br>";
        foreach ($vetorNum as $i => $valor)
        {
            if (is_array($valor))
            {
                foreach ($valor as $j => $subvalor)
                {
                    echo "Posição: $i - $j ----> valor: $subvalor<br>";
                }
            }
            else
            {
                echo "Posição: $i - valor: $valor<br>";
            }
        }
    ?>
</body>
</html>
