@extends('layouts/master')

@section('title', 'Início')

@section('content')
@include('layouts.partials.header')

<div class="container-fluid px-0  user-home-container">
    <div class="user-home-banner"></div>
    <div class="container">
        <div class="row pb-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6 py-5">
                        <h2 class="h1 text-center text-light">Faça já a sua reserva!</h2>
                        <div class="form-error error-active">
                            {{ session('danger')}}
                        </div>
                        <div class="form-success">
                        </div>

                        <form action="{{route('reservation.create')}}" method="POST" class="px-5">
                            @csrf
                            <label for="" class="d-block my-2 text-light">
                                Nome
                                <input type="text" name="name" class="d-block w-100 p-2 @error('name') error-input @enderror" placeholder="José Da Silva" id="input-name" required>
                                @error('name')
                                <div class="error-message">
                                    {{$message}}
                                </div>
                                @enderror
                            </label>
                            <label for="" class="d-block my-2 text-light">
                                Telefone
                                <input type="text" name="phone" class="d-block w-100 p-2 @error('phone') error-input @enderror" placeholder="(51) 9 9999999" id="input-phone" required>
                                @error('phone')
                                <div class="error-message">
                                    {{$message}}
                                </div>
                                @enderror
                            </label>
                            <div class="d-lg-flex ">
                                <label for="" class="d-block my-2 text-light">
                                    Data
                                    <input type="date" name="date" class="d-block w-100 p-2 @error('day') error-input @enderror" id="input-date" required>
                                    @error('date')
                                    <div class="error-message">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </label>
                                <label for="" class="d-block my-2 text-light">
                                    Hora
                                    <select name="hour" id="input-hour" class="form-select w-100 py-2 rounded-1 @error('hour') error-input @enderror" required>
                                        <option value="18:00:00">18:00</option>
                                        <option value="19:00:00">19:00</option>
                                        <option value="20:00:00">20:00</option>
                                        <option value="21:00:00">21:00</option>
                                        <option value="22:00:00">22:00</option>
                                        <option value="23:00:00">23:00</option>
                                    </select>
                                    @error('hour')
                                    <div class="error-message">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </label>

                            </div>
                            <label for="" class="d-block my-2 text-light">
                                Acompanhantes
                                <input type="number" name="escorts" class="d-block w-50 p-2 @error('escorts') error-input @enderror" id="input-escorts" min=0 max=10 required> 
                                @error('date')
                                <div class="error-message">
                                    {{$message}}
                                </div>
                                @enderror
                            </label>
                            <label for="" class="d-block my-2 text-light">
                                Mesas Disponíveis
                                <select name="table" id="input-table" class="form-select w-100" required>
                                    @foreach($tables as $table)
                                        <option value="{{$table->id}}">Mesa {{$table->id}}</option>

                                    @endforeach
                                </select>
                                @error('checkout')
                                <div class="error-message">
                                    {{$message}}
                                </div>
                                @enderror
                            </label>
                            <input type="submit" value="Reservar" class="btn-user-home-reservation fw-bold p-3 my-2" id="reservation-btn">
                        </form>
                    </div>
                    <div class="col-12 col-md-6 user-home-schedule py-5 d-flex align-items-center justify-content-center flex-column">
                        <h2>Horário de Funcionamento</h2>
                        <p class="text-secondary">
                            Seg – Sab // 18:00 – 00:00
                            <br>
                            Dom // FECHADO
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.partials.footer')
@push('reservation-script')
<script type="application/javascript" src="{{ url('assets/js/reservation.js')}}"></script>
@endpush
@endsection