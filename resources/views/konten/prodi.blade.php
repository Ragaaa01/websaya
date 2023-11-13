@extends('layouts.main')

@section('title',$title)

@section('content')
    <h2 class="align text-center">{{ $prodi }}</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Teknik Informatika</th>
                <th scope="col">Teknik Mesin</th>
                <th scope="col">Teknik Pendingin</th>
                <th scope="col">Keperawatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPrd as $item)
            <tr>
                <td>{{$item['ti']}}</td>
                <td>{{$item['tm']}}</td>
                <td>{{$item['tp']}}</td>
                <td>{{$item['kp']}}</td>
            </tr> 
            @endforeach
        </tbody>
    </table>
@endsection
