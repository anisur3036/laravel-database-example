<?php

namespace App\Http\Controllers;

use App\Models\Gatepass;
use App\Models\GatepassHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GatepassController extends Controller
{
    public function index()
    {
        $gatepass = DB::connection('erp')->table('Gate_Pass_Dtl')
            ->join(
                'Gate_Pass_Hdr',
                'Gate_Pass_Hdr.Gt_ID',
                '=',
                'Gate_Pass_Dtl.Gt_ID'
            )->selectRaw('Gate_Pass_Dtl.WONo, Gate_Pass_Dtl.Remarks as SKCL, Gate_Pass_Dtl.Color, Gate_Pass_Dtl.Size, Gate_Pass_Hdr.Gt_Date as IssueDate, sum(Qty) as total, sum(Gate_Pass_Dtl.ReturnQty) as ReturnQty')
            ->groupBy('Gate_Pass_Dtl.WONo')
            ->groupBy('Gate_Pass_Dtl.Remarks')
            ->groupBy('Gate_Pass_Dtl.Color')
            ->groupBy('Gate_Pass_Dtl.Size')
            ->groupBy('Gate_Pass_Hdr.Gt_Date')
            ->orderBy('Gate_Pass_Hdr.Gt_Date', 'desc')
            ->paginate();

        return $gatepass;

        // return view('erp.gatepass.index', [
        //     'gatepass' => $gatepass
        // ]);
    }
}
