<?php
header("Location: index.php");

session_start();
unset($_SESSION['emailUser']);
unset($_SESSION['senhaUser']);
session_destroy();
