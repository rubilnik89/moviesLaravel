<?php

namespace App\Modules\Movie\Actions;

use App\Modules\Movie\Services\MovieInterface;
use App\Modules\Movie\Requests\AbstractRequest;

abstract class AbstractAction
{
    protected AbstractRequest $request;
    protected MovieInterface $service;


    abstract public function __invoke();
}
