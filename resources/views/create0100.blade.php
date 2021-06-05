@extends('layout0100')
@section('judul','create')
@section('isi')

<form method="post" action="{{url('/home')}}">
    @csrf
    <div class="mb-3">
        <label for="Judul Buku" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="Judul Buku" name="nama">
    </div>
    <div class="mb-3">
        <label for="tahunterbit" class="form-label">Tahun Terbit</label>
        <input type="text" class="form-control" id="tahunterbit" name="tahun">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection