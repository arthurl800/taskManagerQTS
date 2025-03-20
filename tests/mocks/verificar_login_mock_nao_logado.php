<?php
namespace Mocks;
require_once '/path/to/file.php'; 

function verificar_login() {
    header('Location: ./index.php');
    exit;
}
?>