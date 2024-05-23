<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;

class KursusController extends BaseController
{
    //

    public function senarai_kursus(Request $request)
    {
        $senarais = Kursus::select('id', 'pusat', 'kursus')->paginate(5);
        return $this->sendResponse($senarais, 'ok...');
    }
}
