<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use App\Models\KelasModel;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mhs = MahasiswaModel::all(); //diubah menjadi with() yang menyatakan relasi
        $mhs = MahasiswaModel::with('kelas')->get();
        return view('mahasiswas.mahasiswas')
            ->with('mhs',$mhs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = KelasModel::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswas.create_mahasiswas',['kelas' => $kelas])
           ->with('url_form',url('/mahasiswas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim'=>'required|string|max:10|unique:mahasiswas,nim',
            'nama'=>'required|string|max:50',
            'kelas_id'=>'required',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15'
        ]);

        MahasiswaModel::insert($request->except(['_token']));

        // $data = MahasiswaModel::create($request->except(['_token']));
        return redirect('mahasiswas')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');


    //     $mhs = new MahasiswaModel;
    //     $mhs->nim = $request->get('Nim');
    //     $mhs->nama = $request->get('Nama');
    //     $mhs->jk = $request->get('JK');
    //     $mhs->tempat_lahir = $request->get('Tempat Lahir');
    //     $mhs->tanggal_lahir = $request->get('Tanggal Lahir');
    //     $mhs->alamat = $request->get('Alamat');
    //     $mhs->hp = $request->get('HP');

    //     $kelas = new KelasModel;
    //     $kelas->id = $request->get('Kelas');

    //     //fungsi eloquent untuk menambahkan data dengan relasi belongsTo
    //     $mhs->kelas()->associate($kelas);
    //     $mhs->save();

    // $data = MahasiswaModel::create($request->except(['_token']));

    //     //jika data berhasil ditambahkan, akan kembali ke halaman utama 
    //     return redirect()->route('mahasiswas.index')
    //         ->with('success','Mahasiswa Berhasil Ditambahkan');
          

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data berd nim
        //code sebelum dibuat relasi : 
      
        $mahasiswas = MahasiswaModel::where('id',$id)->get();
        return view('mahasiswas.detail_mahasiswas', ['mahasiswas' => $mahasiswas[0]]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswas = MahasiswaModel::where('id',$id)->get();
        $kelas = KelasModel::all();
        return view('mahasiswas.create_mahasiswas',['kelas' => $kelas])
            ->with('mhs',$mahasiswas[0])
            ->with('url_form',url('/mahasiswas/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        //Melakukan validasi data
        $request->validate([
            'nim'=>'required|string|max:10|unique:mahasiswas,nim,'.$id,
            'nama'=>'required|string|max:50',
            'kelas_id'=>'required',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15'
        ]);

        MahasiswaModel::where('id', '=', $id)->update($request->except(['_token','_method']));
        return redirect('mahasiswas')
            ->with('success','Mahasiswa Berhasil Ditambahkan');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('mahasiswas')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
