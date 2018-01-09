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
        <link rel="stylesheet" href="FrameWorks/font-google-material-icons/google-material-icons.css">
        <script type="text/javascript" src="FrameWorks/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="FrameWorks/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="FrameWorks/bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
        <link rel="icon" type="image/png" sizes="96x96" href="_img/icone.png">
        <title>Simulação Carro</title>
    </head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Bee Safe</a>
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
                        <li class="active"><a data-toggle="tab" href="#iCliente"><i class="fa fa-user"></i> Dados do Condutor</a></li>
                        <li><a data-toggle="tab" href="#iCarro"><i class="fa fa-automobile"></i> Dados do Carro</a></li>
                        <li><a data-toggle="tab" href="#iTipoSeguro"><i class="fa fa-file-text"></i>  Tipo de Seguro</a></li>
                    </ul>
                    <form method="post" action="#">
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
                                        <div class="form-group">
                                            <label for="iRG">Seu RG</label>
                                            <input id="iRG" name="nRG" type="text" class="form-control">
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><i class="fa fa-genderless"></i> Gênero</div>
                                            <div class="panel-body">
                                                <label class="radio-inline"><input id="iMasculino" name="nGenero" type="radio"><i class="fa fa-mars"></i> Masculino</label>
                                                <label class="radio-inline"><input id="iFeminino" name="nGenero" type="radio"><i class="fa fa-venus"></i> Feminino</label>
                                                <label class="radio-inline"><input id="iNaoBinario" name="nGenero" type="radio"><i class="fa fa-transgender-alt"></i> Não Binário</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="iSalario"><i class="material-icons">monetization_on</i> Qual é seu salário.</label>
                                            <select class="form-control" id="iSalario">
                                                <option disabled selected value> -- Selecione uma opção. -- </option>
                                                <option>1 à 5 salários mínimos</option>
                                                <option>5 à 10 salários mínimos</option>
                                                <option>10 à 15 salários mínimos</option>
                                                <option>Mais de 20 salários mínimos</option>
                                            </select>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><i class="material-icons">people</i> Estado Civil</div>
                                            <div class="panel-body">
                                                <label class="radio-inline"><input id="iCasado" name="nEstadoCivil" type="radio">Casado(a)</label>
                                                <label class="radio-inline"><input id="iViuvo" name="nEstadoCivil" type="radio">Viuvo(a)</label>
                                                <label class="radio-inline"><input id="iDivorciado" name="nEstadoCivil" type="radio">Divorciado(a)</label>
                                                <label class="radio-inline"><input id="iSolteiro" name="nEstadoCivil" type="radio">Soteiro(a)</label>
                                                <label class="radio-inline"><input id="iSeparado" name="nEstadoCivil" type="radio">Separado(a)</label>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><i class="fa fa-child"></i> Filhos</div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="iFilhos">Quantidade</label>
                                                    <select class="form-control" id="iFilhos">
                                                        <option disabled selected value> -- Selecione uma opção. -- </option>
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
                                                <div class="form-group">
                                                    <label>Filho com habilitação</label>
                                                    <br>
                                                    <label class="radio-inline"><input id="iFilhoHabilitadoSim" name="nFilhoHabilitado" type="radio">Sim</label>
                                                    <label class="radio-inline"><input id="iFilhoHabilitadoNao" name="nFilhoHabilitado" type="radio">Não</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Depedências</div>
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                    <label class="checkbox-inline"><input type="checkbox" value=""><i class="fa fa-beer"></i> Bebidas Alcoólicas</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value=""><i class="material-icons">smoking_rooms</i> Tabaco</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value=""><i class="material-icons">casino</i> Jogos de Azar</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value=""><i class="fa fa-eyedropper"></i> Entorpecentes</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="iNascimento"><i class="fa fa-birthday-cake"></i> Data de nascimento</label>
                                            <input id="iNascimento" name="nNascimento" type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="iExpedicaoHabilitacao"><i class="fa fa-address-card"></i> Data de expedição da habilitação</label>
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
                                                <option disabled selected value> -- Selecione uma opção. -- </option>
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
                                            <label for="iVeiculo">Veículo</label>
                                            <input id="iVeiculo" name="nVeiculo" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="iVeiculoAno">Ano</label>
                                            <input id="iVeiculoAno" name="nVeiculoAno" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="iDistanciaPecorrida">Anualmente quantos KM usa o automóvel?</label>
                                            <input id="iDistanciaPecorrida" name="nDistanciaPecorrida" type="text" class="form-control" placeholder="Distância em KM">
                                        </div>
                                        <div class="form-group">
                                            <label for="iClasse">Classe</label>
                                            <select class="form-control" id="iClasse">
                                                <option disabled selected value> -- Selecione uma opção. -- </option>
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
                                                <option disabled selected value> -- Selecione uma opção. -- </option>
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
                                            <label for="iPlaca">Placa do Veículo</label>
                                            <input id="iPlaca" name="nPlaca" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="iPortas"><i class=""></i> Quantidade de Portas</label>
                                            <select class="form-control" id="iPortas">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="iRenavam">Renavam</label>
                                            <input id="iRenavam" name="nRenavam" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="iNumeroChassi">Número do Chassi</label>
                                            <input id="iNumeroChassi" name="nNumeroChassi" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="iCambio">Câmbio</label>
                                            <select class="form-control" id="iCambio">
                                                <option disabled selected value> -- Selecione uma opção. -- </option>
                                                <option>Mecânico</option>
                                                <option>Hidráulico</option>
                                                <option>Elétrico</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="iCor"><i class="material-icons">color_lens</i> Cor</label>
                                            <select class="form-control" id="iCor">
                                                <option disabled selected value> -- Selecione uma opção. -- </option>
                                                <option>Branco</option>
                                                <option>Preto</option>
                                                <option>Prata</option>
                                                <option>Vermelho</option>
                                                <option>Azul</option>
                                                <option>Verde</option>
                                                <option>Cinza</option>
                                                <option>Amarelo</option>
                                                <option>Verde</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="iCombustivel"><i class="material-icons">local_gas_station</i> Combustível</label>
                                            <select class="form-control" id="iCombustivel">
                                                <option disabled selected value> -- Selecione uma opção. -- </option>
                                                <option>Etanol</option>
                                                <option>Gasolina</option>
                                                <option>Diesel</option>
                                                <option>Gás</option>
                                                <option>Elétrico</option>
                                                <option>Flex</option>
                                                <option>Hidrogênio</option>
                                            </select>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><i class="material-icons">transfer_within_a_station</i> Uso do Veículo</div>
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Locomoção Diária</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Só Lazer</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Comercial - Visita à Clientes</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><i class=""></i> Garagem</div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <p><i class="fa fa-home"></i> Residência</p>
                                                    <label class="radio-inline"><input id="iGaragemResidenciaSim" name="nGaragemResidencia" type="radio">Sim</label>
                                                    <label class="radio-inline"><input id="iGaragemResidenciaNao" name="nGaragemResidencia" type="radio">Não</label>
                                                </div>
                                                <div class="form-group">
                                                    <p><i class="material-icons">work</i> Trabalho</p>
                                                    <label class="radio-inline"><input id="iGaragemTrabalhoSim" name="nGaragemTrabalho" type="radio">Sim</label>
                                                    <label class="radio-inline"><input id="iGaragemTrabalhoNao" name="nGaragemTrabalho" type="radio">Não</label>
                                                    <label class="radio-inline"><input id="iGaragemTrabalhoNaoUtiliza" name="nGaragemTrabalho" type="radio">Não Utilizo/Não Trabalho</label>
                                                </div>
                                                <div class="form-group">
                                                    <p><i class="material-icons">school</i> Universidade/Escola</p>
                                                    <label class="radio-inline"><input id="iGaragemEscolaSim" name="nGaragemEscola" type="radio">Sim</label>
                                                    <label class="radio-inline"><input id="iGaragemEscolaNao" name="nGaragemEscola" type="radio">Não</label>
                                                    <label class="radio-inline"><input id="iGaragemEscolaNaoUtiliza" name="nGaragemEscola" type="radio">Não Utilizo/Não Estudo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><i class=""></i> Residência</div>
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                    <div class="form-group">
                                                        <label class="checkbox-inline"><input type="checkbox" value="">Apartamento</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="">Casa</label>
                                                        <label class="checkbox-inline"><input type="checkbox" value="">Condomínio</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="iPortao"><i class=""></i> Portão</label>
                                                    <select class="form-control" id="iPortao">
                                                        <option disabled selected value> -- Selecione uma opção. -- </option>
                                                        <option>Automático</option>
                                                        <option>Manual</option>
                                                        <option>Porteiro</option>
                                                        <option>Não possui</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="iTipoSeguro" class="tab-content fade">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Cobertura do Seguro</div>
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Desastre Ambiental</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Furto</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Acidente</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Riscos</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Pneus</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Vidros</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Air Bags</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="checkbox">
                                            <label class="checkbox-inline"><input type="checkbox" value="">Concordo com os termos</label>
                                        </div>
                                        <button type="reset" class="btn btn-default"><i class="fa fa-trash"></i> Apagar</button>
                                        <button type="submit" class="btn btn-default"><i class="fa fa-send"></i> Enviar</button>
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