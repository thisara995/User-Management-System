<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h3>Forget Password</h3>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>You can reset your password here.</p>
                    </div>
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="input-group">
                                <input type="email" id="email" name="email" placeholder="Email address" class="form-control" type="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">New Password</label>
                            <div class="input-group">
                                <input type="password" id="newpsw" name="newpsw" placeholder="New Password" class="form-control" type="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" id="conpsw" name="conpsw" placeholder="Confrim Password" class="form-control" type="email" required>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <input name="recover-submit" class="btn btn-dark btn-block" value="Reset Password" type="submit">
                        </div>
                        <input type="hidden" name="token" id="token" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
