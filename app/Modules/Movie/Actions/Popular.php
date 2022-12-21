<?php

namespace App\Modules\Movie\Actions;

use Illuminate\Http\Response;
use App\Modules\Movie\Services\MovieInterface;
use App\Modules\Movie\Requests\Popular as Request;

class Popular extends AbstractAction
{
    public function __construct(Request $request, MovieInterface $service)
    {
        $this->service = $service;
        $this->request = $request;
    }

    public function __invoke(): Response
    {
        return response($this->service->getPopular());
    }
}
