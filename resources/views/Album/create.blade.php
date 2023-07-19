@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA ALBUM</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/album')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA ARTIST</label>
                        <select name="album_id_artist" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($artist as $art)
                                <option value="{{$art->artist_id}}">{{$art->artist_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA ALBUM</label>
                        <input type="text" name="album_nama" class="form-control" placeholder="Nama Album">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection