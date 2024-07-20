<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<style>
  html body {
    background-color: #004643;
  }

  #title {
    color: #fffffe;
    margin-bottom: 15px !important;
    margin-top: 15px !important;
  }




  nav {
    background-color: #004643;
    display: flex;
    padding: 1rem 2rem;
    justify-content: space-between;
    position: fixed;
    top: 1%;
    left: 20%;
    right: 20%;
    border-radius: 30px;
    z-index: 2;
    border: 2px solid #001e1d;
  }

  nav ul {
    display: flex;
    align-items: center;
    gap: 2rem;
    list-style: none;
    margin-top: 10px;
  }



  nav ul li a {
    text-decoration: none;
    color: #fffffe;
    font-weight: 600;
    padding: 3px 0;
    transition: all;
    transition-duration: 300ms;
    font-size: 20px;
  }

  nav ul li a.active {
    border-bottom: 2px solid black;
  }

  nav ul li a:hover {
    color: #f9bc60;
    border-bottom: 2px solid #f9bc60;
  }

  nav div h2 img {
    width: 50px;
  }

  nav div h2 {
    display: flex;
    align-items: center;
    gap: 5px;
    color: #fffffe;

  }

  .navbar-toggle {
    display: none;
  }



  .card {
    transition: transform 0.2s, box-shadow 0.2s;
    z-index: 1;
    transform: translateY(3px);
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    color: #004643;
    background-color: #004643;
    border: 2px solid #001e1d;
    width: 18rem;

  }

  .card:hover {
    transform: scale(1.05);
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    background-color: #abd1c6;
    border: 2px solid #f9bc60;

  }

  .card:hover h5.card-title,
  .card:hover p {
    color: #001e1d;
  }

  .card h5 {
    color: #fffffe;
  }

  .card h5:hover {
    color: #001e1d;
  }

  .card img {
    background-color: #004643;
    object-fit: contain;
  }

  .card img:hover {
    background-color: #abd1c6;
    object-fit: contain;
  }

  .card p {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    color: #abd1c6;
  }

  .card p:hover {
    color: #001e1d;
  }


  .card a {
    background-color: #004643;
    color: #fffffe;
    border: 2px solid #001e1d;

  }

  .card a:hover {
    background-color: #f9bc60 !important;
    color: #001e1d;
    border: 2px solid #001e1d;
  }

  #card {
    display: flex;
    align-items: center;
    justify-content: space-around;
    margin-bottom: 50px;
  }


  .modal h5 {
    color: #001e1d;
  }

  .modal h2 {
    color: #001e1d;
  }

  .modal p {
    color: #001e1d;
  }

  .modal h3 {
    color: #001e1d;
  }

  .modal ol li {
    color: #001e1d;
  }

  .modal button {
    background-color: #004643;
    color: #fffffe;
    border: 1px solid #001e1d;
  }

  .modal button:hover {
    background-color: #f9bc60;
    color: #001e1d;
  }


  @media (max-width: 768px) {
    .banner {
      background-image: url('https://www.fajarpendidikan.co.id/wp-content/uploads/2023/06/pendidikan-sarjana-perguruan-tinggi-freepik_1659759126.webp');
      background-size: cover;
      background-position: center;
      height: 400px;

      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #card {
      display: flex;
      align-items: center;
      flex-direction: column;
      gap: 10px;
    }

    .card {
      transition: transform 0.2s, box-shadow 0.2s;
      z-index: 1;
      transform: translateY(3px);
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
      color: #004643;
      background-color: #004643;
      border: 2px solid #001e1d;
      width: 20rem;

    }

    .card:hover {


      transform: scale(1.05);
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      background-color: #004643;
      border: 2px solid #f9bc60;

    }

    .card a:hover {
      background-color: #f9bc60 !important;
      color: #001e1d;
      border: 2px solid #001e1d;
    }


    nav {
      flex-direction: column;
      align-items: flex-start;
    }

    .navbar-links {
      display: none;
      flex-direction: column;
      margin-top: 10px;
    }

    .navbar-links li {
      margin: 5px 0;
    }

    .navbar-links li a {
      display: block;
    }

    .navbar-toggle {
      display: block;
      background-color: transparent;
      border: none;
      cursor: pointer;
      padding: 5px;
      position: absolute;
      top: 10px;
      right: 10px;
    }

    .navbar-toggle span {
      display: block;
      width: 25px;
      height: 3px;
      background-color: #333;
      margin: 5px;
    }

    .navbar-links.active {
      display: flex;
    }
  }

