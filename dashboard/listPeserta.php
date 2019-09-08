<?php 
    include '../layout/dashboard.php';
?>

<div id="dashboardData">
    <table class="userListTable">
        <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Tanggal Lahir</th>
        <th>Nomor Handphone</th>
        <th>Jenis Kelamin</th>
        <th>Pengaturan</th>
    </tr>
 <?php
    $query = mysqli_query($con,"SELECT * FROM customer") or die(mysqli_error($con));
 if(mysqli_num_rows($query) == 0){
    echo '<tr> <td colspan="7"> Tidak ada data ! </td></tr>';
 }else{ 
    $no = 1;
    while($data = mysqli_fetch_assoc($query)){
    echo 
        '<tr>
        <td>'.$no.'</td>
        <td>'.$data['name'].'</td>
        <td>'.$data['email'].'</td>
        <td>'.$data['tanggalLahir'].'</td>
        <td>'.$data['nomorHandphone'].'</td>
        <td>'; 
            if($data['jenisKelamin'] == 0){
                echo 'Laki-Laki';
            }else{
                echo 'Perempuan';
            }
    echo '</td>
        <td><a href="../dashboard/formeditPeserta.php?id='.$data['id'].'">Edit </a>/
        <a href="../proses/deletePeserta.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus </a></td></tr> ';
     $no++;
    }
    }
    ?>
        </table>
    </div>
   </body>
   <style>
   .userListTable{
    width: 100%;
   }
   table, tr, td, th{
    border: 1px;
    border: 1px solid black;
    border-collapse: collapse;
   }
   </style>
     <script src="../script/script.js"></script>
    <script>
        var elm = document.getElementById("listUser").classList.add("isActive")
    </script>
   </html>
