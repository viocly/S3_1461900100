@extends('layout0100')
@section('judul','home')
@section('isi')

<div class="container">
    <div class="row"></div>
    <div class="col-10"></div>
    <h1 class="mt3">Tabel data</h1>
    <a href="{{url('/create')}}" class="btn btn-success">Create</a>
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Bukuu</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bukus as $buku)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{$buku->judul}}</td>
                <td>{{$buku->tahun_terbit}}</td>
                <td>

                    <a href="{{url('edit',$buku->id)}}" class="badge bg-warning">Edit</a>
                    <a href="{{url('delete',$buku->id)}}" class="badge bg-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection