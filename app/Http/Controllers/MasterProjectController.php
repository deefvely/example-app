<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\project;
use File;

class MasterProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project= project::all(); 
        $data = siswa::all('id', 'nama');
        return view('admin.MasterProject', compact('data','project'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.TambahProject');
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
            
        ];
        $this->validate($request,[
            'siswa_id' => 'required',
            'nama_projek' => 'required |min:5|max:50',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png,gif,svg'
        ], $message);

        $file = $request->file('foto');

        $nama_file = time()."_".$file->getClientOriginalName();

        //proses upload
        $tujuan_upload = './public/img';
        $file->move($tujuan_upload,$nama_file);

        //proses insert database 
        project::create([
            'siswa_id' => $request->siswa_id,
            'nama_projek' => $request->nama_projek,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'foto' => $nama_file,
        ]);
        
        return redirect('/admin/MasterProject');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Siswa::find($id)->project()->get();
        return view('admin/ShowProject', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Projects::find($id);
        return view('admin/EditProject', compact('data'));
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
            'max'=>':attribute maksimal: max karakter dong'
        ];
        $this->validate($request,[
            'nama_projek' => 'required |min:5|max:50',
            // 'tanggal' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png,gif,svg'
            
        ], $message);
        
        
    if($request->foto != ''){
        //dengan ganti foto 
        //hapus foto yang lama 
        $projects=Projects::find($id);
        file::delete('./public/img/'.$siswa->foto);
        $file = $request->file('foto');

        $nama_file = time()."_".$file->getClientOriginalName();

        //proses upload
        $tujuan_upload = './public/img/';
        $file->move($tujuan_upload,$nama_file);

        $projects->nama_projek=$request->nama_projek;
        $projects->deskripsi=$request->deskripsi;
        $projects->foto=$nama_file;
        $projects->save();
        return redirect('/admin/MasterProject'); 

       }else{
        //TANPA GANTI FOTO
        $projects=Projects::find($id);
        $projects->nama_projek=$request->nama_projek;
        $projects->deskripsi=$request->deskripsi;
        $projects->update();
        return redirect('admin/MasterProject'); 
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
        $data=Projek::destroy($id);
        return redirect('/admin/MasterProject');

    }
}