<!DOCTYPE html>
<html lang="tr">
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
    <header class="navbar sticky-top">
        <nav class="nav-content">
            <div class="me-auto d-flex align-items-center justify-content-center">
                <a href="index.php" class="nav-brand me-2">
                    <img src="assets/img/HiDocs.svg" alt="HiDocs">
                </a>
            </div>
            <ul class="navbar-menu d-flex align-items-center justify-content-center ms-auto">
                <ul class="navbar-menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <span class="nav-text">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-text">
                                Documentations
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-text">
                                HiBlog
                            </span>
                        </a>
                    </li>
                    <li class="nav-item px-2 m-0 w-32">
                        <span class="vr h-100"></span>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/rasidinnbugda/HiLibrary" target="_blank" class="nav-link">
                            <span class="nav-text">
                                <i class="bi bi-github"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </ul>
        </nav>
    </header>
    <!-- /Header -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <aside class="sidebar">
            <ul class="chapter-area">
                <li class="chapter-item title-item">
                    <a>My Libraries</a>
                </li>
                <li class="chapter-item">
                    <a href="#">Library at Home</a>
                </li>
                <li class="chapter-item">
                    <a href="#">Big Library</a>
                </li>
                <li class="chapter-item">
                    <a href="#">Library at School</a>
                </li>
                <li class="chapter-item">
                    <a href="#">My Father's Library</a>
                </li>
                <li class="chapter-item title-item">
                    <a>Content</a>
                </li>
                <li class="chapter-item">
                    <a href="#">Setup HiBlog</a>
                </li>
                <li class="chapter-item">
                    <a href="#">Setup HiBlog</a>
                </li>
                <li class="chapter-item">
                    <a href="#">Setup HiBlog</a>
                </li>
                <li class="chapter-item">
                    <a href="#">Setup HiBlog</a>
                </li>
            </ul>
        </aside>
        <main>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3 class="card-title">Libraries</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td style="width: 20px;">#</td>
                                            <td>Library Name</td>
                                            <td style="width: 150px;">Process</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Library at Home</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Big Library</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Library at School</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>My Father's Library</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100">
                        aa
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