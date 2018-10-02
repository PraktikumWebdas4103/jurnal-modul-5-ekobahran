<!DOCTYPE html>
 <html>
<body>
  <center><h2>Registrasi</h2><br>
    <from action="configurasi.php" method="POST">
      <table>
        <tr><input type="text" name="nim" placeholder="nim" required maxlength="10"></tr></br><br>
        <tr><input type="text" name="nama" placeholder="nama" required maxlength="25"></tr></br><br>
        <tr><input type="email" name="email" placeholder="@mail.com"></tr></br><br>
        <tr><input type="submit" name="login" value="login"></tr></br><br>

      </table>

<?php
  if (isset($_POST['login'])) {
   $nim=$_POST['nim'];
   $nama=$_POST['nama'];
   $email=($_POST['email']);
   include "configurasi.php";

   if(strlen($_POST['nim'] !=10 && $_POST['nama'] >=25)){
    echo "nim harus 10 karakter atau nama terlalu panjang|||";
   }
   else{
        $sql="INSERT INTO pendaftaran(nim,nama,email) VALUES ('$nim','$nama','$email')";
   if($sql){
   $_SESSION['nim']=nim;
    echo "berhasil login";
   }
 }
}
 ?>
