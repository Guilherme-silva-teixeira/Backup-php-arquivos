<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $datainicial = $_POST["dtaInicial"];
        $datafinal = $_POST["dataFinal"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <form method="post">
        <div class="container">
            <h1>Contador de dias:</h1>
            <div class="box01">
                <label for="#">Data inicial:</label>
                <input type="date" id="initialDate" name="dataInicial">
            </div>
            <div class="box02">
                <label for="#">Data final:</label>
                <input type="date" id="finalDate">
            </div>
            <button onclick="cauculateData()"">Caucular</button>
            <div class="result" id="box03"></div>
        </div>
    </section>
        </form>
    <script src="script.js"></script>
</body>
</html>
