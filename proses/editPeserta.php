<?php
if(isset($_POST['store'])){
    include('../db.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $nomorHandphone = $_POST['nomorHandphone'];
    $jenisKelamin = $_POST['jenisKelamin'];
    
    $edit = mysqli_query($con,"UPDATE customer SET name='$name',email='$email',tanggalLahir='$tanggalLahir',nomorHandphone='$nomorHandphone',jenisKelamin='$jenisKelamin' WHERE id='$id'")or die(mysqli_error($con));
    if($edit){
         echo '<script>alert("Success Edit Data!"); window.location ="../dashboard/listPeserta.php"</script>';
    }else{
        echo '<script>alert("failed"); window.location ="../dashboard/formpeserta.php"</script>';
    }
    }else{
        echo '<script>window.history.back()</script>';
    }
?>