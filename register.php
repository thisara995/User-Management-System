<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h3>Register</h3>
                </div>
                <div class="card-body p-4">
                    <form method="post" action="#">
                        <div class="row">
                            <!-- Name input -->
                            <div class="col-md-6 mb-3">
                                <label for="registerName" class="form-label">Name</label>
                                <input type="text" id="registerName" class="form-control" placeholder="Enter your full name" required>
                            </div>

                            <!-- Username input -->
                            <div class="col-md-6 mb-3">
                                <label for="registerUsername" class="form-label">Username</label>
                                <input type="text" id="registerUsername" class="form-control" placeholder="Choose a username" required>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Email input -->
                            <div class="col-md-6 mb-3">
                                <label for="registerEmail" class="form-label">Email</label>
                                <input type="email" id="registerEmail" class="form-control" placeholder="Enter your email" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="registerEmail" class="form-label">Mobile Number</label>
                                <input type="email" id="registerEmail" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <!-- Password input -->
                            
                        </div>

                        <div class="row">

                             <div class="col-md-6 mb-3">
                                <label for="registerPassword" class="form-label">Password</label>
                                <input type="password" id="registerPassword" class="form-control" placeholder="Enter password" required>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="col-md-6 mb-3">
                                <label for="registerRepeatPassword" class="form-label">Repeat Password</label>
                                <input type="password" id="registerRepeatPassword" class="form-control" placeholder="Confirm your password" required>
                            </div>


                            <!-- Checkbox -->
                            <div class="col-md-12 d-flex justify-content-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input me-2" type="checkbox" id="registerCheck" required>
                                <label class="form-check-label" for="registerCheck">
                                    I agree to the terms
                                </label>
                            </div>
                        </div>


                        <!-- Register Button -->
                        <div class="d-grid gap-2">
                            <button class="btn btn-dark btn-block" type="submit">Register</button>
                        </div>

                        <!-- Register link -->
                        <div class="text-center mt-2">
                            <p>Already a Member? <a href="login.php">Login</a></p>
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
