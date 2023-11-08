<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($userAgent, 'Googlebot') !== false && strpos($userAgent, 'YandexBot') !== false && strpos($userAgent, 'bingbot') !== false) {
    echo "Googlebot, YandexBot ve Bingbot geldi!";
} else {
    echo "Bu koşulu sağlayan botlar gelmedi.";
}
?>