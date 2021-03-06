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
                                    <img alt="foto de perfil" class="img-circle foto-perfil" src="../imagens/imagem-perfil.jpg" width="40"> 
                                    <span class="hidden-xs">Vitor Grenzel</span> <br>
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
                        <h4 class="titulo-cabecalho">Menu</h4>
                    </div>
                </div>
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="row" id="box-cinza">
                        <div class="col-lg-12 text-left">
                            <h5 class="migalhas-de-pao"><a href="menu-geral.php">Menu</a> > <strong>Extensão</strong> </h5>
                        </div>
                    </div>
                    <div class="row" id="box-branco">
                        <div class="col-lg-12">
                            <div class="campo-menu">  
                                <?php
                                if ($_SESSION['nivel'] == 0) { //ALUNO
                                    echo "<a href='controle-de-fluxo.php'><input type='submit' class='botao-menu botaoassiduidade' value=''></a>";
                                    echo "<a href='controle-de-relatorio.html'><input type='submit' class='botao-menu botaorelatorio' value=''></a>";
                                } else if ($_SESSION['nivel'] == 1) { //ORIENTADOR
                                    echo "<a href='controle-de-fluxo.php'><input type='submit' class='botao-menu botaoassiduidade' value=''></a>";
                                    echo "<a href='controle-de-relatorio.html'><input type='submit' class='botao-menu botaorelatorio' value=''></a>";
                                } else if ($_SESSION['nivel'] == 2) { //COORDENADOR
                                    echo "<a href='controle-de-fluxo.php'><input type='submit' class='botao-menu botaoassiduidade' value=''></a>";
                                    echo "<a href='controle-de-relatorio.html'><input type='submit' class='botao-menu botaorelatorio' value=''></a>";
                                    echo "<a href='relacao-contemplados.html'><input type='submit' class='botao-menu botaocontemplados' value=''></a>";
                                    echo "<a href='registrar-projeto.php'><input type='submit' class='botao-menu botaoprojeto' value=''></a>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--     </div> -->
                    <div class="row" id="box-cinza-inferior">
                        <div class="col-lg-offset-1 col-sm-2">
                            <a href="menu-geral.php" class="btn btn-success">Voltar</a>
                        </div>
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