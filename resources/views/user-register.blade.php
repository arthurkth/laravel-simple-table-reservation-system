@extends('layouts/master')

@section('title', 'Cadastro')

@section('content')

<div class="form-container">
    <a href="{{route('auth.index')}}" class="arrow-back"><i class="fa-solid fa-arrow-left"></i> Voltar </a>
    <h2 class="h1">Cadastro</h2>
    <div class="form-error error-active">
        {{ session('danger')}}
    </div>

    <div class="form-success">
        {{ session('success')}}
    </div>

    <form action="{{ route('auth.create')}} " method="POST" class="form">
        @csrf
        <label for="" class="d-block my-2">
            Nome
            <input type="text" name="name" id="" class="d-block w-100 p-2 @error('name') error-input @enderror" value="{{ old('name') }}" placeholder="José Da Silva">
            @error('name')
            <div class="error-message">
                {{$message}}
            </div>
            @enderror
        </label>
        <label for="" class="d-block my-2">
            Email
            <input type="text" name="email" id="" class="d-block w-100 p-2 @error('email') error-input @enderror" value="{{ old('email') }}" placeholder="seuemail@email.com">
            @error('email')
            <div class="error-message">
                {{$message}}
            </div>
            @enderror
        </label>
        <label for="" class="d-block my-2">
            Senha
            <input type="password" name="password" id="" class="d-block w-100 p-2 @error('password') error-input @enderror" placeholder="●●●●●●●●●●●●●●">
            @error('password')
            <div class="error-message">
                {{$message}}
            </div>
            @enderror
        </label>
        <label for="" class="d-block my-2">
            Confirmação de Senha
            <input type="password" name="password_confirmation" id="" class="d-block w-100 p-2 @error('password_confirmation') error-input @enderror" placeholder="●●●●●●●●●●●●●●">
            @error('password_confirmation')
            <div class="error-message">
                {{$message}}
            </div>
            @enderror
        </label>
        <input type="submit" value="Cadastrar" class="btn btn-dark p-3 my-2">
    </form>
</div>
@endsection