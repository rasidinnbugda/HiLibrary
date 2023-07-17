<?php include_once 'includes/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | HiLibrary</title>
    <!-- CSS: Bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon: Material Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- CSS: Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- CSS: style.css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .content {
            height: 100vh;
            width: 100%;
            background-color: #e9ecef;
        }

        .row {
            width: 100%;
            max-width: 360px;
        }

        .card {
            box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
        }

        .card-body {
            font-size: 14px;
        }

        p {
            margin-bottom: 16px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center content">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <img src="assets/img/hiblog.svg" alt="" width="80px" class="mb-2">
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p>Fill in the information to log in.</p>
                        <form method="POST" enctype="multipart/form-data" action="apps/login-action.php">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="admin_username" placeholder="Username">
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="admin_password" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button type="submit" name="loginAction" class="btn btn-sm btn-purple btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS: JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- JS: Bootstrap 5 -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- JS: Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- JS: script.js -->
    <script src="assets/js/script.js"></script>

    <script>
        <?php if(isset($_SESSION["null"])) { ?>
        toastr.warning('Please do not leave any blank spaces!')
        <?php unset($_SESSION["null"]); }elseif(isset($_SESSION["error"])) { ?>
        toastr.error('You entered the wrong username or password!')
        <?php unset($_SESSION["error"]); } ?>
    </script>
</body>
</html>