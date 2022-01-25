<?php

$page          = trim($_SERVER['REQUEST_URI'], '/');
$page_template = __DIR__ . '/pages' . $_SERVER['REQUEST_URI'] . '.html';
//if ( ! file_exists($page_template)) {
//    header('Location: ' . '/home');
//}
?>


<?php
include './components/header.php';
include $page_template;
include './components/footer.php';
?>
