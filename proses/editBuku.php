<?php
if(isset($_POST['storeBuku']) && ! empty($_POST['id'])){
    include('../db.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $nomorHandphone = $_POST['nomorHandphone'];
    $pendidikan = $_POST['pendidikan'];
    $cumlaude = $_POST['cumlaude'];
    $ipk = $_POST['ipk'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];

    $edit = mysqli_query($con,"UPDATE buku SET name='$name',gender='$gender',email='$email',nomorHandphone='$nomorHandphone',pendidikan='$pendidikan',cumlaude='$cumlaude',ipk='$ipk',alamat='$alamat',kota='$kota' WHERE id='$id' ")or die(mysqli_error($con));
    if($edit){
        echo '<script>alert("Success Edit Data Buku!"); window.location ="../dashboard/listBuku.php"</script>';
    }else{
        echo '<script>alert("failed"); window.location ="../dashboard/bukumanager.php"</script>';
    }
    }else{
        echo '<script>window.history.back()</script>';
    }
?>