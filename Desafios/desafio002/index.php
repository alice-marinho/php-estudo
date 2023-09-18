<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de número aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <!-- Fazer um gerador de números usando mt_rand -->
        <h1>Gerador de número</h1>
        <p>Clique no botão e irá gerar um número entre 0 e 100</p>
        <?php 
            $value = mt_rand(0,100);
            echo "Valor gerado foi: <strong>$value</strong>"; 
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>
    </main>
</body>
</html>