<?php
//cloture la session
session_start();
session_unset();
session_destroy();
$indexPath = __DIR__ . '/../index.php';
header('Location:'.$indexPath);
exit;