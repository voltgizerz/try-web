<?php
if(isset($_POST['storeBuku'])){
    include('../db.php');
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $nomorHandphone = $_POST['nomorHandphone'];
    $pendidikan = $_POST['pendidikan'];
    $cumlaude = $_POST['cumlaude'];
    $ipk = $_POST['ipk'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    
    $input = mysqli_query($con,"INSERT INTO buku(name,gender,email,nomorHandphone,pendidikan,cumlaude,ipk,alamat,kota) VALUES('$name','$gender','$email','$nomorHandphone','$pendidikan','$cumlaude','$ipk','$alamat','$kota')")or die(mysqli_error($con));
    if($input){
         echo '<script>alert("Success Menambah Data Buku!"); window.location ="../dashboard/listBuku.php"</script>';
    }else{
        echo '<script>alert("failed"); window.location ="../dashboard/bukumanager.php"</script>';
    }
    }else{
        echo '<script>window.history.back()</script>';
    }
