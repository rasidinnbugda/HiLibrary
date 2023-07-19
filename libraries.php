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
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="card-title d-inline-block">Libraries</h3>
                            <a href="add-library" class="btn btn-sm btn-success ms-2"><i class="bi bi-plus"></i> Add Library</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table data-table">
                                    <thead>
                                        <tr>
                                            <td style="width: 25px">#</td>
                                            <td>Library Name</td>
                                            <td style="width: 200px">Process</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $libraries = $db->prepare("SELECT * FROM libraries");
                                        $libraries->execute(array());
                                        $get_libraries = $libraries->fetchAll(PDO::FETCH_ASSOC);

                                        $i = 1;

                                        foreach ($get_libraries as $row) { ?>
                                        
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row["library_name"]; ?></td>
                                            <td>
                                                <a href="library-edit?library_id=<?php echo $row["library_id"]; ?>" class="btn btn-sm btn-primary"><i class="bi bi-cpu"></i> Manage</a>
                                                <a href="apps/library.php?library_delete_id=<?php echo $row["library_id"]; ?>" class="btn btn-sm btn-danger ms-2"><i class="bi bi-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>

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
        $('#dataTable').DataTable( {
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

    <script>
        <?php if(isset($_SESSION["updateSuccess"])) { ?>
        toastr.success('Changes saved successfully!')
        <?php unset($_SESSION["updateSuccess"]); }elseif(isset($_SESSION["null"])) { ?>
        toastr.warning('Please fill in the required fields (*)!')
        <?php unset($_SESSION["null"]); }elseif(isset($_SESSION["error"])) { ?>
        toastr.error('An unexpected error has occurred!')
        <?php unset($_SESSION["error"]); }elseif(isset($_SESSION["addSuccess"])) { ?>
        toastr.success('Library successfully added!')
        <?php unset($_SESSION["addSuccess"]); }elseif(isset($_SESSION["deleteSuccess"])) { ?>
        toastr.success('Library successfully deleted!')
        <?php unset($_SESSION["deleteSuccess"]); } ?>
    </script>
</body>
</html>