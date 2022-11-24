@extends('Admin.app')
@section('content-title', 'Master Siswa')
@section('title','Master siswa')
@section('content')
<a class="btn btn-success" href="{{ route('MasterSiswa.create')}}"> Tambah data</a>
<div class=" row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card header py-3">
                <!-- <h6 class="m-0 font-weight-bold text-primary"> DATA SISWA</h6> -->
            </div>
            <div class="card-body">
                <table class="table">
                    <thread>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>

                    </thread>
                    <tbody>
                        @foreach($data as $i => $item )
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $item-> nama }}</td>
                            <td>{{ $item-> alamat }}</td>
                            <td>{{ $item-> email }}</td>
                            <td>
                                <a href="{{ route ('MasterSiswa.show', $item->id)}}"
                                    class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-info-circle"></i></a>
                                <a href="{{ route ('MasterSiswa.edit', $item->id)}}"
                                    class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-edit"></i></a>
                                <a href="{{ route ('mastersiswa.hapus', $item->id)}}"
                                    class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection