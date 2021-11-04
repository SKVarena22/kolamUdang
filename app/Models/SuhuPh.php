<?php

namespace App\Models;

use App\Models\Kolam;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuhuPh extends Model
{
    use HasFactory;
    protected $table = 'suhu_ph_tb';

    public function kolam() {
        return $this->hasMany(Kolam::class,'id','id_kolam_foreign');
    }
}
