<?php
    namespace ProjetoFinal;
    include '../Classes/Usuario.php';
?>
<!DOCTYPE html>

<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- JQquery-->
        <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
        
        <!-- Botstrap-->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Font Awesome-->
        <link href="../css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/all.min.js" type="text/javascript"></script>
        
        <!-- meu CSS-->
        <link href="../css/AreaAdministrativa.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <div id="menu">
            <div class="navbar navbar-default">
                <img src="#" alt="logo"/>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="QuemSomos.php">Quem Somos</a></li>
                        <li><a href="Historia.php">Historia</a></li>
                        <li><a href="Noticias.php">Noticias</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li class="active"><a href="Usuarios.php">Usuarios</a></li>
                        <li><a href="#">Sair</a></li>
                    </ul>
   
                </div>
            </div>
        </div>
        
        <div id="corpo" >
            <h1>Usuarios</h1>
            <div id="FormUsuario">
                <h2>Novo Usuario</h2>
                <!-- EMMET:form>(p+input)*5+input*3 -->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                    <p>ID</p>
                    <input name="id" type="text">
                    <p>Nome Completo</p>
                    <input name="nome" type="text" autofocus="">
                    <p>Email</p>
                    <input name="email" type="text">
                    <p>Usuario</p>
                    <input name="usuario" type="text">
                    <p>senha</p>
                    <input name="senha" type="password">
                    <br><br>                  
                    <input name="opcao" type="submit" value="Inserir">
                    <input name="opcao" type="submit" value="Atualizar">
                    <input name="opcao" type="submit" value="Deletar">
                </form>
            </div>
            
            
            <table class="table table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>USUARIO</td>
                    <td colspan="2">OPÇOES</td>
                </tr>
                <tr>
                   <td>1</td>
                    <td>Cesar Oliveira</td>
                    <td>Cesar</td>
                    <td>[editar]</td> 
                    <td>[excluir]</td> 
                </tr>
                <tr>
                   <td>2</td>
                    <td>Gabriel Teodoro</td>
                    <td>Gabriel</td>
                    <td>[editar]</td> 
                    <td>[excluir]</td> 
                </tr>
                <tr>
                   <td>3</td>
                    <td>Gilmara Vicentini</td>
                    <td>Gilmara</td>
                    <td>[editar]</td> 
                    <td>[excluir]</td> 
                </tr>
            </table>
        </div>
        
        <div id="rodape">
            <p>2017-<?php echo date("Y"); ?> | TI-26 Todos os Direitos Reservados</p>
        </div>
    </body>
</html>

<?php
    if(isset($_GET['id'])&&
           isset ($_GET['nome'])&&
           isset ($_GET['email'])&&
            isset ($_GET['usuario'])&&
           isset ($_GET['senha']))
    {

        if(empty($_GET['nome'])||
        empty($_GET['email'])||
        empty($_GET['usuario'])||
        empty($_GET['senha']))
        {
            echo "<script type='text/javascript'> alert ('nao deixe os campos em branco');</script>";
        }
        else
        {
            $id = $_GET['id'];
            $nome = $_GET['nome'];  
            $email= $_GET['email'];  
            $usuario = $_GET['usuario'];  
            $senha = $_GET['senha'];  
            $u = new Usuario();
            $resultado = $u->Inserir($nome, $usuario, $email, $senha);
            
           if($resultado == true)
           {
               echo "<script type='text/javascript'> alert ('cadastro realizado com sucesso');</script>";
           }
           else
           {
               echo "<script type='text/javascript'> alert ('deu ruim');</script>";
           }
        }
    }


