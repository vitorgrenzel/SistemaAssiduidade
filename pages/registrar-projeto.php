<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>IFRS - Campus Ibirubá</title>
        
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    </head>
    <body>
        <?php
            include ("../classe/protecao.php");
            protecao();
            verifica_nivel(2);
        ?>
        <!-- Barra Brasil -->
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
                                    <span class="hidden-xs nome-perfil"><?php echo $_SESSION['nome'] ?></span> <br>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-fw fa-user"></i>Editar Perfil</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-cog"></i>Alterar senha</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../php/logout.php"><i class="fa fa-fw fa-power-off"></i>Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ################################## -->
            </div>
        </div>

        <!-- Corpo -->
        <section  id="corpo-assiduidade">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="titulo-cabecalho">Criar Projeto</h4>
                    </div>
                </div>
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row" id="box-cinza">
                        <div class="col-lg-12 text-left">
                            <h5 class="migalhas-de-pao"><a href="menu-geral.php">Menu</a> > <a href="menu-extensao.html">Extensão</a> > <strong>Criar Projeto</strong> </h5>
                        </div>
                    </div>
                    <div class="row" id="box-branco">
                        <div class="col-lg-12">

                            <form name="registrarProjeto" class="form-horizontal" id="registrarProjeto" action="../php/registrarProjeto.php" method="POST">
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Título do programa/projeto:</label>
                                    <div class="col-sm-7"> 
                                        <input type="text" name="titulo" class="form-control" id="coordenadorProj">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Tipo:</label>
                                    <div class="col-sm-7"> 
                                        <label class="radio-inline">
                                            <input type="radio" name="tipo" value="1" >Ensino</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="tipo" value="2" >Pesquisa</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="tipo" value="3" >Extensão</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-4">Data de inicio:</label>
                                    <div class="col-sm-5"> 
                                        <input type="date" name="dt_inicio" class="form-control" id="coordenadorProj">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-4">Data de termino:</label>
                                    <div class="col-sm-5"> 
                                        <input type="date" name="dt_fim" class="form-control" id="coordenadorProj">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-4">Número Sig:</label>
                                    <div class="col-sm-3"> 
                                        <input type="number" name="sig_nr" class="form-control" id="coordenadorProj">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-4">Víncular Bolsistas:</label>
                                    <div class="control-label col-lg-9 col-lg-offset-1">
                                        <div class="form-horizontal">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-highlight">
                                                    <thead>
                                                    <div class="row">
                                                        <th class="col-xs-5 col-sm-5 col-md-5 col-lg-5">Nome</th>
                                                        <th class="col-xs-4 col-sm-4 col-md-4 col-lg-4  ">Vinculo</th>
                                                        <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Horas</th>
                                                        <th class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></th>
                                                    </div>
                                                    </thead>
                                                    <tbody id="tabelaCorpo">
                                                        <tr id="linhaParaClonar">
                                                            <td>
                                                                <select class="form-control" name="bolsista[]"></select>
                                                            </td>
                                                            <td><label class="radio-inline">
                                                                    <input type="radio" name="vinculo[0]" value="1">Bolsista</label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="vinculo[0]" value="2">Voluntário</label>
                                                            </td>
                                                            <td>
                                                                <input type="number" name="horas[0]" class="form-control" />
                                                            </td>

                                                            <td>
                                                                <!-- <button onclick="removerLinha()" class="glyphicon glyphicon-remove"></button> -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="col-sm-offset-8">

                                                    <input type="button" onclick="clonarLinha()" value="Adicionar" id="adcLinha" class="btn btn-success"/>

                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                </div>
                        </div>
                    </div>
                    <!--     </div> -->
                    <div class="row" id="box-cinza-inferior">

                        <div class="col-lg-offset-1 col-sm-2">
                            <a href="menu-orientador.html" class="btn btn-success" onClick="formVazio();">Voltar</a>
                        </div>
                        <div class="col-lg-offset-10" >
                            <button type="submit" class="btn btn-success">Concluir</button>
                        </div>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
        
        <script src="../js/index.js"></script>
        <script src="../js/barra-brasil.js"></script>
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../node_modules/jquery/dist/jquery.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</body>
</html>