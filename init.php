<?php
    // Load class based on request
    spl_autoload_register(function ($class) {
        include "classes/{$class}.php";
    });
?>
