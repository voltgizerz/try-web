<?php
include '../layout/dashboard.php';
?>

<?php
if (isset($_GET['id'])) {
    include('../db.php');
    $data = $_GET['id'];
}

$query = mysqli_query($con, "SELECT * FROM customer WHERE id='$data'") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($query);
?>
<link rel="stylesheet" href="../css/style.css">
<div id="dashboardData">
    <div id="inputan">
        <form name="myForm" action="../proses/editPeserta.php" onsubmit="return validateForm()" method="post">
            <p class="user"> USER MANAGER</p>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            Nama<br> <input type="text" id=inputtext name="name" value="<?php echo $data['name']; ?>"><br><br>
            Email<Br> <input type="text" id=inputtext name="email" placeholder="example@gmail.com" value="<?php echo $data['email']; ?>"><br><br>
            Tanggal Lahir<Br> <input type="text" id=inputtext name="tanggalLahir" placeholder="YYYY-MM-DD" value="<?php echo $data['tanggalLahir']; ?>"><br><br>
            Nomor Handphone<Br> <input type="text" id=inputtext name="nomorHandphone" value="<?php echo $data['nomorHandphone']; ?>"><br><br>
            Jenis Kelamin<br>

            <div class=jk>
                <?php
                if ($data['jenisKelamin'] == 0) {
                    echo '<input type="radio" name="jenisKelamin" id="male" value="0" checked="checked">Laki-Laki
                            <input type="radio" name="jenisKelamin" id="female" value="1" >Perempuan<br><br>';
                } else if ($data['jenisKelamin'] != 0) {
                    echo '<input type="radio" name="jenisKelamin" id="male" value="0" >Laki-Laki
                            <input type="radio" name="jenisKelamin" id="female" value="1" checked="checked">Perempuan<br><br>';
                } else {
                    echo '<input type="radio" name="jenisKelamin" id="male" value="0">Laki-Laki
                            <input type="radio" name="jenisKelamin" id="female" value="1" >Perempuan<br><br>';
                }
                ?>
            </div>
            <input id=submit class="inputButton" type="submit" name="store" value="UPDATE">

        </form>

    </div>
</div>
</body>
<script src="../script./script.js"></script>

<script>
    var elm = document.getElementById("userTab").classList.add("isActive")
</script>

</html>