<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenTreadmill extends Model
{
    use HasFactory;

    protected $fillable = [
        'dokumen_mcu_id',
        'nama_file'
    ];

    public function dokumenMcu()
    {
        return $this->belongsTo(DokumenMcu::class);
    }
}
