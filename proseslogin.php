<?php
$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$dbname = 'websession';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');

$uname = $_POST['uname'];
$pswd     = $_POST['pswd'];

$login = mysqli_query($connect, "SELECT * FROM account WHERE uname = '$uname' AND pswd='$pswd'");

$row=mysqli_fetch_array($login);

if ($row['uname'] == $uname AND $row['pswd'] == $pswd)
	
{
	session_start();
	
	$_SESSION['uname'] = $row['uname'];
	$_SESSION['pswd'] = $row['pswd'];
	
	header('location:index.php');
	}
else
{
	echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
	Username atau Password Anda tidak benar.<br>";
	echo "<br>";
	echo "<input type=button value='ULANGI LAGI' onclick=location.href='login.php'></a></center>";

}
?>