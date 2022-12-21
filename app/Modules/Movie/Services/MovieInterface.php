<?php

namespace App\Modules\Movie\Services;

interface MovieInterface
{
    public function getPopular(): array;
    public function getLatest(): array;
}
