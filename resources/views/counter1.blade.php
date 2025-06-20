@extends('template')

@section('content')
    <title>5026231024 Rafindra Nabiel Fawwaz</title>
    <style>
        body {
            background-color: #f0f0f0;
        }
        .counter {
            text-align: center;
            margin-top: 50px;
        }
        .counter h1 {
            font-size: 48px;
            color: #333;
        }
    </style>

    <div class="counter1">
        <h1>Anda pengunjung ke : {{ $jumlah }}</h1>
    </div>
@endsection
