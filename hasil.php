<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

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


    .table a {
        background-color: #004643;
        color: #e8e4e6;
        border: 2px solid #001e1d;
    }

    .table a:hover {
        background-color: #f9bc60;
        color: #001e1d;
        border: 2px solid #001e1d;
    }

    .card {
        z-index: 1;
        margin-bottom: 200px;
        margin-left: 200px;
        margin-right: 200px;
    }

    @media (max-width: 768px) {

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

        .card {

            margin-bottom: 200px;
            margin-left: 20px;
            margin-right: 20px;
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
        .table-responsive {
            width: 100%;
            margin-bottom: 1rem;
            overflow-y: hidden;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            border: 1px solid #ddd;
            -webkit-overflow-scrolling: touch;
        }

        .table {
            margin-bottom: 0;
            white-space: nowrap;
        }

        .table th,
        .table td {
            white-space: nowrap;
        }

        .table-bordered {
            border: 0;
        }

        .table-bordered th,
        .table-bordered td {
            border: 0;
            border-bottom: 1px solid #ddd;
        }
        
			table,
			thead,
			tbody,
			th,
			td,
			tr {
				display: block;
			}

			thead tr {
				position: absolute;
				top: -9999px;
				left: -9999px;
			}

			td {
				border: none;
				border-bottom: 1px solid #ddd;
				position: relative;
				padding-left: 50%;
			}

			td::before {
				position: absolute;
				top: 6px;
				left: 6px;
				width: 45%;
				padding-right: 10px;
				white-space: nowrap;
				content: attr(data-label);
				font-weight: bold;
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
            <li><a href="" data-bs-toggle="modal" data-bs-target="#daftar">Pendaftaran</a></li>
            <li><a href="hasil.php" class="active">Hasil</a></li>
        </ul>
        <button class="navbar-toggle" id="menu-toggle">
            <span></span>
            <span></span>
        </button>
    </nav>

    <h2 id="title">Hasil Pendaftaran Beasiswa</h2>
    <div class="card shadow">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table class="table table-stripped" id="tabelhasil">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Email</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Semester</th>
                        <th scope="col">IPK</th>
                        <th scope="col">Jenis Beasiswa</th>
                        <th scope="col">Status</th>
                        <th scope="col">Berkas Persyaratan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $beasiswa = query("SELECT * FROM pendaftaran ORDER BY id DESC");
                    foreach ($beasiswa as $row) :
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row["nama"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["nohp"]; ?></td>
                            <td><?php echo $row["semester"]; ?></td>
                            <td><?php echo $row["ipk"]; ?></td>
                            <td><?php echo $row["pilihan"]; ?></td>
                            <td><?php echo $row["status"]; ?></td>
                            <td><a href="img/<?php echo $row["berkas"]; ?>" class="btn btn-sm" download>Unduh Berkas</a></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm">edit</a>
                                <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">hapus</a>
                            </td>
                        </tr>
                    <?php
                    endforeach; ?>
                </tbody>
            </table>
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
                        <button type="button" class="btn" onclick="cekKelulusan()" data-bs-dismiss="modal">Submit</button>
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
    </section>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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
        $(document).ready(function() {
            $('#tabelhasil').DataTable();
        });
    </script>


    <script>
        document.getElementById('nilai').addEventListener('change', function() {
            localStorage.setItem('ipk_terakhir', this.value);
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