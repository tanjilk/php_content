<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicios.css">
    <title>Curso PHP</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Exercício</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">

            <?php
                // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                
                include("{$_GET['dir']}/{$_GET['file']}.php");

                
            ?>

        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?php echo date("d-m-Y") ?>
    </footer>
</body>
</html>