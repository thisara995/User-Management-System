<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            padding-top: 56px; /* Adjust based on navbar height */
        }

        .card {
            margin-top: 20px;
        }

        .btn-dark {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #23272b;
            border-color: #1d2124;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">User Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Admin-Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">Users</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome!</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuAvatar"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add User
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="userName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="userName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userUserName" class="form-label">User Name</label>
                                                <input type="text" class="form-control" id="userUserName" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="userEmail" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userMobile" class="form-label">Mobile Number</label>
                                                <input type="text" class="form-control" id="userMobile" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userPassword" required>
                                            </div>

                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="submit" class="btn btn-dark me-md-2">Save</button>
                                                <button type="reset" class="btn btn-dark">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br />

                        <div class="table-responsive">
                            <table id="userTable" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Role</th>
                                        <th>Last Login</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example row -->
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>johndoe</td>
                                        <td>johndoe@example.com</td>
                                        <td>(555) 123-4567</td>
                                        <td>Admin</td>
                                        <td>Yesterday</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="view_user.php?id=1" title="View User" class="btn-link">
                                                <button class="btn btn-dark btn-sm">
                                                    <i class="fas fa-eye"></i> View
                                                </button>
                                            </a>
                                            <a href="edit_user.php?id=1" title="Edit User" class="btn-link">
                                                <button class="btn btn-dark btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>
                                            </a>
                                            <form method="POST" action="delete_user.php" accept-charset="UTF-8" style="display:inline"
                                                onsubmit="return confirm('Confirm delete?');">
                                                <input type="hidden" name="user_id" value="1">
                                                <button type="submit" class="btn btn-dark btn-sm" title="Delete User">
                                                    <i class="fas fa-trash" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable();
        });
    </script>
</body>

</html>
