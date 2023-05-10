<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'namalengkap',
        'nomorktp',
        'nomorhp',
        'idkecamatan',
        'alamatlengkap',
        'idjenisperkara',
        'alasanketerangan',
    ];
}
