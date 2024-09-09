<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $vetorNum = [11, 42, 128, 69, 1 -20, 61, 2, 1, 176,
                    -61, 94, 40, 101, [121, -70, -6], 12, 
                    [-88, 23], 0, 18, -1, 6, [-55, 3]];

        // Tente mostrar todo o $vetorNum(inclusive as posições) utilizando while, for e foreach

        $vetCli = [
            'cpf' => '53592109073',
            'nome' => 'Ana',
            'anoNasc' => '1988-05-23',
            'qtdCartoes' => 2,
            'saldo' => 1825.55,
            'status' => true
        ];

		echo "USANDO FOR <br>";
		for ($i = 0; $i < count($vetorNum) ; $i++)
		{
			if (is_array($vetorNum))
			{
				echo  "Posição: ". $i++ ." valor: ";
				echo $vetorNum[$i];
				echo "<br>";
				
					for ($j = 0; $j < count($vetorNum); $j++)
					{
						if (is_array($vetorNum))
						{
							echo "Posição: ". $j ."----------- valor: ";
							echo $vetorNum[$j];
							echo "<br>";
						}
					}
			}
		}

		echo "USANDO WHILE";

		$i = 0;
		while($i < count($vetorNum))
		{
			if (is_array($vetorNum))
			{		
			}
		}
    ?>
</body>
</html>
