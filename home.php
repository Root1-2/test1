<?php
session_start();

if (isset($_SESSION['username'])) {

    include 'product.php';

} else {

    include 'product.php';

}
?>