<?php
if (!isset($_GET['url'])) {
    http_response_code(400);
    echo "Missing URL";
    exit;
}
$url = urldecode($_GET['url']);
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0\r\n"
    ]
];
$context = stream_context_create($opts);
header("Content-Type: video/mp2t");
readfile($url, false, $context);
