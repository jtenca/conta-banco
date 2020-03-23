<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Prático - Conta Banco</title>
</head>
<body>
    <?php
        require_once 'ContaBanco.php';

        $pessoa1 = new ContaBanco();

        $pessoa2 = new ContaBanco();
    ?>
</body>
</html>