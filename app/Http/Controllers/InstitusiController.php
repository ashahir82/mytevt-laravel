<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;

class InstitusiController extends BaseController
{
    //
    public function senarai_institusi(Request $request)
    {
        $pusat = $request->pusat;
        $institusis = Kursus::select('pusat')
        ->where('pusat','like','%'.$pusat.'%')
        ->distinct()->get();
        return $this->sendResponse($institusis, 'ok...');
    }

    public function pusat_institusi(Request $request)
    {
        $pusat = $request->pusat;
        $institusis = Kursus::select('id', 'kursus')
        ->where('pusat',$pusat)->get();
        return $this->sendResponse($institusis, 'ok...');
    }
}
