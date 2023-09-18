<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php 
            $reais = $_GET["money"] ?? 0;
            $dolar = $reais/ 4.87;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a  <strong>" . numfmt_format_currency($padrao, $dolar, "BRL") . "<strong><br>" ;
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>