</style>
<body>
  <nav>
    <div>
      <h2><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/800px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png" alt="">Beasiswa Pendidikan</h2>
    </div>
    <ul class="navbar-links" id="menu-links">
      <li><a href="#home" class="active">Home</a></li>
      <li><a href="" data-bs-toggle="modal" data-bs-target="#daftar">Pendaftaran</a></li>
      <li><a href="hasil.php">Hasil</a></li>
    </ul>
    <button class="navbar-toggle" id="menu-toggle">
      <span></span>
      <span></span>
    </button>
  </nav>
  <section id="home">
  <div id="bannerCarousel" class="carousel slide banner" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
           <img src="https://dit-mawa.upi.edu/wp-content/uploads/2023/01/R.jpg" alt="Gambar 2">
        </div>
        <div class="carousel-item">
          <img src="https://img.freepik.com/free-photo/students-throw-up-graduation-caps-certificates_107791-16179.jpg?t=st=1721496701~exp=1721500301~hmac=2a95e35824b9dea94f3f671d8bbda29531ddfed8faca515d070d2d57bf74a7c7&w=1800" alt="Gambar 1">
      </div>
      <div class="carousel-item">
        <img src="https://mmc.tirto.id/image/2020/12/22/ilustrasi-wisuda-istock--2_ratio-16x9.jpg" alt="Gambar 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <div class="container">
      <h2 class="text-center" id="title">Beasiswa Pendidikan Indonesia</h2>
      <div id="card">
        <div class="card shadow text-center">
          <img src="img/akademik.png" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Beasiswa Akademik</b></h5>
            <p>prestasi, bidang studi, dan kebutuhan finansial.</p>
            <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#daftar">Daftar</a>
            <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Selengkapnya</a>
          </div>
        </div>
        <div class="card shadow text-center">
          <img src="img/nonakademik.png" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Beasiswa Non Akademik</b></h5>
            <p>prestasi di luar akademik, seperti kepemimpinan, aktivitas ekstrakurikuler, dan bakat dalam seni atau olahraga.</p>
            <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#daftar">Daftar</a>
            <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Selengkapnya</a>
          </div>
        </div>
        <div class="card shadow text-center">
          <img src="img/bidikmisi.png" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Beasiswa Bidikmisi</b></h5>
            <p>Beasiswa Bidikmisi adalah program beasiswa dari pemerintah Indonesia yang bertujuan untuk membantu mahasiswa dari keluarga kurang mampu agar dapat menyelesaikan pendidikan tinggi.
              Beasiswa ini ditujukan untuk mahasiswa dengan potensi akademik tinggi namun memiliki keterbatasan ekonomi.</p>
            <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#daftar">Daftar</a>
            <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">Selengkapnya</a>
          </div>
        </div>
        <div class="card shadow text-center">
          <img src="img/m.png" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Beasiswa Muhammadiyah</b></h5>
            <p>Beasiswa Muhammadiyah adalah program beasiswa dari organisasi Muhammadiyah yang bertujuan untuk membantu mahasiswa berprestasi dalam menempuh pendidikan tinggi.
              Beasiswa ini ditujukan untuk mahasiswa dari berbagai bidang studi yang berkeinginan untuk berkontribusi dalam pembangunan bangsa dan masyarakat.</p>
            <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#daftar">Daftar</a>
            <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <section id="modal">
      <div class="modal fade" id="daftar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content" style="background-color: #e8e4e6;">
            <div class="modal-header" style="border-bottom: 1px solid #001e1d">
              <h5 class="modal-title">Syarat Pendaftaran Beasiswa</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <label for="">Masukkan IPK Anda</label>
              <input type="number" class="form-control" id="nilai" name="nilai" width="20px">
            </div>
            <div class="modal-footer" style="border-top: 1px solid #001e1d;">
              <button type="button" class="btn" name="submit" onclick="cekKelulusan()" data-bs-dismiss="modal">Submit</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalalert">
        <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hasil Kelulusan</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <h3 id="hasil"></h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn" id="btnOke" data-bs-dismiss="modal">Oke</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content" style="background-color: #e8e4e6;">
            <div class="modal-header" style="border-bottom: 1px solid #001e1d">
              <h5 class="modal-title">Beasiswa Akademik</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h2>Selamat datang di Pendaftaran Beasiswa Akademik</h2>
              <p>Program beasiswa akademik ini bertujuan untuk membantu mahasiswa berprestasi dalam menempuh pendidikan tinggi.
                Beasiswa ini terbuka untuk mahasiswa dari semua jurusan yang memiliki kriteria tertentu.
              </p>
              <h3>Alur Pendaftaran Beasiswa Akademik</h3>
              <ol>
                <li>Kunjungi halaman pendaftaran beasiswa akademik.</li>
                <li>Isi semua informasi yang diminta pada formulir pendaftaran.</li>
                <li>Pastikan informasi yang diisi benar dan lengkap.</li>
                <li>Klik tombol "Daftar" untuk mengirimkan formulir pendaftaran.</li>
                <li>Data pendaftaran akan diproses oleh tim beasiswa.</li>
                <li>Jika memenuhi kriteria, Anda akan mendapatkan pemberitahuan melalui email atau telepon.</li>
                <li>Jika diterima, Anda akan menerima informasi lebih lanjut mengenai proses selanjutnya.</li>
                <li>Anda akan menerima dana beasiswa setelah proses verifikasi dan validasi selesai.</li>
              </ol>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #001e1d;">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content" style="background-color: #e8e4e6;">
            <div class="modal-header" style="border-bottom: 1px solid #001e1d">
              <h5 class="modal-title">Beasiswa Non-Akademik</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h2>Selamat datang di Pendaftaran Beasiswa Non-Akademik</h2>
              <p>Program beasiswa non-akademik ini bertujuan untuk mendukung mahasiswa yang memiliki prestasi di luar akademik.
                Beasiswa ini terbuka untuk mahasiswa dari berbagai bidang yang telah menunjukkan komitmen dan prestasi di berbagai kegiatan non-akademik.
              </p>
              <h3>Alur Pendaftaran Beasiswa Non-Akademik</h3>
              <ol>
                <li>Kunjungi halaman pendaftaran beasiswa non-akademik.</li>
                <li>Isi semua informasi yang diminta pada formulir pendaftaran.</li>
                <li>Pastikan informasi yang diisi benar dan lengkap.</li>
                <li>Klik tombol "Daftar" untuk mengirimkan formulir pendaftaran.</li>
                <li>Data pendaftaran akan diproses oleh tim beasiswa.</li>
                <li>Jika memenuhi kriteria, Anda akan mendapatkan pemberitahuan melalui email atau telepon.</li>
                <li>Jika diterima, Anda akan menerima informasi lebih lanjut mengenai proses selanjutnya.</li>
                <li>Anda akan menerima dana beasiswa setelah proses verifikasi dan validasi selesai.</li>
              </ol>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #001e1d;">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content" style="background-color: #e8e4e6;">
            <div class="modal-header" style="border-bottom: 1px solid #001e1d">
              <h5 class="modal-title">Beasiswa Bidikmisi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h2>Selamat datang di Pendaftaran Beasiswa Bidikmisi</h2>
              <p>Beasiswa Bidikmisi adalah program beasiswa dari pemerintah Indonesia yang bertujuan untuk membantu mahasiswa dari keluarga kurang mampu agar dapat menyelesaikan pendidikan tinggi.
                Beasiswa ini ditujukan untuk mahasiswa dengan potensi akademik tinggi namun memiliki keterbatasan ekonomi.
              </p>
              <h3>Alur Pendaftaran Beasiswa Bidikmisi</h3>
              <ol>
                <li>Kunjungi halaman pendaftaran Beasiswa Bidikmisi.</li>
                <li>Isi semua informasi yang diminta pada formulir pendaftaran.</li>
                <li>Pastikan informasi yang diisi benar dan lengkap.</li>
                <li>Unggah dokumen lampiran yang diminta seperti scan Kartu Keluarga, slip gaji orang tua, dan lain-lain.</li>
                <li>Klik tombol "Daftar" untuk mengirimkan formulir pendaftaran.</li>
                <li>Data pendaftaran akan diproses oleh tim beasiswa.</li>
                <li>Jika memenuhi kriteria, Anda akan mendapatkan pemberitahuan melalui email atau telepon.</li>
                <li>Jika diterima, Anda akan menerima informasi lebih lanjut mengenai proses selanjutnya.</li>
                <li>Anda akan menerima dana beasiswa setelah proses verifikasi dan validasi selesai.</li>
              </ol>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #001e1d;">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content" style="background-color: #e8e4e6;">
            <div class="modal-header" style="border-bottom: 1px solid #001e1d">
              <h5 class="modal-title">Beasiswa Muhammadiyah</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h2>Selamat datang di Pendaftaran Beasiswa Muhammadiyah</h2>
              <p>Beasiswa Muhammadiyah adalah program beasiswa dari organisasi Muhammadiyah yang bertujuan untuk membantu mahasiswa berprestasi dalam menempuh pendidikan tinggi.
                Beasiswa ini ditujukan untuk mahasiswa dari berbagai bidang studi yang berkeinginan untuk berkontribusi dalam pembangunan bangsa dan masyarakat.
              </p>
              <h3>Alur Pendaftaran Beasiswa Muhammadiyah</h3>
              <ol>
                <li>Kunjungi halaman pendaftaran Beasiswa Muhammadiyah.</li>
                <li>Isi semua informasi yang diminta pada formulir pendaftaran.</li>
                <li>Pastikan informasi yang diisi benar dan lengkap.</li>
                <li>Unggah dokumen lampiran yang diminta seperti scan Kartu Keluarga, rapor nilai, dan lain-lain.</li>
                <li>Klik tombol "Daftar" untuk mengirimkan formulir pendaftaran.</li>
                <li>Data pendaftaran akan diproses oleh tim beasiswa Muhammadiyah.</li>
                <li>Jika memenuhi kriteria, Anda akan mendapatkan pemberitahuan melalui email atau telepon.</li>
                <li>Jika diterima, Anda akan menerima informasi lebih lanjut mengenai proses selanjutnya.</li>
                <li>Anda akan menerima dana beasiswa setelah proses verifikasi dan validasi selesai.</li>
              </ol>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #001e1d;">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function cekKelulusan() {
        var nilai = parseFloat(document.getElementById("nilai").value);
        var hasil = "";

        if (nilai >= 3 && nilai <= 4) {

          hasil = "Selamat! Anda memenuhi syarat pendaftaran beasiswa.";

          document.getElementById("hasil").textContent = hasil;
          var myModal = new bootstrap.Modal(document.getElementById('modalalert'));
          myModal.show();
          document.getElementById("btnOke").addEventListener("click", function() {
            window.location.href = "daftar.php";
          });
        } else if (nilai > 4) {
          hasil = "IPK yang anda masukkan tidak valid!";
          document.getElementById("hasil").textContent = hasil;
          var myModal = new bootstrap.Modal(document.getElementById('modalalert'));
          myModal.show();
        } else {
          hasil = "Maaf, Anda tidak memenuhi pendaftaran beasiswa!";

          document.getElementById("hasil").textContent = hasil;
          var myModal = new bootstrap.Modal(document.getElementById('modalalert'));
          myModal.show();

        }
      }
    </script>
    <script>
      document.getElementById('nilai').addEventListener('change', function() {
        localStorage.setItem('ipk_terakhir', this.value);
      });
    </script>
    <script>
      const menuIcon = document.querySelector('nav h2');

      menuIcon.addEventListener('click', () => {
        document.querySelector('nav ul').classList.toggle('show-menu');
      });
    </script>
    <script>
      const menuToggle = document.getElementById('menu-toggle');
      const menuLinks = document.getElementById('menu-links');

      menuToggle.addEventListener('click', () => {
        menuLinks.classList.toggle('active');
      });
    </script>






</body>

</html>