<?php
error_reporting(E_ALL);
ini_set('display_errors', 'ON');

include __DIR__ . '/include/functions.php';
$currentPage = 'contact';
$navigation = getNavigation($currentPage);
// $navigation = getNavigation('index');
$title = 'Kontakt';

include __DIR__ . '/include/layout.php';
