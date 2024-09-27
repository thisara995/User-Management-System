<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">User Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Navigation Links -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Admin-Dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">Users</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Welcome Message -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome!</a>
                </li>
                <!-- Profile Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user fa-2x me-2"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li><a class="dropdown-item" href="admin-profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content Section -->
<div class="container mt-5">
    <div class="row">
        <!-- Main Content -->
        <main class="col-md-12 px-md-4 mt-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>User Management System - Dashbaord</h2>
            </div>
            <div class="container my-5"> <!-- Increased margin-top here -->
                <span class="fa fa-dashboard"></span><strong> My Dashboard</strong>
                
                <div class="row mt-5">
                    <!-- User Stats Panels -->
                    <div class="col-sm-6 col-md-3 mb-3">
                        <div class="card bg-primary text-white text-center">
                            <div class="card-body">
                                <h1>0</h1>
                                <p class="card-title">Total Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-3">
                        <div class="card bg-success text-white text-center">
                            <div class="card-body">
                                <h1>0</h1>
                                <p class="card-title">Active Users</p>
                            </div>
                        </div>
                    </div>        
                    <div class="col-sm-6 col-md-3 mb-3">
                        <div class="card bg-warning text-white text-center">
                            <div class="card-body">
                                <h1>0</h1>
                                <p class="card-title">Pending Users</p>
                            </div>
                        </div>
                    </div>                                                    

                    <div class="col-sm-6 col-md-3 mb-3">
                        <div class="card bg-danger text-white text-center">
                            <div class="card-body">
                                <h1>0</h1>
                                <p class="card-title">Deleted Users</p>
                            </div>
                        </div>
                    </div>                            

                </div>
            </div>
        </main>

<!-- JS Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
