<?php
	session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: Admin/");
        exit;
    }
	
	require 'functions.php';

	$id = $_GET["id"];

	if(hapus($id) > 0){
		echo "
			<script>
				alert('Link berhasil dihapus!');
				document.location.href = 'index.php';
			</script>	
		";
	}else {
		echo "
			<script>
				alert('Link gagal dihapus!');
				document.location.href = 'index.php';
			</script>	
		";
	}

?>