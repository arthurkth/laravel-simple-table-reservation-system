@extends('layouts/master')

@section('title', 'Início')

@section('content')
@include('layouts.partials.header')

<div class="container py-5 mt-5">
    <table class="table">

        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Nº Acompanhantes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <th>{{$reservation->name}}</th>
                <td>{{$reservation->date}}</td>
                <td>{{$reservation->hour}}</td>
                <td>{{$reservation->escorts}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

    {{ $reservations->links('components.paginator') }}
    

</div>

@include('layouts.partials.footer')
@endsection