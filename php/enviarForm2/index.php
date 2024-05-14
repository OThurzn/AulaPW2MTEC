<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action ="index.php" method="post">
        <label>Nome</label>
        <input type="text" name="campo_nome">
        <label>Cidade</label>
        <input type="text" name="campo_cidade">
        <label>CPF</label>
        <input type="text" name="campo_cpf">
        <label>Telefone</label>
        <input type="text" name="campo_telefone">
        <input type="submit">
    </form>

    
    <?php
    if(empty($_POST["campo_nome"]) or empty($_POST["campo_cidade"]) or empty($_POST["campo_cpf"]) or empty($_POST["campo_telefone"])){
    ?>

        <h3>Digite um nome e uma cidade</h3>
        <?php
        } else {
        $nome = $_POST["campo_nome"];
        $cidade = $_POST["campo_cidade"];
        $cpf = $_POST["campo_cpf"];
        $telefone = $_POST["campo_telefone"];
    ?>
        <p>A pessoa se chama <?php echo $nome?>, mora em <?php echo $cidade?>, tem o telefone <?php echo $telefone?> porta o cpf <?php echo $cpf?></p>

        <?php } ?>
<body>
</html>