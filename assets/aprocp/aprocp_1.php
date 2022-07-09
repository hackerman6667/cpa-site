<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $my_var = file_get_contents('aprocp_1.html');
    echo $my_var;
}
?>