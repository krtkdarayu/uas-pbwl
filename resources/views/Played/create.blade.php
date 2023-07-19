@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA PLAYED</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/played')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA TRACK</label>
                        <select name="played_id_track" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($track as $trc)
                                <option value="{{$trc->track_id}}">{{$trc->track_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">WAKTU PEMUTARAN</label>
                        <input type="time" name="played_date" class="form-control" placeholder="Waktu Pemutaran">
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