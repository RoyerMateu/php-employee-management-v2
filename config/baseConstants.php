<?php

$documentRoot = getcwd();

define("BASE_PATH", $documentRoot);

if (EXECUTION_FLOW)
    echo '<p>BASE_PATH -> ' . BASE_PATH . '</p>';

define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
define('DOMAIN', $_SERVER['HTTP_HOST']);
define('BASE_URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');

if (EXECUTION_FLOW)
    echo '<p>BASE_URL -> ' . BASE_URL . '</p>';
