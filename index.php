<?php

$url = 'http://'.$_SERVER['SERVER_NAME'].':8090/php-headless-wp/wordpress';

header('Location: '.$url);
exit();