<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Googlebot') !== false) {
    echo "Googlebot geldi!";
} elseif (strpos($userAgent, 'YandexBot') !== false) {
    echo "YandexBot geldi!";
} elseif (strpos($userAgent, 'bingbot') !== false) {
    echo "Bingbot geldi!";
} else {
    echo "Diğer bot veya tarayıcı geldi.";
}

?>