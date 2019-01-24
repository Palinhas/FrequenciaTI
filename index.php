<!doctype html>
<html lang="en">
  <head>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="customs/css/newcss.css" rel="stylesheet" type="text/css"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
       
        <?php
        $page = 'home';
        // HEADER //
        include_once 'header.php';
        // ********************** //
        ?>

  <div class="container">           
            <main role="main">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="logoNav">
          <h1>
              <a href="index.php" title="SPORTING CP">SPORTING CP</a>
          </h1>
      </div>
      <div class="carousel-item active">
          <img class="bd-placeholder-img" width="100%" height="100%" src="images/alunos2.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">

          <img class="bd-placeholder-img" width="100%" height="100%" src="images/alunos1.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="images/alunos3.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/>
        <div class="container">
          <div class="carousel-caption text-right">
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    
         
    <div class="row">
      <div class="col-md-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-primary">Oferta Formativa</strong>
               <h6 class="mb-0">
                Escolhe a ESTG-IPPortalegre como ponto de partida para o teu futuro.
               </h6>
               <div class="mb-1 text-muted small">Jan 23</div>
               <p class="card-text mb-auto mb-2">
                    Aqui encontrarás as ferramentas indispensáveis para seres o que realmente desejas ser. </p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="#">Continue a ler</a>
            </div>
             <img class="card-img-right flex-auto d-none d-lg-block" alt="Noticias" src="images/ofertaInformativa.png" style="width: 200px; height: 250px;">
         </div>
      </div>
      <div class="col-md-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Premio</strong>
               <h6 class="mb-0">
                 Projeto NJOY obtém o 3º lugar no Prémio Fundação Ilídio Pinho – Ciência na Escola
               </h6>
               <div class="mb-1 text-muted small">Jan 23</div>
               <p class="card-text mb-auto">Concorreram 1269 projetos, tendo o NJOY conquistado o 3º lugar no escalão ...</p>
               <a class="btn btn-outline-success btn-sm" href="/noticias/janeiro/njoy/njoy.php">Continua a ler</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Noticias" src="images/njoy.png" style="width: 200px; height: 250px;">
         </div>
      </div>
   </div>
         
        
        
              <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>

        
        </div>
            
       <?php
        // FOOTER //
        include_once 'footer.php';
        // ********************** //
        ?>  
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  crossorigin="anonymous"></script>
  </body>
</html>

