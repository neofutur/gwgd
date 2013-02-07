<?php
ob_start();
ob_implicit_flush(0);

require_once 'user/casimir-conf.php';
require_once 'inc/Casimir.php';


$casimir = new Casimir();
$casimir->handleRequest();

require_once 'inc/header.php';

$casimir->showForm();

require_once 'inc/footer.php';

$casimir->print_gzipped_page();
?>
