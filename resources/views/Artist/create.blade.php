@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA ARTIST</h3>      
            </div>
            <div class="card-body">
                <form action="{{ url('/artist')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for="">NAMA ARTIST</label>
                        <input type="text" name="artist_nama" class="form-control" placeholder="Nama Artist">
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