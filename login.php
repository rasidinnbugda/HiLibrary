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

        .btn,.form-control {
            font-size: 12px;
        }

        .form-control:focus {
            box-shadow: none;
        }
        
        .btn-block {
            width: 100%;
            background-color: rgb(149, 56, 158);
            color: #fff;
        }

        .btn-block:hover {
            background-color: rgba(150, 56, 158, 0.9);
            color: #fff;
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
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Username">
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control form-control-sm" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-sm btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS: Bootstrap 5 -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- JS: script.js -->
    <script src="assets/js/script.js"></script>
</body>
</html>