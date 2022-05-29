<?php

require_once dirname(__DIR__).'/src/Core.php';

Core::init();

print_r(Request::$method);
?>