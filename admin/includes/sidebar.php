<?php 
if(basename($_SERVER['PHP_SELF'])==basename(__FILE__)){
    header("Location: ../");
    exit();
}
?>
<aside class="sidebar">
            <ul class="chapter-area">
                <li class="chapter-item title-item">
                    <a><?php echo $lang["myLibraries"] ?></a>
                </li>
                <?php
                
                $libraries = $db->prepare("SELECT * FROM libraries");
                $libraries->execute(array());
                $get_libraries = $libraries->fetchAll(PDO::FETCH_ASSOC);

                foreach($get_libraries as $row) { ?>
<li class="chapter-item">
                    <a href="#"><?php echo $row["library_name"]; ?></a>
                </li>
                <?php } ?>

                <li class="chapter-item title-item">
                    <a><?php echo $lang["management"] ?></a>
                </li>
                <li class="chapter-item">
                    <a href="libraries"><?php echo $lang["listElement1"] ?></a>
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