<?php

$page = $_GET['page'] ?? 'home';

include 'partials/header.php';
include 'partials/navbar.php';
?>

<div class="main-content">

<?php
switch ($page) {

    case 'properties':
        include 'pages/properties.php';
        break;

    case 'detail':
        include 'pages/property-detail.php';
        break;

    case 'about':
        include 'pages/about.php';
        break;

    case 'contact':
        include 'pages/contact.php';
        break;

    default:
        include 'pages/home.php';
}
?>
</div>

<?php
include 'partials/footer.php';
?>