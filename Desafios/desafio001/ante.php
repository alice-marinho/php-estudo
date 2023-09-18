<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
    <?php 
        $numero = $_GET ["numero"];
        if ($numero==null){
            echo "Informe um número";
        }
        else {
            echo "O antecessor de $numero é " . $numero - 1 ."<br>";
            echo "O sucessor de $numero é " . $numero + 1;
        }
        
    ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>