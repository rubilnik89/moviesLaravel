<?php

namespace App\Modules\Movie\Controllers;

use Illuminate\Http\Response;
use App\Modules\Movie\Actions as Actions;
use App\Modules\Movie\Requests as Requests;
use Illuminate\Routing\Controller as BaseController;

class MovieController extends BaseController
{
    public function popular(Actions\Popular $action, Requests\Popular $request): Response
    {
        return $action($request);
    }

    public function latest(Actions\Latest $action, Requests\Latest $request): Response
    {
        return $action($request);
    }
}
