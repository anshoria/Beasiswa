<?php 
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "", "beasiswa") or die("koneksi gagal");
	return $conn;
}
function query($query)
{
	$conn = koneksi();

	$result = mysqli_query($conn, $query);
	$rows = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function upload()
{
    $namaFile = $_FILES['berkas']['name'];
    $ukuranFile = $_FILES['berkas']['size'];
    $error = $_FILES['berkas']['error'];
    $tmpName = $_FILES['berkas']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('Pilih berkas terlebih dahulu!');
              </script>";
        return false;
    }

    if ($ukuranFile > 10000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar! Maksimal 10MB');
              </script>";
        return false;
    }

 
    $lokasi_simpan = "img/"; 
    $file_simpan = $lokasi_simpan . $namaFile;

    if (move_uploaded_file($tmpName, $file_simpan)) {
        return $namaFile;
    } else {
        echo "<script>
                alert('Gagal mengunggah berkas!');
              </script>";
        return false;
    }
	
}

function tambah(){
    $conn = koneksi();
	$nama = ($_POST['nama']);
	$email = ($_POST['email']);
	$nohp = ($_POST['nohp']);
    $semester = ($_POST['semester']);
    $ipk = ($_POST['ipk']);
    $pilihan = ($_POST['pilihan']);
	$berkas = upload();
	if (!$berkas) {
		return false;
	}
	$status = "Belum di verifikasi";


	$query = "INSERT INTO pendaftaran
VALUES
('','$nama','$email','$nohp','$semester','$ipk','$pilihan','$berkas','$status')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id){
	$conn = koneksi();

	mysqli_query($conn, "DELETE FROM pendaftaran WHERE id = $id");

	return mysqli_affected_rows($conn);
}



function ubah()
{
	$conn = koneksi();

	$id = ($_GET["id"]);
	$nama = ($_POST["nama"]);
	$email = ($_POST["email"]);
	$nohp = ($_POST["nohp"]);
    $semester = ($_POST["semester"]);
    $ipk = ($_POST["ipk"]);
    $pilihan = ($_POST["pilihan"]);
	$status = ($_POST["status"]);
	$berkaslama = ($_POST["berkaslama"]);

	if( $_FILES['berkas']['error'] === 4 ) {
		$berkas = $berkaslama;
	} else {		
		$berkas = upload();
	}


	$query = "UPDATE pendaftaran SET 	
				nama = '$nama',
                email = '$email',
                nohp = '$nohp',
				semester = '$semester',
				ipk = '$ipk',
                pilihan = '$pilihan',
				berkas = '$berkas',
				status = '$status'
			  WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
?>