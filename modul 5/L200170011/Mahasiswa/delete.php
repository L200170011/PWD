<?php
	$conn= mysqli_connect('localhost', 'root', '','informatika');
	
	$nim=$_GET['NIM'];
	$hapus="delete from mahasiswa where nim='$nim'";
	$data=mysqli_query($conn,$hapus);
	
	if($data > 0){
		echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href='form.php';
		</script>";
	}else
		echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='form.php';
		</script>";
?>