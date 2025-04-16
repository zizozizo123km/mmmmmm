<?php
header("Content-Type: text/plain");
$url = "http://wanicelife.com:8880/get.php?username=D12m3967&password=74185011&type=m3u_plus";
echo file_get_contents($url);
