<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>IFRS - Campus Ibirubá</title>


        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style-login.css">

    </head>

    <body>
    <div id="conteiner-login">
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


        <div class="login-form">
            <h1><img id="Logo-if-login" src="imagens/Logo-if-pequeno.png" ></h1>
            <hr><br>
            <form method="POST" action="#">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuário " id="UserName">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group log-status">
                    <input type="password" class="form-control" placeholder="Senha" id="Passwod">
                    <i class="fa fa-lock"></i>
                </div>
                <span class="alert">Nome de usuário ou senha errados. Por favor tente outra vez.</span>
                
                <a class="link" href="pages/esqueceu-senha.html">Esqueceu a senha?</a>
                <a class="link-cadastrar" href="#">Cadastrar-se</a>
                <button type="button" class="log-btn" >Acessar</button>
            </form>
        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
    </div>
    </body>
</html>
