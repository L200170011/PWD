<?php
	$conn= mysqli_connect('localhost', 'root', '','penyimpanan');
	
	$kode=$_GET['KODE'];
	$hapus="delete from gudang where kode_gudang='$kode'";
	$data=mysqli_query($conn,$hapus);
	
	if($data > 0){
		echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href='form_gudang.php';
		</script>";
	}else
		echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='form_gudang.php';
		</script>";
?>