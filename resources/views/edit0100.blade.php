@extends('layout0100')
@section('judul','edit')
@section('isi')
<form method="post" action="{{url('edit',$buku->id)}}">
    @csrf
    <div class="mb-3">
        <label for="Judul Buku" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="Judul Buku" name="nama" value="{{$buku->judul}}">
    </div>
    <div class="mb-3">
        <label for="tahunterbit" class="form-label">Tahun Terbit</label>
        <input type="text" class="form-control" id="tahunterbit" name="tahun" value="{{$buku->tahun_terbit}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection