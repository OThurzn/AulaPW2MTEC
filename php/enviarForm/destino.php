<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>
<body>
    <?php
        $nome = $_POST["campo_nome"];
        $cidade = $_POST["campo_cidade"];
        $cpf = $_POST["campo_cpf"];
        $telefone = $_POST["campo_telefone"];
    ?>
        <p>A pessoa se chama <?php echo $nome?>, mora em <?php echo $cidade?>, tem o telefone <?php echo $telefone?> porta o cpf <?php echo $cpf?></p>
</body>
</html>