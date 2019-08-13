<?php require_once('../../../private/initialize.php'); ?>

<?php 
    $test - $_GET['TEST'] ?? '';

    if ($TEST == '404') {
        error_404();
    } else if ($TEST == '404') {
        error_500();
    } else {
        echo 'No Error';
    }
?>