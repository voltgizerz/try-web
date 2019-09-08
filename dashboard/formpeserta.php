<?php
include '../layout/dashboard.php';
?>
<link rel="stylesheet" href="../css/style.css">
<div id="dashboardData">
    <div id="inputan">
        <form name="myForm" action="../proses/createUser.php" onsubmit="return validateForm()" method="post">
            <p class="user"> USER MANAGER</p>
            Nama<br> <input type="text" id=inputtext name="name"><br><br>
            Email<Br> <input type="text" id=inputtext name="email" placeholder="example@gmail.com"><br><br>
            Tanggal Lahir<Br> <input type="text" id=inputtext name="tanggalLahir" placeholder="YYYY-MM-DD"><br><br>

            Nomor Handphone<Br> <input type="text" id=inputtext name="nomorHandphone"><br><br>
            Jenis Kelamin<br>
            <div class=jk>
                <input type="radio" name="jenisKelamin" id="male" value="0">Laki-Laki
                <input type="radio" name="jenisKelamin" id="female" value="1">Perempuan<br><br>
            </div>
            <input id=submit class="inputButton" type="submit" name="store" value="Tambahkan">
        </form>

    </div>
</div>
</body>
<script src="../script./script.js"></script>

<script>
    var elm = document.getElementById("userTab").classList.add("isActive")
</script>

</html>