<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">User Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Other nav items if needed -->
            </ul>
            <div class="d-flex">
                <a href="register.php" class="btn btn-outline-light me-2">Register</a>
                <a href="login.php" class="btn btn-outline-light">Login</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="#">
                        <!-- Username input -->
                        <div class="mb-4">
                            <label class="form-label" for="loginName">Username</label>
                            <input type="email" id="loginName" class="form-control" placeholder="Enter Username or Email" />
                        </div>

                        <!-- Password input -->
                        <div class="mb-4">
                            <label class="form-label" for="loginPassword">Password</label>
                            <input type="password" id="loginPassword" class="form-control" placeholder="Enter your Password" />
                        </div>

                        <!-- Remember me and Forgot password links -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-start">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck">Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <a href="forget-password.php">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Login button -->
                        <div class="d-grid gap-2">
                            <button class="btn btn-dark btn-block" type="button">Login</button>
                        </div>

                        <!-- Register link -->
                        <div class="text-center mt-2">
                            <p>Not a member? <a href="Register.php">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
