<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home NGETRIP</title>

    <!-- Bootstrap core CSS -->
    <link href="/other-menus/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Ngetrip</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Highlights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Kontribusi">Kontribusi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/navbar/about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/navbar/contacts">Hubungi Kami</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link js-scroll-trigger"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Keluar</a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>SELAMAT DATANG DI NGETRIP</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5"><b>Di ngetrip yuk ini kalian akan di suguhkan dengan berbagai macam tempat wisata yang hanya sebagian orang mengetahuinya. Dan juga kalian akan mendapatkan infomasi tentang akomodasi untuk wisata tersebut.</b></p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#portfolio">Ngetrip Kuy</a>
          </div>
        </div>
      </div>
    </header>



    <!-- Card Desk -->
    <section class="p-0" id="portfolio">
    <div class="card-deck">
      <div class="row mt-5">
  <div class="card">
    <a href="/destinasi/Rano_Kumbolo">
    <img class="card-img-top"  src="images/danau.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Danau</h4>
      <h5><b>Ranu Kumbolo</b></h5></a>
      <h6 class="card-text">Mau tau lebih?? click gambar aja</h6>
      </div>
  </div>
  <div class="card">
    <a href="destinasi/hutan_pinus">
    <img class="card-img-top" <img class="card-img-top" class="img-fluid" src="images/Hutan Pinus.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Hutan Pinus</h4>
      <h5><b>Imogiri</b></h5></a>
      <h6 class="card-text">Mau tau lebih?? click gambar aja</h6>
      </div>
  </div>
  <div class="card">
    <a href="/destinasi/kawahijen">
    <img class="card-img-top" src="images/kawah.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Kawah</h4>
      <h5><b>Gunung Ijen</b></h5></a>
      <h6 class="card-text">Mau tau lebih?? click gambar aja</h6>
    </div>
  </div>
</div>
</div>
</section>
    <!-- Card Desk -->
    <section class="p-0" id="portfolio">
    <div class="card-deck">
  <div class="card">
    <a href="/destinasi/kepulauan_seribu">
    <img class="card-img-top"  src="images/Kepulauan Seribu.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Kepulauan Seribu</h4>
      <h5><b>Pulau Ayer</b></h5></a>
      <h6 class="card-text">Mau tau lebih?? click gambar aja</h6>
      </div>
  </div>
  <div class="card">
    <a href="destinasi/pantai_krakal">
    <img class="card-img-top" <img class="card-img-top" class="img-fluid" src="images/Pantai.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Pantai</h4>
      <h5><b>Krakal</b></h5></a>
      <h6 class="card-text">Mau tau lebih?? click gambar aja</h6>
      </div>
  </div>
  <div class="card">
    <a href="/destinasi/tanah_lot">
    <img class="card-img-top" src="images/Tanah Lot.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Tanah Lot</h4>
      <h5><b>Bali</b></h5></a>
      <h6 class="card-text">Mau tau lebih?? click gambar aja</h6>
      </div>
  </div>
</div>
</section>

    <!-- decription -->
    <section class="bg-primary" id="Kontribusi">
      <div class="container">
        <div class="row mt-5">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Tempat berbagi informasi yang kita butuhkan tentang destinasi yang menarik menurut kamu dan tempat kamu mengulas destinasi perjalanan yang kamu inginkan</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"></p>

            <a class="btn btn-light btn-xl js-scroll-trigger" href="/kontribusis">Mulai Berbagi!</a>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="/kontribusis/list">Lihat Kontribusi!</a>
          </div>
        </div>
      </div>
    </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Hubungi kami!</h2>
            <hr class="my-4">
            <p class="mb-5">Jadi bagian dari kesuksesan Ngetrip.com dengan berkontribusi demi kebaikan para traveller yang ingin mendapatkan informasi terbaiknya</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>085692290763</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:yngetrip@gmail.com">yngetrip@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/creative.min.js"></script>

  </body>

</html>
