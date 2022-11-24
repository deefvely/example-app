<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use File;
use Illuminate\Http\Request;

class MasterSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = siswa::all();
        // retrun ($data);
        return view('admin.MasterSiswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.TambahSiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required' => ':attribute harus di isi dulu gaess',
            'min' => ':attribute minimal:min karakter maazeh',
            'max' => ':attribute maximal:max karakter mazzeh',
            'mimes' => 'file :attribute harus bertype jpg,png,jpeg',
            'size' => 'file yang di upload maksimal :size',
        ];
        $this->validate($request,[
            'nama' => 'required|min:5|max:50',
            'email' => 'required',
            'alamat' => 'required',
            'about' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png,gif,svg'
        ], $message);
        $file = $request->file('foto');

        $nama_file = time()."_".$file->getClientOriginalName();

        //proses upload
        $tujuan_upload = './public/img';
        $file->move($tujuan_upload,$nama_file);

        //proses insert database 
        siswa::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'about' => $request->about,
            'foto' => $nama_file
        ]);
        
        return redirect('/admin/MasterSiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Siswa::find($id);
        // $kontak = $data->kontak()->get();
     // return($kontak);
        return view('admin/Showsiswa', compact('data'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = siswa::find($id);
        return view('admin/EditSiswa', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message=[
            'required' => ':attribute harus di isi dulu gaess',
            'min' => ':attribute minimal:min karakter maazeh',
            'max' => ':attribute maximal:max karakter mazzeh',
            'mimes' => 'file :attribute harus bertype jpg,png,jpeg',
           
        ];
        $this->validate($request,[
            'nama' => 'required|min:5|max:50',
            'email' => 'required',
            'alamat' => 'required',
            'about' => 'required',
            'foto' => 'mimes:jpg,jpeg,png,gif,svg'
        ], $message);
    if($request->foto != ''){
        //dengan ganti foto 
        //hapus foto yang lama 
        $siswa=Siswa::find($id);
        file::delete('./template/img/'.$siswa->foto);
        $file = $request->file('foto');

        $nama_file = time()."_".$file->getClientOriginalName();

        //proses upload
        $tujuan_upload = './template/img/';
        $file->move($tujuan_upload,$nama_file);

        $siswa->nama=$request->nama;
        $siswa->alamat=$request->alamat;
        $siswa->email=$request->email;
        $siswa->about=$request->about;
        $siswa->foto=$nama_file;
        $siswa->save();
        return redirect('/admin/MasterSiswa'); 

       }else{
        //TANPA GANTI FOTO
        $siswa=Siswa::find($id);
        $siswa->nama=$request->nama;
        $siswa->alamat=$request->alamat;
        $siswa->email=$request->email;
        $siswa->about=$request->about;
        $siswa->save();
        return redirect('/admin/MasterSiswa'); 
       }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  

    }

    public function hapus($id)
    {
        $data=siswa::find($id)->delete();
        return redirect('/admin/MasterSiswa');

    }
}