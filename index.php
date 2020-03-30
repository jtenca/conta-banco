<!DOCTYPE html>
<html lang="pt-BR">
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

        $pessoa1->abrirConta("CC");
        $pessoa1->setDono("Henri");
        $pessoa1->setNumConta(1212);
        $pessoa1->depositar(400);

        $pessoa2->abrirConta("CP");
        $pessoa2->setDono("Guilhermina");
        $pessoa2->setNumConta(2121);
        $pessoa2->depositar(600);

        

        print_r($pessoa1);
        print_r($pessoa2);
    ?>
</body>
</html>