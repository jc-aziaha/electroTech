<?php
namespace App\Trait;

    trait TimeZoneTrait
    {
        public function changeTimeZone(string $timeZone) : void
        {
            \date_default_timezone_set($timeZone);
        }
    }