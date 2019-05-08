<?php

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

echo Carbon::now()->subMinutes(5)->subSeconds(60)->diffForHumans();
