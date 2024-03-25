<?php
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($userAgent, 'Googlebot') !== false || strpos($userAgent, 'YandexBot') !== false || strpos($userAgent, 'bingbot') !== false) { ?>
 // googlebot veya yandexbot veya bingbot geldi..
 
<?php } else { ?>
      // bot dışında gelen veri.
    <?php }
} else { ?<
  // bot dışında gelen veri.
<?php }
?>
