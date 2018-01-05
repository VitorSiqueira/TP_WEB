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
        <link rel="stylesheet" href="FrameWorks/font-awesome-4.7.0/css/font-awesome.css">
        <script type="text/javascript" src="FrameWorks/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="FrameWorks/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="FrameWorks/bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="icon" type="image/png" sizes="96x96" href="_img/icone.png">
        <title>Contato</title>
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
                        <li><a href="simulacaoCasa.php">Simulação Casa</a></li>
                        <li><a href="simulacaoCarro.php">Simulação Carro</a></li>
                        <li class="active"><a href="#">Fale Conosco</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class="container-fluid">
                    <br>
                    <h1>Fale Conosco</h1>
                    <p>Preencha o formulário abaixo para fazer contato com o portal SecurityVip. Retornaremos seu e-mail o mais breve possível</p>
                    <form action="get">
                        <div class="form-group">
                            <label for="iNome"><i class="fa fa-user"></i> Seu Nome</label>
                            <input id="iNome" class="form-control" type="text" name="nNome" placeholder="Coloque seu nome"/>
                        </div>
                        <div class="form-group">
                            <label for="iEmail"><i class="fa fa-envelope"></i> Seu E-Mail</label>
                            <input id="iEmail" class="form-control" type="email" name="nEmail" placeholder="Coloque seu E-Mail"/>
                        </div>
                        <div class="form-group">
                            <label for="iTelefone"><i class="fa fa-phone"></i> Telefone de Contato</label>
                            <input id="iTelefone" class="form-control" type="tel" name="nTelefone" placeholder="Coloque seu Telefone"/>
                        </div>
                        <div class="form-group">
                            <label for="iAssunto"><i class="fa fa-header"></i> Assunto</label>
                            <input id="iAssunto" class="form-control" type="text" name="nAssunto" placeholder="Coloque título do Assunto"/>
                        </div>
                        <div class="form-group">
                            <label for="iMensagem"><i class="fa fa-te"></i> Sua mensagem</label>
                            <textarea id="iMensagem" class="form-control" rows="5" name="nMensagem" placeholder="Sua mensagem."></textarea>
                        </div>
                        <button type="reset" class="btn btn-default"><i class="fa fa-trash"></i> Apagar</button>
                        <button type="submit" class="btn btn-default"><i class="fa fa-send"></i> Enviar</button>
                    </form>
                </div>
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