<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Portofolio</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#home" class="navbar-brand page-scroll">Farhan Yudhi Fatah</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="page-scroll">About</a></li>
          <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
          <li><a href="#contact" class="page-scroll">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /navbar -->

  <!-- jumbotron -->
  <div class="jumbotron text-center">
    <img src="img/profil.jpg" class="img-circle" alt="">
    <h1>Farhan Yudhi Fatah</h1>
    <p>Web Developer | Blogger | Photograpper | Video Editor</p>
  </div>
  <!-- /jumbotron -->

  <!-- about -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">About</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <p class="pKiri">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo reprehenderit, temporibus voluptas quam voluptatem similique enim placeat est? Molestiae nostrum vitae quam labore delectus, eos alias accusantium asperiores accusamus? Voluptatibus.</p>
        </div>
        <div class="col-sm-5">
          <p class="pKanan">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea enim voluptate doloremque reprehenderit placeat sapiente possimus laborum deserunt fuga doloribus ullam porro dolorem ipsum sequi nemo, temporibus laboriosam voluptatum consectetur.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->

  <!-- social media -->
  <section class="social-media" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Social Media</h2>
          <hr>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <img src="img/socialmedia.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-sm-8">
              <h5>Farhan Yudhi Fatah</h5>
              <p>30 Subsribers.</p>
            </div>
          </div>
          <div class="row mt-3 pb-3" style="padding-top:30px; margin-botton:30px">
            <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/q5u6_brO4ZQ" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <img src="img/socialmedia.png" alt="" class="img-thumbnail">
            </div>
            <div class="col-sm-8">
              <h5>@masfar.id</h5>
              <p>1000 Followers.</p>
            </div>
          </div>
          <div class="row mt-3 pb-3" style="padding-top:30px; margin-botton:30px">
            <div class="col">
              <div class="ig-thumbnail">
                <img src="img/portfolio/1.jpg" alt="">
              </div>
              <div class="ig-thumbnail">
                <img src="img/portfolio/5.jpg" alt="">
              </div>
              <div class="ig-thumbnail">
                <img src="img/portfolio/4.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /social media -->

  <!-- portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="row mt-2">
        <div class="col-sm-12 text-center">
          <h2>Portfolio</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/1.jpg" alt="">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/5.jpg" alt="">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/6.jpg" alt="">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/11.jpg" alt="">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/9.jpg" alt="">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail">
            <img src="img/portfolio/10.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- /portfolio -->

  <!-- contact -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contact</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form action="">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" id="nama" class="form-control" placeholder="masukkan nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control" placeholder="masukkan email">
            </div>
            <div class="form-group">
              <label for="telp">No Telepon</label>
              <input type="tel" id="telp" class="form-control" placeholder="masukkan no telepon">
            </div>
            <select class="form-control">
              <option value="">-- Pilih Kategori --</option>
              <option value="">Web Development</option>
              <option value="">Blog</option>
              <option value="">Pohotograpy</option>
              <option value="">Video Editing</option>
            </select>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" rows="10" placeholder="masukkan pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->

  <!-- footer -->
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p>&copy; copyright 2019 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/masfar.id">Farhan Yudhi Fatah</a>.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>