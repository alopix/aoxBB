<?php

require_once __DIR__.'/../aoxBB/AoxBBKernel.php';

$kernel = new AoxBBKernel('prod', false);
$kernel->handle()->send();
