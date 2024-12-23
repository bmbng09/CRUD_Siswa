@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Siswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}" class="btn btn-primary">Tambah Siswa</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Aksi</th>
    </tr>
    @foreach ($siswa as $no=>$data)
    <tr>
        <td>{{ $no+1 }}NO</td>
        <td>{{ $data->nis }}NIS</td>
        <td>{{ $data->nama }}Nama</td>
        <td>{{ $data->alamat }}Alamat</td>
        <td>{{ $data->no_hp }}No HP</td>
        <td>{{ $data->jenis_kelamin }}Jenis Kelamin</td>
        <td>{{ $data->hobi }}Hobi</td>
        <td>
            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('siswa.delete', $data->id) }}" method="POST">
                @csrf
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>

    @endforeach

</table>

@endsection
