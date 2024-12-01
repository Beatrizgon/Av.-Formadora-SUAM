<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Interação da Web</h1>
        <?php 
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            echo "<h3>Olá, $nome $sobrenome. É um prazer te conhecer!</h3>";
        ?>
    </main>
    
</body>
</html>