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
        <title>Simulação Carro</title>
        <link rel="icon" type="image/png" sizes="96x96" href="_img/icone.png">
        <link rel="stylesheet" type="text/css" href="_css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css">
        <script type="text/javascript" src="_js/jquery.js"></script>
        <script type="text/javascript" src="_js/bootstrap.js"></script>
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
                        <li><a href="simulacaoCasa.php">Simulação Casa</a></li>
                        <li class="active"><a href="#">Simulação Carro</a></li>
                        <li><a href="contato.php">Fale Conosco</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class="container-fluid">
                    <br>
                    <h1>Fórmulário do Automóvel</h1>
                    <div class="well">
                        <p>Este formulário irá coletar os dados e serão mantidos em sigilo. O formulário será encaminha e analisado pela equipe.</p>
                    </div>
                    <ul class="nav nav-tabs">
                        
                        <li class="active"><a data-toggle="tab" href="#iCliente"><span class="glyphicon glyphicon-user"></span> Dados do Cliente</a></li>
                        <li><a data-toggle="tab" href="#iCarro">Dados do Carro</a></li>
                        <li><a data-toggle="tab" href="#iTipoSeguro"><span class=""></span> Tipo de Seguro</a></li>
                    </ul>
                    <form action="#">
                        <div class="tab-content">
                            <div id="iCliente" class="tab-pane fade in active">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="iNome">Qual é seu nome?</label>
                                            <input id="iNome" name="nNome" type="text" class="form-control" placeholder="Seu nome completo.">
                                        </div>
                                        <div class="form-group">
                                            <label for="iCPF">Seu CPF</label>
                                            <input id="iCPF" name="nCPF" type="text" class="form-control">
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Gênero</div>
                                            <div class="panel-body">
                                                <label class="radio-inline"><input id="iMasculino" name="nGenero" type="radio">Masculino</label>
                                                <label class="radio-inline"><input id="iFeminino" name="nGenero" type="radio">Feminino</label>
                                                <label class="radio-inline"><input id="iNaoBinario" name="nGenero" type="radio">Não Binário</label>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Estado Civil</div>
                                            <div class="panel-body">
                                                <label class="radio-inline"><input id="iCasado" name="nEstadoCivil" type="radio">Casado(a)</label>
                                                <label class="radio-inline"><input id="iViuvo" name="nEstadoCivil" type="radio">Viuvo(a)</label>
                                                <label class="radio-inline"><input id="iDivorciado" name="nEstadoCivil" type="radio">Divorciado(a)</label>
                                                <label class="radio-inline"><input id="iSolteiro" name="nEstadoCivil" type="radio">Soteiro(a)</label>
                                                <label class="radio-inline"><input id="iSeparado" name="nEstadoCivil" type="radio">Separado(a)</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="iFilhos">Filhos</label>
                                            <select class="form-control" id="iFilhos">
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Depedências</div>
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Bebidas Alcoólicas</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Tabaco</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Jogos de Azar</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Entorpecentes</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="iNascimento">Data de nascimento</label>
                                            <input id="iNascimento" name="nNascimento" type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="iExpedicaoHabilitacao">Data de expedição da habilitação</label>
                                            <input id="iExpedicaoHabilitacao" name="nExpedicaoHabilitacao" type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="iCarro" class="tab-pane fade">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="iFabricante">Fabricante</label>
                                            <select class="form-control" id="iFabricante">
                                                <option></option>
                                                <option>Chevrolet</option>
                                                <option>Fiat</option>
                                                <option>Ford</option>
                                                <option>Nissan</option>
                                                <option>Hyundai</option>
                                                <option>Honda</option>
                                                <option>Peugeot</option>
                                                <option>Citroen</option>
                                                <option>Toyota</option>
                                                <option>Volkswagen</option>
                                                <option>Suzuki</option>
                                                <option>Kia</option>
                                                <option>Outros</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="iClasse">Classe</label>
                                            <select class="form-control" id="iClasse">
                                                <option></option>
                                                <option>Micro</option>
                                                <option>Subcompacto</option>
                                                <option>Compacto</option>
                                                <option>Tamanho médio</option>
                                                <option>Tamanho grande</option>
                                                <option>Luxo</option>
                                                <option>Desportivo</option>
                                                <option>Cabrio</option>
                                                <option>Roadster</option>
                                                <option>Minivan</option>
                                                <option>Mini SUV</option>
                                                <option>SUV compacto</option>
                                                <option>SUV de tamanho médio económico</option>
                                                <option>SUV de tamanho médio</option>
                                                <option>SUV de tamanho grande</option>
                                                <option>Pick-up Pequena</option>
                                                <option>Pick-up de grande porte</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="iCarroceria">Carroceria</label>
                                            <select class="form-control" id="iCarroceria">
                                                <option></option>
                                                <option>Hatchbacks</option>
                                                <option>Sedans</option>
                                                <option>Station Wagons</option>
                                                <option>Pick-Ups</option>
                                                <option>Furgões</option>
                                                <option>Conversíveis</option>
                                                <option>Cabriolets</option>
                                                <option>Targas</option>
                                                <option>Roadsters</option>
                                                <option>Coupés</option>
                                                <option>Vans</option>
                                                <option>Veículos fora de estrada</option>
                                                <option>Utilitários esportivos</option>
                                                <option>Minivans</option>
                                                <option>Crossovers</option>
                                                <option>Shooting Break</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="iNumeroChassi">Número do Chassi</label>
                                            <input id="iNumeroChassi" name="nNumeroChassi" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="iTipoSeguro" class="tab-content fade">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <label class="radio-inline"><input id="iTotal" name="nTipoSeguro" type="radio">Total</label>
                                        <label class="radio-inline"><input id="iAcidente" name="nTipoSeguro" type="radio">Acidente</label>
                                        <label class="radio-inline"><input id="iFurto" name="nTipoSeguro" type="radio">Furto</label>
                                        <div class="checkbox">
                                            <label class="checkbox-inline"><input type="checkbox" value="">Concordo com os termos</label>
                                        </div>
                                        <button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Apagar</button>
                                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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