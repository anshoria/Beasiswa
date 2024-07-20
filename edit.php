<?php
include "config.php";

$id = $_GET["id"];
$pendaftaran = query("SELECT * FROM pendaftaran WHERE id = $id");
$p = $pendaftaran[0];

if (isset($_POST["ubah"])) {

    if (ubah($_POST) > 0) {
        echo "<script>
				alert('data berhasil diubah');
				document.location.href = 'hasil.php';
			  </script>";
    } else {
        echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'hasil.php';
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
        background-color: #004643;
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



    .footer {
        width: 100%;
        height: 50px;
        background-color: black;
        /* Footer height */
        position: absolute;
        bottom: 0;
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
</style>

<body>
    <nav>
        <div>
            <h2><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/800px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png" alt="">Beasiswa Pendidikan</h2>
        </div>
        <ul class="navbar-links" id="menu-links">
            <li><a href="index.php #home">Home</a></li>
            <li><a href="daftar.php">Pendaftaran</a></li>
            <li><a href="hasil.php"  class="active">Hasil</a></li>
        </ul>
    
            <button class="navbar-toggle" id="menu-toggle">
                <span></span>
                <span></span>
            </button>
      
    </nav>

    <div class="container">
        <h2 id="title">Pendaftaran Beasiswa</h2>
        <div class="card shadow">
            <div class="card-body">
                <?php foreach($pendaftaran as $p) : ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $p["id"]; ?>">
                    <input type="hidden" name="berkaslama" value="<?php echo $p["berkas"]; ?>">
                    <table>
                        <tr>
                            <th>Nama</th>
                            <td>

                                <input value="<?php echo $p["nama"]; ?>" type="text" name="nama" class="form-control" placeholder="Masukkan Nama">

                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>

                                <input value="<?php echo $p["email"]; ?>" type="email" name="email" class="form-control" placeholder="Masukkan Email">

                            </td>
                        </tr>
                        <tr>
                            <th>Nomor HP</th>
                            <td>
                                <input value="<?php echo $p["nohp"]; ?>" type="number" name="nohp" class="form-control" placeholder="Masukkan Nomor HP">
                            </td>
                        </tr>
                        <tr>
                            <th>Semester saat ini</th>
                            <td>

                                <select name="semester" id="" class="form-select">
                                    <option selected value="<?php echo $p["semester"]; ?>"><?php echo $p["semester"]; ?></option>
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
                                <input value="<?php echo $p["ipk"]; ?>" type="text" name="ipk" id="ipk_terakhir" class="form-control" readonly>

                            </td>
                        </tr>
                        <tr>
                            <th>Pilihan Beasiswa</th>
                            <td>

                                <select name="pilihan" id="" class="form-select">
                                    <option selected value="<?php echo $p["pilihan"]; ?>"><?php echo $p["pilihan"]; ?></option>
                                    <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                                    <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                                    <option value="Beasiswa Bidikmisi">Beasiswa Bidikmisi</option>
                                    <option value="Beasiswa Muhammadiyah">Beasiswa Muhammadiyah</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Upload Berkas Syarat</th>
                            <td>

                                <input value="<?php echo $p["ipk"]; ?>" type="file" name="berkas" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>

                                <select name="status" id="" class="form-select">
                                    <option selected value="<?php echo $p["status"]; ?>"><?php echo $p["status"]; ?></option>
                                    <option value="Belum di verifikasi">Belum di verifikasi</option>
                                    <option value="Verifikasi">Verifikasi</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <a href="hasil.php" class="btn">Kembali</a>
                                <button type="submit" name="ubah" class="btn">Simpan</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>