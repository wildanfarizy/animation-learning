@extends('layouts.main')
@section('body')

<div class="container">
        <div class="card">
            <div class="card-topper">
            </div>
            <img src="{{ asset('foto/iron man.png') }}" alt="" class="mx-auto">
            <div class="card-body">
                <div class="nama mt-5">
                    <p style="color: #fbca03; font-family:'samsung'" class=" fs-1">Iron Man</p>
                </div>
                <div class="playedby mb-2">
                    <p style="color: white;  font-family:'samsung'">Played by <u style="color: #fbca03">Robert Downey Jr</u></p>
                </div>
            </div>
        </div>
</div>

@endsection