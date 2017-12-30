<!--
Aluna: Marina Margarida de Oliveira
Matrícula: ##.#.####

Aluno: Vitor de Siqueira Cotta
Matrícula: 14.1.8143

Disciplina: CSI477 - SISTEMAS WEB I - Turma 11
Professor: FERNANDO BERNARDES DE OLIVEIRA
Atividade: Trabalho
Data: ##/##/2018
-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Marina Margarida de Oliveira, Vitor de Siqueira Cotta">
        <title>Contato</title>
        <link rel="icon" type="image/png" sizes="96x96" href="_img/icone.png">
        <link rel="stylesheet" type="text/css" href="_css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css">
        <script type="text/javascript" src="_js/jquery.js"></script>
        <script type="text/javascript" src="_js/funcao.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">NOME DO SITE</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Página inicial</a></li>
                        <li><a href="#">Calcular</a></li>
                        <li class="active"><a href="#">Fale Conosco</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <h1>Fale Conosco</h1>
                <p>Preencha o formulário abaixo para fazer contato com o portal SecurityVip. Retornaremos seu e-mail o mais breve possível</p>
                <form action="get">
                    <div class="form-group">
                        <label for="iNome">Seu Nome</label>
                        <input id="iNome" type="text" name="nNome" placeholder="Coloque seu nome"/>
                    </div>
                    <div class="form-group">
                        <label for="iEmail">Seu E-Mail</label>
                        <input id="iEmail" type="email" name="nEmail" placeholder="Coloque seu E-Mail"/>
                    </div>
                    <div class="form-group">
                        <label for="iTelefone">Telefone de Contato</label>
                        <input id="iTelefone" type="tel" name="nTelefone" placeholder="Coloque seu Telefone"/>
                    </div>
                    <div class="form-group">
                        <label for="iAssunto">Assunto</label>
                        <input id="iAssunto" type="text" name="nAssunto" placeholder="Coloque título do Assunto"/>
                    </div>
                    <div class="form-group">
                        <label for="iMensagem">Assunto</label>
                        <input id="iMensagem" type="text" name="nAssunto" placeholder="Sua mensagem."/>
                    </div>
                </form>
                <br>
            </main>
            <footer>
                <b>Universidade Federal de Ouro Preto</b> <br>
                Aluna: Marina Margarida de Olivera <br>
                E-mail: #@gmail.com <br>
                Aluno: Vitor de Siqueira Cotta <br>
                E-mail: VithorKross@outlook.com <br>
            </footer>
        </div>
    </body>
</html>