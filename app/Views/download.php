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

    <title>Download Library</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?php echo base_url()?>">Voltar</a>
  </div>
    </nav>

<div class="texto">

<h1>Download, Upload e Manipulação de arquivos no PHP CodeIgniter</h1>

<h2>Introdução</h2>
<p>O CodeIgniter nos fornece uma biblioteca imensa para o manuseio de arquivos, nessa página irei demonstrar o que podemos
  fazer com essas bibliotecas.
</p>
<hr>
<h2>Downloads</h2>
<p>Deixei essa sessão já no início pois ela é bem direta ao ponto, temos algumas formas de baixar arquivos mas a que eu considero 
  a mais eficiente é a <code>$this->response->download()</code>. Nela precisamos só passar o path do arquivo dentro do () e quando retornada, o 
  navegador faz o download do arquivo. 
</p>
<button type="button" class="btn btn-dark"><a href="<?php echo base_url()?>/Home/Download/Action">Clique aqui para baixar um arquivo usando o CodeIgniter.</a></button>
<hr>
<h2>Upload</h2>
<p>O CI4 nos ajuda muito também na parte de Upload de Arquivos, o PHP padrão tem bastante ferramentas nessa área porém muitas delas 
  não são das mais seguras e confiáveis. O uso de <code>$_FILES</code> tem já algumas brechas conhecidas então o CodeIgniter vem
  para tampar muitos dos problemas já conhecidos e que eles identificaram. 
</p>
<p>No CodeIgniter a linha de código mais usada com certeza vai ser a <code>$this->request->getFiles().</code> Apartir
desse request conseguimos além de pegar todas as informações do arquivo, como tamanho e extensão, podemos também decidir se vamos querer
gravar ele em algum banco de dados, se ele será armazenado em alguma pasta local e etc. </p>
<p>No exemplo abaixo iremos determinar um array que irá conter todos os dados do 
  arquivo enviado, ficará algo como: <code>$files = $this->request->getFiles()</code> e após iremos printar o resultaado com 
<code>print_r($files)</code>. Esse assunto é bem extenso, a sessão de Manipulação de Arquivos irá complementar um pouco sobre o que
 é possível fazer com esses arquivos. Caso queira, coloque seu arquivo abaixo e clique no Enviar, a aplicação mostrará as informações
dos dados.</p>


<form action="" method="post"
enctype="multipart/form-data">
<input type="file" name="uploadf">
<input type="submit" name="submit" class="btn btn-dark">
</form>
<br>
<h6>Dados do Arquivo:</h4>
<?php echo '<pre>'?>
<?php print_r($files);?>
<?php echo '</pre>'?>




<hr>
<h2>Manipulação de Arquivos</h2>
<p>Essa é a parte mais extensa desse assunto. O Framework nos dá uma boa variedade de possibilidades que vão desde ferramentas
  para visualização dos metadados de arquivos até a alteração de localização do arquivo dentro dos arquivos locais do aplicativo. Aqui embaixo vamos mostrar 
  alguns exemplos do que pode ser feito.
</p>
<div class='exemplos'>
<h4>Visualização de dados do arquivo</h4>
<p>Usando a lista de requests mostradas abaixo conseguimos pegar qualquer informação de qualquer arquivo no sistema.</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tipo</th>
      <th scope="col">Nome</th>
      <th scope="col">Tamanho</th>
      <th scope="col">Localização</th>
      <th scope="col">Permissões do Arquivo</th>
      <th scope="col">Ultima Alteração Feita</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>Resultados</strong></td>
      <td><?php echo $basename?></td>
      <td><?php echo $tamanho?> bytes</td>
      <td><?php echo $realpath?></td>
      <td><?php echo $perms?></td>
      <td><?php echo $lastalt?></td>
    </tr>
    <tr>
      <td><strong>Código para obtenção dos resultados</strong></td>
      <td><code>$arquivo->getBasename()</code></td>
      <td><code>$arquivo->getSize()</code></td>
      <td><code>$arquivo->getRealPath()</code></td>
      <td><code>$arquivo->getPerms()</code></td>
      <td><code>$arquivo->getMTime()</code></td>
    </tr>
  </table>
  <br>
  <hr>
<h4>Visualização de mapeamento de pastas do aplicativo (usando <code><a href="https://codeigniter.com/user_guide/helpers/filesystem_helper.html" class='link'>directory_map()</a></code>)</h4>
<p>Com o <code>directory_map()</code> podemos também ver a organização de pastas da aplicação.</p>
<div class="container ">
  <div class="row" >
    <div class="col-sm border" style="padding: 10px;">
<h6>Mostrando a pasta public em um nível de profundidade: </h5>
<?php
        echo '<pre>';
        print_r($mapa);
        echo '</pre>';
?>
</div>
<div class="col-sm border" style="padding: 10px;">
<h6>Mostrando a pasta public em dois níveis de profundidade:</h5>
<?php
        echo '<pre>';
        print_r($mapa2);
        echo '</pre>';
?>
</div>
    <div class="col-sm border" style="padding: 10px;">
<h6>Mostrando a pasta raiz em um nível de profundidade:</h5>
<?php
        echo '<pre>';
        print_r($mapa3);
        echo '</pre>';
?>
</div>
</div>

<hr>

<h3>Mudando arquivos de diretório</h3>
<p>No CodeIgniter conseguimos alterar a localização dos arquivos pela própria aplicação, não sei se já é possível entender, mas com o 
  CodeIgniter nós realmente conseguimos fazer uma aplicação "alto-sustentável" onde pouquíssima alteração no código é necessária.
</p>
<p>Através do <code>move()</code> podemos realmente "passar" qualquer arquivo para qualquer diretório. Em uma aplicação real
o código se assemelharia a: <br><code>$arquivo->move(WRITEPATH.'NOMEDAPASTA')</code>. Adicionando mais um parâmetro após o 
nome da pasta nós podemos também definir um novo nome ao arquivo após a mudança como em: <code>$arquivo->move(WRITEPATH.'NOMEDAPASTA', 'NOVONOMEDOARQUIVO')</code>
.</p>

</div>
  </div>
<hr>
<h2>Conclusão</h2>
<p>O que eu mostrei foi somente uma fração do que é possível fazer com arquivos no CodeIgniter, realmente as possibilidades
  são infinitas nesse framework e a parte de arquivos em especial se mostra muito mais segura, simples e eficaz do que a dada no 
  PHP convencional.
</p>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
  </body>
</html>