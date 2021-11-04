<?php

namespace App\Models;

use App\Models\SuhuPh;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kolam extends Model
{
    use HasFactory;
    protected $table = 'kolam_tb';
    
    public function suhuPh() {
        return $this->belongsTo(SuhuPh::class,'id_kolam_foreign','id');
    }
}
