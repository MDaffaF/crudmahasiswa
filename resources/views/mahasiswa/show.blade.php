@extends('mahasiswa.layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Show Mahasiswa</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('mahasiswa.index') }}">Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama: </strong>
            {{ $mahasiswa->nama }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kelas: </strong>
            {{ $mahasiswa->kelas }}
        </div>
    </div>
</div>
@endsection
