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
        margin: 5%;
        text-decoration: none;
    }
    a{
      text-decoration: none;
      color: white;
    }
</style>

    <title>Download Library</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url()?>/public/">Voltar</a>
  </div>
    </nav>

<div class="texto">

<h1>Download, Upload e Manutenção de arquivos no PHP CodeIgniter</h1>
<hr>
<h2>Introdução</h2>
<p>O CodeIgniter nos fornece uma biblioteca imensa para o manuseio de arquivos, nessa página irei demonstrar oque podemos
  fazer com essas bibliotecas.
</p>
<hr>
<h2>Downloads</h2>
<p>Deixei essa sessão já no início pois ela é bem direta ao ponto, temos algumas formas de baixar arquivos mas a que eu considero 
  a mais eficiente é a <code>$this->response->download()</code>. Nela precisamos só passar o path do arquivo e quando retornada, o 
  arquivo faz o download. 
</p>
<button type="button" class="btn btn-dark"><a href="<?php echo base_url()?>/public/Home/Download/Action">Clique aqui para baixar um arquivo usando o CodeIgniter.</a></button>
<hr>
<h2>Upload</h2>
<p>Digitar aqui</p>

<hr>
<h2>Manutenção</h2>
<p>Essa pode ser a parte mais extensa desse assunto. O Framework nos dá uma boa variedade de possibilidades que vão desde ferramentas
  para visualização de metadados de arquivos até a alteração de localização do arquivo dentro dos arquivos locais. Aqui embaixo vamos mostrar 
  alguns exemplos do que pode ser feito.
</p>
<h4>Visualização de dados do arquivo</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Tamanho</th>
      <th scope="col">Localização</th>
      <th scope="col">Permissões do Arquivo</th>
      <th scope="col">Ultima Alteração Feita</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $basename?></td>
      <td><?php echo $tamanho?> bytes</td>
      <td><?php echo $realpath?></td>
      <td><?php echo $perms?></td>
      <td><?php echo $lastalt?></td>
    </tr>
    <tr>
      <td><code>$arquivo->getBasename()</code></td>
      <td><code>$arquivo->getSize()</code></td>
      <td><code>$arquivo->getRealPath()</code></td>
      <td><code>$arquivo->getPerms()</code></td>
      <td><code>$arquivo->getMTime()</code></td>
    </tr>
  </table>
  <br>
<h4>Visualização de mapeamento de pastas (usando <code>directory_map($source_dir[, $directory_depth = 0[, $hidden = false]])</code>)</h4>

<div class="container">
  <div class="row">
    <div class="col-sm">
<h6>Mostrando a pasta public em um nível:</h5>
<?php
        echo '<pre>';
        print_r($mapa);
        echo '</pre>';
?>
</div>
<div class="col-sm">
<h6>Mostrando a pasta public em dois níveis:</h5>
<?php
        echo '<pre>';
        print_r($mapa2);
        echo '</pre>';
?>
</div>
    <div class="col-sm">
<h6>Mostrando a pasta raiz em um nível:</h5>
<?php
        echo '<pre>';
        print_r($mapa3);
        echo '</pre>';
?>
</div>
<h3>Outras ferramentas</h3>
<p>Nessa parte irei mostrar algumas outras ferramentas que podemos usar, por se tratar de coisas como deletamento e renomeação 
  de arquivos não irei disponibilizar exemplos práticos aqui (pela segurança do código), mas mostrarei todas suas utilidades
  e referências.
</p>

</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
  </body>
</html>