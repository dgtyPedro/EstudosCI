<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
    .texto{
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 2%;
        margin-bottom: 10%;
        text-decoration: none;
    }
    a{
      text-decoration: none;
      color: white;
    }
    .exemplos{
      border: 1px solid rgb(128, 128, 128, 0.2);
      border-radius: 10px;
      padding: 2%;
      box-shadow: 1px 5px 5px black;


    }

    .link{
      color: black;
    }

</style>

    <title>Sessões</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?php echo base_url()?>">Voltar</a>
  </div>
    </nav>

<div class="texto">

<h1>Sessões no PHP CodeIgniter</h1>
<h2>O que são Sessões?</h2>
<p>A sessão em uma aplicação é a instância onde o usuário está fornecendo dados, usando a aplicação em si, e a mesma "sabe" disso, trocando
  em miudos, sempre que você está loga em alguma aplicação uma sessão é criada e grava determinadas informações, como horário do login entre 
  outras.   
</p>
<hr>
<h2>Sessões no CodeIgniter</h2>
<p>No CodeIgniter não temos tantas adições assim nessa área, o que ocorre é na verdade uma grande organização e facilitação de acesso a algumas coisas
  que já conseguiamos pegar no PHP, entretanto essa biblioteca não deixa de ser extremamente importante. É talvez uma das bibliotecas que
  mais usamos no CodeIgniter4.
</p>
<p>Para criarmos uma sessão precisamos somente declarar uma váriavel para a sessão e inicializa-la. Podemos fazer isso de duas formas
  , ou usando<br> <code>$var = \Config\Services::session()</code>, ou com <code>$var = session()</code>, uma forma mais simplificada que
  ignora algumas configurações.As configurações das sessões ficam
  na pasta app/Config/App.php, lá conseguimos mudar coisas como o tempo de expiração da sessão e etc.
</p>
<p>
Apartir daí podemos fazer diversas definições e ações com a sessão. Quando você entrou nessa página uma sessão foi criada 
e aqui embaixo vou mostrar tudo que conseguimos pegar só com a inicialização dessa sessão e de cookies.
</p>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Tipo</th>
      <th scope="col">Id da Sessão</th>
      <th scope="col">Data</th>
      <th scope="col">Porta</th>
      <th scope="col">Agente</th>
      <th scope="col">Navegador</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>Resultados</strong></td>
      <td><?php echo $id?></td>
      <td><?php echo $horario?></td>
      <td><?php echo $ip?></td>
      <td><?php echo $agent?></td>
      <td><?php echo $agent2?></td>
    </tr>
    <tr>
      <td><strong>Código para obtenção dos resultados</strong></td>
      <td><code>'id'=> session_id()</code></td>
      <td><code>'horario'=> new Time('now')</code></td>
      <td><code>'ip'=> $_SERVER['SERVER_PORT']</code></td>
      <td><code>'agent'=> $_SERVER['HTTP_USER_AGENT']</code></td>
      <td><code>'agent2'=> $agent->getBrowser().' '.$agent->getVersion()</code></td>
    </tr>
  </table>

</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
  </body>
</html>