<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    // protected $table = 'polies';
    protected $fillable = [
        'id_poli',
        'nama_poli',
        
    ];

    // protected $guarded = [''];
    
    // protected $primaryKey = 'id_pasien';
    // protected $keyType = 'char';
    // public $incrementing = false;

    // public function getRouteKeyName()
    // {
    //     return 'id_pasien';
    // }
}
