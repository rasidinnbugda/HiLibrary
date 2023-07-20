<?php 
if(basename($_SERVER['PHP_SELF'])==basename(__FILE__)){
    header("Location: ../");
    exit();
}
?>
<header class="navbar sticky-top">
        <nav class="nav-content">
            <div class="me-auto d-flex align-items-center justify-content-center">
                <a href="index" class="nav-brand me-2">
                    <img src="assets/img/HiDocs.svg" alt="HiDocs">
                </a>
            </div>
            <ul class="navbar-menu d-flex align-items-center justify-content-center ms-auto">
                <ul class="navbar-menu">
                    <li class="nav-item">
                        <a href="index" class="nav-link">
                            <span class="nav-text">
                                <?php echo $lang["home"] ?>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-text">
                                <?php echo $lang["documentations"]; ?>
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
                    <li class="nav-item content-box">
                        <a class="nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-text"><?php echo $get_admin_data["admin_full_name"]; ?></span>
                            <i class="bi bi-person-fill dropdown-icon ms-2"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a href="admin-settings" class="dropdown-item p-2 d-flex align-items-center justify-content-start">
                                    <?php echo $lang["userMenu1"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="login-settings" class="dropdown-item p-2 d-flex align-items-center justify-content-start">
                                    <?php echo $lang["userMenu2"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="apps/logout.php" class="dropdown-item p-2 d-flex align-items-center justify-content-start">
                                    <?php echo $lang["userMenu3"]; ?>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item content-box">
                        <a class="nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-text"><?php echo $lang["language"]; ?></span>
                            <i class="bi bi-translate dropdown-icon ms-2"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a href="?lang=en" class="dropdown-item p-2 d-flex align-items-center justify-content-start">
                                    <?php echo $lang["en"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="?lang=tr" class="dropdown-item p-2 d-flex align-items-center justify-content-start">
                                    <?php echo $lang["tr"]; ?>
                                </a>
                            </li>
                        </ul>
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