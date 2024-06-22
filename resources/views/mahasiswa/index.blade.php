@extends('mahasiswa.layout')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>List Mahasiswa</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}">Add New Mahasiswa</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{ $loop->iteration }}</td> 
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->kelas }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswa.show', $mhs->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
