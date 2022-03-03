<?php
error_reporting(E_ALL);
ini_set('display_errors', 'ON');

include __DIR__ . '/include/functions.php';
$currentPage = 'about';
$navigation = getNavigation($currentPage);
// $navigation = getNavigation('index');
$title = 'Über Mich';

include __DIR__ . '/include/layout.php';
