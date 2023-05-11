<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    // protected $primaryKey = 'kode_mk';
    // protected $keyType = 'string';

    public function mhs_matkul()
    {
        return $this->hasMany(MhsMatkulModel::class,'matkul_id','id');
    }
}
