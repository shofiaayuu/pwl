<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $primaryKey = 'nim'; //memanggil isi DB dengan primarykey
    protected $fillable =[
        'nim',
        'nama',
        'foto',
        'kelas_id',
        'jk' ,
        'tempat_lahir' ,
        'tanggal_lahir',
        'alamat',
        'hp',
    ];

    public function kelas()
    {
        return $this->belongsTo(KelasModel::class);
    }

    public function mhs_matkul()
    {
        return $this->hasMany(MhsMatkulModel::class);
    }
}
