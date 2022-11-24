@extends('Admin.app')
@section('content-title', 'Master Project')
@section('title','Master Project')
@section('content')




<div class=" row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card header py-3">
                <h6 class="m-2 font-weight-bold text-primary">PROJECT SISWA</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    @if ($data->isEmpty())
                    <h6 class="text-center"> Siswa Belum Memiliki Project</h6>
                </table>
            </div>
        </div>
    </div>
</div>
@else
<div class=" row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card header py-3">
                <h6 class="m-2 font-weight-bold text-primary"> DATA SISWA</h6>
            </div>
            <div class="card-body">
                <table class="table">

                    @foreach($data as $item)
                    <div class="card">
                        <div class="card-header">
                            {{ $item->nama_projek }}
                        </div>
                        <div class="card-body">
                            <h5> Tanggal project</h5>
                            {{ $item->tanggal }}
                            <h5> Deskripsi project</h5>
                            {{ $item->deskripsi }}

                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
@endsection