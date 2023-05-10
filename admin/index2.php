<?php 
include_once 'top.php';
include_once 'menu.php';
 ?>
<div id="layoutSidenav_content">
                <main>
                    <!-- <div class="container-fluid px-4">
                        <h1>SELAMAT DATANG</h1>
                    </div> -->

                    <?php
                    $url = $_GET['url'];
                    if($url == 'dashboard'){
                        include_once 'dashboard.php';
                    }elseif(!empty($url)){
                        include_once ''.$url.'.php';
                    }else {
                        'dashboard.php';
                    }

                    ?>
                </main>

<?php include_once 'bottom.php'; ?>    