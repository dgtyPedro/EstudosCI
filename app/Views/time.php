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
      color: black;
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

    <title>Biblioteca de Tempo</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?php echo base_url()?>">Voltar</a>
  </div>
    </nav>

<div class="texto">

<h1>Biblioteca de Tempo no PHP CodeIgniter</h1>
<h2>Tempo no CodeIgniter</h2>
<p>Essa biblioteca é bem fácil e direto ao ponto, no cabeçalho colocamos: <code>use CodeIgniter\I18n\Time</code>, definindo a biblioteca
 e apartir dai podemos simplesmente fazer qualquer tipo de solicitação que envolva horário local e etc. Irei abaixo colocar uma tabela mostrando
 os principais códigos.
</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tipo</th>
      <th scope="col">Horário agora</th>
      <th scope="col">Horário em Chicago</th>
      <th scope="col">Próxima Terça</th>
      <th scope="col">Dia 9 de março</th>
      <th scope="col">Quanto tempo faz</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td><strong>Código para obtenção dos resultados</strong></td>
      <td><?php echo $agora?></td>
      <td><?php echo $chicago?></td>
      <td><?php echo $parse?></td>
      <td><?php echo $parse2?></td>
      <td><?php echo $hoje?></td>
    </tr>
    <tr>
      <td><strong>Código para obtenção dos resultados</strong></td>
      <td><code>new Time('now')</code></td>
      <td><code>new Time('now', 'America/Chicago', 'en_US')</code></td>
      <td><code>Time::parse('next Tuesday', 'America/Sao_Paulo', 'en_US')</code></td>
      <td><code>Time::parse('March 9, 2016 12:00:00', 'America/Sao_Paulo')</code></td>
      <td><code>Time::parse('March 9, 2016 12:00:00', 'America/Sao_Paulo')->humanize()</code></td>
    </tr>
  </table>
<p>Para mais informações deixarei o <code><a href="https://codeigniter4.github.io/userguide/libraries/time.html">link</a> </code>da biblioteca.</p>



</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
  </body>
</html>