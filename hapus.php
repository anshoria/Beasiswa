<?php 
require 'config.php';

if( isset($_GET["id"]) ) {
	// cek keberhasilan query
	if( hapus($_GET["id"]) > 0 ) {
		echo "<script>
				alert('berhasil dihapus!');
				document.location.href = 'hasil.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal dihapus!');
				document.location.href = 'hasil.php';
			  </script>";
	}
}
?>