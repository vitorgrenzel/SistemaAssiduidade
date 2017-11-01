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
                            <li role="presentation" class="menu-if"><a href="http://www.ibiruba.ifrs.edu.br/site/" target="_blank">Atendimento</a></li>
                            <li role="presentation" class="menu-if"><a href="http://www.ibiruba.ifrs.edu.br/site/" target="_blank">Editais</a></li>
                            <li role="presentation" class="menu-if"><a href="http://www.ibiruba.ifrs.edu.br/site/" target="_blank">Projetos</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Notificação e conta do usuário -->

                    <div class="col-lg-8 col-lg-offset-3 col-md-3 col-md-offset-8 col-xs-7 col-xs-offset-8">
                        <ul class="nav top-nav navbar-right" id="barra-if">
                            <li class="dropdown dropdown-notification"> <a class="dropdown-toggle" href="" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> <i class="fa fa-bell-o"></i> <span class="badge badge-default">3</span> </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3> <span class="bold">Notificações</span> pendentes</h3>
                                        <!-- <a href="page_user_profile_1.html">Ver todas</a> -->
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list">
                                            <li> <a href="controle-de-fluxo.php">  <span class="details"> <span class="label label-sm label-icon label-warning"> <i class="fa fa-bell-o"></i> </span> Assiduidade com pendencia </span> </a> </li>

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
               
                <!-- ################################## -->
            </div>
        </div>
        
        <!-- Corpo -->
        <section  id="corpo-assiduidade">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="titulo-cabecalho">Declaração de assiduidade de bolsista de extensão</h4>
                    </div>
                </div>
                <div class="col-lg-10 col-lg-offset-1"> 
                    <div class="row" id="box-cinza">
                        <div class="col-lg-12 text-left">
                            <h5 class="migalhas-de-pao"><a href="menu-extensao.html">Extensão</a> > <a href="controle-de-fluxo.html">Assiduidade</a> > Adicionar</h5>
                        </div>
                    </div>
                    <div class="row" id="box-branco">
                        <div class="col-lg-12">
                            <div class="fieldset cor-de-fundo">

                                <form name="formAssiduidade" class="form-horizontal" id="assiduidade-Extensao" action="recebe_assiduidade.php" method="POST">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Título do programa/projeto de extensão:</label>
                                        <div class="col-sm-7">
                                            <select class="tituloProj form-control" name="tituloProj"></select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Coordenador:</label>
                                        <div class="col-sm-7"> 
                                            <input type="text" class="form-control" id="coordenadorProj" placeholder="<?php ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="example-month-input">Mês de referência</label>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="month" required="" id="example-month-input">
                                        </div>
                                    </div>              

                            </div>

                            <div class="form-horizontal">
                                <div class="table-responsive table-obs">
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                        <div class="row">
                                            <th class="col-xs-1">Data</th>
                                            <th class="col-xs-2">Horário</th>
                                            <th class="col-xs-3">Horas realizadas</th>
                                            <th class="col-xs-6">Observações</th>
                                        </div>
                                        </thead>
                                        <tbody id="tabelaCorpo">
                                            <tr id="linha">
                                                <td><input type="date" class="form-control" name="data[0]"></td>
                                                <td><input type="time" class="form-control" name="horario[0]"></td>
                                                <td><input type="number" class="form-control" name="horas-realizadas[0]"></td>
                                                <td><input type="text" class="form-control " name="obs[0]"></td>
                                            </tr>
                                            <tr id="linha">
                                                <td><input type="date" class="form-control" name="data[1]"></td>
                                                <td><input type="time" class="form-control" name="horario[1]"></td>
                                                <td><input type="number" class="form-control" name="horas-realizadas[1]"></td>
                                                <td><input type="text" class="form-control " name="obs[1]"></td>
                                            </tr>
                                            <tr id="linha">
                                                <td><input type="date" class="form-control" name="data[2]"></td>
                                                <td><input type="time" class="form-control" name="horario[2]"></td>
                                                <td><input type="number" class="form-control" name="horas-realizadas[2]"></td>
                                                <td><input type="text" class="form-control " name="obs[2]"></td>
                                            </tr>
                                            <tr id="linha">
                                                <td><input type="date" class="form-control" name="data[3]"></td>
                                                <td><input type="time" class="form-control" name="horario[3]"></td>
                                                <td><input type="number" class="form-control" name="horas-realizadas[3]"></td>
                                                <td><input type="text" class="form-control " name="obs[3]"></td>
                                            </tr>
                                            <tr id="linha">
                                                <td><input type="date" class="form-control" name="data[4]"></td>
                                                <td><input type="time" class="form-control" name="horario[4]"></td>
                                                <td><input type="number" class="form-control" name="horas-realizadas[4]"></td>
                                                <td><input type="text" class="form-control " name="obs[4]"></td>
                                            </tr>
                                            <tr id="linha">
                                                <td><input type="date" class="form-control" name="data[5]"></td>
                                                <td><input type="time" class="form-control" name="horario[5]"></td>
                                                <td><input type="number" class="form-control" name="horas-realizadas[5]"></td>
                                                <td><input type="text" class="form-control " name="obs[5]"></td>
                                            </tr>
                                            <tr id="linha">
                                                <td><input type="date" class="form-control" name="data[6]"></td>
                                                <td><input type="time" class="form-control" name="horario[6]"></td>
                                                <td><input type="number" class="form-control" name="horas-realizadas[6]"></td>
                                                <td><input type="text" class="form-control " name="obs[6]"></td>
                                            </tr>
                                            <tr id="linhaParaClonar">
                                                <td><input type="date" class="form-control" name="data[7]"></td>
                                                <td><input type="time" class="form-control" name="horario[7]"></td>
                                                <td><input type="number" class="form-control" name="horas-realizadas[7]"></td>
                                                <td><input type="text" class="form-control " name="obs[7]"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-offset-9 col-sm-11">
                                <input type="button" onclick="removerLinha()" value="Remover"  class="btn btn-danger"/>&nbsp;&nbsp;
                                <input type="button" onclick="adicionarLinha()" value="Adicionar" class="btn btn-success"/>
                            </div>

                            </form>
                        </div>

                    </div>

                    <div class="row" id="box-cinza-inferior">
                        <div class="col-lg-offset-1 col-sm-2">
                            <a href="controle-de-fluxo.html" class="btn btn-success">Voltar</a>
                        </div>
                        <div class="col-lg-offset-10">
                            <button type="submit" class="btn btn-success">Concluir</button>
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
