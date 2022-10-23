<?php

session_start();

require("../Config/config.php");

if($_SESSION["role"] != "admin" ){
    header("Location:index.php");
    
    exit(); 
  }
  


    // get users

  $sql = "SELECT * FROM user";
  $stmt = $conn->prepare($sql); 

  $stmt->execute();
  $result = $stmt->get_result();


  // get annonces

  $q = "SELECT * FROM annonce";
  $s = $conn->prepare($q); 

  $s->execute();
  $resultt = $s->get_result();







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="./Admin.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../Composants/Logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="Admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                      
                      
                     
                        
                </div>
               
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                      
                     
                        
                  
                    </div>
              
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> users list
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>user_id</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>adresse</th>
                                        <th>Email</th>
                                        <th>role</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                
                                    <tbody>
                                    <?php foreach($result as $item): ?>
                                    <tr>
                                        <td><?= $item["user_id"]  ?></td>
                                        <td><?= $item["nom"]  ?></td>
                                        <td><?= $item["prenom"]  ?></td>
                                        <td><?=  $item["adresse"] ?></td>
                                        <td><?= $item["email"] ?></td>
                                        <td><<?= $item["role"]  ?></td>
                                        <th><button onclick="return confirm('supprimer ? ')" class="btn btn-danger">Supprimer</button></th>
                                    </tr>
                                    
                                </tbody>
                                <?php endforeach ?>
                            </table>
                            
                        </div>

                    </div>
                    
                </div>
                <!--Table-->
                
<table class="table table-hover table-fixed">
<div class="card-header">
                            <i class="fas fa-table me-1"></i> annonces list
                        </div>

<!--Table head-->
<thead>
  <tr>
    <th># annonce_id</th>
    <th>titre</th>
    <th>description</th>
    <th>prix</th>
    <th>categorie</th>
    <th>user_id</th>
    <th>Action</th>
  </tr>
</thead>
<!--Table head-->

<!--Table body-->
<tbody>
    <?php foreach($resultt as $row): ?>
  <tr>
    <th scope="row"><?= $row["id"]  ?></th>
    <td><?= $row["titre"]  ?></td>
    <td><?= $row["description"] ?></td>
    <td><?=  $row["prix"] ?>$</td>
    <td><?= $row["categorie"]  ?></td>
    <td><?=  $row["user_id"] ?></td>
    <th><button onclick="return confirm('supprimer ? ')" class="btn btn-danger">Supprimer</button></th>

  </tr>
 <?php endforeach ?>
</tbody>
<!--Table body-->

</table>
<!--Table-->
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy;  <?= date("Y") ?></div>
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>