<?php include_once 'includes/config.php'; ?>
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
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="text-center mb-2">My Library</h3>
                            <div class="d-flex justify-content-center align-items-center flex-wrap">
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column">
                                    <i class="bi bi-journal-bookmark-fill app-icon"></i>
                                    <h4 class="app-title">Library Information</h4>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column disabled">
                                    <i class="bi bi-images app-icon"></i>
                                    <h4 class="app-title">Library Album</h4>
                                    <span class="ribbon"><p>Coming soon</p></span>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column disabled">
                                    <i class="bi bi-hash app-icon"></i>
                                    <h4 class="app-title">Social Media Manager</h4>
                                    <span class="ribbon"><p>Coming soon</p></span>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column disabled">
                                    <i class="bi bi-megaphone-fill app-icon"></i>
                                    <h4 class="app-title">Announcement Manager</h4>
                                    <span class="ribbon"><p>Coming soon</p></span>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column">
                                    <i class="bi bi-book-half app-icon"></i>
                                    <h4 class="app-title">Registered Books</h4>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column">
                                    <i class="bi bi-tags-fill app-icon"></i>
                                    <h4 class="app-title">Categories</h4>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column">
                                    <i class="bi bi-bookshelf app-icon"></i>
                                    <h4 class="app-title">Bookshelves</h4>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column disabled">
                                    <i class="bi bi-file-richtext app-icon"></i>
                                    <h4 class="app-title">e-Book Manager</h4>
                                    <span class="ribbon"><p>Coming soon</p></span>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column disabled">
                                    <i class="bi bi-people-fill app-icon"></i>
                                    <h4 class="app-title">Membership Manager</h4>
                                    <span class="ribbon"><p>Coming soon</p></span>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column disabled">
                                    <i class="bi bi-envelope-fill app-icon"></i>
                                    <h4 class="app-title">Message Manager</h4>
                                    <span class="ribbon"><p>Coming soon</p></span>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column">
                                    <i class="bi bi-database-fill app-icon"></i>
                                    <h4 class="app-title">Database Operations</h4>
                                </a>
                                <a href="#" class="app-box d-flex align-items-center justify-content-start flex-column">
                                    <i class="bi bi-gear-fill app-icon"></i>
                                    <h4 class="app-title">Library Settings</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="text-center mb-1">14566</h3>
                                    <p class="text-center mb-0">Registered Book</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="text-center mb-1">17</h3>
                                    <p class="text-center mb-0">Category</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="text-center mb-1">156</h3>
                                    <p class="text-center mb-0">Bookshelf</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 class="text-center mb-1">2609</h3>
                                    <p class="text-center mb-0">Registered Member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- /Page Wrapper -->

    <!-- JS: Bootstrap 5 -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- JS: script.js -->
    <script src="assets/js/script.js"></script>
</body>
</html>