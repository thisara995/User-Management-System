<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation with Profile and Dropdown -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">User Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <!-- Profile Section -->
                <ul class="navbar-nav ms-auto">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="#">Welcome!</a>
                    </li>
                </ul>
                    <!-- Dropdown for user profile -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-user fa-2x me-2"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Centered Form Container -->
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header bg-dark text-white text-center">
                        <h3>Account Details</h3>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group row mb-3">
                                    <label for="username" class="col-4 col-form-label">User Name*</label>
                                    <div class="col-8">
                                        <input id="username" name="username" placeholder="Username" class="form-control" required="required" type="text">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="name" class="col-4 col-form-label">First Name</label>
                                    <div class="col-8">
                                        <input id="name" name="name" placeholder="First Name" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="lastname" class="col-4 col-form-label">Last Name</label>
                                    <div class="col-8">
                                        <input id="lastname" name="lastname" placeholder="Last Name" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="nickname" class="col-4 col-form-label">Nick Name*</label>
                                    <div class="col-8">
                                        <input id="nickname" name="nickname" placeholder="Nick Name" class="form-control" required="required" type="text">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="displayname" class="col-4 col-form-label">Display Name Public as</label>
                                    <div class="col-8">
                                        <select id="displayname" name="displayname" class="form-select">
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="email" class="col-4 col-form-label">Email*</label>
                                    <div class="col-8">
                                        <input id="email" name="email" placeholder="Email" class="form-control" required="required" type="email">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="website" class="col-4 col-form-label">Website</label>
                                    <div class="col-8">
                                        <input id="website" name="website" placeholder="Website" class="form-control" type="url">
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-3">
                                    <label for="newpass" class="col-4 col-form-label">New Password</label>
                                    <div class="col-8">
                                        <input id="newpass" name="newpass" placeholder="New Password" class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-dark">Update My Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>
</html>
