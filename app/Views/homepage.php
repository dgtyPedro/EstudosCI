<!DOCTYPE html>
<html class="writer-html4" lang="en" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CodeIgniter4 User Guide &mdash; CodeIgniter 4.1.4 documentation</title>
<link rel="stylesheet" href="_static/css/citheme.css" type="text/css" />
<link rel="stylesheet" href="_static/pygments.css" type="text/css" />
<link rel="shortcut icon" href="_static/favicon.ico"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="next" title="Welcome to CodeIgniter4" href="intro/index.html" /> 
</head>
<body class="wy-body-for-nav">
<div class="wy-grid-for-nav">
<nav data-toggle="wy-nav-shift" class="wy-nav-side">
    <div class="wy-side-scroll">
    <div class="wy-side-nav-search"  style="background: #DD4814" >       

        <h1>EstudosCI</h1>

<div role="search">
</div>
</div>
<div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">  

<!-- ESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUI
ESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUI -->


</div>
</div>
</nav>
<section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">
<nav class="wy-nav-top" aria-label="top navigation">
<i data-toggle="wy-nav-top" class="fa fa-bars"></i>
<a href="#">CodeIgniter</a>
</nav>
<div class="wy-nav-content">
<div class="rst-content">
<div role="navigation" aria-label="breadcrumbs navigation">
<ul class="wy-breadcrumbs">
<li><a href="#" class="icon icon-home"></a> &raquo;</li>
<li>Pedro Caires</li>
<li class="wy-breadcrumbs-aside">
</li>
</ul>
<hr/>

<!-- ESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUI
ESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUIESCREVE AQUI -->
<h1>Introdução</h1>
<p>CodeIgniter é um framework com metodologia MVC (Model-View-Controller) que com bibliotecas simples consegue fornecer um
    kit completo de funcionalidades para qualquer desenvolvedor
</p>
<hr/>
<h2>Sintaxe e Estrutura</h2>
<p>Essa foi a parte mais complicada pra mim junto com aprender em si como fazer uma aplicação em MVC. A sintaxe do Igniter não 
    muda muito da padrão do PHP, nesse framework é quase obrigatório o uso de <code>classes</code>, <code>funções</code> e 
    de <code>argumentos</code>, novamente não é nada muito complexo mas exige um certo conhecimento do usuário de alguns 
    aspectos mais "complexos" do PHP. Um código padrão de controller por exemplo se parece assim no CodeIgniter:    
<xmp>namespace App\Controllers; 
    class Sandbox extends BaseController
    {
        public function index()
        {
            echo View('sandbox');
        }
        public function easteregg()
        {
            echo '<img src="imgsrc" alt="Easteregg">';
        } 
        public function dados($param)
        {
            $data['parametro']=$param;
            echo View('testview', $data);
        }  
    }   
</xmp>



</p>


<hr/>

<h2>Por que usar e aprender CodeIgniter?</h2>
<p>Eu pessoalmente vejo esses frameworks como até o Laravel como não só uma listas de bibliotecas para usar, 
    basicamente tudo que achamos nesses frameworks é possível fazer na mão (claro que demoraria mais e talvez o resultado
    não saísse tão bem polido) mas para mim a principal coisa que me faz aderir
    a esses frameworks é a uniformidade, quando você entra em um código ou começa um sistema em CodeIgniter você sabe exatamente
    o que esperar, as próximas pessoas que forem alterar o código sabem oque esperar, e o cliente também sabe. Os "bons costumes" de 
    código é algo que todo programador deve dominar, mas mesmo assim, a forma que cada um desenvolve suas aplicações pode diferir muito
    e o uso de um framework é um caminho em comum que os mais diferentes programadores podem aderir e se aproximar. Poderíamos usar de exemplo o 
    próprio Brasil, diferentes regiões tem costumes totalmente diferentes mas todos falam português. Por mais que em alto nível
    os códigos vão ficando cada vez mais semelhante um dos outros, no período de aprendizagem do desenvolvedor (período em que ele se mantém por muito tempo em cada linguagem)
    o uso de frameworks numa situação profissional pode ajudar muito o mesmo a ter a qualidade de código esperada.
    Ou seja, <strong>o CodeIgniter além de um bom framework é uma ótima ferramenta para aprender a fazer códigos mais sofisticados e padronizados. </strong>
</p>

<hr/>

<h2>Em comparação com o Laravel...</h2>
<p>Por mais que eu não tenha aprendido ainda Laravel sem um pouco do framework, e de fora conseguimos ver que ele é muito mais robusto
    que o CodeIgniter, assim sendo vemos muitos programadores de alta patente usando o Laravel, entretanto essa robustez de possibilidades
    tem alguns pontos fracos; normalmente sistemas em Laravel são mais lentos que um feito com o CodeIgniter, e a implementação desses podem 
    ser um pouco mais chatinhas de se fazer em algumas hospedagens por exemplo. Mas ambos os frameworks são ótimos, e os programadores
    PHP devem ter sim conhecimento dos dois. 
</p>

<hr/>

<h2>Exemplos do que o CodeIgniter pode fazer</h2>
















</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script defer src="../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"696d23734cccf857","version":"2021.9.0","r":1,"token":"f9dbeee018b24bcc8433737c67139347","si":100}'></script>
</body>
</html>