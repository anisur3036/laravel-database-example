<?php

namespace App\Models;

use App\Models\Gatepass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GatepassHeader extends Model
{
    protected $connection = 'erp';

    protected $table = 'Gate_Pass_Hdr';

    public function gatepasses()
    {
        return $this->hasMany(Gatepass::class, 'Gt_ID', 'Gt_ID')->orderBy('Gt_Date', 'desc');
    }
}
