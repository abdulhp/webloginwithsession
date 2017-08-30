<html>
<head>
  <title>Contoh Form Login</title>
</head>
<body>
  <?php
  session_start();// untuk mengaktifkan session
  if(empty($_SESSION['uname']))// untuk check session apakah sudah login atau belum
  {
  echo "<center>TAMPILAN SEBELUM LOGIN</center><br/>Maaf sepertinya anda belum Login,silahkan tekan link login dibawah <br/>
  <a href='login.php'><center>Login</center></a>";// jika session dengan value uname belum ada maka akan di arahkan ke login
}else{
echo "<center>TAMPILAN SETELAH LOGIN<br/>Selamat Anda Berhasil Login<br/><a href='logout.php'>Logout</a></center>";// jika session dengan value uname ada maka akan diarahkan ke logout dimana session berhenti
}
?>
</body>
</html>