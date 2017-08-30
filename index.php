<html>
<head>
  <title>Contoh Form Login</title>
</head>
<body>
  <?php
  session_start();
  if(empty($_SESSION['uname']))
  {
  echo "<center>TAMPILAN SEBELUM LOGIN</center><br/>Maaf sepertinya anda belum Login,silahkan tekan link login dibawah <br/>
  <a href='login.php'><center>Login</center></a>";
}else{
echo "<center>TAMPILAN SETELAH LOGIN<br/>Selamat Anda Berhasil Login<br/><a href='logout.php'>Logout</a></center>";
}
?>
</body>
</html>