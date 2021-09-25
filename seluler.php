<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<!---boostrap icon-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!--My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Katalog Undangan</title>
  </head>
  <body id="home">
    <!---Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">MY ZIDANCELL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Konter Seluler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Loket Pembayaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Percetakan Undangan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Keperluan Sekolah</a>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Aksesoris</a>
              </li> 
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!---Akhir Navbar-->
   
    <!--Katalog Undangan -->
    <section id="services">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>KATALOG UNDANGAN</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/services/pulsa.jpg" class="card-img-top" alt="services/pulsa">
              <div class="card-body">
                <p class="card-text text-center"> <a href="#" class="text-primary fw-bold">SERI HEPI</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/services/loket.jpg" class="card-img-top" alt="services/pulsa">
              <div class="card-body">
                <p class="card-text text-center"><a href="#" class="text-primary fw-bold">SERI FALLAH</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/services/undangan1.jpg" class="card-img-top" alt="services/pulsa">
              <div class="card-body">
                <p class="card-text text-center"><a href="#"class="text-primary fw-bold"> SERI BYAR</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/services/sekolah.jpg" class="card-img-top" alt="services/pulsa">
              <div class="card-body">
                <p class="card-text text-center"><a href="#"class="text-primary fw-bold">SERI SAMARA</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/services/undangan.jpg" class="card-img-top" alt="services/pulsa">
              <div class="card-body">
                <p class="card-text text-center"><a href="#"class="text-primary fw-bold">SERI AVIS</a></p>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,112C384,107,480,117,576,133.3C672,149,768,171,864,192C960,213,1056,235,1152,218.7C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </section>
          <!--Akhir Servises-->
    <!--Contact-->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Form Isi Undangan</h2>
          </div>
        </div>
        <div class="row justify-content-center mb-3">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">
              </div>
              <div class="mb-3">
                <label for="Pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,96C96,128,192,192,288,186.7C384,181,480,107,576,80C672,53,768,75,864,117.3C960,160,1056,224,1152,213.3C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!--Akhir Contact-->
    <!--Footer-->
    <footer class="bg-primary text-white text-center pb-5">
      <p>Created with <i class="bi bi-heart"></i> by <a href="https://www.facebook.com/zidanecell.secentong" class="text-white fw-bold">My Zidancell</a></p>
    </footer>
    <!--Akhir Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>