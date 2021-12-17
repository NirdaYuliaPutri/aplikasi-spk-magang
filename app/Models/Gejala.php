<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';

    protected $fillable = ['id', 'created_at', 'update_at'];

    public function penyakit() {
        return $this->belongsTo(Penyakit::class);

    }
    
    public function pasien() {
        return $this->belongsTo(Pasien::class);

    }


}
