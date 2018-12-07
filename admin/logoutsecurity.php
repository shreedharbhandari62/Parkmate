<?php
session_start();
include '../app/call.php';
session_destroy();
redirect ('securitylogin.php');
?>