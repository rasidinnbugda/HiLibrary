<?php include_once 'includes/config.php'; include 'includes/control.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
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
</head>
<body>
    <!-- Header -->
    <?php include('includes/header.php'); ?>
    
    <!-- /Header -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Sidebar -->
        <?php include('includes/sidebar.php'); ?>
        
        <!-- /Sidebar -->
        <main>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Admin Information</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="apps/admin-settings.php">
                                <div class="form-group mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control form-control-sm" id="username" name="admin_username" placeholder="Username.." value="<?php echo $get_admin_data["admin_username"]; ?>" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control form-control-sm" id="email" name="admin_email" placeholder="E-mail.." value="<?php echo $get_admin_data["admin_email"]; ?>" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Full Name</label>
                                    <input type="text" class="form-control form-control-sm" id="email" name="admin_full_name" placeholder="Full Name.." value="<?php echo $get_admin_data["admin_full_name"]; ?>" autocomplete="off">
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="adminInformationUpdate" class="btn btn-sm btn-success btn-block"><i class="bi bi-pencil-square"></i> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group mb-3">
                                    <label for="old-password">Old Passord</label>
                                    <input type="password" class="form-control form-control-sm" id="old-password" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="new-password">New Passord</label>
                                    <input type="password" class="form-control form-control-sm" id="new-password" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="retype-new-password">Retype New Passord</label>
                                    <input type="password" class="form-control form-control-sm" id="retype-new-password" autocomplete="off">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-sm btn-success btn-block"><i class="bi bi-pencil-square"></i> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- /Page Wrapper -->

    <!-- JS: JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- JS: Bootstrap 5 -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- JS: Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- JS: script.js -->
    <script src="assets/js/script.js"></script>

    <script>
        <?php if(isset($_SESSION["updateSuccess"])) { ?>
        toastr.success('Changes saved successfully!')
        <?php unset($_SESSION["updateSuccess"]); }elseif(isset($_SESSION["null"])) { ?>
        toastr.warning('Please do not leave any blank spaces!')
        <?php unset($_SESSION["null"]); }elseif(isset($_SESSION["error"])) { ?>
        toastr.warning('An unexpected error has occurred!')
        <?php unset($_SESSION["error"]); } ?>
    </script>
</body>
</html>