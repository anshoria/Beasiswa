<?php
include "config.php";

if (isset($_POST["tambah"])) {
    // cek keberhasilan query
    if (tambah($_POST) > 0) {
        echo "<script>
				alert('data berhasil ditambah');
				document.location.href = 'hasil.php';
			  </script>";
    } else {
        echo "<script>
				alert('data gagal ditambah!');
				document.location.href = 'daftar.php';
			  </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style>
    html body {
        background-color: #1e6788;
    }

    #title {
        color: #fffffe;
        display: flex;
        justify-content: center;
        margin-top: 150px;
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
        z-index: 1;
        margin-top: 20px;
        background-color: #e8e4e6;
    }

    /* Gaya tabel */
    table {
        border-collapse: collapse;
        display: flex;
        justify-content: center;
        color: #004643;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        width: 900px;
        color: #004643;
    }

    table tr th {
        color: #001e1d;
        width: 400px;
    }

    td input {
        color: #001e1d;
    }

    td input::placeholder {
        color: #001e1d;
    }

    tr td .btn {
        background-color: #e8e4e6;
        color: #001e1d;
        border: 2px solid #001e1d;
    }

    tr td .btn:hover {
        background-color: #f9bc60;
        color: #001e1d;
        border: 2px solid #fffffe;
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
            <li><a href="index.php #home">Home</a></li>
            <li><a href="daftar.php" class="active">Pendaftaran</a></li>
            <li><a href="hasil.php">Hasil</a></li>
        </ul>
    
            <button class="navbar-toggle" id="menu-toggle">
                <span></span>
                <span></span>
            </button>
      
    </nav>

    <div class="container">
        <h2 id="title">Pendaftaran Beasiswa</h2>
        <div class="card shadow">
            <div class="card-header"></div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="status">
                    <table>
                        <tr>
                            <th>Nama</th>
                            <td>

                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>

                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>

                                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>

                            </td>
                        </tr>
                        <tr>
                            <th>Nomor HP</th>
                            <td>

                                <input type="number" name="nohp" class="form-control" placeholder="Masukkan Nomor HP" required>


                            </td>
                        </tr>
                        <tr>
                            <th>Semester saat ini</th>
                            <td>

                                <select name="semester" id="" class="form-select" required>
                                    <option selected value=""></option>
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                    <option value="4">Semester 4</option>
                                    <option value="5">Semester 5</option>
                                    <option value="6">Semester 6</option>
                                    <option value="7">Semester 7</option>
                                    <option value="8">Semester 8</option>
                                </select>


                            </td>
                        </tr>
                        <tr>
                            <th>IPK terakhir</th>
                            <td>

                                <input type="text" name="ipk" id="ipk_terakhir" class="form-control"  readonly>

                            </td>
                        </tr>
                        <tr>
                            <th>Pilihan Beasiswa</th>
                            <td>

                                <select name="pilihan" id="pilihan" class="form-select" required>
                                    <option selected value=""></option>
                                    <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                                    <option value="Beasiswa Non-Akademik">Beasiswa Non-Akademik</option>
                                    <option value="Beasiswa Bidikmisi">Beasiswa Bidikmisi</option>
                                    <option value="Beasiswa Muhammadiyah">Beasiswa Muhammadiyah</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Upload Berkas Syarat</th>
                            <td>

                                <input type="file" name="berkas" class="form-control" id="berkas" required>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <button type="submit" name="tambah" class="btn">Daftar</button>
                            </td>
                        </tr>
                    </table>

                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <script>
        window.addEventListener('DOMContentLoaded', function() {
            const ipkTerakhirInput = document.getElementById('ipk_terakhir');
            const ipkTerakhir = localStorage.getItem('ipk_terakhir');
            if (ipkTerakhir !== null) {
                ipkTerakhirInput.value = ipkTerakhir;
            }
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