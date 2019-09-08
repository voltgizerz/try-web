<?php 
    include '../layout/dashboard.php';
?>

<div id="dashboardData">
    <table class="userListTable">
        <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Nomor Handphone</th>
        <th>Pendidikan</th>
        <th>Cumlaude</th>
        <th>IPK</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Pengaturan</th>
    </tr>
 <?php
    $query = mysqli_query($con,"SELECT * FROM buku") or die(mysqli_error($con));
 if(mysqli_num_rows($query) == 0){
    echo '<tr> <td colspan="11"> Tidak ada data ! </td></tr>';
 }else{ 
    $no = 1;
    while($data = mysqli_fetch_assoc($query)){
    echo 
        '<tr>
        <td>'.$no.'</td>
        <td>'.$data['name'].'</td>
        <td>';
                if($data['gender'] == 0){
                    echo 'Laki-Laki';
                }else{
                    echo 'Perempuan';
                }
                echo '</td>
        <td>'.$data['email'].'</td>
        <td>'.$data['nomorHandphone'].'</td>
        <td>';
            if($data['pendidikan'] == 1){
                echo 'S1';
            }else{
                if($data['pendidikan'] == 2)
                {
                    echo 'S2';
                }else{
                    if($data['pendidikan'] == 3)
                    {
                        echo 'S3';
                    }
                }
            }
            echo '</td>
        <td>';
            if($data['cumlaude'] == 0){
                echo 'Tidak';
            }else{
                echo 'Ya';
            }
            echo '</td>
        <td>'.$data['ipk'].'</td>
        <td>'.$data['alamat'].'</td>
        <td>'.$data['kota'].'</td>
        
        <td><a href="../dashboard/bukumanagerEdit.php?id='.$data['id'].'">Edit </a>/
        <a href="../proses/deleteBuku.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus </a></td></tr> ';
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
        var elm = document.getElementById("listBuku").classList.add("isActive")
    </script>
   </html>
