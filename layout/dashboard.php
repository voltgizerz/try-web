<?php 
session_start();
if(!$_SESSION['isLogin']){
    header("location: ../login_page.php");
}
else{
    include("../db.php");
}

echo'
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../css./style.css">
     <title>Dashboard</title>
 </head>
 <body>
     <div class="backgroundAll"></div>
     <div id="sidebar">
         <div class="sideheader">
             <div class="name">
                 <h1>Company Logo</h1>
                 <p>Company Name</p>
             </div>
             <div class="hamburgerbar">
                 <a href="#" onClick="hamburgerFunc()">
                     <div>
                         <div class="bar topbar"></div>
                         <div class="bar middlebar"></div>
                         <div class="bar bottombar"></div>
                     </div>
                 </a>
             </div>
            </div>
             <div class="sidebody">
                 <div class="sidebodypart">
                     <ul>
                        <li id="dashboardTab"><a href="../dashboard/index.php"><p>Dashboard</p></a></li>
                        <li id="userTab"><a href="../dashboard/formpeserta.php"><p>User Manager</p></a></li>
                        <li id="listPeserta"><a href="../dashboard/listPeserta.php"><p>List User</p></a></li>  
                        <li id="bukuTab"><a href="../dashboard/bukumanager.php"><p>Buku Manager</p></a></li>
                        <li id="listBuku"><a href="../dashboard/listBuku.php"><p>List Buku</p></a></li>  
                        <li id="userTab"><a href="../proses/prosesLogout.php"><p>Logout</p></a></li>
                           
                    </ul>
                 </div>
         </div>
         </div>

         <div id="navbar">
             <div class="searchbar">
                <input id="searchInput" type="text" placeholder="Search Data" onkeyup="displaySearch(event)">
            </div>
            <div class="barinfo">
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                    <a href="../dashboard/index.php">Dashboard</a>
                    <a href="../dashboard/formpeserta.php">User Manager</a>
                    <a href="../dashboard/listPeserta.php">List User</a>
                    <a href="../dashboard/bukumanager.php">Buku Manager</a>
                    <a href="../dashboard/listPeserta.php">List Buku</a>
                </div>
                </div>
             </div>
         </div>
            <script src="../script./script.js"></script>
         </div>'?>
