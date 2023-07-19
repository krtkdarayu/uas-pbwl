@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA TRACK</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/track')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA ALBUM</label>
                        <select name="track_id_album" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($album as $alb)
                                <option value="{{$alb->album_id}}">{{$alb->album_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA TRACK</label>
                        <input type="text" name="track_nama" class="form-control" placeholder="Nama Track">
                    </div>
                    <div class="mb-3">
                        <label for="">DURASI TRACK</label>
                        <input type="time" name="track_time" class="form-control" placeholder="Durasi Track">
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