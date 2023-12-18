<?php

echo '<h1> Big Index </h1>';

// include __DIR__ . '/f1.php';

echo '<h1> Big Index Middle </h1>';

include __DIR__ . '/f1.php';

require __DIR__ . '/f1.php';

// require  is only one realy correct, include nenaudojamas dabar jau;
echo '<h1> Big Index End </h1>';
