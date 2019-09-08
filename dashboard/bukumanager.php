<?php
include '../layout/dashboard.php';
?>

<div id="dashboardData">
  <div id="inputan">
    <h1 class="user">INPUT DATA PEGAWAI PERPUSTAKAAN</h1><br>
    <form name="myForm2" action="../proses/createBuku.php" onsubmit="return (validateForm2())" method="post">
      <fieldset>
        <legend class="legend">Data Pegawai</legend>

        Nama Lengkap
        <input type="text" id=inputtext name="name"><br><br>

        Jenis Kelamin<br>
        <input type="radio" name="gender" id="male" value="0">Laki-Laki<br>
        <input type="radio" name="gender" id="female" value="1">Perempuan <br><br>

        Email
        <input type="text" id=inputtext name="email" placeholder="example@gmail.com"><br><br>

        Nomor Telepon
        <input type="text" id=inputtext name="nomorHandphone">
      </fieldset>

      <fieldset>
        <legend class="legend">Pendidikan</legend>

        Background Pendidikan
        <select name="pendidikan" id="grade">
          <option value=''></option>
          <option value="1">S1</option>
          <option value="2">S2</option>
          <option value="3">S3</option>
        </select><br><br>

        Cumlaude <br>
        <input type="radio" name="cumlaude" id="ya" value="1"> Ya <br>
        <input type="radio" name="cumlaude" id="tidak" value="0"> Tidak<br><br>

        IPK
        <input type="text" id=inputtext name="ipk" placeholder="X.XX">
      </fieldset>

      <fieldset>
        <legend class="legend">Lokasi Tempat Kerja</legend>

        Alamat &emsp;
        <input type="text" id=inputtext name="alamat"><br><br>
        Kota &emsp;&emsp;
        <input type="text" id=inputtext name="kota"><br><br>
      </fieldset><br>

      <input id=submit class="inputButton" type="submit" name="storeBuku" value="Tambahkan">
    </form>
  </div>
  </body>
  <script src="../script./script.js"></script>
  <script>
    var elm = document.getElementById("bukuTab").classList.add("isActive")
  </script>

  </html>