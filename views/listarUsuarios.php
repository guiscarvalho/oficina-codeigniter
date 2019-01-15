<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Lista de produtos da tabela produtos">
    <meta name="author" content="blog.ismweb.com.br">
    
    <title>Lista de usuários</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      .margin-button15 { margin-top: 15px; }
    </style>  
  </head>

  <body>    

  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
      <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>">CRUD com CodeIgniter</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url(); ?>">Usuários<span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/add">Adicionar usuários</a></li>
              </ul>
          </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-md-4">
            <h1>Lista de usuários</h1>
        </div>
        <div class="col-md-8 margin-button15">
            <form class="navbar-form navbar-left" role="search" action="<?php echo base_url(); ?>" method="post">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Busca" name="busca">
              </div>
              <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </div>
        <table class="table table-bordered">
            
            <thead>
                <tr>
                  <th class="text-center">Nome</th>
                  <th class="text-center">Data de nascimento</th>
                  <th class="text-right">CPF</th>
                  <th></th>
                </tr>
            </thead>

            <?php
                $contador = 0;
                foreach ($usuarios as $usuario)
                {        
                    echo '<tr>';
                      echo '<td>'.$usuario->nome.'</td>';
                      echo '<td>'.$usuario->data_nascimento.'</td>';  
                      echo '<td>'.$usuario->cpf.'</td>'; 
                      echo '<td class="text-center">';
                        echo '<a href="'. base_url() .'index.php/admin/editar/'.$usuario->id_usuario.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
                        echo '<a href="'. base_url() .'index.php/admin/apagar/'.$usuario->id_usuario.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                        echo '<a href="'. base_url() .'index.php/admin/detalhes/'.$usuario->id_usuario.'" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>';
                      echo '</td>'; 
                    echo '</tr>';
                $contador++;
                }
            ?>

        </table>

        <div class="row">
          <div class="col-md-12">
            Todal de Registro: <?php echo $contador ?>
          </div>
        </div>

        <a href="<?php echo base_url(); ?>index.php/admin/add" class="btn btn-success margin-button15">Novo usuário</a>

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>    
  </body>
</html>
