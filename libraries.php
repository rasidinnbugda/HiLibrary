<?php include_once 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libraries | HiLibrary</title>
    <!-- CSS: Bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon: Material Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- CSS: Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- CSS: DataTables -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
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
                    <div class="card h-100">
                        <div class="card-header">
                            <h3 class="card-title">Libraries</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="deneme" class="table">
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
                                        <tr>
                                            <td>4</td>
                                            <td>My Father's Library</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>My Father's Library</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>My Father's Library</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>My Father's Library</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>My Father's Library</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>My Father's Library</td>
                                            <td><a href="#" class="link-button"><i class="bi bi-eye-fill"></i> View</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>My Father's Library</td>
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
    <!-- JS: DataTables -->
    <script src="assets/js/datatables.min.js"></script>
    <!-- JS: script.js -->
    <script src="assets/js/script.js"></script>

    <script>
    $(document).ready(function() {
        $('#deneme').DataTable( {
            "language": {
                "lengthMenu": "Show _MENU_ entries",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Search:"
            }
        } );
    } );
    </script>
</body>
</html>