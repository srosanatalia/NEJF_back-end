<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NEJF</title>

  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('/css/grayscale.css') }}" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/icon.png" />

</head>

<body id="page-top">

  @include('layouts.navbar')

  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">NEJF</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Núcleo de Empresas Juniores Fictícias</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Quem Somos</a>
      </div>
    </div>
  </header>

  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">A CULTURA NEJF</h2>
          <p class="text-white-50"> É da natureza humana se desafiar. <br>Somos uma família de empresas juniores e estamos aqui para entrar com atitude na zona de confronto e deixar marcas onde passamos. 
          Estimulamos a construção de uma sociedade feita de gente boa e de organizações sustentáveis e humanas.</p>
        </div>
      </div>

      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/topo.png" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center ">
                <h5 class="text-uppercase m-0">Atingindo</h5>
                <h6 class="text-white mb-4">O TOPO</h6>
              </div>
            </div> 
        </div>
      </div>
    </div>
  </section>

  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/pessoas.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Comprometidos com o resultado!</h4>
            <p class="text-black-50 mb-0">Trazemos ao mercado o desenvolvimento de soluções customizadas, focada em resultados com atendimento diferenciado.</p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/valores.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Valores</h4>
                <p class="mb-0 text-white-50">Responsabilidade, compromisso, respeito e eficácia.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/visao.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Visão</h4>
                <p class="mb-0 text-white-50">Ser o maior grupo de empresas de desenvolvimento e vendas de produtos digitais e soluções tecnológicas!</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="contact" class="contact-section bg-black">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Contate-nos!</h2>

        </div>
      </div>
    </div>
    <div class="container">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Endereço</h4>
              <hr class="my-4">
              <div class="small text-black-50"> 221b, Baker St</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">E-mail</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">notfound@nejf.br</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Telefone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+55 (75) 99999-9999</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/grayscale.js"></script>

</body>

</html>
