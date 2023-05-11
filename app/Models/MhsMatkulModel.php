<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhsMatkulModel extends Model
{
    use HasFactory;
    protected $table = 'mhs_matkul';

    protected $fillable = [
        'mahasiswa_id',
        'matkul_id',
        'nilai,'
    ];

    public function mahasiswa(){
        return $this->belongsToMany(MahasiswaModel::class);
    }
    public function mata_kuliah(){
        return $this->belongsTo(MataKuliahModel::class,'matkul_id','id');
    }
}
