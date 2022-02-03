<?php

namespace App\Http\Controllers;

use App\Models\Gatepass;
use App\Models\GatepassHeader;
use Illuminate\Http\Request;

class GatepassController extends Controller
{
    public function index()
    {
        $gatepass = Gatepass::with('header')
            ->paginate();

        return view('erp.gatepass.index', [
            'gatepass' => $gatepass
        ]);
    }
}
