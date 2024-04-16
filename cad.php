<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_REQUEST["nome"] ?? "indefinido"; //coalescência nula
        $sobrenome = $_REQUEST["sobrenome"] ?? "indefinido"; //coalescência nula
        echo "<p> É um prazer te conhecer <strong>$nome $sobrenome</strong>, obrigado por enviar o formulário!"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>