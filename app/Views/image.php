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

    .programacao{
      border: 1px solid rgb(128, 128, 128, 0.2);
      padding-bottom: 2%;
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

<h1>Manipulação de Imagens no CodeIgniter</h1>
<br>
<p>Essa biblioteca eu considero a prova final que com o CodeIgniter nós conseguimos fazer uma aplicação autosustentável, com essa parte do
  framework é possível editar, salvar e manipular qualquer aspecto de uma imagem salva nos arquivos locais. Podemos mudar: nome, tamanho,
  qualidade, extensão e fazer qualquer tipo de redimensionamento. Agora eu vou separar e explicar todas as possibilidades que o framework nos 
  dá nessa área.

<hr>
<h2>Estrutura do Processo de uma Imagem</h2>
<p>A estrutura base de qualquer processo com imagens é:</p>
<div class="programacao">
  <xmp>
  $image = \Config\Services::image() // Carrega a biblioteca
        ->withFile('/path/to/image/image.jpg') // Pega o arquivo original
        ->save('/path/to/image/image.jpg'); // Salva esse arquivo com as mudanças feitas
  </xmp>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2 mx-5">
    <h4>Antes</h4>
    <img src="<?php echo base_url()?>/image.jpg" class="rounded float-left" style="width: 250px;">
      </div>
    <div class="col col-lg-2 mx-5" >
    <h4>Depois</h4>
    <img src="<?php echo base_url()?>/image2.jpg" class="rounded float-left" style="width: 250px;">
    </div>
  </div>
  </div>
</div>

<hr>
<h2>Rotação de uma Imagem</h2>
<p>Podemos rotacionar qualquer imagem assim:</p>
<div class="programacao">
  <xmp>
  $image = \Config\Services::image()
        ->withFile('../public/image.jpg')
        ->reorient() // Abre a função de reorientamento
        ->rotate(90) // Rotaciona a imagem em 90 graus
        ->save('../public/image3.jpg');
  </xmp>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2 mx-5">
    <h4>Antes</h4>
    <img src="<?php echo base_url()?>/image.jpg" class="rounded float-left" style="width: 250px;">
      </div>
    <div class="col col-lg-2 mx-5" >
    <h4>Depois</h4>
    <img src="<?php echo base_url()?>/image3.jpg" class="rounded float-left" style="width: 250px;">
    </div>
  </div>
  </div>
</div>

<hr>
<h2>Aumentando e Cropando uma imagem</h2>
<p>Podemos fazer esse tipo de redimensionamento/corte assim:</p>
<div class="programacao">
  <xmp>
  $image = \Config\Services::image()
        ->withFile('../public/image.jpg') 
        ->fit(100, 200, 'center') // Redimensiona a imagem, a deixa em 100px de largura e 200 de altura. 
        ->save('../public/image4.jpg');
  </xmp>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2 mx-5">
    <h4>Antes</h4>
    <img src="<?php echo base_url()?>/image.jpg" class="rounded float-left" style="width: 250px;">
      </div>
    <div class="col col-lg-2 mx-5" >
    <h4>Depois</h4>
    <img src="<?php echo base_url()?>/image4.jpg" class="rounded float-left" style="width: 250px;">
    </div>
  </div>
  </div>
</div>

<hr>
<h2>Espelhamento de uma Imagem</h2>
<p>Podemos espelhar uma imagem assim:</p>
<div class="programacao">
  <xmp>
  $image = \Config\Services::image('imagick')
        ->withFile('../public/image.jpg')
        ->flip('horizontal') // Espelha a imagem horizontalmente
        ->save('../public/image5.jpg');
  </xmp>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2 mx-5">
    <h4>Antes</h4>
    <img src="<?php echo base_url()?>/image.jpg" class="rounded float-left" style="width: 250px;">
      </div>
    <div class="col col-lg-2 mx-5" >
    <h4>Depois</h4>
    <img src="<?php echo base_url()?>/image5.jpg" class="rounded float-left" style="width: 250px;">
    </div>
  </div>
  </div>
</div>

<hr>
<h2>Marca d' água em uma Imagem</h2>
<p>Podemos colocar qualquer tipo de texto em cima de uma imagem assim:</p>
<div class="programacao">
  <xmp>
  $image = \Config\Services::image('imagick')
        ->withFile('../public/image.jpg')
        ->text('COPYRIGHT DO CODEIGNITER', [ // Adciona um texto por cima da imagem:
            'color'      => '#fff', // com a cor branca;
            'opacity'    => 1, // sem transparência;
            'withShadow' => true, // com sombreamento; 
            'hAlign'     => 'center', // alinhado centralmente horizontalmente;
            'vAlign'     => 'top', // no topo da imagem dada; 
            'fontSize'   => 20 // com fonte 20.
        ])
        ->save('../public/image6.jpg');

  </xmp>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2 mx-5">
    <h4>Antes</h4>
    <img src="<?php echo base_url()?>/image.jpg" class="rounded float-left" style="width: 290px;">
      </div>
    <div class="col col-lg-2 mx-5" >
    <h4>Depois</h4>
    <img src="<?php echo base_url()?>/image6.jpg" class="rounded float-left" style="width: 290px;">
    </div>
  </div>
  </div>
</div>














</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
  </body>
</html>