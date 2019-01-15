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
    
    <title>Editar usuário</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->       
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
                
        <h1>Atualizar usuário</h1>   
        <ol class="breadcrumb">
              <li><a href="<?php echo base_url()?>">Inicio</a></li>          
              <li class="active">Atualizar usuário</li>
        </ol>      

        <!-- Formulário de novo cadastro  -->
        <form action="<?php echo base_url(); ?>index.php/admin/salvar" name="form_add" method="post">
          
          <!-- Input text -->
          <div class="row">
            <div class="col-md-8">
              <label>Nome:</label>
              <input type="text" name="nome" value="<?php echo $usuario->nome;?>" class="form-control" required>
            </div>
          </div> <!-- fim input text -->

          <!-- Input text -->
          <div class="row">
            <div class="col-md-8">
              <label>CPF:</label>
              <input type="text" name="cpf" value="<?php echo $usuario->cpf; ?>" class="form-control" required>
            </div>
          </div><!-- fim input text -->

          <!-- Input Date -->
          <div class="row">
            <div class="col-md-8">
              <label>Data de nascimento:</label>
              <input type="date" name="data_nascimento" value="<?php echo $usuario->data_nascimento; ?>" class="form-control" required>
            </div>
          </div><!-- fim input date -->

          <br>
          
          <!-- Button enviar-->
          <div class="row">
            <div class="col-md-2">
              <input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario; ?>"></input>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>
          <!-- // Button enviar-->

        </form><!--Fim formulário de novo cadastro  -->

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>    
  </body>
</html>
