<?php

$_SESSION['name'] = 'Test';

view("index.view.php", [
    'heading' => 'Home',
]);
