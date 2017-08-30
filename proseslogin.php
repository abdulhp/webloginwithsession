<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$dbname = 'websession';
//Mendeklarasikan akun mysql di xamp beserta database

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');// untuk konek ke mysql dan database

$uname = $_POST['uname']; // mengambil value uname dari halaman login dan memasukkan nya ke variable $uname
$pswd     = $_POST['pswd']; // mengambil value pswd dari halaman login dan memamsukkan nya ke variable $pswd

$login = mysqli_query($connect, "SELECT * FROM account WHERE uname = '$uname' AND pswd='$pswd'");
//untuk melaksanakan query pada koneksi variable $connect, dan menampilkan field uname dan pswd yang sama dengan variable $uname dan pswd diatas
$row=mysqli_fetch_array($login);
//untuk menampung hasil data field yang telah ditampilkan tadi di array
if ($row['uname'] == $uname AND $row['pswd'] == $pswd)
	//jika array $row yang field nya uname sama dengan $uname dan sama seperti pswd, maka
{
	session_start();
	// aktifkan session
	$_SESSION['uname'] = $row['uname'];
	$_SESSION['pswd'] = $row['pswd'];
	// mengisi session value uname dan pswd, dengan arrayy $row yang telah didapat tadi
	header('location:index.php');
	// autolink ke index.php
}
else
{
	echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
	Username atau Password Anda tidak benar.<br>";
	echo "<br>";
	echo "<input type=button value='ULANGI LAGI' onclick=location.href='login.php'></a></center>";

}
?>