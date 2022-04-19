<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
* @OA\Info(title="API CMS", version="1.0")
*
* @OA\Server(url="http://127.0.0.1:8000")
*/
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
