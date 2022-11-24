@extends('Admin.app')
@section('content-title', 'Master Project')
@section('title','Master Project')
@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card header py-3">
                <h6 class="m-2 font-weight-bold text-primary"> DATA SISWA</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thread>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                            @foreach($data as $i => $item)
                        <tr>
                            <th scope=" row">{{ ++$i }}</th>
                            <td>{{ $item-> nama }}</td>
                            <td>
                                <a href="{{route('masterproject.show', $item->id)}}" onclick="show({{ $item->id }})"
                                    class="btn btn-sm btn-info">
                                    <i class="fas fa-folder-open"></i></a>
                                <a href="{{ route('masterproject.create')}}" class="btn btn-sm btn-success"><i
                                        class="fas fa-plus"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                    </thread>
                </table>
                <div class="card-footer d-flex justify-content-end">
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card header py-3">
                <h6 class="m-2 font-weight-bold text-primary"> PROJECT SISWA </h6>
            </div>
            <div id="project" class="card-body">
                <p class="text-center">pilih siswa terlebih dahulu</p>

            </div>
        </div>
    </div>
</div>
<script>
function show(id) {
    $.get('MasterProject/' + id, function(data) {
        $('#project').html(data);
    })

}
</script>
@endsection