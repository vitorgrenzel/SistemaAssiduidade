<?php
include "MySQLiConnection.class.php";

  $msg = "";
  $conn = new MySQLiConnection();
    
  $estados = "";
  $sql = "SELECT nome, id
          FROM estado
          ORDER BY uf";
  $res = $conn->query($sql);
  $res = $res->fetch_all(MYSQLI_ASSOC);
  foreach ($res as $row) {
  $estados .= '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
  }
    
  if(isset($_POST['cadastrar'])){
  
    $usuario = $_POST['login'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $sexo = $_POST['sexo'];
    $nome_mae = $_POST['nome_mae'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $cpf = $_POST['cpf'];
    $nivel_de_acesso = $_POST['nivel_de_acesso'];
    
    $sql = "insert into pessoa (nivel_de_acesso, senha, nome, dt_nasc, cpf, login, email, cidade, sexo, nome_mae, telefone, endereco)
            values (".$nivel_de_acesso.",'".$senha."','".$nome."','".date('Y-m-d')."','".$cpf."','".$usuario."','".$email."',".$cidade.",'".$sexo."','".$nome_mae."','".$telefone."','".$endereco."')";

    
    
    
    $conn->query($sql);
      header ("Location: ../index.php?c=1");
    }
        
  

?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>IFRS - Campus Ibirubá</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../css/estilo-cabecalho.css">
        <link href="../node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <script src="../js/jquery.js"></script>
        <script src="../js/cadastro.js"></script>

    </head>
    <body>
        
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
        <!-- ############### Cabaçalho #############-->

        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header" id="barra-navegacao">
                    <div class="col-lg-12 col-lg-offset-2">
                        <a class="navbar-brand" href="../index.html" id="logo-if-cabecalho"> 
                            <img src="../imagens/Logo-if-cabecalho.png">
                        </a>
                    </div>
                    <div class="col-lg-12 col-lg-offset-6" id="alinhar-ao-topo">
                    </div>
                </div> 
            </div>
        </div>

        <!-- FIM DO CABECALHO -->

        <section  id="corpo-assiduidade">
            <div class="container">
                <div class="col-lg-12 text-center">
                    <h4 class="titulo-cabecalho">Cadastro de novo usuário</h4>
                </div>
                <div class="col-lg-10 col-lg-offset-1" id="especial_exec_name">
                    <div class="row" id="box-cinza">
                        <div class="col-lg-12 text-left">
                            <h5 class="migalhas-de-pao">Escolha seu usuário e senha </h5>
                        </div>
                    </div>
                    <div class="row" id="box-branco">
                        <div class="col-lg-12">
                            <div class="fieldset cor-de-fundo">                            
                                <form name="formCadastro" class="form-horizontal" id="assiduidade-Extensao" action="cadastro.php" method="POST" enctype="multipart/form-data">
                                    <h6 style="color: red;" id="idSubTitulo">* Campos obrigatórios</h6>
                                    <label class="control-label col-sm-4">Usuário  <p style="color: red; display:inline;">*</p></label>
                                    <input name="login" type="text"  required />
                                    <br><br>
                                    <label class="control-label col-sm-4">Senha  <p style="color: red; display:inline;">*</p></label>
                                    <input name="senha" id="senha" type="text"  required />
                                    <br>
                                    <br>
                                    <label class="control-label col-sm-4">Confirmar senha <p style="color: red; display:inline;">*</p></label>
                                    <input name="conf_senha" id="id_senha" type="text"  required />
                                    <br>
                                    <br>
                                    <br>
                                    </div>
                                    <h4> <strong>Seus dados</strong> </h4>
                                    <div class="fieldset cor-de-fundo" style="height: 240px;">
                                        <class="control-label col-sm-4">
                                        <div class="form-group">
                                            <h6 style="color: red;" id="idSubTitulo">* Campos obrigatórios</h6>
                                            <div class="separador_esq">
                                                <label >Endereço de e-mail <p style="color: red; display:inline;">*</p></label>
                                                <input type="text" id="email" name="email"   required />
                                                <br>
                                                <label class="tam_fix">Nome <p style="color: red; display:inline;">*</p></label> 
                                                <input type="text" name="nome" required />
                                                <br>
                                                <label class="tam_fix">Endereço <p style="color: red; display:inline;">*</p></label>
                                                <input type="text" name="endereco" required />
                                                <br>
                                                <label class="tam_fix">Estado<p style="color: red; display:inline;">*</p></label>
                                                <select name="estado" id="estado" style="width:174px;height:24px;" required>
                                                  <option value=""></option>
                                                  <?php
                                                  echo $estados;
                                                  ?>
                                                </select>
                                                <br>                                                                                                
                                                <label class="tam_fix">Nome da mãe <p style="color: red; display:inline;">*</p></label>
                                                <input type="text" name="nome_mae" required />
                                                <br>
                                                <label class="tam_fix">Telefone</label>
                                                <input type="text" name="telefone" />
                                                <br>                                                
                                            </div>
                                            <div class="separador_dir">
                                                <label class="tam_fix2">Confirmar endereço de e-mail <p style="color: red; display:inline;">*</p></label>
                                                <input name="conf_email" id="id_email" type="text"  required />
                                                <br>
                                                <label class="tam_fix2">Cidade <p style="color: red; display:inline;">*</p></label>     
                                                <select name="cidade" id= "cidade" style="width:174px;height:24px;" required> 
                                                </select>                                                                                                                                    
                                                <br>
                                                <label class="tam_fix2">Sexo<p style="color: red; display:inline;">*</p></label>
                                                <input name="sexo" type="radio" name="optradio" value="M">M
                                                <input name="sexo" type="radio" name="optradio" value="F">F
                                                <br>
                                                <label class="tam_fix2">Data de nascimento <p style="color: red; display:inline;">*</p></label>
                                                <input name="dt_nascimento"type="date" style="width:174px;height:24px;" name="dt_nascimento" required />
                                                <br>
                                                <label class="tam_fix2">CPF <p style="color: red; display:inline;">*</p></label>
                                                <input type="text" name="cpf"  required />
                                                <br>
                                                <label class="tam_fix2">Acesso</label>
                                                <select name="nivel_de_acesso" style="width:174px;height:24px;" required>
                                                <option value=""></option>
                                                <option value="1">Ensino</option>
                                                <option value="2">Extensão</option>
                                                <option value="3">Pesquisa</option>
                                                </select><br>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="row">
                          <div class="col-lg-offset-1 col-sm-2">
                            <a href="../index.html" class="btn btn-success">Voltar</a>
                        </div>
                        <div class="col-sm-offset-9">
                            <button type="submit" name= "cadastrar" class="btn btn-success">Cadastrar</button>
                        </div>
                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </section>
        <script src="../node_modules/jquery/dist/jquery.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../js/index.js"></script>

    </body>
</html>