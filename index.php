<?php

$page          = $_GET['page'];
$page_template = __DIR__ . '/pages/' . $page . '.php';
if ( ! file_exists($page_template)) {
    header('Location: ' . '?page=home');
}
?>


<?php
    include './components/header.php';
    include $page_template;
    if(!isset($_GET['nofooter'])) {
        include './components/footer.php';
    }
?>
