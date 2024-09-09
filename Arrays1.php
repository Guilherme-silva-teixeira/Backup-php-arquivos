<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $vetorNum = [11, 42, 128, 69, 1, -20, 61, 2, 1, 176,
                    -61, 94, 40, 101, [121, -70, -6], 12, 
                    [-88, 23], 0, 18, -1, 6, [-55, 3]];

        // Mostrar todo o $vetorNum utilizando for
        echo "USANDO FOR <br>";
        for ($i = 0; $i < count($vetorNum); $i++) {
            if (is_array($vetorNum[$i])) {
                foreach ($vetorNum[$i] as $j => $valor) {
                    echo "Posição: $i.$j - valor: $valor<br>";
                }
            } else {
                echo "Posição: $i - valor: $vetorNum[$i]<br>";
            }
        }

        // Mostrar todo o $vetorNum utilizando while
        echo "<br>USANDO WHILE<br>";
        $i = 0;
        while ($i < count($vetorNum)) {
            if (is_array($vetorNum[$i])) {
                $j = 0;
                while ($j < count($vetorNum[$i])) {
                    echo "Posição: $i.$j - valor: " . $vetorNum[$i][$j] . "<br>";
                    $j++;
                }
            } else {
                echo "Posição: $i - valor: $vetorNum[$i]<br>";
            }
            $i++;
        }

        // Mostrar todo o $vetorNum utilizando foreach
        echo "<br>USANDO FOREACH<br>";
        foreach ($vetorNum as $i => $valor) {
            if (is_array($valor)) {
                foreach ($valor as $j => $subvalor) {
                    echo "Posição: $i.$j - valor: $subvalor<br>";
                }
            } else {
                echo "Posição: $i - valor: $valor<br>";
            }
        }
    ?>
</body>
</html>
