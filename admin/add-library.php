<?php
include_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Library | HiLibrary</title>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Library</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="apps/library.php">
                                <div class="form-group mb-3">
                                    <label for="libraryName">Library Name *</label>
                                    <input type="text" class="form-control form-control-sm" id="libraryName" name="library_name" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="libraryDescription">Library Description</label>
                                    <textarea rows="6" class="form-control form-control-sm" id="libraryDescription" name="library_description" autocomplete="off"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="addLibrary" class="btn btn-sm btn-success btn-block"><i class="bi bi-plus"></i> Add Library</button>
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
        <?php if(isset($_SESSION["null"])) { ?>
        toastr.warning('Please fill in the required fields (*)!')
        <?php unset($_SESSION["null"]); }elseif(isset($_SESSION["error"])) { ?>
        toastr.error('An unexpected error has occurred!')
        <?php unset($_SESSION["error"]); } ?>
    </script>
</body>
</html>