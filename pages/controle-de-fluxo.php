<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>IFRS - Campus Ibirubá</title>

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    </head>

    <body>
        <?php
            include ("../classe/protecao.php");
            protecao();
        ?>
        <?php
        if ($_SESSION['nivel'] === 0) { //ALUNO
            $sql_code = "SELECT p.nome, a.mes, proj.titulo, s.nome, a.situacao
                           FROM Pessoa p
                           JOIN 
                           WHERE p.id='$_SESSION[id]'
                           ORDER BY id";
            $resultado = $mysqli->query($sql_code) or die($mysqli->error);
            $linhas = mysqli_num_rows($resultado);
        }
        if ($_SESSION['nivel'] === 1) { //ORIENTADOR
            $sql_code = "SELECT * FROM Pessoa ORDER BY id";
            $resultado = $mysqli->query($sql_code) or die($mysqli->error);
            $linhas = mysqli_num_rows($resultado);
        }
        if ($_SESSION['nivel'] === 2) { //COORDENADOR
        }
        ?>
        
        <!-- Barra Brasil -->
        <div id="barra-identidade">
            <div id="barra-brasil">
                <div id="wrapper-barra-brasil">
                    <div id="brasil-flag">
                        <a href="http://brasil.gov.br" class="link-barra">Brasil</a>
                    </div>
                    <span class="acesso-info">
                        <a href="http://www.servicos.gov.br/?pk_campaign=barrabrasil" class="link-barra" id="barra-brasil-orgao">Serviços</a> 
                    </span>
                    <nav>
                        <ul class="list">
                            <li>
                                <a href="#" id="menu-icon"></a>
                            </li>
                            <li class="list-item">
                                <a href="http://brasil.gov.br/barra#participe" class="link-barra">Participe</a>
                            </li>
                            <li class="list-item">
                                <a href="http://brasil.gov.br/barra#acesso-informacao" class="link-barra">Acesso à informação</a>
                            </li>
                            <li class="list-item">
                                <a href="http://www.planalto.gov.br/legislacao" class="link-barra">Legislação</a>
                            </li>
                            <li class="list-item">
                                <a href="http://brasil.gov.br/barra#orgaos-atuacao-canais" class="link-barra">Canais</a>
                            </li>
                        </ul>
                    </nav>
                    <a class="logo-vlibras" href="http://www.vlibras.gov.br/" aria-label="Acessível em Libras"></a>
                </div>
            </div>
            <script src="http://barra.brasil.gov.br/barra.js" type="text/javascript" defer="" async=""></script>
        </div>
        
        <!-- Cabaçalho -->
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header" id="barra-navegacao">
                    <div class="col-lg-12 col-lg-offset-2">
                        <a class="navbar-brand" href="../index.html" id="logo-if-cabecalho"> 
                            <img src="../imagens/Logo-if-cabecalho.png">
                        </a>
                    </div>
                    <div class="col-lg-12 col-lg-offset-6" id="alinhar-ao-topo">
                        <ul class="nav nav-pills" >
                            <li role="presentation" class="menu-if"><a href="#">Atendimento</a></li>
                            <li role="presentation" class="menu-if"><a href="#">Editais</a></li>
                            <li role="presentation" class="menu-if"><a href="#">Projetos</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Notificação e conta do usuário -->
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-3">
                        <ul class="nav top-nav navbar-right" id="barra-if">
                            <li class="dropdown dropdown-notification"> <a class="dropdown-toggle" href="" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> <i class="fa fa-bell-o"></i> <span class="badge badge-default">3</span> </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3> <span class="bold">12 notificações</span> pendentes</h3>
                                        <a href="page_user_profile_1.html">Ver todas</a> 
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list">
                                            <li> <a href="javascript:;"> <span class="time">just now</span> <span class="details"> <span class="label label-sm label-icon label-success"> <i class="fa fa-plus"></i> </span> Assiduidade com pendencia </span> </a> </li>
                                            <li> <a href="javascript:;"> <span class="time">3 mins</span> <span class="details"> <span class="label label-sm label-icon label-danger"> <i class="fa fa-bolt"></i> </span> Moepex 2017 </span> </a> </li>
                                            <li> <a href="javascript:;"> <span class="time">10 mins</span> <span class="details"> <span class="label label-sm label-icon label-warning"> <i class="fa fa-bell-o"></i> </span> Relatório parcial </span> </a> </li>
                                            <li> <a href="javascript:;"> <span class="time">14 hrs</span> <span class="details"> <span class="label label-sm label-icon label-info"> <i class="fa fa-bullhorn"></i> </span> Application error. </span> </a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <img alt="foto de perfil" class="img-circle foto-perfil" src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAliAAAAJDUzNzg0NmI1LTAzODctNDE4ZC05OWU3LTQ4NDYxYTM2ZGM1Ng.jpg" width="40"> 
                                    <span class="hidden-xs">Vitor Grenzel</span> <br>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-fw fa-user"></i>Editar Perfil</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-cog"></i>Alterar senha</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i>Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ################################## -->
            </div>
        </div>

        <!-- FIM DO CABECALHO -->

        <!-- Corpo -->
        <section  id="corpo-assiduidade">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="titulo-cabecalho">Controle de fluxo</h4>
                    </div>
                </div>
                <div class="col-lg-10 col-lg-offset-1"> 
                    <div class="row" id="box-cinza">
                        <div class="col-lg-12 text-left">
                            <h5 class="migalhas-de-pao"><a href="menu-extensao.php">Extensão</a> > <strong>Controle de fluxo</strong> </h5>
                        </div>
                    </div>
                    <div class="row" id="box-branco">
                        <div class="col-lg-12">

                            <!-- CAMPO DE BUSCA -->
                            <div class="input-group col-sm-12" id="adv-search">
                                <div class="form-group">
                                    <h4><label class="col-sm-1">Mês:</label></h4>
                                    <div class="col-sm-4">
                                        <input type="month" class="form-control">
                                    </div>

                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg col-lg-4">
                                                <button type="button" class="btn btn-default glyphicon glyphicon-filter" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">

                                                    <div class="campo-filtro">
                                                        <form class="form-horizontal" role="form" method="POST">
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3">Nome:</label>
                                                                <div class="col-sm-8"> 
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3">Projeto:</label>
                                                                <div class="col-sm-8"> 
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3">Matrícula:</label>
                                                                <div class="col-sm-8"> 
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-offset-9"> 
                                                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-horizontal">
                                <div class="table-responsive table-control">
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                        <div class="row">
                                            <th class="col-xs-2">Nome do aluno</th>
                                            <th class="col-xs-2">Mês de referência</th>
                                            <th class="col-xs-3">Título do projeto</th>
                                            <th class="col-xs-2">Coordenador</th>
                                            <th class="col-xs-2">Status</th>
                                            <th></th>
                                            <th></th>
                                        </div>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($linha = mysqli_fetch_array($resultado)) {
                                                echo "<tr>";
                                                echo "<td>" . $linhas['nome'] . "</td>";
                                                echo "<td>" . $linhas['mes'] . "</td>";
                                                echo "<td>" . $linhas['titulo'] . "</td>";
                                                echo "<td>" . $linhas['coordenador'] . "</td>";

                                                if ($linhas['situacao'] == 0) {
                                                    echo "<td><span class='label label-success'>Aprovado</span></td>";
                                                } else if ($linhas['situacao'] == 1) {
                                                    echo "<td><span class='label label-danger'>Reprovado</span></td>";
                                                } else if ($linhas['situacao'] == 2) {
                                                    echo "<td><span class='label label-warring'>Pendente</span></td>";
                                                }

                                                if ($linhas['situacao'] == 0) {
                                                    echo "<td><p data-placement='top' data-toggle='tooltip' title='search'><button class='btn btn-primary btn-xs' data-title='Delete' data-toggle='modal' data-target='#search' ><span class='glyphicon glyphicon-search'></span></button></p></td>";
                                                } else {
                                                    echo"<td><p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>";
                                                    echo"<td><p dattle='Delete'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>";
                                                }
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>

                        <div class="col-sm-offset-10 col-sm-11">
                            <a class="btn btn-success" href="assiduidade.html">Adicionar</a>
                        </div>
                    </div>

                    <div class="row" id="box-cinza-inferior">
                        <div class="col-sm-offset-1 col-sm-11">
                            <a class="btn btn-success" href="menu-extensao.html">Voltar</a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <script src="../js/index.js"></script>
        <script src="../js/barra-brasil.js"></script>
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../node_modules/jquery/dist/jquery.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    </body>
</html>
