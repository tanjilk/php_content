<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicios.php?dir=basico&file=html">Integracão HTML</a></li>
                        <li><a href="exercicios.php?dir=basico&file=css">Integracão CSS</a></li>
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>Módulo 02</h3>
                    <ul>
                    <li><a href="exercicios.php?dir=exercicios&file=equacao">Desafio - Equação</a></li>
                    <li><a href="exercicios.php?dir=exercicios&file=operadores_logicos">Desafio - Operadores Lógicos</a></li>
                    <li><a href="exercicios.php?dir=exercicios&file=conversao_param">Desafio - Conversão</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 03
                    </h3>
                    <ul>
                        <li><a href="exercicios.php?dir=array&file=basico">Arrays - Mapa</a></li>
                        <li><a href="exercicios.php?dir=array&file=mapa">Arrays - Mapa</a></li>
                        <li><a href="exercicios.php?dir=array&file=desafio_meses">Arrays - Meses</a></li>
                        <li><a href="exercicios.php?dir=array&file=operacao_array">Arrays - Operações</a></li>
                        <li><a href="exercicios.php?dir=array&file=sorteio">Desafio - Sorteio</a></li>
                        <li><a href="exercicios.php?dir=array&file=multidimensional">Array - Multidimensional </a></li>
                        <li><a href="exercicios.php?dir=array&file=get">Array - $_GET </a></li>
                        <li><a href="exercicios.php?dir=array&file=post">Array - $_POST </a></li>
                        <li><a href="exercicios.php?dir=array&file=comparacao">Array - Comparação </a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 04</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Módulo 05</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Módulo 06</h3>
                    <ul>
                        
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>Módulo 07</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>Módulo 08</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>Módulo 09</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício A</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?php echo date("d-m-Y") ?>
    </footer>
</body>
</html>