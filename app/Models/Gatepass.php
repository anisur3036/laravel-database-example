<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gatepass extends Model
{
    protected $connection = 'erp';
    protected $table = 'Gate_Pass_Dtl';

    public function header()
    {
        return $this->belongsTo(GatepassHeader::class, 'Gt_ID', 'Gt_ID');
    }
}
