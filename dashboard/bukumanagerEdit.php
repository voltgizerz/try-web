<?php
include '../layout/dashboard.php';
?>

<?php
if (isset($_GET['id'])) {
    include('../db.php');
    $data = $_GET['id'];
}

$query = mysqli_query($con, "SELECT * FROM buku WHERE id='$data'") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($query);
?>
<div id="dashboardData">
    <div id="inputan">
        <h1 class="user">INPUT DATA PEGAWAI PERPUSTAKAAN</h1><br>
        <form name="myForm2" action="../proses/editBuku.php" onsubmit="return validateForm2()" method="post">
            <fieldset>
                <legend class="legend">Data Pegawai</legend>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                Nama Lengkap
                <input type="text" id=inputtext name="name" value="<?php echo $data['name']; ?>"><br><br>

                Jenis Kelamin<br>
                <?php
                if ($data['gender'] == 0) {
                    echo '<input type="radio" name="gender" id="male" value="0" checked="checked">Laki-Laki<br>
                    <input type="radio" name="gender" id="female" value="1" >Perempuan<br><br>';
                } else if ($data['gender'] != 0) {
                    echo '<input type="radio" name="gender" id="male" value="0" >Laki-Laki<br>
                    <input type="radio" name="gender" id="female" value="1" checked="checked">Perempuan<br><br>';
                } else {
                    echo '<input type="radio" name="gender" id="male" value="0">Laki-Laki<br>
                    <input type="radio" name="gender" id="female" value="1" >Perempuan<br><br>';
                }
                ?>

                Email
                <input type="text" id=inputtext name="email" placeholder="example@gmail.com" value="<?php echo $data['email']; ?>"><br><br>

                Nomor Telepon
                <input type="text" id=inputtext name="nomorHandphone" value="<?php echo $data['nomorHandphone']; ?>">
            </fieldset>

            <fieldset>
                <legend class="legend">Pendidikan</legend>

                Background Pendidikan
                <select name="pendidikan" id="grade">
                    <option value="">Pilih</option>
                    <option value="1" <?php if ($data['pendidikan'] == 1) echo 'selected="selected"'; ?>>S1</option>
                    <option value="2" <?php if ($data['pendidikan'] == 2) echo 'selected="selected"'; ?>>S2</option>
                    <option value="3" <?php if ($data['pendidikan'] == 3) echo 'selected="selected"'; ?>>S3</option>
                </select><br><br>

                Cumlaude <br>
                <?php
                if ($data['cumlaude'] == 0) {
                    echo '<input type="radio" name="cumlaude" id="tidak" value="0" checked="checked">Tidak
                    <input type="radio" name="cumlaude" id="ya" value="1" >Ya<br><br>';
                } else if ($data['cumlaude'] != 0) {
                    echo '<input type="radio" name="cumlaude" id="tidak" value="0" >Tidak
                    <input type="radio" name="cumlaude" id="ya" value="1" checked="checked">Ya<br><br>';
                } else {
                    echo '<input type="radio" name="cumlaude" id="tidak" value="0">Tidak
                    <input type="radio" name="cumlaude" id="ya" value="1" >Ya<br><br>';
                }
                ?>
                IPK<input type="text" id=inputtext name="ipk" placeholder="X.XX" value="<?php echo $data['ipk']; ?>">
            </fieldset>

            <fieldset>
                <legend class="legend">Lokasi Tempat Kerja</legend>

                Alamat &emsp; <input type="text" id=inputtext name="alamat" value="<?php echo $data['alamat']; ?>"><br><br>
                Kota &emsp;&emsp; <input type="text" id=inputtext name="kota" value="<?php echo $data['kota']; ?>"><br><br>
            </fieldset><br>

            <input id=submit class="inputButton" type="submit" name="storeBuku" value="UPDATE">
        </form>
    </div>
    </body>
    <script src="../script/script.js"></script>
    <script>
        var elm = document.getElementById("bukuTab").classList.add("isActive")
    </script>

    </html>