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
                        <li class="active"><a href="Noticias.php">Noticias</a></li>
                        <li><a href="Contato.php">Contato</a></li>
                        <li ><a href="Usuarios.php">Usuarios</a></li>
                        <li><a href="#">Sair</a></li>
                    </ul>
   
                </div>
            </div>
        </div>
        
        <div id="corpo">
            <h1>Noticias</h1>
            
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

