<?php
	$conn= mysqli_connect('localhost', 'root', '','informatika');
	
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$alamat=$_POST['alamat'];
	$submit=$_POST['submit'];
	$update="UPDATE mahasiswa set NIM='$nim', Nama='$nama', Kelas='$kelas', Alamat='$alamat' WHERE nim='$nim' ";
	
	if($submit){
		if ($nim=''){
			echo "NIM tidak boleh kosong, diisi dulu";
		}elseif ($nama=''){
			echo "Nama tidak boleh kosong";
		}elseif ($alamat=''){
			echo "Alamat tidak boleh kosong";
		}if ($nim=''){
			echo "NIM tidak boleh kosong, diisi dulu";
		}else
			mysqli_query($conn,$update);
			echo "
			<script>
			alert('data berhasil di update');
			document.location.href='form.php';
			</script>";
		}
	
?>