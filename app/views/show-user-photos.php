<?php include "app/views/header-user.php"; ?>
    <div class="container">
        <div class="div-users-photo">
            <?php
                $url = 'url';
                $i = 0;
                foreach ($data as $key => $value) {
                    echo '<div claa="div-users-photo-inside">';
                        echo "<img src='$value[$url]'>";
                    echo '</div>';
                    $i++;
                }
            ?>
        </div>
    </div>

 <?php   include "app/views/footer.php"; ?>