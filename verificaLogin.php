<?php
session_start();
if (!isset($_SESSION['emailCliente']) && !isset($_SESSION['senhaCliente'])) {
    header("Location: entrada.php");
}
